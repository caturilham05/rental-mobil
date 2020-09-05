<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Driver_m extends CI_Model {
    public function get($id = null)
    {
        $this->db->from('biaya');
        if($id != null)
        {
            $this->db->where('id_biaya ', $id);
        }
         $this->db->limit(1);
        $query = $this->db->get();
        return $query;
    }

    public function getAll($id = null)
    {
        $this->db->from('biaya');
        if($id != null)
        {
            $this->db->where('id_biaya ', $id);
        }
           // $this->db->limit(1);
        $query = $this->db->get();
        return $query;
    }


    public function edit($post){
        $params= [
            'driver' => $post['driver'],
            'denda' => $post['denda'],
        ];
        $this->db->where('id_biaya', $post['id_biaya']);
        $this->db->update('biaya', $params);
    }


    public function del($id)
    {
        $this->db->where('id_biaya', $id);
        $this->db->delete('biaya');
    }
}

