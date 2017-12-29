<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Terms_m extends CI_Model
{
	function __construct() {
		  parent::__construct();
		  $this->load->database();
	}

	

    public function get_anak_type($id){
        $sql = "SELECT * FROM ak_terms WHERE SUB = '$id' ORDER BY ID";

        return $this->db->query($sql)->result();
    }

    
}

?>