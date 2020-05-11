<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil_m extends CI_Model {
    public function get($id = null)
    {
        $this->db->from('mobil');
        if($id != null)
        {
            $this->db->where('id_mobil', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post){
        $params= [
            'nama_mobil' => $post['nama_mobil'],
            'merek' => $post['merek'],
            'nopol' => $post['nopol'],
            'harga' => $post['harga'],
            'bahanbakar' => $post['bahanbakar'],
            'tahun' => $post['tahun'],
            'gambar' => $post['gambar']
        ];
        $this->db->insert('mobil', $params);
    }

    public function edit($post){
        $params= [
            'nama_mobil' => $post['nama_mobil'],
            'merek' => $post['merek'],
            'nopol' => $post['nopol'],
            'harga' => $post['harga'],
            'bahanbakar' => $post['bahanbakar'],
            'tahun' => $post['tahun'],
        ];
        if($post['gambar'] != null){
            $params['gambar'] = $post['gambar'];
        }
        $this->db->where('id_mobil', $post['id_mobil']);
        $this->db->update('mobil', $params);
    }


    public function del($id)
    {
        $this->db->where('id_mobil', $id);
        $this->db->delete('mobil');
    }
}

