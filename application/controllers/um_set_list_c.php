<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Um_set_list_c extends CI_Controller {

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
		$um_data = $this->db->query("SELECT * FROM ak_satuan ORDER BY ID DESC")->result();

		$data = array(
			'page' => 'um_set_list_v', 
			'um_data' => $um_data,
		);

		$this->load->view('dashboard_v', $data);
	}

	function ubah_data($id=""){


		if($this->input->post('simpan')){
			$msg = 1;
			$nama	 = $this->input->post('nama');

			$this->db->query("
				UPDATE ak_satuan SET NAMA_SATUAN = '$nama' WHERE ID = '$id'
			");
		}

		$dt = $this->db->query("SELECT * FROM ak_satuan WHERE ID = '$id'")->row();

		$data =  array(
			'page' => "edit_um_list_v", 
			'title' => "Ubah Belanja Harian", 
			'msg' => "",
			'view' => "",
			'dt' => $dt,
			'post_url' => 'um_set_list_c/ubah_data/'.$id, 
		);
		
		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */