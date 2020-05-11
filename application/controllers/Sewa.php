<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sewa extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        check_not_login();
        //check_admin();
		$this->load->model(['sewa_m', 'mobil_m', 'simpel_sewa', 'driver_m']);
		$this->load->library('form_validation');
    }

	
	public function index()
	{
		$data['row'] = $this->sewa_m->get();
		$this->template->load('template', 'admin/sewa/sewa_data', $data);
	}

	// public function add(){
	// 	$this->db->set('kode_sewa', 'UUID()', FALSE);
	// 	$query_mobil = $this->mobil_m->get();
	// 	$sewa_mobil = array (
	// 		'mobil' => $query_mobil,
	// 		'tgl_sewa' => $this->input->post('tgl_sewa'),
	// 		'tgl_kembali' => $this->input->post('tgl_kembali')
	// 	);
	// 	$detail_sewa_mobil = array(
	// 		'lokasi' => $this->input->post('lokasi'),
	// 		'waktu_pengambilan' => $this->input->post('waktu_pengambilan'),
	// 		'email' => $this->input->post('email'),
	// 		'telepon' => $this->input->post('telepon'),
	// 		'durasi_sewa' => $this->input->post('durasi_sewa'),
	// 		'harga' => $this->input->post('harga'),
	// 		'status' => $this->input->post('status'),
	// 	);
	// 	$this->sewa_m->add($sewa_mobil, $detail_sewa_mobil);

	// 	$this->template->load('template', 'admin/sewa/sewa_form');
	// }
	
	public function add(){
		$sewa = new stdClass();
		$sewa->id_sewa = null;
		$sewa->id_detail_sewa = null;
		$sewa->id_mobil = null;
		//$sewa->id_driver = null;

		$query_driver = $this->driver_m->get();
		$query_mobil = $this->mobil_m->get();
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
			'driver' => $query_driver,
			'row' => $sewa
		); 
		
		$this->template->load('template', 'admin/sewa/sewa_form', $data);

	}

	public function edit($id){
		$query = $this->sewa_m->get($id);
		if($query->num_rows() == 1){
			$sewa = $query->row();
			$query_mobil = $this->mobil_m->get();
			$data = array(
				'page' => 'edit',
				'mobil' => $query_mobil,
				'row' => $sewa
			); 
			$this->template->load('template', 'admin/sewa/sewa_form', $data);
		}else{
			echo "<script>alert('Data Tidak Ditemukan!');";
			echo "window.location='".site_url('sewa')."';</script>";
		}
	}

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
		echo "<script>window.location='".site_url('sewa')."';</script>";
	}

	// public function add(){

	// }

	public function del($id){
		$this->sewa_m->del($id);
		if($this->db->affected_rows() == 1){
            $this->session->set_flashdata('success', 'Data Berhasil Dihapus!');
		}
		echo "<script>window.location='".site_url('sewa')."';</script>";
	}
}

