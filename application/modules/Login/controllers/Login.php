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

	function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->model('m_login'); //call model
	}

	public function index()
	{
		$this->load->view('v_login');
	}

	public function auth()
	{
		$username=$this->input->post('email');
		$password=$this->input->post('password');
		$valid = $this->form_validation;
		$valid->set_rules('email','Email','required|valid_email');
		$valid->set_rules('password','Password','required');

		if($valid->run()) {
			$this->m_login->login_user($username,$password);
		}
		// End fungsi login
		$this->load->view('v_login');
		
	}


	public function logout(){
		$this->m_login->logout();
	}
}
