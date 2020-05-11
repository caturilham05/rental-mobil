<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi_m extends CI_Model {
    public function get($id = null)
    {
        $this->db->select('detail_sewa_mobil.*,
        sewa_mobil.kode_sewa as sewa_kode_sewa,
        sewa_mobil.tgl_sewa as sewa_tgl_sewa,
        sewa_mobil.tgl_kembali as sewa_tgl_kembali,
        mobil.nama_mobil as mobil_nama_mobil');
        $this->db->from('detail_sewa_mobil');
        $this->db->join('sewa_mobil', 'sewa_mobil.id_sewa = detail_sewa_mobil.id_sewa');
        $this->db->join('mobil', 'mobil.id_mobil = detail_sewa_mobil.id_mobil');
        $this->db->where('detail_sewa_mobil.status = "menunggu konfirmasi"');
        //$this->db->from('detail_sewa_mobil');
        if($id != null)
        {
            $this->db->where('id_detail_sewa', $id);
        }
        $this->db->order_by('id_detail_sewa', 'asc');
        $query = $this->db->get();
        return $query;
    }

    public function add($post){
        $params= [
            'kode_sewa' => $post['name']
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


    public function del($id)
    {
        $this->db->where('kode_sewa', $id);
        $this->db->delete('sewa');
    }
}
