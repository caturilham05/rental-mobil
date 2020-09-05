<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
    {
		parent::__construct();
		$this->load->model(['mobil_m', 'user_m']);
		$this->load->library('form_validation');
	}

	public function login()
	{
		check_already_login();
		$this->load->view('login');
	}
	

	public function rules(){
        $this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
	}
	
	
	
	public function login_user()
	{
		$this->rules();

		if($this->form_validation->run() == FALSE){
			$this->load->view('home/login/user_login');
		}else{
			$username = $this->input->post('username');
			$password = sha1($this->input->post('password'));
			
			$cek = $this->user_m->cek_login($username, $password);
			if($cek == FALSE){
				echo "<script>
					alert('Login Gagal!');
					window.location='".site_url('login-user')."';
					</script>";
			}else{
				$this->session->set_userdata('username', $cek->username);
				$this->session->set_userdata('level', $cek->level);
				$this->session->set_userdata('name', $cek->name);
				
				switch ($cek->level) {
					case 'user':
						echo "<script>
						alert('Login Berhasil!');
						window.location='".site_url('/')."';
						</script>";
					break;
					
					default:
						break;
				}
			}
		}
	}

	
	

	

	// admin login
	public function proses(){
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['login'])){
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			if($query->num_rows() > 0){
				$row = $query->row();
					$params = array(
						'userid' => $row->user_id,
						'level' => $row->level
					);
					$this->session->set_userdata($params);
					echo "<script>
						alert('Login Berhasil!');
						window.location='".site_url('dashboard')."';
						</script>";
			}else{
				echo "<script>
					alert('Login Gagal!');
					window.location='".site_url('auth/login')."';
					</script>";
			}
		}
	}



	public function logout()
	{
		$params = array('userid');
		$this->session->unset_userdata($params);
		echo "<script>
				alert('Logout Berhasil!');
				window.location='".site_url('auth/login')."';
				</script>";
	}
	

	// user logout
	public function logout_user()
	{
		$this->session->sess_destroy();
		echo "<script>
				alert('Logout Berhasil!');
				window.location='".site_url('/')."';
				</script>";
	}
	
	
	
}
