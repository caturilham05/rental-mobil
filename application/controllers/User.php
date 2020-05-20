<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        //check_not_login();
        $this->load->model('user_m');
        $this->load->library('form_validation');
    }

	public function index()
	{
        $data['row'] = $this->user_m->get();

		$this->template->load('template', 'admin/user/user_data', $data);
    }
    
    
    
    public function add()
    {

        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'trim|required|matches[password]',
            array('matches' => '%s Tidak Sesuai Dengan Password')
        );
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');

        $this->form_validation->set_message('required', '%s Masih Kosong, Silahkan Isi!');
        $this->form_validation->set_message('min_length', '{field} Minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '{field} Sudah Terpakai, Silahkan Ganti!');

        // $this->form_validation->set_error_delimiters('<span class="help-block">', '</span');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('home/login/user_add');
        }
        else
        {
            $post = $this->input->post(null, TRUE);
            $this->user_m->add($post);
            if($this->db->affected_rows() > 0)
            {
                echo "<script>alert('Data Berhasil Disimpan!');</script>";
            }
            echo "<script>window.location='".site_url('/')."';</script>";
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check');
        if($this->input->post('password'))
        {
            $this->form_validation->set_rules('password', 'Password', 'min_length[5]');
            $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'matches[password]',
            array('matches' => '%s Tidak Sesuai Dengan Password')
            );
        }
        
        if($this->input->post('passconf'))
        {
            $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'matches[password]',
            array('matches' => '%s Tidak Sesuai Dengan Password')
            );
        
        }
        $this->form_validation->set_rules('email', 'Email', 'valid_email');
        $this->form_validation->set_rules('gender', 'Gender');
        $this->form_validation->set_rules('telepon', 'telepon');
        $this->form_validation->set_rules('address', 'Address');
        $this->form_validation->set_rules('level', 'Level');

        $this->form_validation->set_message('required', '%s Masih Kosong, Silahkan Isi!');
        $this->form_validation->set_message('min_length', '{field} Minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '{field} Sudah Terpakai, Silahkan Ganti!');

        //$this->form_validation->set_error_delimiters('<span class="help-block">', '</span');

        if ($this->form_validation->run() == FALSE)
        {
            $query = $this->user_m->get($id);
            if($query->num_rows() > 0)
            {
                $data['row'] = $query->row();
                $this->template->load('template','user/user_edit', $data);
            }
            else
            {
                echo "<script>alert('Data Tidak Ditemukan!');";
                echo "window.location='".site_url('user')."';</script>";
            }
        }
        else
        {
            $post = $this->input->post(null, TRUE);
            $this->user_m->edit($post);
            if($this->db->affected_rows() > 0)
            {
                echo "<script>alert('Data Berhasil Disimpan!');</script>";
            }
            echo "<script>window.location='".site_url('user')."';</script>";
        }
    }
    
    function username_check()
    {
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("select * from user where username = '$post[username]' and user_id != '$post[user_id]'");
        if($query->num_rows() > 0){
            $this->form_validation->set_message('username_check', '{field} Ini Sudah Dipakai, Silahkan Ganti!');
            return false;
        }else{
            return true;
        }
    }

    public function del()
    {
        $id = $this->input->post('user_id');
        $this->user_m->del($id);
        if($this->db->affected_rows() > 0)
        {
            echo "<script>alert('Data Berhasil Dihapus!');</script>";
        }
        echo "<script>window.location='".site_url('user')."';</script>";
    }
}

