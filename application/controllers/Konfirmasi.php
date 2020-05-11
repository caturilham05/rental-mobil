<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        check_not_login();
        //check_admin();
		$this->load->model(['konfirmasi_m', 'mobil_m']);
		$this->load->library('form_validation');
    }

	
	public function index()
	{
		$data['row'] = $this->konfirmasi_m->get();
		$this->template->load('template', 'admin/konfirmasi/konfirmasi_data', $data);
	}
	
	public function add(){
		$konfirmasi = new stdClass();
		$konfirmasi->konfirmasi_id = null;
		$konfirmasi->name = null;
		$data = array(
			'page' => 'add',
			'row' => $konfirmasi
		); 
		
		$this->template->load('template', 'admin/konfirmasi/konfirmasi_form', $data);

	}

	public function edit($id){
		$query = $this->konfirmasi_m->get($id);
		if($query->num_rows() == 1){
			$konfirmasi = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $konfirmasi
			); 
			$this->template->load('template', 'admin/konfirmasi/konfirmasi_form', $data);
		}else{
			echo "<script>alert('Data Tidak Ditemukan!');";
			echo "window.location='".site_url('konfirmasi')."';</script>";
		}
	}

	public function proses(){
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
			$this->konfirmasi_m->add($post);
		}else if(isset($_POST['edit'])){
			$this->konfirmasi_m->edit($post);
		}
		if($this->db->affected_rows() == 1){
			$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
		}
		echo "<script>window.location='".site_url('konfirmasi')."';</script>";
	}

	public function del($id){
		$this->konfirmasi_m->del($id);
		if($this->db->affected_rows() == 1){
            $this->session->set_flashdata('success', 'Data Berhasil Dihapus!');
		}
		echo "<script>window.location='".site_url('konfirmasi')."';</script>";
	}
}

