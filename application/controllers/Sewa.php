<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sewa extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        check_not_login();
        //check_admin();
		$this->load->model('sewa_m');
		$this->load->library('form_validation');
    }

	
	public function index()
	{
		$data['row'] = $this->sewa_m->get();
		$this->template->load('template', 'admin/sewa/sewa_data', $data);
	}
	
	public function add(){
		$sewa = new stdClass();
		$sewa->sewa_id = null;
		$sewa->name = null;
		$data = array(
			'page' => 'add',
			'row' => $sewa
		); 
		
		$this->template->load('template', 'admin/sewa/sewa_form', $data);

	}

	public function edit($id){
		$query = $this->sewa_m->get($id);
		if($query->num_rows() == 1){
			$sewa = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $sewa
			); 
			$this->template->load('template', 'admin/sewa/sewa_form', $data);
		}else{
			echo "<script>alert('Data Tidak Ditemukan!');";
			echo "window.location='".site_url('sewa')."';</script>";
		}
	}

	public function proses(){
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
			$this->sewa_m->add($post);
		}else if(isset($_POST['edit'])){
			$this->sewa_m->edit($post);
		}
		if($this->db->affected_rows() == 1){
			$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
		}
		echo "<script>window.location='".site_url('sewa')."';</script>";
	}

	public function del($id){
		$this->sewa_m->del($id);
		if($this->db->affected_rows() == 1){
            $this->session->set_flashdata('success', 'Data Berhasil Dihapus!');
		}
		echo "<script>window.location='".site_url('sewa')."';</script>";
	}
}

