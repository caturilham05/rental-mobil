<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra extends CI_Controller {	

	function __construct()
    {
		parent::__construct();
		$this->load->model('mitra_m');
		$this->load->library('form_validation');
    }
		public function index(){
			$this->load->view('mitra/dashboard-mitra');
		}

			public function add()
    {

        $this->form_validation->set_rules('name_mitra', 'Nama', 'required');
        $this->form_validation->set_rules('username_mitra', 'Username', 'trim|required|min_length[5]|is_unique[mitra.username_mitra]');
        $this->form_validation->set_rules('password_mitra', 'Password', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'trim|required|matches[password_mitra]',
            array('matches' => '%s Tidak Sesuai Dengan Password')
        );
        $this->form_validation->set_rules('email_mitra', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('level_mitra', 'Level', 'required');

        $this->form_validation->set_message('required', '%s Masih Kosong, Silahkan Isi!');
        $this->form_validation->set_message('min_length', '{field} Minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '{field} Sudah Terpakai, Silahkan Ganti!');

        // $this->form_validation->set_error_delimiters('<span class="help-block">', '</span');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('mitra/register_mitra');
        }
        else
        {
            $post = $this->input->post(null, TRUE);
            $this->mitra_m->add($post);
            if($this->db->affected_rows() > 0)
            {
                echo "<script>alert('Data Berhasil Disimpan!');</script>";
            }
            echo "<script>window.location='".site_url('mitra')."';</script>";
        }
    }
		
}