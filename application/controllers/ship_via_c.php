<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ship_via_c extends CI_Controller {

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

		$data_item = $this->db->query("SELECT * FROM ak_ship_via ORDER BY ID DESC")->result();

		$data = array(
			'page' => 'ship_via_v', 
			'view' => 'items', 
			'data_item' => $data_item, 
		);

		$this->load->view('dashboard_v', $data);
	}

	function ubah_data($id=""){


		if($this->input->post('nama')){
			$msg = 1;
			$nama	 = $this->input->post('nama');

			$this->db->query("
				UPDATE ak_ship_via SET NAMA = '$nama' WHERE ID = '$id'
			");
		}

		$dt = $this->db->query("SELECT * FROM ak_ship_via WHERE ID = '$id'")->row();

		$data =  array(
			'page' => "edit_ship_via_v", 
			'title' => "Ubah vendor Type", 
			'msg' => "",
			'view' => "",
			'dt' => $dt,
			'post_url' => 'ship_via_c/ubah_data/'.$id, 
		);
		
		$this->load->view('dashboard_v', $data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */