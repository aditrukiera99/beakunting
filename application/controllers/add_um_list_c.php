<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_um_list_c extends CI_Controller {

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
			$tipe  = $this->input->post('tipe');

			$this->db->query("
				INSERT INTO ak_satuan
				(NAMA_SATUAN,BASE,PURCHASE,SALES,SHIPPING)
				VALUES 
				('$nama','$tipe','$tipe','$tipe','$tipe')
			");
		}
		

		$data = array(
			'page' => 'add_um_list_v',
			'msg' => $msg, 
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */