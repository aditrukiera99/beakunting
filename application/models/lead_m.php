<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lead_m extends CI_Model
{
	function __construct() {
		  parent::__construct();
		  $this->load->database();
	}

	function get_all_lead(){
        $sql = "
        SELECT * FROM ak_lead
        ORDER BY ID DESC
        ";

        return $this->db->query($sql)->result();
    }

    function get_lead_by_id($id){
        $sql = "SELECT * FROM ak_lead WHERE ID = '$id' ";
        return $this->db->query($sql)->row();
    }

}

?>