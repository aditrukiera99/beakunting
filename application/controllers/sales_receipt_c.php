<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sales_receipt_c extends CI_Controller {

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
			$msg = 1;
			$so_number 		= $this->input->post('so_number');
			$cust_id 		= $this->input->post('cust_id');
			$cust_name 		= $this->input->post('cust_name');
			$tgl 			= $this->input->post('tgl');
			$cust_address 	= addslashes($this->input->post('cust_address'));
			$ship_to 		= addslashes($this->input->post('ship_to'));
			$memo 		    = addslashes($this->input->post('memo'));
			$cust_msg 		= addslashes($this->input->post('cust_msg'));
			$subtotal 		= addslashes($this->input->post('subtotal'));

			$this->db->query("
				INSERT INTO ak_penjualan
				(TIPE, NO_BUKTI, ID_PELANGGAN, PELANGGAN, TGL_TRX, ALAMAT, ALAMAT_KIRIM, MEMO, CUST_MESSAGE, SUB_TOTAL, KODE_AKUN)
				VALUES 
				('Estimate', '$so_number', '$cust_id', '$cust_name', '$tgl', '$cust_address', '$ship_to', '$memo', '$cust_msg', '$subtotal', '90200')
			");

			$id_penjualan = $this->db->insert_id();

			$id_produk   = $this->input->post('id_produk');
			$kode_akun   = $this->input->post('kode_akun');
			$nama_produk = $this->input->post('nama_produk');
			$satuan      = $this->input->post('satuan');
			$qty         = $this->input->post('qty');
			$harga       = $this->input->post('harga');
			$total       = $this->input->post('total');

			// PAJAK
			$id_pajak         = $this->input->post('id_pajak');
			$kode_akun_pajak  = $this->input->post('kode_akun_pajak');
			$nilai_pajak      = $this->input->post('nilai_pajak');
			$nama_pajak       = $this->input->post('nama_pajak');

			foreach ($id_produk as $key => $val) {
				$this->simpan_detail_penjualan($id_penjualan, $val, $kode_akun[$key], $nama_produk[$key], $satuan[$key], $qty[$key], $harga[$key], $total[$key]);
			}

			if($kode_akun_pajak != ""){
				$this->simpan_detail_penjualan_pajak($id_penjualan, $id_pajak, $kode_akun_pajak, $nama_pajak, $nilai_pajak);
			}
		}


		$get_item = $this->db->query("SELECT * FROM ak_produk WHERE TIPE != 'Other Charge' AND TIPE != 'Discount' AND TIPE != 'Payment' AND TIPE != 'Sales Tax Item' AND TIPE != 'Sales Tax Group'
					ORDER BY ID DESC LIMIT 10")->result();

		$get_cust = $this->db->query("SELECT * FROM ak_pelanggan ORDER BY ID DESC")->result();
		$get_message = $this->db->query("SELECT * FROM ak_messages ORDER BY ID DESC")->result();
		$get_tax_code = $this->db->query("SELECT * FROM ak_sales_tax ORDER BY ID DESC")->result();
		$get_tax = $this->db->query("SELECT * FROM ak_produk WHERE TIPE LIKE '%Sales Tax%' ORDER BY ID DESC")->result();

		$data = array(
			'page' => 'sales_receipt_v', 
			'view' => 'customer', 
			'get_item' => $get_item, 
			'get_cust' => $get_cust, 
			'get_message' => $get_message, 
			'get_tax_code' => $get_tax_code, 
			'get_tax' => $get_tax, 
			'msg' => $msg, 
		);

		$this->load->view('dashboard_v', $data);
	}

	function simpan_detail_penjualan($id_penjualan, $id_produk, $kode_akun, $nama_produk, $satuan, $qty, $harga, $total){
		$qty   = str_replace(',', '', $qty);
		$harga = str_replace(',', '', $harga);
		$total = str_replace(',', '', $total);

		$sql = "
		INSERT INTO ak_penjualan_detail
		(ID_PENJUALAN, ID_PRODUK, KODE_AKUN, NAMA_PRODUK, QTY, SATUAN, HARGA_SATUAN, TOTAL, TIPE)
		VALUES 
		('$id_penjualan', '$id_produk', '$kode_akun', '$nama_produk', '$qty', '$satuan', '$harga', '$total', 'ITEM')
		";

		$this->db->query($sql);
	}

	function simpan_detail_penjualan_pajak($id_penjualan, $id_pajak, $kode_akun_pajak, $nama_pajak, $nilai_pajak){
		$nilai_pajak   = str_replace(',', '', $nilai_pajak);

		$sql = "
		INSERT INTO ak_penjualan_detail
		(ID_PENJUALAN, ID_PRODUK, KODE_AKUN, NAMA_PRODUK, QTY, SATUAN, HARGA_SATUAN, TOTAL, TIPE)
		VALUES 
		('$id_penjualan', '$id_pajak', '$kode_akun_pajak', '$nama_pajak', '1', '', '$nilai_pajak', '$nilai_pajak', 'PAJAK')
		";

		$this->db->query($sql);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */