<?php
class Usermain extends CI_Controller {

        // public function __construct()
        // {
        //     parent::__construct();
        //     $this->load->model('user_model');
        // }
        public function index()
        {
            
            $this->load->view('main-user/user_view');
           
        } 
    }