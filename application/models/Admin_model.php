<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Admin_model extends CI_Model {
        public function getWelcomeName()
        {
            return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        }

        public function add_data($table, $data)
        {
        	$this->db->insert($table, $data);
    	}
    
    /* End of file Admin_model.php */  
	}
?>