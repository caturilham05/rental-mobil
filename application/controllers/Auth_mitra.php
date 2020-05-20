<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_mitra extends CI_Controller {
    function __construct()
    {
		parent::__construct();
		$this->load->model('mitra_m');
		$this->load->library('form_validation');
    }
    
    public function _rules(){
        $this->form_validation->set_rules('username_mitra', 'Username', 'required');
		$this->form_validation->set_rules('password_mitra', 'Password', 'required');
    }
    
    public function login_mitra()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->load->view('mitra/login_mitra');
		}else{
			$username_mitra = $this->input->post('username_mitra');
			$password_mitra = sha1($this->input->post('password_mitra'));
			
			$cek = $this->mitra_m->cek_login_mitra($username_mitra, $password_mitra);
			if($cek == FALSE){
				echo "<script>
					alert('Login Gagal!');
					window.location='".site_url('login-mitra')."';
					</script>";
			}else{
				$this->session->set_userdata('username_mitra', $cek->username_mitra);
				$this->session->set_userdata('level_mitra', $cek->level_mitra);
				$this->session->set_userdata('name_mitra', $cek->name_mitra);
				
				switch ($cek->level_mitra) {
					case 'mitra':
						echo "<script>
						alert('Login Berhasil!');
						window.location='".site_url('dashboard-mitra')."';
						</script>";
					break;
					default:
						break;
				}
			}
		}
    }
    
    // mitra logout
	public function logout_mitra()
	{
		$this->session->sess_destroy();
		
		echo "<script>
				alert('Logout Berhasil!');
				window.location='".site_url('/')."';
				</script>";
	}
}