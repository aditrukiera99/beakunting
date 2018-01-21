<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pay_bill_c extends CI_Controller {

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

	function __construct()
	{
		parent::__construct();
	    $this->load->model('vendors_m','model');

	}

	public function index()
	{
		$msg = "";
		if($this->input->post('simpan')){
			$msg = 1;
			$tgl_pay      = $this->input->post('tgl_pay');
			$kode_akun    = $this->input->post('kode_akun');
			$metode_bayar = $this->input->post('metode_bayar');
			$subtotal     = $this->input->post('subtotal');

			$this->db->query("
				INSERT INTO ak_bill_payment 
				(ID_SUPPLIER, TGL, NO_BUKTI, TOTAL, METODE_BAYAR, MEMO, KODE_AKUN)
				VALUES 
				('0', '$tgl_pay', '', '$subtotal', '$metode_bayar', '', '$kode_akun')
			");
			$id_payment = $this->db->insert_id();

			// INSERT KE VOUCHER
			$this->db->query("
				INSERT INTO ak_input_voucher
				(NO_BUKTI, TGL, MEMO, KONTAK, TIPE, ID_TRX)
				VALUES 
				('Bill Payment', '$tgl_pay', 'Bill Payment', '', 'BILL PAYMENT', '$id_payment')
			");

			$id_voucher = $this->db->insert_id();

			// RECEIVABLE
			$this->db->query("
				INSERT INTO ak_input_voucher_detail
				(ID_VOUCHER, KODE_AKUN, DEBET, KREDIT, NO_BUKTI)
				VALUES 
				('$id_voucher', '20000', '$subtotal', '0', '')
			");

			$this->db->query("
				INSERT INTO ak_input_voucher_detail
				(ID_VOUCHER, KODE_AKUN, DEBET, KREDIT, NO_BUKTI)
				VALUES 
				('$id_voucher', '$kode_akun', '0', '$subtotal', '')
			");
			// END OF RECEIVABLE

			$id_bill     = $this->input->post('id_bill');
			$id_bill2    = $this->input->post('id_bill2');
			$id_supplier = $this->input->post('id_supplier');
			$no_bukti    = $this->input->post('no_bukti');			
			$disc 		 = $this->input->post('disc');
			$credit 	 = $this->input->post('credit');
			$amt_due 	 = $this->input->post('amt_due');
			$amt_orig    = $this->input->post('amt_orig');
			$amt_pay 	 = $this->input->post('amt_pay');

			foreach ($id_bill2 as $key => $val) {
				if($val != ""){
					$this->simpan_payment_detail($id_payment, $id_supplier[$key], $val, $tgl_pay, $no_bukti[$key], $amt_orig[$key], $amt_due[$key], $amt_pay[$key]);
				}
			}
		}

		$kode_akun_bank = $this->db->query("SELECT * FROM ak_kode_akuntansi WHERE KATEGORI = 'Bank' ")->result();
		$data = array(
			'page' => 'pay_bill_v', 
			'dt'   => $this->model->get_all_supplier(),
			'kode_akun_bank' => $kode_akun_bank,
			'msg' => $msg,
			'view' => 'vendors',
		);

		$this->load->view('dashboard_v', $data);
	}

	public function detail($id="")
	{
		$msg = "";

		$cek_data = count($this->db->query("SELECT * FROM ak_bill_payment WHERE ID = '$id'")->result());
		if($cek_data == 0){
			redirect(base_url()."pay_bill_c");
		}

		$dt = $this->db->query("SELECT * FROM ak_bill_payment WHERE ID = '$id'")->row();
		$dt_detail = $this->db->query("
			SELECT a.*, b.NAMA_SUPPLIER FROM ak_bill_payment_detail a 
			LEFT JOIN ak_supplier b ON a.ID_SUPPLIER = b.ID
			WHERE a.ID_PAYMENT = '$id'
		")->result();

		$kode_akun_bank = $this->db->query("SELECT * FROM ak_kode_akuntansi WHERE KATEGORI = 'Bank' ")->result();
		$data = array(
			'page' => 'pay_bill_detail_v', 
			'kode_akun_bank' => $kode_akun_bank,
			'msg' => $msg,
			'dt' => $dt,
			'dt_detail' => $dt_detail,
			'post_url' => 'pay_bill_c/detail/'.$id, 
			'get_vend'   => $this->model->get_all_supplier(),
			'view' => 'vendors',
		);

		$this->load->view('dashboard_v', $data);
	}

	function get_bill_aktif(){
		$shw_bill = $this->input->post('shw_bill');
		$tgl_due  = $this->input->post('tgl_due');
		$vend_id  = $this->input->post('vend_id');

		if($shw_bill == "2"){
			if($vend_id == ""){
				$sql = "
				SELECT a.*, IFNULL(b.TOTAL,0) AS TOTAL_TERBAYAR
				FROM ak_pembelian a
				LEFT JOIN (
					SELECT ID_PEMBELIAN, IFNULL(SUM(PAYMENT),0) AS TOTAL FROM ak_bill_payment_detail
					GROUP BY ID_PEMBELIAN
				) b ON a.ID = b.ID_PEMBELIAN
				WHERE a.TIPE = 'BILL' AND a.IS_LUNAS IS NULL AND a.TERMS IS NOT NULL
				";
			} else {
				$sql = "
				SELECT a.*, IFNULL(b.TOTAL,0) AS TOTAL_TERBAYAR
				FROM ak_pembelian a
				LEFT JOIN (
					SELECT ID_PEMBELIAN, IFNULL(SUM(PAYMENT),0) AS TOTAL FROM ak_bill_payment_detail
					GROUP BY ID_PEMBELIAN
				) b ON a.ID = b.ID_PEMBELIAN
				WHERE a.ID_SUPPLIER = '$vend_id' AND  a.TIPE = 'BILL' AND a.IS_LUNAS IS NULL AND a.TERMS IS NOT NULL
				";
			}
			
		} else {
			if($vend_id == ""){
				$sql = "
				SELECT a.*, IFNULL(b.TOTAL,0) AS TOTAL_TERBAYAR
				FROM ak_pembelian a
				LEFT JOIN (
					SELECT ID_PEMBELIAN, IFNULL(SUM(PAYMENT),0) AS TOTAL FROM ak_bill_payment_detail
					GROUP BY ID_PEMBELIAN
				) b ON a.ID = b.ID_PEMBELIAN
				WHERE a.TIPE = 'BILL' AND a.IS_LUNAS IS NULL AND a.TGL_JATUH_TEMPO LIKE '%$tgl_due%' AND a.TERMS IS NOT NULL
				";
			} else {
				$sql = "
				SELECT a.*, IFNULL(b.TOTAL,0) AS TOTAL_TERBAYAR
				FROM ak_pembelian a
				LEFT JOIN (
					SELECT ID_PEMBELIAN, IFNULL(SUM(PAYMENT),0) AS TOTAL FROM ak_bill_payment_detail
					GROUP BY ID_PEMBELIAN
				) b ON a.ID = b.ID_PEMBELIAN
				WHERE a.ID_SUPPLIER = '$vend_id' AND  a.TIPE = 'BILL' AND a.IS_LUNAS IS NULL AND a.TGL_JATUH_TEMPO LIKE '%$tgl_due%' AND a.TERMS IS NOT NULL
				";
			}
		}

		
		$dt = $this->db->query($sql)->result();
		echo json_encode($dt);

	}

	function select_bill_id(){
		$id_bill = $this->input->post('id_bill');
		$sql     = "
		SELECT * FROM ak_pembelian WHERE ID = '$id_bill'
		";

		$dt = $this->db->query($sql)->row();
		echo json_encode($dt);
	}

	function simpan_payment_detail($id_payment, $vend_id, $id_pembelian, $tgl_pay, $no_bukti, $orig_due, $am_due, $payment){
		$orig_due   = str_replace(',', '', $orig_due);
		$am_due     = str_replace(',', '', $am_due);
		$payment    = str_replace(',', '', $payment);

		$this->db->query("
			INSERT INTO ak_bill_payment_detail 
			(ID_PAYMENT, ID_SUPPLIER, ID_PEMBELIAN, TGL, NO_BUKTI, ORIGINAL_AMT, DUE_AMT, PAYMENT)
			VALUES 
			('$id_payment', '$vend_id', '$id_pembelian', '$tgl_pay', '$no_bukti', '$orig_due', '$am_due', '$payment')
		");

		if($am_due == $payment){
			$this->db->query("
				UPDATE ak_pembelian SET IS_LUNAS = 'LUNAS' WHERE ID = '$id_pembelian'
			");
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */