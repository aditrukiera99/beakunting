<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vendors_m extends CI_Model
{
	function __construct() {
		  parent::__construct();
		  $this->load->database();
	} 

	function get_all_supplier(){
        $sql = "
        SELECT a.*,
        IFNULL(IFNULL(b.DEBET, 0) - IFNULL(c.KREDIT,0), 0) AS BALANCE,
        IFNULL(d.PAID, 0) AS PAID, 
        IFNULL(e.PAID2, 0) AS PAID2
        FROM ak_supplier a 
        LEFT JOIN (
            SELECT ID_SUPPLIER, SUM(SUB_TOTAL) AS DEBET FROM ak_pembelian
            WHERE TIPE = 'Item Receipt'
            GROUP BY ID_SUPPLIER
        ) b ON a.ID = b.ID_SUPPLIER

        LEFT JOIN (
            SELECT ID_SUPPLIER, SUM(SUB_TOTAL) AS KREDIT FROM ak_pembelian
            WHERE TIPE = 'Credit Vendor'
            GROUP BY ID_SUPPLIER
        ) c ON a.ID = c.ID_SUPPLIER

        LEFT JOIN (
            SELECT ID_SUPPLIER, SUM(PAYMENT) AS PAID FROM ak_bill_payment_detail
            GROUP BY ID_SUPPLIER
        ) d ON a.ID = d.ID_SUPPLIER

        LEFT JOIN (
            SELECT ID_SUPPLIER, SUM(SUB_TOTAL) AS PAID2 FROM ak_pembelian
            WHERE TIPE = 'BILL'
            GROUP BY ID_SUPPLIER
        ) e ON a.ID = e.ID_SUPPLIER
        ORDER BY a.ID DESC
        ";

        return $this->db->query($sql)->result();
    }

    function get_vendor_by_id($id){
        $sql = "SELECT * FROM ak_supplier WHERE ID = '$id' ";
        return $this->db->query($sql)->row();
    }

    function get_transaction_info($id){
        $sql = "
        SELECT a.* FROM (
        SELECT a.TIPE, a.NO_BUKTI, a.TGL_TRX, a.KODE_AKUN, a.SUB_TOTAL, b.NAMA_AKUN FROM ak_pembelian a
        LEFT JOIN ak_kode_akuntansi b ON a.KODE_AKUN = b.KODE_AKUN
        WHERE ID_SUPPLIER = '$id' 

        UNION ALL 

        SELECT 'Payment' AS TIPE, a.NO_BUKTI, a.TGL AS TGL_TRX, aa.KODE_AKUN, a.PAYMENT  AS SUB_TOTAL, b.NAMA_AKUN FROM ak_bill_payment_detail a
        JOIN ak_bill_payment aa ON a.ID_PAYMENT = aa.ID
        LEFT JOIN ak_kode_akuntansi b ON aa.KODE_AKUN = b.KODE_AKUN
        WHERE a.ID_SUPPLIER = '$id' 
        ) a 
        ORDER BY a.TGL_TRX

        ";

        return $this->db->query($sql)->result();
    }

}

?>