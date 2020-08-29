<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simpel_sewa extends CI_Model {
    public function get($id = null)
    {
        $this->db->from('sewa_mobil');
        if($id != null)
        {
            $this->db->where('id_sewa', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post){
        $params = [
            //'kode_sewa' => $post['kode_sewa'],
            'id_mobil' => $post['mobil'],
            'tgl_sewa' => $post['tgl_sewa'],
            'tgl_kembali' => $post['tgl_kembali'],
        ];
        $this->db->insert('sewa_mobil', $params);

    }

    public function edit($post){
        $params= [
            'status' => $post['status']
        ];
        $this->db->where('id_detail_sewa', $post['id_detail_sewa']);
        $this->db->update('detail_sewa_mobil', $params);
    }
}

