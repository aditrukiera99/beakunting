<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_m extends CI_Model
{
	function __construct() {
		  parent::__construct();
		  $this->load->database();
	}

	function get_all_pekerja(){
        $sql = "
        SELECT * FROM ak_pekerja
        ORDER BY ID DESC
        ";

        return $this->db->query($sql)->result();
    }

    function get_employee_by_id($id){
        $sql = "SELECT * FROM ak_pekerja WHERE ID = '$id' ";
        return $this->db->query($sql)->row();
    }

}

?>