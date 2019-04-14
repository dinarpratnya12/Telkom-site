<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class User extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
            $this->load->model('User_model');
        }
        
    
        public function index()
        {
            $data['title'] = 'My Profile';
            $data['user'] = $this->User_model->getWelcomeName();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/index', $data);
            $this->load->view('templates/footer');
        }

        public function edit()
        {
            $data['title'] = 'Edit Profile';
            $data['user'] = $this->User_model->getWelcomeName();
            $image = $data['user']['image'];

            $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('user/edit', $data);
                $this->load->view('templates/footer');
            } else {
                $this->User_model->editProfileName($image);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Your profile has been updated.</div>');
                redirect('user');
            }
        }
    }
    
    /* End of User.php */
    
?>
