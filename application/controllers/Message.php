<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {

    public function __construct(){

        parent::__construct();

        //load model
        $this->load->model('model_message'); 
        $id_customer = $_GET['id'];

    }

    public function index(){
        {
            $data = array(
    
                'title'         => 'Data Client',
                'data_message'  => $this->model_message->get_all($_GET['id']),
                'id_customer'   => $_GET['id'],
    
            );
    
            $this->load->view('data_message', $data);
        }
    }

    /*public function tambah()
    {
        $data = array(

            'title'     => 'Tambah Data Client'

        );

        $this->load->view('model_message', $data);
    }*/

    public function simpan()
    {
        $data = array(

            'id_customer'   => $_GET['id'],
            'message'       => $this->input->post("message"),
            'create_at'     => $this->input->post("create_at"),

        );

        $this->model_message->simpan($_GET['id'], $this->input->post("message"));

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success ! pesan berhasil di kirim.</div>');

        //redirect
        redirect('message?id='.$_GET['id']);

    }
}