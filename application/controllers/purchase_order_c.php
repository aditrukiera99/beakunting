<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Purchase_order_c extends CI_Controller {

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

		if($this->input->post('vend_id')){
			$msg = 1;
			$inv_number 	= $this->input->post('inv_number');
			// $so_number 		= $this->input->post('so_number');
			$vend_id 		= $this->input->post('vend_id');
			$vend_name 		= $this->input->post('vend_name');
			$cust_id 		= $this->input->post('cust_id');
			$tgl 			= $this->input->post('tgl');
			$vend_address 	= addslashes($this->input->post('vend_address'));
			$ship_to 		= addslashes($this->input->post('ship_to'));
			$memo 		    = addslashes($this->input->post('memo'));
			$vend_msg 		= addslashes($this->input->post('vend_msg'));
			$subtotal 		= addslashes($this->input->post('subtotal'));
			$tgl            = date('d-m-Y');

			// INSERT KE NO PENJUALAN / PEMBELIAN

			$this->db->query("
				INSERT INTO ak_pembelian
				(TIPE, NO_BUKTI, ID_SUPPLIER, SUPPLIER, ID_PELANGGAN, TGL_TRX, ALAMAT, ALAMAT_KIRIM, MEMO, MESSAGE, SUB_TOTAL, KODE_AKUN)
				VALUES 
				('Purchase Order', '$inv_number', '$vend_id', '$vend_name', '$cust_id', '$tgl', '$vend_address', '$ship_to', '$memo', '$vend_msg', '$subtotal', '90100')
			");
			$id_pembelian = $this->db->insert_id();

			$id_produk   = $this->input->post('id_produk');
			$kode_akun   = $this->input->post('kode_akun');
			$nama_produk = $this->input->post('nama_produk');
			$satuan      = $this->input->post('satuan');
			$qty         = $this->input->post('qty');
			$harga       = $this->input->post('harga');
			$total       = $this->input->post('total');

			foreach ($id_produk as $key => $val) {
				$this->simpan_detail_penjualan($id_pembelian, $val, $kode_akun[$key], $nama_produk[$key], $satuan[$key], $qty[$key], $harga[$key], $total[$key]);
				// $this->simpan_detail_voucher($id_voucher, $inv_number,  $kode_akun[$key],  $total[$key]);
			}
		}

		$get_item = $this->db->query("SELECT * FROM ak_produk WHERE TIPE != 'Other Charge' AND TIPE != 'Discount' AND TIPE != 'Payment' AND TIPE != 'Sales Tax Item' AND TIPE != 'Sales Tax Group'
					ORDER BY ID DESC LIMIT 10")->result();

		$get_vendor = $this->db->query("SELECT * FROM ak_supplier ORDER BY ID DESC")->result();
		$get_cust   = $this->db->query("SELECT * FROM ak_pelanggan ORDER BY ID DESC")->result();
		$get_tax    = $this->db->query("SELECT * FROM ak_produk WHERE TIPE LIKE '%Sales Tax%' ORDER BY ID DESC")->result();
		$get_so     = $this->db->query("SELECT * FROM ak_penjualan WHERE TIPE LIKE 'Sales Order' AND (NO_INV IS NULL OR NO_INV = '') ORDER BY ID DESC")->result();

		$data = array(
			'page' => 'purchase_order_v', 
			'msg'  => $msg,
			'get_item' => $get_item, 
			'get_vendor' => $get_vendor, 
			'get_tax' => $get_tax,
			'get_so' => $get_so,
			'get_cust' => $get_cust,
			'view' => 'vendors',
		);

		$this->load->view('dashboard_v', $data);
	}

	function get_so_number(){
		$id = $this->input->post('id');
		$data = $this->db->query("SELECT * FROM ak_penjualan WHERE ID_PELANGGAN = '$id' AND TIPE = 'Sales Order' AND  (NO_INV IS NULL OR NO_INV = '') ORDER BY ID DESC ")->result();
		echo json_encode($data);
	}

	function get_item_from_so(){
		$no_bukti = $this->input->post('no_bukti');
		$data = $this->db->query("
			SELECT b.*, c.DESKRIPSI FROM ak_penjualan a 
			JOIN ak_penjualan_detail b ON a.ID = b.ID_PENJUALAN
			JOIN ak_produk c ON b.ID_PRODUK = c.ID
			WHERE a.NO_BUKTI = '$no_bukti'
			ORDER BY b.ID ASC
		")->result();
		echo json_encode($data);
	}

	function simpan_detail_penjualan($id_pembelian, $id_produk, $kode_akun, $nama_produk, $satuan, $qty, $harga, $total){
		$qty   = str_replace(',', '', $qty);
		$harga = str_replace(',', '', $harga);
		$total = str_replace(',', '', $total);

		$sql = "
		INSERT INTO ak_pembelian_detail
		(ID_PEMBELIAN, ID_PRODUK, KODE_AKUN, NAMA_PRODUK, QTY, SATUAN, HARGA_SATUAN, TOTAL, TIPE)
		VALUES 
		('$id_pembelian', '$id_produk', '$kode_akun', '$nama_produk', '$qty', '$satuan', '$harga', '$total', 'ITEM')
		";

		$this->db->query($sql);
	}

	function simpan_detail_voucher($id_voucher, $inv_number, $kode_akun,  $total){
		$total = str_replace(',', '', $total);

		$sql = "
		INSERT INTO ak_input_voucher_detail
		(ID_VOUCHER, KODE_AKUN, DEBET, KREDIT, NO_BUKTI)
		VALUES 
		('$id_voucher', '$kode_akun', '0', '$total', '$inv_number')
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

	function simpan_detail_penjualan_pajak_voucher($id_voucher, $inv_number, $kode_akun_pajak, $nilai_pajak){
		$nilai_pajak = str_replace(',', '', $nilai_pajak);

		$sql = "
		INSERT INTO ak_input_voucher_detail
		(ID_VOUCHER, KODE_AKUN, DEBET, KREDIT, NO_BUKTI)
		VALUES 
		('$id_voucher', '$kode_akun_pajak', '0', '$nilai_pajak', '$inv_number')
		";

		$this->db->query($sql);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */