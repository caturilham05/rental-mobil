<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Driver_m extends CI_Model {
    public function get($id = null)
    {
        $this->db->from('driver');
        if($id != null)
        {
            $this->db->where('id_driver', $id);
        }
        $query = $this->db->get();
        return $query;
    }


    public function edit($post){
        $params= [
            'biaya' => $post['biaya'],
        ];
        $this->db->where('id_driver', $post['id_driver']);
        $this->db->update('driver', $params);
    }


    public function del($id)
    {
        $this->db->where('id_driver', $id);
        $this->db->delete('driver');
    }
}

