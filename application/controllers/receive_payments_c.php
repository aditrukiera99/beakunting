<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Receive_payments_c extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$msg = "";

		if($this->input->post('cust_id')){
			$cust_id 		= $this->input->post('cust_id');
			$cust_name 	    = $this->input->post('cust_name');
			$amount 	    = $this->input->post('amount');
			$amount         = str_replace(',', '', $amount);
			$no_reff 	    = $this->input->post('no_reff');
			$metode_bayar 	= $this->input->post('metode_bayar');
			$memo 		    = $this->input->post('memo');
			$tgl 		    = $this->input->post('tgl');

			$id_penjualan = $this->input->post('id_penjualan');
			$id_penjualan2 = $this->input->post('id_penjualan2');
			$payment      = $this->input->post('payment');
			$orig_due     = $this->input->post('orig_due');
			$am_due       = $this->input->post('am_due');
			$no_bukti     = $this->input->post('no_bukti');
			$tgl_invoice  = $this->input->post('tgl_invoice');

			$this->db->query("
				INSERT INTO ak_receive_payment 
				(ID_PELANGGAN, TGL, NO_BUKTI, TOTAL, METODE_BAYAR, MEMO, KODE_AKUN)
				VALUES 
				('$cust_id', '$tgl', '$no_reff', '$amount', '$metode_bayar', '$memo', '12000')
			");
			$id_payment = $this->db->insert_id();

			// INSERT KE VOUCHER
			$this->db->query("
				INSERT INTO ak_input_voucher
				(NO_BUKTI, TGL, MEMO, KONTAK, TIPE, ID_TRX)
				VALUES 
				('$no_reff', '$tgl', '$memo', '$cust_name', 'PAYMENT', '$id_payment')
			");

			$id_voucher = $this->db->insert_id();

			// RECEIVABLE
			$this->db->query("
				INSERT INTO ak_input_voucher_detail
				(ID_VOUCHER, KODE_AKUN, DEBET, KREDIT, NO_BUKTI)
				VALUES 
				('$id_voucher', '12000', '$amount', '0', '$no_reff')
			");

			$this->db->query("
				INSERT INTO ak_input_voucher_detail
				(ID_VOUCHER, KODE_AKUN, DEBET, KREDIT, NO_BUKTI)
				VALUES 
				('$id_voucher', '11000', '0', '$amount', '$no_reff')
			");
			// END OF RECEIVABLE

			foreach ($id_penjualan2 as $key => $val) {
				if($val != ""){
					$this->simpan_payment_detail($id_payment, $cust_id, $val, $tgl_invoice[$key], $no_bukti[$key], $orig_due[$key], $am_due[$key], $payment[$key]);
				}				
			}

		}
		
		$get_item = $this->db->query("SELECT * FROM ak_produk WHERE TIPE != 'Other Charge' AND TIPE != 'Discount' AND TIPE != 'Payment' AND TIPE != 'Sales Tax Item' AND TIPE != 'Sales Tax Group'
					ORDER BY ID DESC LIMIT 10")->result();

		$get_cust = $this->db->query("SELECT * FROM ak_pelanggan ORDER BY ID DESC")->result();
		$get_tax = $this->db->query("SELECT * FROM ak_produk WHERE TIPE LIKE '%Sales Tax%' ORDER BY ID DESC")->result();

		$data = array(
			'page' => 'receive_payments_v', 
			'view' => 'customer', 
			'get_item' => $get_item, 
			'get_cust' => $get_cust, 
			'get_tax' => $get_tax, 
			'msg' => $msg, 
		);

		$this->load->view('dashboard_v', $data);
	}

	public function detail($id){ 

		$msg = "";

		$cek_data = count($this->db->query("SELECT * FROM ak_receive_payment WHERE ID = '$id'")->result());
		if($cek_data == 0){
			redirect(base_url()."receive_payments_c");
		}

		$dt = $this->db->query("SELECT * FROM ak_receive_payment WHERE ID = '$id'")->row();
		$dt_detail = $this->db->query("SELECT * FROM ak_receive_payment_detail WHERE ID_PAYMENT = '$id' ")->result();

		$get_item = $this->db->query("SELECT * FROM ak_produk WHERE TIPE != 'Other Charge' AND TIPE != 'Discount' AND TIPE != 'Payment' AND TIPE != 'Sales Tax Item' AND TIPE != 'Sales Tax Group'
					ORDER BY ID DESC LIMIT 10")->result();

		$get_cust = $this->db->query("SELECT * FROM ak_pelanggan ORDER BY ID DESC")->result();
		$get_tax = $this->db->query("SELECT * FROM ak_produk WHERE TIPE LIKE '%Sales Tax%' ORDER BY ID DESC")->result();

		$data = array(
			'page' => 'receive_payments_detail_v', 
			'view' => 'customer', 
			'get_item' => $get_item, 
			'get_cust' => $get_cust, 
			'get_tax' => $get_tax, 
			'msg' => $msg, 
			'dt' => $dt, 
			'dt_detail' => $dt_detail, 
			'post_url' => 'receive_payments_c/detail/'.$id, 
		);

		$this->load->view('dashboard_v', $data);
	}


	function get_invoice_aktif(){
		$id = $this->input->post('id');

		$sql = "
		SELECT a.*, IFNULL(b.TOTAL,0) AS TOTAL_TERBAYAR
		FROM ak_penjualan a
		LEFT JOIN (
			SELECT ID_PENJUALAN, IFNULL(SUM(PAYMENT),0) AS TOTAL FROM ak_receive_payment_detail
			GROUP BY ID_PENJUALAN
		) b ON a.ID = b.ID_PENJUALAN
		WHERE a.ID_PELANGGAN = '$id' AND a.TIPE = 'INVOICE' AND a.IS_LUNAS IS NULL 
		";
		$dt = $this->db->query($sql)->result();

		echo json_encode($dt);
	}

	function simpan_payment_detail($id_payment, $cust_id, $id_penjualan, $tgl_invoice, $no_bukti, $orig_due, $am_due, $payment){
		$orig_due   = str_replace(',', '', $orig_due);
		$am_due     = str_replace(',', '', $am_due);
		$payment    = str_replace(',', '', $payment);

		$this->db->query("
			INSERT INTO ak_receive_payment_detail 
			(ID_PAYMENT, ID_PELANGGAN, ID_PENJUALAN, TGL, NO_BUKTI, ORIGINAL_AMT, DUE_AMT, PAYMENT)
			VALUES 
			('$id_payment', '$cust_id', '$id_penjualan', '$tgl_invoice', '$no_bukti', '$orig_due', '$am_due', '$payment')
		");

		if($am_due == $payment){
			$this->db->query("
				UPDATE ak_penjualan SET IS_LUNAS = 'LUNAS' WHERE ID = '$id_penjualan'
			");
		}
	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */