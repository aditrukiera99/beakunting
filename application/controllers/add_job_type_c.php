<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_job_type_c extends CI_Controller {

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
		
		if($this->input->post('nama')){
			$msg = 1;
			$nama  = $this->input->post('nama');
			$sub = $this->input->post('anak_dari');

			$this->db->query("
				INSERT INTO ak_job_type
				(NAMA, SUB)
				VALUES 
				('$nama', '$sub')
			");
		}

		$data_job = $this->db->query("SELECT * FROM ak_job_type ORDER BY ID ASC")->result();

		$data = array(
			'page' => 'add_job_type_v', 
			'view' => 'accounts',
			'data_job' => $data_job,
			'msg' => $msg,
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */