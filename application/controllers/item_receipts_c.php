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

	}

	public function index()
	{

		if($this->input->post('vend_id')){
			$vend_id = $this->input->post('vend_id');
			$tgl     = $this->input->post('tgl');
			$ref_no  = $this->input->post('ref_no');
			$total   = $this->input->post('total');
			$total   = str_replace(',', '', $total);	
			$memo    = addslashes($this->input->post('memo'));

			$this->db->query("
				INSERT INTO ak_pembelian
				(TIPE, NO_BUKTI, ID_SUPPLIER, SUPPLIER, ID_PELANGGAN, TGL_TRX, ALAMAT, ALAMAT_KIRIM, MEMO, MESSAGE, SUB_TOTAL, KODE_AKUN)
				VALUES 
				('Item Receipt', '$inv_number', '$vend_id', '$vend_name', '$cust_id', '$tgl', '$vend_address', '$ship_to', '$memo', '$vend_msg', '$subtotal', '90100')
			");
			$id_pembelian = $this->db->insert_id();

			// $asd = $this->input->post('vend_id');	
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
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */