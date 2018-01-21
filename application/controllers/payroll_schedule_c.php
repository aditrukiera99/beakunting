<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payroll_schedule_c extends CI_Controller {

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
		$data_sch = $this->db->query("SELECT * FROM ak_schedule ORDER BY ID")->result();

		$data = array(
			'page' => 'payroll_schedule_v', 
			'data_sch' => $data_sch,
		);

		$this->load->view('dashboard_v', $data);
	}

	function ubah_data($id=""){


		if($this->input->post('nama')){
			$msg = 1;
			$nama	 = $this->input->post('nama');
			$tgl1	 = $this->input->post('tgl_1');
			$tgl2    = $this->input->post('tgl_2');

			$this->db->query("
				UPDATE ak_schedule SET NAMA = '$nama' , END_DATE = '$tgl1' , CHECK_DATE = '$tgl2' WHERE ID = '$id'
			");
		}

		$dt = $this->db->query("SELECT * FROM ak_schedule WHERE ID = '$id'")->row();

		$data =  array(
			'page' => "edit_payroll_schedule_v", 
			'title' => "Ubah Payroll Schedule", 
			'msg' => "",
			'view' => "",
			'dt' => $dt,
			'post_url' => 'payroll_schedule_c/ubah_data/'.$id, 
		);
		
		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */