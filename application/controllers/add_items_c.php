<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_items_c extends CI_Controller {

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
		$data_tax_item = $this->db->query("SELECT * FROM ak_produk WHERE TIPE = 'Sales Tax Item' ORDER BY ID ASC LIMIT 10")->result();
		$data_item = $this->db->query("SELECT * FROM ak_produk ORDER BY ID ASC LIMIT 10")->result();
		$data_accn = $this->db->query("SELECT * FROM ak_kode_akuntansi ORDER BY ID DESC")->result();
		$data_um = $this->db->query("SELECT * FROM ak_satuan ORDER BY ID DESC")->result();
		$data_tax = $this->db->query("SELECT * FROM ak_sales_tax ORDER BY ID DESC")->result();
		$data_vendor = $this->db->query("SELECT * FROM ak_supplier ORDER BY ID DESC")->result();

		$data = array(
			'page' => 'add_items_v', 
			'view' => 'item',
			'data_item' => $data_item,
			'data_accn' => $data_accn,
			'data_um' => $data_um,
			'data_tax' => $data_tax,
			'data_tax_item' => $data_tax_item,
			'data_vendor' => $data_vendor,
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */