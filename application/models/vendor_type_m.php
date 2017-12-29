<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vendor_type_m extends CI_Model
{
	function __construct() {
		  parent::__construct();
		  $this->load->database();
	}

	

    public function get_anak_type($id){
        $sql = "SELECT * FROM ak_vendor_type WHERE SUB = '$id' ORDER BY ID";

        return $this->db->query($sql)->result();
    }

    
}

?>