<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_message extends CI_model{

    public function get_all($id_cusomter)
    {
        $query = $this->db->select("*")
                 ->from('message')
                 ->where('id_customer = ', $id_cusomter)
                 ->order_by('id', 'ASC')
                 ->get();
        return $query->result();
    }

    public function simpan($id, $msg)
    {

        $query = $this->db->query("select insert_message($id, '$msg', 'Agent')");

        if($query){
            return true;
        }else{
            return false;
        }

    }

}