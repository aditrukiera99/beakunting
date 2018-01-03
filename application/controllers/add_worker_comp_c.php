<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_worker_comp_c extends CI_Controller {

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

		if($this->input->post('codek')){
			$msg = 1;
			$codek  = $this->input->post('codek');
			$description = $this->input->post('description');
			$rate = $this->input->post('rate');
			$tanggal = $this->input->post('tanggal');

			$this->db->query("
				INSERT INTO ak_worker
				(WORKER_CODE, DESCRIPTION, RATE, TANGGAL)
				VALUES 
				('$codek', '$description', '$rate','$tanggal')
			");
		}


		$data = array(
			'page' => 'add_worker_comp_v',
			'msg' => $msg,

		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */ 