<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        //check_not_login();
        //check_admin();
		$this->load->model('mobil_m');
		$this->load->library('form_validation');
    }

	
	public function index()
	{
		$data['row'] = $this->mobil_m->get();
		$this->template->load('template', 'admin/mobil/mobil_data', $data);
	}
	
	public function view_mobil()
	{
		$data['row'] = $this->mobil_m->get();
		$this->load->view('mitra/mobil/mobil_data', $data);
	}
	
	public function add(){
		$mobil = new stdClass();
		$mobil->id_mobil = null;
		$mobil->nama_mobil = null;
		$mobil->merek = null;
		$mobil->nopol = null;
		$mobil->harga = null;
		$mobil->bahanbakar = null;
		$mobil->tahun = null;
		$mobil->deskripsi = null;
		$mobil->AC = null;
		$mobil->doorlock = null;
		$mobil->antilockbrakingsystem = null;
		$mobil->brakeassist = null;
		$mobil->powersteering = null;
		$mobil->driveairbag = null;
		$mobil->passengerairbag = null;
		$mobil->powerwindows = null;
		$mobil->cdplayer = null;
		$mobil->centrallocking = null;
		$mobil->crashsensor = null;
		$mobil->leatherseats = null;
		
		$data = array(
			'page' => 'add',
			'row' => $mobil
		); 
		
		$this->load->view('mitra/mobil/mobil_form', $data);

	}

	public function edit($id){
		$query = $this->mobil_m->get($id);
		if($query->num_rows() == 1){
			$mobil = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $mobil
			); 
		$this->load->view('mitra/mobil/mobil_form', $data);
		}else{
			echo "<script>alert('Data Tidak Ditemukan!');";
			echo "window.location='".site_url('mobil%20mitra')."';</script>";
		}
	}

	public function proses(){

		$config['upload_path']   = './uploads/mobil/';
		$config['allowed_types'] = '|jpg|png|jpeg';
		$config['max_size']      = 2048;
		$config['file_name']      = 'mobil-'.date('ymd').'-'.substr(sha1(rand()),0,10);
		$this->load->library('upload', $config);

		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
				if(@$_FILES['gambar']['name'] != null){
					if ($this->upload->do_upload('gambar')){
						$post['gambar'] = $this->upload->data('file_name');
						$this->mobil_m->add($post);
						if($this->db->affected_rows() == 1){
							$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
						}
						 echo "<script>window.location='".site_url('mobil%20mitra')."';</script>";
					}else{
						$err = $this->upload->display_errors();
						$this->session->set_flashdata('err', $err);
						echo "<script>window.location='".site_url('mobil/add')."';</script>";
					}
				}else{
					$post['gambar'] = null;
					$this->mobil_m->add($post);
					if($this->db->affected_rows() == 1){
						$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
					}
					echo "<script>window.location='".site_url('mobil%20mitra')."';</script>";
				}
		}else if(isset($_POST['edit'])){
				if(@$_FILES['gambar']['name'] != null){
					if ($this->upload->do_upload('gambar')){
						$mobil = $this->mobil_m->get($post['id_mobil'])->row();
						if($mobil->gambar != null){
							$target_file = './uploads/mobil/'.$mobil->gambar;
							unlink($target_file);
						}
						
						$post['gambar'] = $this->upload->data('file_name');
						$this->mobil_m->edit($post);
						if($this->db->affected_rows() == 1){
							$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
						}
						echo "<script>window.location='".site_url('mobil%20mitra')."';</script>";
					}else{
						$err = $this->upload->display_errors();
						$this->session->set_flashdata('err', $err);
						echo "<script>window.location='".site_url('mobil/edit/'.$post['id_mobil'])."';</script>";
					}
				}else{
					$post['gambar'] = null;
					$this->mobil_m->edit($post);
					if($this->db->affected_rows() == 1){
						$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
					}
					echo "<script>window.location='".site_url('mobil%20mitra')."';</script>";
				}
			}
		if($this->db->affected_rows() == 1){
			$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
		}
		echo "<script>window.location='".site_url('mobil%20mitra')."';</script>";
	}

	public function del($id){
		$this->mobil_m->del($id);
		if($this->db->affected_rows() == 1){
            $this->session->set_flashdata('success', 'Data Berhasil Dihapus!');
		}
		echo "<script>window.location='".site_url('mobil%20mitra')."';</script>";
	}
	
	public function del_mobil($id){
		$this->mobil_m->del_mobil($id);
		if($this->db->affected_rows() == 1){
            $this->session->set_flashdata('success', 'Data Berhasil Dihapus!');
		}
		echo "<script>window.location='".site_url('mobil')."';</script>";
	}
}

