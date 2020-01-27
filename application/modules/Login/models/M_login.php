<?php
class M_login extends CI_Model
{
	function login_user($username, $password)
	{
		// $query = $this -> db ->query ("select * from operator, fakultas where password = '$password' and email = '$username' and fakultas.id = operator.id_fakultas");
		// return $query;

		//cek username dan password
		$pass =  hash('SHA256', $password);
		$query = $this -> db ->query ("select * from operator, fakultas where password = '$password' and email = '$username' and fakultas.id = operator.id_fakultas");

		if ($query->num_rows() == 1) {
			$data = $query->row_array();
			$this->session->set_userdata('masuk', TRUE);
			$this->session->set_userdata('ses_fakultas', $data['id_fakultas']);
			$this->session->set_userdata('ses_nama_fakultas', $data['nama_fakultas']);
			$this->session->set_userdata('ses_username_fakultas', $data['username']);
			$this->session->set_userdata('ses_username', $data['email']);
			$this->session->set_userdata('ses_rule', $data['id_rule']);

			//redirect ke halaman dashboard
			redirect(site_url('dashboard'));
		} else {

			//jika tidak ada, set notifikasi dalam flashdata.
			$this->session->set_flashdata('error', 'Email or password is wrong');

			//redirect ke halaman login
			redirect(site_url('login'));
		}
		return false;
	}
	function login_admin($username, $password)
	{
		$query = $this->db->query("select * from admin where password = '$password' and email_admin = '$username'");
		return $query;
	}

	public function logout()
	{
		$this->session->unset_userdata('masuk');
		$this->session->unset_userdata('ses_fakultas');
		$this->session->unset_userdata('ses_nama_fakultas');
		$this->session->unset_userdata('ses_username_fakultas');
		$this->session->unset_userdata('ses_username');
		$this->session->set_flashdata('sukses', 'You have logout successfully');
		redirect(site_url('login'));
	}
}
