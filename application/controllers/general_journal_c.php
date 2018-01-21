<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class General_journal_c extends CI_Controller {

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
	    $this->load->model('vendors_m','model');
	    $this->load->model('accounts_m','model2');

	}

	public function index()
	{
		$msg = "";
		if($this->input->post('simpan_jurnal')){
			$tgl 			 = $this->input->post('tgl');
			$no_reff 		 = $this->input->post('no_reff');
			$j_for 	         = $this->input->post('j_for');
			$jurnal_for_cust = $this->input->post('jurnal_for_cust');
			$jurnal_for_vend = $this->input->post('jurnal_for_vend');
			$adj 			 = $this->input->post('adj');

			$kontak = "";
			if($j_for == "none"){
				$kontak = "";
			} else if($j_for == "customer"){
				$kontak = $jurnal_for_cust;
			} else if($j_for == "vendor"){
				$kontak = $jurnal_for_vend;
			}

			$this->db->query("
				INSERT INTO ak_jurnal_umum 
				(TGL, NO_BUKTI, FOR, ID_PERSON, PERSON, ADJ, TOTAL) 
				VALUES 
				()
			");
		}

		$get_item = $this->db->query("SELECT * FROM ak_produk WHERE TIPE != 'Other Charge' AND TIPE != 'Discount' AND TIPE != 'Payment' AND TIPE != 'Sales Tax Item' AND TIPE != 'Sales Tax Group'
					ORDER BY ID DESC LIMIT 10")->result();

		$get_cust = $this->db->query("SELECT * FROM ak_pelanggan ORDER BY ID")->result();
		$get_vend = $this->db->query("SELECT * FROM ak_supplier ORDER BY ID")->result();
		$get_kode_akun = $this->db->query("SELECT * FROM ak_kode_akuntansi ORDER BY ID")->result();

		$data = array(
			'page' => 'general_journal_v', 
			'dt'   => $this->model->get_all_supplier(),
			'accn'   => $this->model2->get_accounts_lims(),
			'get_item' => $get_item,
			'get_cust' => $get_cust,
			'get_vend' => $get_vend,
			'get_kode_akun' => $get_kode_akun,
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */