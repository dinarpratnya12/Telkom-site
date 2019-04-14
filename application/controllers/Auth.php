<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Auth extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
            $this->load->library('form_validation');
            $this->load->model('Auth_model');
        }
        
    
        public function index()
        {
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "User Login";
                $this->load->view('templates/auth_header', $data);
                $this->load->view('auth/login');
                $this->load->view('templates/auth_footer');
            }
            else {
                $this->_login();
            }
        }

        public function registration()
        {
            $this->form_validation->set_rules('name', 'Name', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
                'is_unique' => 'This email is already registered!'
            ]);
            $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
                'matches' => 'Password dont match!',
                'min_length' => 'Password too short!'
            ]);
            $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "User Registration";
                $this->load->view('templates/auth_header', $data);
                $this->load->view('auth/registration');
                $this->load->view('templates/auth_footer');
            }
            else {
                $this->Auth_model->insertUserData();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Your account is successfully registered! Please Login.</div>');
                redirect('auth');
            }
        }

        private function _login()
        {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $user = $this->Auth_model->checkLogin($email, $password);
            if ($user) {
                if ($user['is_active'] == 1) {
                    if (password_verify($password, $user['password'])) {
                        $data = [
                            'email' => $user['email'],
                            'role_id' => $user['role_id']
                        ];
                        $this->session->set_userdata($data);
                        if ($user['role_id'] == 1) {
                            redirect('admin');
                        }
                        else {
                            redirect('user');
                        }
                    }
                    else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        Wrong password!</div>');
                        redirect('auth');
                    }
                }
                else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    This email has not been activated!</div>');
                    redirect('auth');
                }
            }
            else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                This email is not registered!</div>');
                redirect('auth');
            }
        }

        public function logout()
        {
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('role_id');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            You have been logged out.</div>');
            redirect('auth');
        }
    }
    
    /* End of file Auth.php */
    
?>
