<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Price_list_c extends CI_Controller {

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
		$data_price = $this->db->query("SELECT * FROM ak_price ORDER BY ID DESC")->result();

		$data = array(
			'page' => 'price_list_v', 
			'data_price' => $data_price,
		);

		$this->load->view('dashboard_v', $data);
	}

	function ubah_data($id=""){


		if($this->input->post('nama')){
			$msg = 1;
			$nama	 = $this->input->post('nama');
			$persen	 = $this->input->post('persen');

			$this->db->query("
				UPDATE ak_price SET NAMA_PRICE = '$nama' , DETAILS_PRICE = '$persen' WHERE ID = '$id'
			");
		}

		$dt = $this->db->query("SELECT * FROM ak_price WHERE ID = '$id'")->row();

		$data =  array(
			'page' => "edit_price_list_v", 
			'title' => "Ubah Belanja Harian", 
			'msg' => "",
			'view' => "",
			'dt' => $dt,
			'post_url' => 'price_list_c/ubah_data/'.$id, 
		);
		
		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */