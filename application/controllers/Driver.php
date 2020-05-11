<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Driver extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        check_not_login();
        //check_admin();
		$this->load->model('driver_m');
		$this->load->library('form_validation');
    }

	
	public function index()
	{
		$data['row'] = $this->driver_m->get();
		$this->template->load('template', 'admin/driver/driver_data', $data);
	}

	public function edit($id){
		$query = $this->driver_m->get($id);
		if($query->num_rows() == 1){
			$driver = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $driver
			); 
			$this->template->load('template', 'admin/driver/driver_form', $data);
		}else{
			echo "<script>alert('Data Tidak Ditemukan!');";
			echo "window.location='".site_url('driver')."';</script>";
		}
	}

	public function proses(){
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
			$this->driver_m->add($post);
		}else if(isset($_POST['edit'])){
			$this->driver_m->edit($post);
		}
		if($this->db->affected_rows() == 1){
			$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
		}
		echo "<script>window.location='".site_url('driver')."';</script>";
	}

	public function del($id){
		$this->driver_m->del($id);
		if($this->db->affected_rows() == 1){
            $this->session->set_flashdata('success', 'Data Berhasil Dihapus!');
		}
		echo "<script>window.location='".site_url('driver')."';</script>";
	}
}

