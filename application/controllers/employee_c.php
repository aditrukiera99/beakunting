<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_c extends CI_Controller {

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
	    $this->load->model('employee_m','model');

	}

	public function index()
	{
		$get_pekerja = $this->db->query("SELECT * FROM ak_pekerja ORDER BY ID")->result();

		

		$data = array(
			'page' => 'employee_v', 
			'get_pekerja' => $get_pekerja,
		);

		$this->load->view('dashboard_v', $data);
	}

	function get_employee_info(){
			$id = $this->input->post('id');
			$data = $this->model->get_employee_by_id($id);

			echo json_encode($data);
		}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */