<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vendors_m extends CI_Model
{
	function __construct() {
		  parent::__construct();
		  $this->load->database();
	} 

	function get_all_supplier(){
        $sql = "
        SELECT * FROM ak_supplier
        ORDER BY ID DESC
        ";

        return $this->db->query($sql)->result();
    }

    function get_vendor_by_id($id){
        $sql = "SELECT * FROM ak_supplier WHERE ID = '$id' ";
        return $this->db->query($sql)->row();
    }

}

?>