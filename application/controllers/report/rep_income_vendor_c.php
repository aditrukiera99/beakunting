<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rep_income_vendor_c extends CI_Controller {

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
	public function index(){

		$tgl = date('d');
		$bln = date('m');
		$thn = date('Y');

		$tgl_awal  = "01-$bln-$thn";
		$tgl_akhir = "$tgl-$bln-$thn";
		$sel_date = 1;

		$dt = $this->db->query("
			SELECT a.*, IFNULL(b.DEBET, 0) AS DEBET, IFNULL(b.KREDIT, 0) AS KREDIT FROM ak_supplier a 
			LEFT JOIN (
				SELECT a.KONTAK, SUM(b.DEBET) AS DEBET, SUM(b.KREDIT) AS KREDIT
				FROM ak_input_voucher a 
				JOIN ak_input_voucher_detail b ON a.ID = b.ID_VOUCHER
				WHERE STR_TO_DATE(a.TGL, '%d-%c-%Y') <= STR_TO_DATE('$tgl_akhir' , '%d-%c-%Y') AND STR_TO_DATE(a.TGL, '%d-%c-%Y') >= STR_TO_DATE('$tgl_awal' , '%d-%c-%Y')
				GROUP BY a.KONTAK
			) b ON a.NAMA_SUPPLIER = b.KONTAK
			ORDER BY a.NAMA_SUPPLIER
		")->result();


		if($this->input->post('cari')){
			$tgl_awal  = $this->input->post('from');
			$tgl_akhir = $this->input->post('to');
			$sel_date = $this->input->post('sel_date');

			$where = "1=1";
			if($sel_date != 0){
				$where = "STR_TO_DATE(TGL, '%d-%c-%Y') <= STR_TO_DATE('$tgl_akhir' , '%d-%c-%Y') AND STR_TO_DATE(TGL, '%d-%c-%Y') >= STR_TO_DATE('$tgl_awal' , '%d-%c-%Y')";
			}

			$dt = $this->db->query("
			SELECT a.*, IFNULL(b.DEBET, 0) AS DEBET, IFNULL(b.KREDIT, 0) AS KREDIT FROM ak_supplier a 
			LEFT JOIN (
				SELECT a.KONTAK, SUM(b.DEBET) AS DEBET, SUM(b.KREDIT) AS KREDIT
				FROM ak_input_voucher a 
				JOIN ak_input_voucher_detail b ON a.ID = b.ID_VOUCHER
				WHERE $where
				GROUP BY a.KONTAK
			) b ON a.NAMA_SUPPLIER = b.KONTAK
			ORDER BY a.NAMA_SUPPLIER
		")->result();
		}

		if($this->input->post('excel')){
			$this->cetak_excel();
		} else if($this->input->post('pdf')){
			$this->cetak_pdf();
		}
		
		$data = array(
			'page' => 'report/rep_income_vendor_v', 
			'dt' => $dt,
			'sel_date' => $sel_date,
			'tgl_awal' => $tgl_awal,
			'tgl_akhir' => $tgl_akhir,
			'post_url' => 'report/rep_income_vendor_c',
		);

		$this->load->view('dashboard_v', $data);
	}

	function cetak_excel(){
		$tgl_awal = $this->input->post('tgl_awal_2');
		$tgl_akhir = $this->input->post('tgl_akhir_2');
		$view = "xls/rep_jurnal_xls";

		$where = "1=1";
		if($tgl_awal != ""){
			$where = "STR_TO_DATE(TGL, '%d-%c-%Y') <= STR_TO_DATE('$tgl_akhir' , '%d-%c-%Y') AND STR_TO_DATE(TGL, '%d-%c-%Y') >= STR_TO_DATE('$tgl_awal' , '%d-%c-%Y')";
		}

		$dt = $this->db->query("
			SELECT a.*, IFNULL(b.DEBET, 0) AS DEBET, IFNULL(b.KREDIT, 0) AS KREDIT FROM ak_kode_akuntansi a 
			LEFT JOIN (
				SELECT b.KODE_AKUN, SUM(b.DEBET) AS DEBET, SUM(b.KREDIT) AS KREDIT
				FROM ak_input_voucher a 
				JOIN ak_input_voucher_detail b ON a.ID = b.ID_VOUCHER
				WHERE $where
				GROUP BY b.KODE_AKUN
			) b ON a.KODE_AKUN = b.KODE_AKUN
			WHERE a.KATEGORI = 'Other Income' OR a.KATEGORI = 'Income'
			ORDER BY a.KODE_AKUN
		")->result();

		$dt2 = $this->db->query("
			SELECT a.*, IFNULL(b.DEBET, 0) AS DEBET, IFNULL(b.KREDIT, 0) AS KREDIT FROM ak_kode_akuntansi a 
			LEFT JOIN (
				SELECT b.KODE_AKUN, SUM(b.DEBET) AS DEBET, SUM(b.KREDIT) AS KREDIT
				FROM ak_input_voucher a 
				JOIN ak_input_voucher_detail b ON a.ID = b.ID_VOUCHER
				WHERE $where
				GROUP BY b.KODE_AKUN
			) b ON a.KODE_AKUN = b.KODE_AKUN
			WHERE a.KATEGORI = 'Other Expense' OR a.KATEGORI = 'Expense'
			ORDER BY a.KODE_AKUN
		")->result();

		$data = array(	
			'dt' => $dt,
			'dt2' => $dt2,
			'judul' => date('d/m/Y', strtotime($tgl_awal))." - ".date('d/m/Y', strtotime($tgl_akhir)),
		);

		$this->load->view($view, $data);
	}

	function cetak_pdf(){
		$tgl_awal = $this->input->post('tgl_awal_2');
		$tgl_akhir = $this->input->post('tgl_akhir_2');
		$view = "pdf/rep_jurnal_pdf";

		$where = "1=1";
		if($tgl_awal != ""){
			$where = "STR_TO_DATE(TGL, '%d-%c-%Y') <= STR_TO_DATE('$tgl_akhir' , '%d-%c-%Y') AND STR_TO_DATE(TGL, '%d-%c-%Y') >= STR_TO_DATE('$tgl_awal' , '%d-%c-%Y')";
		}

		$dt = $this->db->query("
			SELECT a.*, IFNULL(b.DEBET, 0) AS DEBET, IFNULL(b.KREDIT, 0) AS KREDIT FROM ak_kode_akuntansi a 
			LEFT JOIN (
				SELECT b.KODE_AKUN, SUM(b.DEBET) AS DEBET, SUM(b.KREDIT) AS KREDIT
				FROM ak_input_voucher a 
				JOIN ak_input_voucher_detail b ON a.ID = b.ID_VOUCHER
				WHERE $where
				GROUP BY b.KODE_AKUN
			) b ON a.KODE_AKUN = b.KODE_AKUN
			WHERE a.KATEGORI = 'Other Income' OR a.KATEGORI = 'Income'
			ORDER BY a.KODE_AKUN
		")->result();

		$dt2 = $this->db->query("
			SELECT a.*, IFNULL(b.DEBET, 0) AS DEBET, IFNULL(b.KREDIT, 0) AS KREDIT FROM ak_kode_akuntansi a 
			LEFT JOIN (
				SELECT b.KODE_AKUN, SUM(b.DEBET) AS DEBET, SUM(b.KREDIT) AS KREDIT
				FROM ak_input_voucher a 
				JOIN ak_input_voucher_detail b ON a.ID = b.ID_VOUCHER
				WHERE $where
				GROUP BY b.KODE_AKUN
			) b ON a.KODE_AKUN = b.KODE_AKUN
			WHERE a.KATEGORI = 'Other Expense' OR a.KATEGORI = 'Expense'
			ORDER BY a.KODE_AKUN
		")->result();

		$data = array(	
			'dt' => $dt,
			'dt2' => $dt2,
			'judul' => date('d/m/Y', strtotime($tgl_awal))." - ".date('d/m/Y', strtotime($tgl_akhir)),
		);

		$this->load->view($view, $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */