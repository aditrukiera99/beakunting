<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Set_forecast_c extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	    $this->load->model('accounts_m','model');

	}

	public function index()
	{

		$data = array(
			'page' => 'set_forecast_v', 
			'view' => 'accounts',
			'dt'   => $this->model->get_accounts(),
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */