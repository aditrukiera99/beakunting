<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vendors_c extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	    $this->load->model('vendors_m','model'); 

	}

	public function index()
	{
		$data = array(
			'page' => 'vendors_v', 
			'view' => 'vendors', 
			'dt'   => $this->model->get_all_supplier(),
		);

		$this->load->view('dashboard_v', $data);
	}

	function get_vendor_info(){
		$id = $this->input->post('id');
		$data = $this->model->get_vendor_by_id($id);

		echo json_encode($data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */