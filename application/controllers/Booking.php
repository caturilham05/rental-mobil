<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model(['sewa_m', 'mobil_m', 'simpel_sewa', 'driver_m', 'user_m', 'pembayaran_m']);
		$this->load->library('form_validation');

	}
	public function sewa($id){
			$data['row'] = $this->mobil_m->get_id($id);
			$data['driver'] = $this->driver_m->getAll();
			$data['sewa'] = $this->simpel_sewa->get();
			$this->load->view('home/booking/booking', $data);
		}
		
	// 	public function add($id){
	// 		$this->sewa($id);
	// 	$sewa = new stdClass();
	// 	$sewa->id_sewa = null;
	// 	$sewa->id_detail_sewa = null;
	// 	$sewa->name = null;
	// 	$sewa->id_mobil = null;
	// 	$sewa->id_biaya = null;

	// 	 $query_driver = $this->driver_m->getAll();
	// 	 $query_mobil = $this->mobil_m->get_id();
	// 	 $query_sewa = $this->simpel_sewa->get();
		
	// 	$sewa->kode_sewa = null;
	// 	$sewa->tgl_sewa = null;
	// 	$sewa->tgl_kembali = null;
	// 	$sewa->lokasi = null;
	// 	$sewa->waktu_pengambilan = null;
	// 	$sewa->email = null;
	// 	$sewa->telepon = null;
	// 	$sewa->durasi_sewa = null;
	// 	$sewa->harga = null;
	// 	$sewa->status = null;

	// 	$data = array(
	// 		'page' => 'add',
	// 		'mobil' => $query_mobil,
	// 		'simpel' => $query_sewa,
	// 		'biaya' => $query_driver,
	// 		'row' => $sewa
	// 	); 
		
	// 	$this->load->view('home/booking/booking', $data);
	// }


	public function edit($id){
		$query = $this->pembayaran_m->get_riwayat($id);
		if($query->num_rows() == 1){
			$data['row'] = $query->row();
			$this->load->view('home/booking/booking_edit', $data);
		}else{
			echo "<script>alert('Data Tidak Ditemukan!');";
			echo "window.location='".site_url('riwayat%20sewa')."';</script>";
		}
	}

	public function proses(){
		$config['upload_path']   = './uploads/transaksi/';
		$config['allowed_types'] = '|jpg|png|jpeg';
		$config['max_size']      = 2048;
		$config['file_name']      = 'Bukti-Pembayaran-'.date('ymd').'-'.substr(sha1(rand()),0,10);
		$this->load->library('upload', $config);

		// $durasinya = $sewa->durasi_sewa;
		// $harganya = $sewa->harga;
		// var_dump($harganya);die();
		$post = $this->input->post(null, TRUE);
		
		if(isset($_POST['add'])){
			$this->db->set('kode_sewa', 'UUID()', FALSE);
			if(@$_FILES['bukti']['name'] != null){
				if ($this->upload->do_upload('bukti')){
					$post['bukti'] = $this->upload->data('file_name');
					$this->simpel_sewa->add($post);
					$this->sewa_m->add($post);
					if($this->db->affected_rows() == 1){
						$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
					}
					 echo "<script>window.location='".site_url('riwayat%20sewa')."';</script>";
				}else{
					$err = $this->upload->display_errors();
					$this->session->set_flashdata('err', $err);
					echo "<script>window.location='".site_url('booking/sewa/mobil/kode(:num)')."';</script>";
				}
			}else{
				$post['bukti'] = null;
				$this->simpel_sewa->add($post);
				$this->sewa_m->add($post);
				if($this->db->affected_rows() == 1){
					$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
				}
				echo "<script>window.location='".site_url('riwayat%20sewa')."';</script>";
			}
		}else if(isset($_POST['edit'])){
			if(@$_FILES['bukti']['name'] != null){
				if ($this->upload->do_upload('bukti')){
					$sewa_mobil = $this->pembayaran_m->get_riwayat($post['id_detail_sewa'])->row();
					if($sewa_mobil->bukti != null){
						$target_file = './uploads/transaksi/'.$sewa_mobil->bukti;
						unlink($target_file);
					}
					
					$post['bukti'] = $this->upload->data('file_name');
					$this->sewa_m->edit($post);
					if($this->db->affected_rows() == 1){
						$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
					}
					echo "<script>window.location='".site_url('riwayat%20sewa')."';</script>";
				}else{
					$err = $this->upload->display_errors();
					$this->session->set_flashdata('err', $err);
					echo "<script>window.location='".site_url('booking/edit/'.$post['id_detail_sewa'])."';</script>";
				}
			}else{
				$post['bukti'] = null;
				$this->pembayaran_m->edit($post);
				if($this->db->affected_rows() == 1){
					$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
				}
				echo "<script>window.location='".site_url('riwayat%20sewa')."';</script>";
			}
		}
		if($this->db->affected_rows() == 1){
			$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
		}
		echo "<script>window.location='".site_url('riwayat%20sewa')."';</script>";

	}

	// public function proses(){
	// 	$this->db->set('kode_sewa', 'UUID()', FALSE);
	// 	$post = $this->input->post(null, TRUE);
	// 	if(isset($_POST['add'])){
	// 		$this->simpel_sewa->add($post);
	// 		$this->sewa_m->add($post);
	// 	}else if(isset($_POST['edit'])){
	// 		$this->sewa_m->edit($post);
	// 	}
	// 	if($this->db->affected_rows() == 1){
	// 		$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
	// 	}
	// 	echo "<script>window.location='".site_url('riwayat%20sewa')."';</script>";
	// }
}