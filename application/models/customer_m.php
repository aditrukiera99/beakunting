<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer_m extends CI_Model
{
	function __construct() {
		  parent::__construct();
		  $this->load->database();
	}

	function get_all_pelanggan(){
        $sql = "
        SELECT a.*,
        IFNULL(IFNULL(b.DEBET, 0) - IFNULL(c.KREDIT,0), 0) AS BALANCE,
        IFNULL(d.PAID, 0) AS PAID,
        IFNULL(e.PAID2, 0) AS PAID2
        FROM ak_pelanggan a 
        LEFT JOIN (
            SELECT ID_PELANGGAN, SUM(SUB_TOTAL) AS DEBET FROM ak_penjualan
            WHERE TIPE = 'INVOICE'
            GROUP BY ID_PELANGGAN
        ) b ON a.ID = b.ID_PELANGGAN

        LEFT JOIN (
            SELECT ID_PELANGGAN, SUM(SUB_TOTAL) AS KREDIT FROM ak_penjualan
            WHERE TIPE = 'RECEIVE'
            GROUP BY ID_PELANGGAN
        ) c ON a.ID = c.ID_PELANGGAN

        LEFT JOIN (
            SELECT ID_PELANGGAN, SUM(TOTAL) AS PAID FROM ak_receive_payment
            GROUP BY ID_PELANGGAN
        ) d ON a.ID = d.ID_PELANGGAN

        LEFT JOIN (
            SELECT ID_PELANGGAN, SUM(SUB_TOTAL) AS PAID2 FROM ak_penjualan
            WHERE TIPE = 'CREDIT'
            GROUP BY ID_PELANGGAN
        ) e ON a.ID = e.ID_PELANGGAN
        ORDER BY a.ID DESC
        ";

        return $this->db->query($sql)->result();
    }

    function get_customer_by_id($id){
        $sql = "SELECT * FROM ak_pelanggan WHERE ID = '$id' ";
        return $this->db->query($sql)->row();
    }

    function get_transaction_info($id){
        $sql = "
        SELECT a.* FROM (
        SELECT a.TIPE, a.NO_BUKTI, a.TGL_TRX, a.KODE_AKUN, a.SUB_TOTAL, b.NAMA_AKUN FROM ak_penjualan a
        LEFT JOIN ak_kode_akuntansi b ON a.KODE_AKUN = b.KODE_AKUN
        WHERE ID_PELANGGAN = '$id' 

        UNION ALL 

        SELECT 'Payment' AS TIPE, a.NO_BUKTI, a.TGL AS TGL_TRX, a.KODE_AKUN, a.TOTAL AS SUB_TOTAL, b.NAMA_AKUN FROM ak_receive_payment a
        LEFT JOIN ak_kode_akuntansi b ON a.KODE_AKUN = b.KODE_AKUN
        WHERE ID_PELANGGAN = '$id' 
        ) a 
        ORDER BY a.TGL_TRX

        ";

        return $this->db->query($sql)->result();
    }

}

?>