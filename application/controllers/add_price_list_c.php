<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_price_list_c extends CI_Controller {

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
		$msg = 0;
		if($this->input->post('nama')){
			$msg = 1;
			$nama  = $this->input->post('nama');
			$tipe = $this->input->post('tipe');
			$detail = $this->input->post('detail');
			$persen = $this->input->post('persen');

			$this->db->query("
				INSERT INTO ak_price
				(NAMA_PRICE, TIPE_PRICE, DETAILS_PRICE)
				VALUES 
				('$nama', '$tipe', '$detail$persen')
			");
		}

		$get_item = $this->db->query("SELECT * FROM ak_produk ORDER BY ID DESC")->result();

		$data = array(
			'page' => 'add_price_list_v', 
			'get_item' => $get_item,
			'msg' => $msg, 
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */