<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_lead_c extends CI_Controller {

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

		if($this->input->post('save')){
			$lead_name 	 	 = $this->input->post('lead_name');
			$status 		 = $this->input->post('status');
			$lead_company    = $this->input->post('lead_company');
			$main_phone      = $this->input->post('main_phone');
			$website    = $this->input->post('web');
			$email   = $this->input->post('email');
			$addres       = $this->input->post('addres');

			$this->db->query("
				INSERT INTO ak_lead
				(NAMA,STATUS,COMPANY_NAME,PHONE,WEB,EMAIL,ADDRESS)
				VALUES 
				('$lead_name','$status','$lead_company','$main_phone','$website','$email','$addres')");

			$msg = 1;

		}

		$data = array(
			'page' => 'add_lead_v', 
			'view' => 'company', 
			'msg' => $msg, 
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */