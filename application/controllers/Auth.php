<?php

	class Auth extends CI_Controller
	{

		function __construct()
		{
			parent::__construct();
			$this->load->model('model_admin');
		}
		
		function index()
		{
			$this->load->view('auth/login');
		}

		function check_login()
		{
			if (isset($_POST['submit'])) {
				
				$user_admin	= $this->input->post('user_admin');
				$pass_admin 	= $this->input->post('pass_admin');
				// proses pengecekan user_admin dan pass_admin di database beradi di model_user dengan memparsing $user_admin dan $pass_admin
				// $loginAdmin untuk mengecek user pada tbl_user sedangkan $loginGuru memerika ke dalam tbl_guru
				$loginAdmin		= $this->model_admin->login($user_admin, $pass_admin);
				
				// $loginAdmin-> mengambil nilai dari $user yang ada di function login pada model_user, apabila data salah maka user tidak berisi dan $loginAdmin menjadi kosong
				// apablia $loginAdmin tidak kosong (memiliki data) maka akan membuat session dan redirect ke tampilan_utama
				if (!empty($loginAdmin)) {

					// $this->session->set_userdata($loginAdmin); -> maksudnya mengset userdata yang mana datanya diambil dari $loginAdmin
					$this->session->set_userdata($loginAdmin);
					echo '<script>alert("Sukses ! Anda Berhasil Login.");window.location.href="'.base_url("tampilan_utama").'";</script>';

}else{
			$this->session->set_flashdata('pesan', '<center><p>Username Atau Password Salah !');
			redirect(base_url("auth"));
			}
		}
		}

		function logout()
		{
			$this->session->sess_destroy();
			redirect('auth');
		}

	}

?>