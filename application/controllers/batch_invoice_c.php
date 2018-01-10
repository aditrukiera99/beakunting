<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Batch_invoice_c extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	    $this->load->model('customer_m','model');
  
	}

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
		$get_tax  = $this->db->query("SELECT * FROM ak_produk WHERE TIPE LIKE '%Sales Tax%' ORDER BY ID DESC")->result();
		$get_so   = $this->db->query("SELECT * FROM ak_penjualan WHERE TIPE LIKE 'Sales Order' AND (NO_INV IS NULL OR NO_INV = '') ORDER BY ID DESC")->result();

		$data = array(
			'page' => 'batch_invoice_v', 
			'msg'  => $msg,
			'get_item' => $get_item, 
			'get_cust' => $get_cust, 
			'get_tax' => $get_tax,
			'get_so' => $get_so,
			'dt'   => $this->model->get_all_pelanggan(),
			'view' => 'customer', 
		);

		$this->load->view('dashboard_v', $data);
	}

	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */