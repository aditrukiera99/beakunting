<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lead_c extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	    $this->load->model('lead_m','model'); 

	}

	public function index()
	{
		$data = array(
			'page' => 'lead_v', 
			'view' => 'company', 
			'dt'   => $this->model->get_all_lead(),
		);

		$this->load->view('dashboard_v', $data);
	}

	function get_lead_info(){
		$id = $this->input->post('id');
		$data = $this->model->get_lead_by_id($id);

		echo json_encode($data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */