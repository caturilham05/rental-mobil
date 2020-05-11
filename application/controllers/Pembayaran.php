<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        check_not_login();
        //check_admin();
		$this->load->model(['pembayaran_m', 'mobil_m']);
		$this->load->library('form_validation');
    }

	
	public function index()
	{
		$data['row'] = $this->pembayaran_m->get();
		$this->template->load('template', 'admin/pembayaran/pembayaran_data', $data);
	}
	
	public function add(){
		$pembayaran = new stdClass();
		$pembayaran->pembayaran_id = null;
		$pembayaran->name = null;
		$data = array(
			'page' => 'add',
			'row' => $pembayaran
		); 
		
		$this->template->load('template', 'admin/pembayaran/pembayaran_form', $data);

	}

	public function edit($id){
		$query = $this->pembayaran_m->get($id);
		if($query->num_rows() == 1){
			$pembayaran = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $pembayaran
			); 
			$this->template->load('template', 'admin/pembayaran/pembayaran_form', $data);
		}else{
			echo "<script>alert('Data Tidak Ditemukan!');";
			echo "window.location='".site_url('pembayaran')."';</script>";
		}
	}

	public function proses(){
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
			$this->pembayaran_m->add($post);
		}else if(isset($_POST['edit'])){
			$this->pembayaran_m->edit($post);
		}
		if($this->db->affected_rows() == 1){
			$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
		}
		echo "<script>window.location='".site_url('pembayaran')."';</script>";
	}

	public function del($id){
		$this->pembayaran_m->del($id);
		if($this->db->affected_rows() == 1){
            $this->session->set_flashdata('success', 'Data Berhasil Dihapus!');
		}
		echo "<script>window.location='".site_url('pembayaran')."';</script>";
	}
}

