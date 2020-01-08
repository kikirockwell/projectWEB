<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_model{

    public function ambillogin($user,$password)
    {
        $this->db->where('username', $user);
        $this->db->where('password', $password);
        $query = $this->db->get('web');
        if ($query->num_rows()>0){
            foreach ($query->result() as $row) {
                $sess = array ('username' => $row->username,'password' => $row->password);
            }
            $this->session->set_userdata($sess);
            redirect('customer');
            
            }

        else{
                $this->session->set_flashdata('info','MAAF Username dan Password Anda salah!, Mohon diperiksa kembali');
                redirect('login');
            }
        }


    public function keamanan()
    {
        $user = $this->session->userdata('user');
        if(empty($user)){
            $this->session->sess_destroy();
            redirect('login');
        }
    }

}