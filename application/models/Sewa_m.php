<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sewa_m extends CI_Model {
    public function get($id = null)
    {
        $this->db->select('detail_sewa_mobil.*,
        sewa_mobil.kode_sewa as sewa_kode_sewa,
        sewa_mobil.tgl_sewa as sewa_tgl_sewa,
        sewa_mobil.tgl_kembali as sewa_tgl_kembali,
        sewa_mobil.model_mobil as sewa_model_mobil');
        $this->db->from('detail_sewa_mobil');
        $this->db->join('sewa_mobil', 'sewa_mobil.id_sewa = detail_sewa_mobil.id_sewa');
        //$this->db->from('detail_sewa_mobil');
        if($id != null)
        {
            $this->db->where('id_sewa', $id);
        }
        $this->db->order_by('id_sewa', 'asc');
        $query = $this->db->get();
        return $query;
    }

    public function add($post){
        $params= [
            'name' => $post['name']
        ];
        $this->db->insert('sewa_mobil', $params);
    }

    public function edit($post){
        $params= [
            'name' => $post['name'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('kode_sewa', $post['kode_sewa']);
        $this->db->update('sewa_mobil', $params);
    }


    public function del($id)
    {
        $this->db->where('kode_sewa', $id);
        $this->db->delete('sewa');
    }
}

