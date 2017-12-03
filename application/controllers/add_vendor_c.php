<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_vendor_c extends CI_Controller {

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

		if($this->input->post('save')){
			$ven_name 	 	 = $this->input->post('ven_name');
			$ven_balance 	 = $this->input->post('ven_balance');
			$ven_balance     = str_replace(',', '', $ven_balance);
			
			$ven_company      = $this->input->post('ven_company');
			$ven_fullname     = $this->input->post('ven_fullname');
			$ven_job_title    = $this->input->post('ven_job_title');
			$ven_main_phone   = $this->input->post('ven_main_phone');
			$ven_mobile       = $this->input->post('ven_mobile');
			$ven_fax 	      = $this->input->post('ven_fax');
			$ven_email 	      = $this->input->post('ven_email');
			$ven_website     = $this->input->post('ven_website');
			$ven_bill_from    = $this->input->post('ven_bill_from');
			$ven_ship_from    = $this->input->post('ven_ship_from');

			$acc_no    		 = $this->input->post('acc_no');
			$acc_terms    	 = $this->input->post('acc_terms');
			$acc_method      = $this->input->post('acc_method');

			$this->db->query("
				INSERT INTO ak_supplier
				(NAMA_SUPPLIER, SALDO, NAMA_USAHA, FULLNAME, JABATAN, NO_TELP, NO_HP, FAX, EMAIL, WEBSITE, ALAMAT_TAGIH, ALAMAT_KIRIM, ACC_NO, ACC_TERMS, ACC_METHOD)
				VALUES 
				('$ven_name','$ven_balance','$ven_company','$ven_fullname','$ven_job_title','$ven_main_phone','$ven_mobile','$ven_fax','$ven_email','$ven_website','$ven_bill_from','$ven_ship_from','$acc_no','$acc_terms','$acc_method')
			");

			$msg = 1;

		}

		$data = array(
			'page' => 'add_vendor_v', 
			'view' => 'vendors', 
			'msg' => $msg, 
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */