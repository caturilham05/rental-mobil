<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sewa_m extends CI_Model {
    public function get($id = null)
    {
        $this->db->select('detail_sewa_mobil.*,
        sewa_mobil.kode_sewa as sewa_kode_sewa,
        sewa_mobil.tgl_sewa as sewa_tgl_sewa,
        sewa_mobil.tgl_kembali as sewa_tgl_kembali,
        biaya.driver as biaya_driver,
        mobil.nama_mobil as mobil_nama_mobil',);
        $this->db->from('detail_sewa_mobil');
        $this->db->join('sewa_mobil', 'sewa_mobil.id_sewa = detail_sewa_mobil.id_sewa');
        $this->db->join('mobil', 'mobil.id_mobil = detail_sewa_mobil.id_mobil');
        $this->db->join('biaya', 'biaya.id_biaya = detail_sewa_mobil.id_biaya');
        if($id != null)
        {
            $this->db->where('id_detail_sewa', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post){
        $id = $this->db->insert_id();
        // $id_user = $this->session->userdata('user_id');
        $params = [
            'id_sewa' => $id,
            'name' => $post['name'],
            'id_mobil' => $post['mobil'],
            'id_biaya' => $post['biaya'],
            'lokasi' => $post['lokasi'],
            'waktu_pengambilan' => $post['waktu_pengambilan'],
            'email' => $post['email'],
            'telepon' => $post['telepon'],
            'durasi_sewa' => $post['durasi_sewa'],
            'harga' => $post['harga'],
            'bukti' => $post['bukti'],
            'status' => $post['status']

        ];
            $this->db->insert('detail_sewa_mobil', $params);

    }

    public function edit($post){
        $params= [
            'bukti' => $post['bukti'],
            'status' => $post['status']
        ];
        $this->db->where('id_detail_sewa', $post['id_detail_sewa']);
        $this->db->update('detail_sewa_mobil', $params);
    }

    // public function add(){

    // }


    public function del($id)
    {
        $this->db->where('kode_sewa', $id);
        $this->db->delete('sewa');
    }
}

