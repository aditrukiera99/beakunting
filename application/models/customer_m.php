<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer_m extends CI_Model
{
	function __construct() {
		  parent::__construct();
		  $this->load->database();
	}

	function get_all_pelanggan(){
        $sql = "
        SELECT * FROM ak_pelanggan
        ORDER BY ID DESC
        ";

        return $this->db->query($sql)->result();
    }

    function get_customer_by_id($id){
        $sql = "SELECT * FROM ak_pelanggan WHERE ID = '$id' ";
        return $this->db->query($sql)->row();
    }

    function get_transaction_info($id){
        $sql = "
        SELECT a.*, b.NAMA_AKUN FROM ak_penjualan a
        LEFT JOIN ak_kode_akuntansi b ON a.KODE_AKUN = b.KODE_AKUN
        WHERE ID_PELANGGAN = '$id' 
        ";

        return $this->db->query($sql)->result();
    }

}

?>