<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Admin extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
            $this->load->model('Admin_model');
        }
        
    
        public function index()
        {
            $data['title'] = 'Dashboard';
            $data['user'] = $this->Admin_model->getWelcomeName();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/footer');
        }
    }
    
    /* End of Admin.php */
    
?>
