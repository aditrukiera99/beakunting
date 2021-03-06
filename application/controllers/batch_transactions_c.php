<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Batch_transactions_c extends CI_Controller {

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
	    $this->load->model('accounts_m','model');
	    $this->load->model('vendors_m','model2');

	}

	public function index()
	{

		$get_cust = $this->db->query("SELECT * FROM ak_pelanggan ORDER BY ID DESC")->result();
		$data_item = $this->db->query("SELECT * FROM ak_produk ORDER BY ID DESC")->result();
		$data_item_tax = $this->db->query("SELECT * FROM ak_produk WHERE TIPE = 'Sales Tax Item' ORDER BY ID DESC")->result();

		$data = array(
			'page' => 'batch_transactions_v', 
			'get_cust' => $get_cust,
			'data_item' => $data_item, 
			'data_item_tax' => $data_item_tax, 
			'dt'   => $this->model->get_accounts(),
			'sp'   => $this->model2->get_all_supplier(),
		);

		
		
		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */