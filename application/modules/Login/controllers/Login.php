<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('v_login');
	}

	public function auth()
	{
		$username=$this->input->post('email');
		$password=$this->input->post('password');
		$this->load->model('M_Login');
		$cek_user = $this->M_Login->login_user($username, $password);

		$data = $cek_user->row_array();

		if (isset($data) && count ($data) >0){
				$this->session->set_userdata('masuk', TRUE);
				$this->session->set_userdata('ses_fakultas',$data['id_fakultas']);
				$this->session->set_userdata('ses_nama_fakultas',$data['nama_fakultas']);
				$this->session->set_userdata('ses_username',$data['email']);
		}
		else {
				$url=base_url();
				$this->session->set_flashdata('msg','Email Atau Password Salah');
				redirect('Login');
		}
		redirect('Dashboard');
	}
	function logout (){
		$this->session->unset_userdata('masuk', 'ses_level', 'ses_username', 'id_pengunjung', 'no_meja');
		$url=base_url('');
	}
}
