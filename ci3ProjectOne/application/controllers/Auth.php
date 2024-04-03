<?php
class Auth extends CI_Controller {

    public function __construct()
        {
            parent::__construct();
            $this->load->model('auth_model');
            $this->load->helper('form');
            $this->load->library('form_validation','session');
           

        }
        public function index()
        {
          $this->load->view('home_page');
        // echo "<center><h1>Welcome to our homepage...</h1></center>";
            }   
    
        public function signin()
        {
           $this->load->view('Auth/signin_view');
        }   

        public function signin_form(){
            $this->auth_model->signin_user();
        }

        public function signup()
        {
                       
            $this->load->view('Auth/signup_view');
                   
          }
        
        public function signup_form()
        {
          

            $this->auth_model->signup_user();
        }

        public function user_dashboard()
        {
            $this->load->view('Auth/header');
            $this->load->view('Auth/dashboard');
            $this->load->view('Auth/footer');
        } 
        
        public function logout()
        {
            $this->auth_model->user_logout();

        }
                    
    }  