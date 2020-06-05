<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian_m extends CI_Model {
    public function get($id = null)
    {
        $this->db->select('detail_sewa_mobil.*,
        sewa_mobil.kode_sewa as sewa_kode_sewa,
        sewa_mobil.tgl_sewa as sewa_tgl_sewa,
        sewa_mobil.tgl_kembali as sewa_tgl_kembali,
        biaya.driver as biaya_driver,
        mobil.nama_mobil as mobil_nama_mobil');
        $this->db->from('detail_sewa_mobil');
        $this->db->join('sewa_mobil', 'sewa_mobil.id_sewa = detail_sewa_mobil.id_sewa');
        $this->db->join('mobil', 'mobil.id_mobil = detail_sewa_mobil.id_mobil');
        $this->db->join('biaya', 'biaya.id_biaya = detail_sewa_mobil.id_biaya');
        $this->db->where('detail_sewa_mobil.status = "selesai"');
        //$this->db->from('detail_sewa_mobil');
        if($id != null)
        {
            $this->db->where('id_detail_sewa', $id);
        }
        $this->db->order_by('id_detail_sewa', 'asc');
        $query = $this->db->get();
        return $query;
    }
}