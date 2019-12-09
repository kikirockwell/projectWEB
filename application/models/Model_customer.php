<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_customer extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('customer')
                 ->order_by('id', 'DESC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("customer", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

}