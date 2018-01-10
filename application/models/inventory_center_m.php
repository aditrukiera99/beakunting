<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inventory_center_m extends CI_Model
{
	function __construct() {
		  parent::__construct();
		  $this->load->database();
	}

	function get_accounts(){
        $sql = "
        SELECT * FROM ak_kode_akuntansi
        WHERE ANAK_DARI = '' OR ANAK_DARI IS NULL
        ORDER BY ID ASC
        ";

        return $this->db->query($sql)->result();
    }

    

    function get_accounts_lims(){
        $sql = "
        SELECT * FROM ak_kode_akuntansi
        WHERE ANAK_DARI = '' OR ANAK_DARI IS NULL
        ORDER BY ID ASC LIMIT 10
        ";

        return $this->db->query($sql)->result();
    }

    function get_anak_akun($kode_akun){
        $sql = "
        SELECT * FROM ak_kode_akuntansi
        WHERE ANAK_DARI = '$kode_akun'
        ORDER BY ID ASC
        ";

        return $this->db->query($sql)->result();
    }

    function get_inventory_by_id($id){
        $sql = "SELECT * FROM ak_produk WHERE ID = '$id' ";
        return $this->db->query($sql)->row();
    }

}

?>