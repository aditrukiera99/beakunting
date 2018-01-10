<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_vehicle_service_c extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	    $this->load->model('customer_m','model');
  
	}

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
		
		if($this->input->post('vehicle')){
			$msg = 1;
			$vehicle   = $this->input->post('vehicle');
			$start_date = $this->input->post('start_date');
			$end_date = $this->input->post('end_date');
			$odo_start = $this->input->post('odo_start');
			$odo_end = $this->input->post('odo_end');
			$total = $this->input->post('total');
			$cust = $this->input->post('cust');
			$item = $this->input->post('item');
			$classes = $this->input->post('classes');
			$note = $this->input->post('note');

			$this->db->query("
				INSERT INTO ak_vehicle_mileage
				(VEHICLE,START_DATE,END_DATE,ODE_START,ODO_END,TOTAL,CUST,ITEM,CLASSES,NOTE)
				VALUES 
				('$vehicle', '$start_date', '$end_date', '$odo_start', '$odo_end','$total','$cust','$item','$classes','$note')
			");
		}

		$data_vehicle = $this->db->query("SELECT * FROM ak_vehicle ORDER BY ID ASC")->result();

		$item = $this->db->query("SELECT * FROM ak_produk WHERE TIPE = 'Service ' OR TIPE = 'Other Charge' ORDER BY ID ASC")->result();

		$data = array(
			'page' => 'add_vehicle_service_v', 
			'view' => 'customer',
			'data_vehicle' => $data_vehicle,
			'item' => $item,
			'msg' => $msg,
			'dt'   => $this->model->get_all_pelanggan(),
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */