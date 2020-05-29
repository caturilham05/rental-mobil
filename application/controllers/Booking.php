<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model(['sewa_m', 'mobil_m', 'simpel_sewa', 'driver_m', 'user_m']);
		$this->load->library('form_validation');

	}
	public function sewa($id){
			$data['row'] = $this->mobil_m->get_id($id);
			$data['driver'] = $this->driver_m->getAll();
			$data['sewa'] = $this->simpel_sewa->get();
			$this->load->view('home/booking/booking', $data);
		}
		
		public function add($id){
		$sewa = new stdClass();
		$sewa->id_sewa = null;
		$sewa->id_detail_sewa = null;
		$sewa->name = null;
		$sewa->id_mobil = null;
		$sewa->id_biaya = null;

		 $query_driver = $this->driver_m->getAll();
		 $query_mobil = $this->mobil_m->get_id();
		 $query_sewa = $this->simpel_sewa->get();
		
		$sewa->kode_sewa = null;
		$sewa->tgl_sewa = null;
		$sewa->tgl_kembali = null;
		$sewa->lokasi = null;
		$sewa->waktu_pengambilan = null;
		$sewa->email = null;
		$sewa->telepon = null;
		$sewa->durasi_sewa = null;
		$sewa->harga = null;
		$sewa->status = null;

		$data = array(
			'page' => 'add',
			'mobil' => $query_mobil,
			'simpel' => $query_sewa,
			'biaya' => $query_driver,
			'row' => $sewa
		); 
		
		$this->load->view('home/booking/booking', $data);
	}

	// public function proses(){
	// 	$this->load->model('simpel_sewa');
	// 	$this->load->model('sewa_m');
	// 	$this->load->model('mobil_m');
	// 	$this->load->model('driver_m');
	// 	$kode_sewa = $this->db->set('kode_sewa', 'UUID()', 'FALSE');
	// 	$id_sewa = $this->input->post('id_sewa');
	// 	$id_detail_sewa = $this->input->post('id_detail_sewa');
	// 	$id_mobil = $this->input->post('id_mobil');
	// 	$id_biaya = $this->input->post('id_biaya');
	// 	$tgl_sewa = $this->input->post('tgl_sewa');
	// 	$tgl_kembali = $this->input->post('tgl_kembali');
	// 	$lokasi = $this->input->post('lokasi');
	// 	$waktu_pengambilan = $this->input->post('waktu_pengambilan');
	// 	$email = $this->input->post('email');
	// 	$telepon = $this->input->post('telepon');
	// 	$durasi_sewa = $this->input->post('durasi_sewa');
	// 	$harga = $this->input->post('harga');
	// 	$status = $this->input->post('status');

	// 	$query_driver = $this->driver_m->getAll();
	// 	$query_sewa = $this->simpel_sewa->get();

	// 	$data = array(
	// 		'kode_sewa' => $kode_sewa,
	// 		'id_sewa' => $id_sewa,
	// 		'id_detail_sewa' => $id_detail_sewa,
	// 		'id_mobil' => $id_mobil,
	// 		'biaya' => $query_driver,
	// 		'tgl_sewa' => $tgl_sewa,
	// 		'tgl_kembali' => $tgl_kembali,
	// 		'waktu_pengambilan' => $waktu_pengambilan,
	// 		'email' => $email,
	// 		'telepon' => $telepon,
	// 		'durasi_sewa' => $durasi_sewa,
	// 		'harga' => $harga,
	// 		'status' => $status
	// 	);

	// 	$this->simpel_sewa->add($post);
	// 	$this->sewa_m->add($post);
	// 	$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
	// 	echo "<script>window.location='".site_url('')."';</script>";

	// }

	// public function edit($id){
	// 	$query = $this->sewa_m->get($id);
	// 	if($query->num_rows() == 1){
	// 		$sewa = $query->row();
	// 		$query_mobil = $this->mobil_m->get();
	// 		$data = array(
	// 			'page' => 'edit',
	// 			'mobil' => $query_mobil,
	// 			'row' => $sewa
	// 		); 
	// 		$this->load->view('home/booking/booking');
	// 	}else{
	// 		echo "<script>alert('Data Tidak Ditemukan!');";
	// 		echo "window.location='".site_url('sewa')."';</script>";
	// 	}
	// }

	public function proses(){
		$this->db->set('kode_sewa', 'UUID()', FALSE);
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
			$this->simpel_sewa->add($post);
			$this->sewa_m->add($post);
		}else if(isset($_POST['edit'])){
			$this->sewa_m->edit($post);
		}
		if($this->db->affected_rows() == 1){
			$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
		}
		echo "<script>window.location='".site_url('utama')."';</script>";
	}
}