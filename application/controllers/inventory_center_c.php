<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inventory_center_c extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	    $this->load->model('inventory_center_m','model');
  
	}
	

	public function index()
	{
		$dt = $this->db->query("SELECT * FROM ak_produk WHERE TIPE = 'Inventory Part' ORDER BY ID DESC")->result();

		$data = array(
			'page' => 'inventory_center_v', 
			'view' => 'customer',
			'dt'   => $dt,
		);

		$this->load->view('dashboard_v', $data);
	}

	function get_inventory_info(){
		$id = $this->input->post('id');
		$data = $this->model->get_inventory_by_id($id);

		echo json_encode($data);
	}

	function get_transaction_info(){
		$id = $this->input->post('id');
		$data = $this->model->get_transaction_info($id);

		echo json_encode($data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */