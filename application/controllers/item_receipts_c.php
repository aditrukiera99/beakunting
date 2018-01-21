<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Item_receipts_c extends CI_Controller {

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
	    $this->load->model('accounts_m','model2');
	    error_reporting(0);

	}

	public function index(){

		$msg = "";
		if($this->input->post('vend_id')){
			$msg = 1;
			$vend_id = $this->input->post('vend_id');
			$vend_name = $this->input->post('vend_name');
			$tgl     = $this->input->post('tgl');
			$ref_no  = $this->input->post('ref_no');
			$sub_total   = $this->input->post('sub_total');
			$sub_total   = str_replace(',', '', $sub_total);	
			$memo    = addslashes($this->input->post('memo'));
			$po_number = $this->input->post('po_number');

			if($po_number != ""){
				$this->db->query("
					UPDATE ak_pembelian SET IS_ACTIVE = '1'
					WHERE ID = '$po_number'
				");
			}

			$this->db->query("
				INSERT INTO ak_pembelian
				(TIPE, NO_BUKTI, ID_SUPPLIER, SUPPLIER, ID_PELANGGAN, TGL_TRX, ALAMAT, ALAMAT_KIRIM, MEMO, MESSAGE, SUB_TOTAL, KODE_AKUN)
				VALUES 
				('Item Receipt', '$ref_no', '$vend_id', '$vend_name', '0', '$tgl', '', '', '$memo', '', '$sub_total', '20000')
			");
			$id_pembelian = $this->db->insert_id();

			// INSERT KE VOUCHER
			$this->db->query("
				INSERT INTO ak_input_voucher
				(NO_BUKTI, TGL, MEMO, KONTAK, TIPE, ID_TRX)
				VALUES 
				('$ref_no', '$tgl', '$memo', '$vend_name', 'Item Receipt', '$id_pembelian')
			");

			$id_voucher = $this->db->insert_id();

			// RECEIVABLE
			$this->db->query("
				INSERT INTO ak_input_voucher_detail
				(ID_VOUCHER, KODE_AKUN, DEBET, KREDIT, NO_BUKTI)
				VALUES 
				('$id_voucher', '20000', '0', '$sub_total', '$ref_no')
			");
			// END OF RECEIVABLE

			$id_produk   = $this->input->post('id_produk');
			$kode_akun   = $this->input->post('kode_akun');
			$nama_produk = $this->input->post('nama_produk');
			$satuan      = $this->input->post('satuan');
			$qty         = $this->input->post('qty');
			$harga       = $this->input->post('harga');
			$total       = $this->input->post('total');
			$cust_id     = $this->input->post('cust_id');
			$billable    = $this->input->post('billable');

			$kode_akun2    = $this->input->post('kode_akun2');
			$harga2        = $this->input->post('harga2');
			$memo_table    = $this->input->post('memo_table');
			$cust_id2      = $this->input->post('cust_id2');
			$billable2     = $this->input->post('billable2');

			foreach ($id_produk as $key => $val) {
				$this->simpan_detail_pembelian($id_pembelian, $val, $kode_akun[$key], $nama_produk[$key], $satuan[$key], $qty[$key], $harga[$key], $total[$key], $cust_id[$key], $billable[$key]);
				$this->simpan_detail_voucher($id_voucher, $ref_no,  $kode_akun[$key],  $total[$key], '');
			}

			foreach ($kode_akun2 as $key => $val) {
				$this->simpan_detail_pembelian_non_item($id_pembelian, '', $val, '', '', '1', $harga2[$key], $harga2[$key], $cust_id2[$key], $billable2[$key], $memo_table[$key]);
				$this->simpan_detail_voucher($id_voucher, $ref_no,  $val,  $harga2[$key], $memo_table[$key]);
			}

		}

		$get_item = $this->db->query("SELECT * FROM ak_produk WHERE TIPE != 'Other Charge' AND TIPE != 'Discount' AND TIPE != 'Payment' AND TIPE != 'Sales Tax Item' AND TIPE != 'Sales Tax Group'
					ORDER BY ID DESC LIMIT 10")->result();

		$get_cust = $this->db->query("SELECT * FROM ak_pelanggan ORDER BY ID")->result();

		$data = array(
			'page' => 'item_receipts_v', 
			'dt'   => $this->model->get_all_supplier(),
			'accn'   => $this->model2->get_accounts_lims(),
			'get_item' => $get_item,
			'get_cust' => $get_cust,
			'view' => 'vendors',
			'msg'  => $msg,
		);

		$this->load->view('dashboard_v', $data);
	}

	public function detail($id){

		$msg = "";

		$cek_data = count($this->db->query("SELECT * FROM ak_pembelian WHERE ID = '$id' AND TIPE = 'Item Receipt' ")->result());
		if($cek_data == 0){
			redirect(base_url()."item_receipts_c");
		}

		$dt = $this->db->query("SELECT * FROM ak_pembelian WHERE ID = '$id'")->row();
		$dt_detail = $this->db->query("SELECT * FROM ak_pembelian_detail WHERE ID_PEMBELIAN = '$id' AND TIPE = 'ITEM' ")->result();
		$dt_detail2 = $this->db->query("SELECT a.*, b.NAMA_AKUN FROM ak_pembelian_detail a LEFT JOIN ak_kode_akuntansi b ON a.KODE_AKUN = b.KODE_AKUN WHERE a.ID_PEMBELIAN = '$id' AND a.TIPE = 'KODE AKUN' ")->result();

		$get_item = $this->db->query("SELECT * FROM ak_produk WHERE TIPE != 'Other Charge' AND TIPE != 'Discount' AND TIPE != 'Payment' AND TIPE != 'Sales Tax Item' AND TIPE != 'Sales Tax Group'
					ORDER BY ID DESC LIMIT 10")->result();

		$get_cust = $this->db->query("SELECT * FROM ak_pelanggan ORDER BY ID")->result();

		$data = array(
			'page' => 'item_receipts_detail_v', 
			'dt'   => $this->model->get_all_supplier(),
			'accn'   => $this->model2->get_accounts_lims(),
			'get_item' => $get_item,
			'get_cust' => $get_cust,
			'get_vend'   => $this->model->get_all_supplier(),
			'view' => 'vendors',
			'msg'  => $msg,
			'dt' => $dt,
			'dt_detail' => $dt_detail,
			'dt_detail2' => $dt_detail2,
			'post_url' => 'item_receipts_c/detail/'.$id, 
		);

		$this->load->view('dashboard_v', $data);
	}

	function get_po_number(){
		$id = $this->input->post('id');
		$data = $this->db->query("SELECT * FROM ak_pembelian WHERE ID_SUPPLIER = '$id' AND TIPE = 'Purchase Order' AND  (IS_ACTIVE = 0) ORDER BY ID DESC ")->result();
		echo json_encode($data);
	}

	function get_item_from_po(){
		$id = $this->input->post('id');
		$data = $this->db->query("
			SELECT b.*, c.DESKRIPSI FROM ak_pembelian a 
			JOIN ak_pembelian_detail b ON a.ID = b.ID_PEMBELIAN
			JOIN ak_produk c ON b.ID_PRODUK = c.ID
			WHERE a.ID = '$id'
			ORDER BY b.ID ASC
		")->result();
		echo json_encode($data);
	}

	function simpan_detail_pembelian($id_pembelian, $id_produk, $kode_akun, $nama_produk, $satuan, $qty, $harga, $total, $cust_id, $billable){
		$qty   = str_replace(',', '', $qty);
		$harga = str_replace(',', '', $harga);
		$total = str_replace(',', '', $total);

		$sql = "
		INSERT INTO ak_pembelian_detail
		(ID_PEMBELIAN, ID_PRODUK, KODE_AKUN, NAMA_PRODUK, QTY, SATUAN, HARGA_SATUAN, TOTAL, TIPE, ID_PELANGGAN, BILLABLE)
		VALUES 
		('$id_pembelian', '$id_produk', '$kode_akun', '$nama_produk', '$qty', '$satuan', '$harga', '$total', 'ITEM', '$cust_id', '$billable')
		";

		$this->db->query($sql);
	}

	function simpan_detail_pembelian_non_item($id_pembelian, $id_produk, $kode_akun, $nama_produk, $satuan, $qty, $harga, $total, $cust_id, $billable, $memo){
		$qty   = str_replace(',', '', $qty);
		$harga = str_replace(',', '', $harga);
		$total = str_replace(',', '', $total);

		$sql = "
		INSERT INTO ak_pembelian_detail
		(ID_PEMBELIAN, ID_PRODUK, KODE_AKUN, NAMA_PRODUK, QTY, SATUAN, HARGA_SATUAN, TOTAL, TIPE, ID_PELANGGAN, BILLABLE, MEMO)
		VALUES 
		('$id_pembelian', '$id_produk', '$kode_akun', '$nama_produk', '$qty', '$satuan', '$harga', '$total', 'KODE AKUN', '$cust_id', '$billable', '$memo')
		";

		$this->db->query($sql);
	}

	function simpan_detail_voucher($id_voucher, $inv_number, $kode_akun,  $total, $memo){
		$total = str_replace(',', '', $total);

		$sql = "
		INSERT INTO ak_input_voucher_detail
		(ID_VOUCHER, KODE_AKUN, DEBET, KREDIT, NO_BUKTI, MEMO)
		VALUES 
		('$id_voucher', '$kode_akun', '$total', '0', '$inv_number', '$memo')
		";

		$this->db->query($sql);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */