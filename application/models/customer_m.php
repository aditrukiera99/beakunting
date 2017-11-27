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

}

?>