<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sales_tax_code_c extends CI_Controller {

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

		$get_tax = $this->db->query("SELECT * FROM ak_sales_tax ORDER BY ID DESC")->result();

		$data = array(
			'page' => 'sales_tax_code_v',
			'get_tax' => $get_tax , 
		);

		$this->load->view('dashboard_v', $data);
	}

	function ubah_data($id=""){


		if($this->input->post('nama')){
			$msg = 1;
			$nama	 = $this->input->post('nama');
			$deskripsi	 = $this->input->post('description');

			$this->db->query("
				UPDATE ak_sales_tax SET CODE_NAMA = '$nama' , DESCRIPTION = '$deskripsi' WHERE ID = '$id'
			");
		}

		$dt = $this->db->query("SELECT * FROM ak_sales_tax WHERE ID = '$id'")->row();

		$data =  array(
			'page' => "edit_sales_tax_code_v", 
			'title' => "Ubah Sales Tax", 
			'msg' => "",
			'view' => "",
			'dt' => $dt,
			'post_url' => 'sales_tax_code_c/ubah_data/'.$id, 
		);
		
		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */