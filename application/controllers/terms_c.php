<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Terms_c extends CI_Controller {

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
	    $this->load->model('terms_m','model');

	}

	public function index()
	{

		$data_item = $this->db->query("SELECT * FROM ak_terms WHERE SUB = '' ORDER BY ID DESC")->result();

		$data = array(
			'page' => 'terms_v', 
			'view' => 'items', 
			'data_item' => $data_item, 
		);

		$this->load->view('dashboard_v', $data);
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */