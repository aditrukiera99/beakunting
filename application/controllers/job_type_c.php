<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Job_type_c extends CI_Controller {

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
	    $this->load->model('job_type_m','model');

	}

	public function index()
	{

		$data_item = $this->db->query("SELECT * FROM ak_job_type WHERE SUB = '' ORDER BY ID DESC")->result();

		$data = array(
			'page' => 'job_type_v', 
			'view' => 'items', 
			'data_item' => $data_item, 
		);

		$this->load->view('dashboard_v', $data);
	}

	function ubah_data($id=""){


		if($this->input->post('nama')){
			$msg = 1;
			$nama	 = $this->input->post('nama');
			$anak_dari	 = $this->input->post('anak_dari');

			$this->db->query("
				UPDATE ak_job_type SET NAMA = '$nama' , SUB = '$anak_dari' WHERE ID = '$id'
			");
		}

		$dt = $this->db->query("SELECT * FROM ak_job_type WHERE ID = '$id'")->row();

		$data =  array(
			'page' => "edit_job_type_v", 
			'title' => "Ubah job Type", 
			'msg' => "",
			'view' => "",
			'dt' => $dt,
			'post_url' => 'job_type_c/ubah_data/'.$id, 
		);
		
		$this->load->view('dashboard_v', $data);
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */