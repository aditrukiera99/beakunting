<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_employee_c extends CI_Controller {

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
			$first_name 	 	 = $this->input->post('first_name');
			$last_name 			 = $this->input->post('last_name');
			
			
			$full_name      	 = $this->input->post('full_name');
			$gender     		 = $this->input->post('gender');
			$date_birth    		 = $this->input->post('date_birth');
			$status			     = $this->input->post('status');
			$address       		 = $this->input->post('address');
			$kota 	      		 = $this->input->post('kota');
			$main_phone 	     = $this->input->post('main_phone');
			$phone     			 = $this->input->post('phone');
			$email    			 = $this->input->post('email');
			$zip_code    		 = $this->input->post('zip_code');

			

			$this->db->query("
				INSERT INTO ak_pekerja
				(FIRST_NAME, LAST_NAME, FULL_NAME, GENDERS, TANGGAL_LAHIR, STATUS, ALAMAT, KOTA, MOBILE_PHONE, TELEPON, EMAIL, KODE_POS)
				VALUES 
				('$first_name','$last_name','$full_name','$gender','$date_birth','$status','$address','$kota','$main_phone','$phone','$email','$zip_code')
			");

			$msg = 1;

		}

		$data = array(
			'page' => 'add_employee_v', 
			'view' => 'vendors', 
			'msg' => $msg, 
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */