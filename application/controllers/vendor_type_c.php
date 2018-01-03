<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vendor_type_c extends CI_Controller {

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
	    $this->load->model('vendor_type_m','model');

	}
	public function index()
	{

		$data_item = $this->db->query("SELECT * FROM ak_vendor_type WHERE SUB = '' ORDER BY ID DESC")->result();

		$data = array(
			'page' => 'vendor_type_v', 
			'view' => 'items', 
			'data_item' => $data_item, 
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */