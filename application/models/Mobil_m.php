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
    
    public function get_new($id = null){
        $this->db->from('mobil');
        if($id != null){
            $this->db->where('id_mobil', $id);
        }
        $this->db->limit(3);
        $this->db->order_by('id_mobil', 'DESC');
        $query = $this->db->get();
        return $query;
    }
    
    public function terbaru($id = null){
        $this->db->from('mobil');
        if($id != null){
            $this->db->where('id_mobil', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_id($id = null){
        $this->db->from('mobil');
        if($id != null){
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
            'deskripsi' => $post['deskripsi'],
            'gambar' => $post['gambar'],
            'AC' => $post['AC'],
            'doorlock' => $post['doorlock'],
            'antilockbrakingsystem' => $post['antilockbrakingsystem'],
            'brakeassist' => $post['brakeassist'],
            'powersteering' => $post['powersteering'],
            'driveairbag' => $post['driveairbag'],
            'passengerairbag' => $post['passengerairbag'],
            'powerwindows' => $post['powerwindows'],
            'cdplayer' => $post['cdplayer'],
            'centrallocking' => $post['centrallocking'],
            'crashsensor' => $post['crashsensor'],
            'leatherseats' => $post['leatherseats']
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
            'deskripsi' => $post['deskripsi'],
            'AC' => $post['AC'],
            'doorlock' => $post['doorlock'],
            'antilockbrakingsystem' => $post['antilockbrakingsystem'],
            'brakeassist' => $post['brakeassist'],
            'powersteering' => $post['powersteering'],
            'driveairbag' => $post['driveairbag'],
            'passengerairbag' => $post['passengerairbag'],
            'powerwindows' => $post['powerwindows'],
            'cdplayer' => $post['cdplayer'],
            'centrallocking' => $post['centrallocking'],
            'crashsensor' => $post['crashsensor'],
            'leatherseats' => $post['leatherseats']
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
   
    public function del_mobil($id)
    {
        $this->db->where('id_mobil', $id);
        $this->db->delete('mobil');
    }
}

