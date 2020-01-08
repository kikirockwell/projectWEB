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
                'token'         => $_GET['token'],
    
            );
    
            $this->load->view('data_message', $data);
        }
    }

    public function simpan()
    {
        define('API_ACCESS_KEY','AAAAQxjX4yU:APA91bH2-lCvgzdTbavW9yVrQ4Gg3Qa2eR0mfbZlfC-oeNvEYV7Vuop7p2Y6mV6dxbOE4kQVuEe0vKtRRuvPJGtHeCTLMWO9IAT2wikQsLd-d29N9cOAgFpYiQzVEW7ZCOsGk_5hRVvC');
        $url = 'https://fcm.googleapis.com/fcm/send';
        $registrationIds = $_GET['token'];
        // prepare the message
        $message = array( 
            'title'     => 'Xing Hao Technology',
            'body'      => $this->input->post("message"),
            'id'        => $_GET['id'],
            'vibrate'   => 1,
            'sound'      => 1
        );

        $notif = array (
            'title' => 'Xing Hao Technology',
            'body' => $this->input->post("message"),
            'click_action' => 'OPEN_ACTIVITY'
        );

        $fields = array( 
            'to' => $registrationIds, 
            'notification' => $notif,
            'data'         => $message
        );
        $headers = array( 
            'Authorization: key='.API_ACCESS_KEY, 
            'Content-Type: application/json'
        );
        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL,$url);
        curl_setopt( $ch,CURLOPT_POST,true);
        curl_setopt( $ch,CURLOPT_HTTPHEADER,$headers);
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER,false);
        curl_setopt( $ch,CURLOPT_POSTFIELDS,json_encode($fields));
        $result = curl_exec($ch);
        curl_close($ch);

        $data = array(

            'id_customer'   => $_GET['id'],
            'token'         => $_GET['token'],
            'message'       => $this->input->post("message"),
            'create_at'     => $this->input->post("create_at"),

        );

        $this->model_message->simpan($_GET['id'], $this->input->post("message"));

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success ! pesan berhasil di kirim.</div>');

        //redirect
        redirect('message?id='.$_GET['id'].'&token='.$_GET['token']);

    }
}