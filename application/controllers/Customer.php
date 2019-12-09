<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    public function __construct(){

        parent::__construct();

        //load model
        $this->load->model('model_customer'); 

    }

    public function index()
    {
        $data = array(

            'title'     => 'Data Client',
            'data_customer' => $this->model_customer->get_all(),

        );

        $this->load->view('data_customer', $data);
    }

    public function tambah()
    {
        $data = array(

            'title'     => 'Tambah Data Client'

        );

        $this->load->view('tambah_customer', $data);
    }

    public function simpan()
    {
        $data = array(

            'name'          => $this->input->post("name"),
            'address'       => $this->input->post("address"),
            'create_at'     => $this->input->post("create_at"),
            'phone'         => $this->input->post("phone"),
            'token'         => $this->input->post("token"),

        );

        $this->model_customer->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success ! data berhasil disimpan.</div>');

        //redirect
        redirect('customer/');

    }

    public function update()
    {
        $id['id'] = $this->input->post("id");
        $data = array(

            'name'          => $this->input->post("name"),
            'address'       => $this->input->post("address"),
            'create_at'     => $this->input->post("create_at"),
            'phone'         => $this->input->post("phone"),
            'token'         => $this->input->post("token"),

        );

        $this->model_buku->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success ! data berhasil diupdate didatabase.</div>');

        //redirect
        redirect('customer/');

    }
}