<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_customer_c extends CI_Controller {

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
			$cust_name 	 	 = $this->input->post('cust_name');
			$cust_balance 	 = $this->input->post('cust_balance');
			$cust_balance    = str_replace(',', '', $cust_balance);
			
			$cust_company    = $this->input->post('cust_company');
			$cust_fullname   = $this->input->post('cust_fullname');
			$cust_job_title  = $this->input->post('cust_job_title');
			$cust_main_phone = $this->input->post('cust_main_phone');
			$cust_mobile     = $this->input->post('cust_mobile');
			$cust_fax 	     = $this->input->post('cust_fax');
			$cust_email 	 = $this->input->post('cust_email');
			$cust_website    = $this->input->post('cust_website');
			$cust_bill_to    = $this->input->post('cust_bill_to');
			$cust_ship_to    = $this->input->post('cust_ship_to');

			$acc_no    		 = $this->input->post('acc_no');
			$acc_terms    	 = $this->input->post('acc_terms');
			$acc_method      = $this->input->post('acc_method');

			$cc_no    	     = $this->input->post('cc_no');
			$cc_exp_month    = $this->input->post('cc_exp_month');
			$cc_exp_year     = $this->input->post('cc_exp_year');
			$cc_name    	 = $this->input->post('cc_name');
			$cc_address      = $this->input->post('cc_address');
			$cc_zip    		 = $this->input->post('cc_zip');

			$this->db->query("
				INSERT INTO ak_pelanggan
				(NAMA_PELANGGAN, SALDO, NAMA_USAHA, FULLNAME, JABATAN, NO_TELP, NO_HP, FAX, EMAIL, WEBSITE, ALAMAT_TAGIH, ALAMAT_KIRIM, ACC_NO, ACC_TERMS, ACC_METHOD, CC_NO, CC_EXP_DATE_MONTH, CC_EXP_DATE_YEAR, CC_NAME, CC_ADDRESS, CC_ZIP)
				VALUES 
				('$cust_name','$cust_balance','$cust_company','$cust_fullname','$cust_job_title','$cust_main_phone','$cust_mobile','$cust_fax','$cust_email','$cust_website','$cust_bill_to','$cust_ship_to','$acc_no','$acc_terms','$acc_method','$cc_no','$cc_exp_month','$cc_exp_year','$cc_name','$cc_address','$cc_zip')
			");

			$msg = 1;

		}

		$data = array(
			'page' => 'add_customer_v', 
			'view' => 'customer', 
			'msg' => $msg, 
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */