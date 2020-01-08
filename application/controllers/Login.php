<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){

        parent::__construct();

        //load model
        $this->load->model('model_login'); 

    }

    public function index()
        {
         $this->load->view('data_login');
        }
       
    public function ceklogin()
        {
         $user = $this->input->post('user');
         $password = $this->input->post('password');
         $this->model_login->ambillogin($user,$password);
        }
    }
