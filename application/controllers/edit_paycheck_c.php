<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit_paycheck_c extends CI_Controller {

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
		


		$get_item = $this->db->query("SELECT * FROM ak_produk WHERE TIPE != 'Other Charge' AND TIPE != 'Discount' AND TIPE != 'Payment' AND TIPE != 'Sales Tax Item' AND TIPE != 'Sales Tax Group'
					ORDER BY ID DESC LIMIT 10")->result();

		$get_cust = $this->db->query("SELECT * FROM ak_pelanggan ORDER BY ID DESC")->result();
		$get_acc = $this->db->query("SELECT * FROM ak_kode_akuntansi ORDER BY ID DESC")->result();
		$get_tax = $this->db->query("SELECT * FROM ak_produk WHERE TIPE LIKE '%Sales Tax%' ORDER BY ID DESC")->result();
		$data_emp = $this->db->query("SELECT * FROM ak_pekerja ORDER BY ID DESC")->result();

		$data = array(
			'page' => 'edit_paycheck_v', 
			'view' => 'vendor', 
			'get_item' => $get_item, 
			'get_cust' => $get_cust, 
			'get_acc' => $get_acc, 
			'get_tax' => $get_tax, 
			'data_emp' => $data_emp, 
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