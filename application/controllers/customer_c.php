<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer_c extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	    $this->load->model('customer_m','model');
  
	}

	public function index()
	{
		$data = array(
			'page' => 'customer_v', 
			'view' => 'customer',
			'dt'   => $this->model->get_all_pelanggan(),
		);

		$this->load->view('dashboard_v', $data);
	}

	function get_customer_info(){
		$id = $this->input->post('id');
		$data = $this->model->get_customer_by_id($id);

		echo json_encode($data);
	}

	function get_transaction_info(){
		$id = $this->input->post('id');
		$data = $this->model->get_transaction_info($id);

		echo json_encode($data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */