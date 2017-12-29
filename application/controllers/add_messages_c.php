<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_messages_c extends CI_Controller {

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
		
		if($this->input->post('pesan')){
			$msg = 1;
			$pesan  = $this->input->post('pesan');

			$this->db->query("
				INSERT INTO ak_messages
				(PESAN)
				VALUES 
				('$pesan')
			");
		}

		$data_messages = $this->db->query("SELECT * FROM ak_messages ORDER BY ID ASC")->result();

		$data = array(
			'page' => 'add_messages_v', 
			'view' => 'accounts',
			'data_messages' => $data_messages,
			'msg' => $msg,
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */