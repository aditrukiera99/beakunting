<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Worker_comp_c extends CI_Controller {

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

		$get_worker = $this->db->query("SELECT * FROM ak_worker ORDER BY ID")->result();

		$data = array(
			'page' => 'worker_comp_v', 
			'get_worker' => $get_worker ,
		);

		$this->load->view('dashboard_v', $data);
	}

	function ubah_data($id=""){


		if($this->input->post('code')){
			$msg = 1;
			$code	 = $this->input->post('code');
			$deskripsi	 = $this->input->post('deskripsi');
			$rate	 = $this->input->post('rate');
			$tanggal	 = $this->input->post('tanggal');

			$this->db->query("
				UPDATE ak_worker SET WORKER_CODE = '$code' , DESCRIPTION = '$deskripsi' , RATE = '$rate' , TANGGAL = '$tanggal' WHERE ID = '$id'
			");
		}

		$dt = $this->db->query("SELECT * FROM ak_worker WHERE ID = '$id'")->row();

		$data =  array(
			'page' => "edit_worker_comp_v", 
			'title' => "Ubah Worker Harian", 
			'msg' => "",
			'view' => "",
			'dt' => $dt,
			'post_url' => 'worker_comp_c/ubah_data/'.$id, 
		);
		
		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */