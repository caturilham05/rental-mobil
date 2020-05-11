<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sewa_m extends CI_Model {
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
        //$this->db->where('detail_sewa_mobil.status = "selesai"');
        //$this->db->from('detail_sewa_mobil');
        if($id != null)
        {
            $this->db->where('id_detail_sewa', $id);
        }
        $this->db->order_by('id_detail_sewa', 'asc');
        $query = $this->db->get();
        return $query;
    }

    // public function add($sewa_mobil, $detail_sewa_mobil){
    //     $this->db->trans_start();
    //     $data = array(
    //         'id_mobil' => $POST['mobil'],
    //         'kode_sewa' => uniqid(),
    //         'tgl_sewa' => date('Y-m-d'),
    //         'tgl_kembali' => date('Y-m-d'),
    //     );
    //     $this->db->insert('sewa_mobil', $data);

    //     $id = $this->db->insert_id();
    //     $result = array();
    //     foreach($detail_sewa_mobil as $key => $val){
    //         $result[] = array(
    //             'id_sewa' => $id,
    //             'id_mobil' => $POST['mobil'][$key],
    //             'lokasi' => $POST[''],

    //         );
    //     }
    // }

    public function add($post){
        $id = $this->db->insert_id();
        $params = [
            'id_sewa' => $id,
            //'id_driver' => $id,
            'id_mobil' => $post['mobil'],
            'lokasi' => $post['lokasi'],
            'waktu_pengambilan' => $post['waktu_pengambilan'],
            'email' => $post['email'],
            'telepon' => $post['telepon'],
            'durasi_sewa' => $post['durasi_sewa'],
            'harga' => $post['harga'],
            'status' => $post['status']
        ];
            $this->db->insert('detail_sewa_mobil', $params);

    }

    public function edit($post){
        $params= [
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

