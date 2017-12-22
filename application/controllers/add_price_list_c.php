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

		if($this->input->post('kode_akun')){
			$msg = 1;
			$kategori  = $this->input->post('kategori');
			$kode_akun = $this->input->post('kode_akun');
			$nama_akun = $this->input->post('nama_akun');
			$anak_dari = $this->input->post('anak_dari');
			$deskripsi = addslashes($this->input->post('deskripsi'));

			$this->db->query("
				INSERT INTO ak_kode_akuntansi
				(KATEGORI, KODE_AKUN, NAMA_AKUN, ANAK_DARI, DESKRIPSI)
				VALUES 
				('$kategori', '$kode_akun', '$nama_akun', '$anak_dari', '$deskripsi')
			");
		}

		$get_item = $this->db->query("SELECT * FROM ak_produk ORDER BY ID DESC")->result();

		$data = array(
			'page' => 'add_price_list_v', 
			'get_item' => $get_item,
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */