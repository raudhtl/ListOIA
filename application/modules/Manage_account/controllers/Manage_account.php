<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_account extends CI_Controller {

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
		$this->load->model(M_Manage_account); //call model
	}

	public function index()
	{
		$data['account'] = $this->M_Manage_account->get_account();
		$data['faculty'] = $this->M_Manage_account->get_faculty();
		$content = $this->load->view('v_manage_account', $data, true);
		$this->output->set_output($content);
	}
	public function delete_account()
	{
		$account = $this->input->post('account');
		$this->M_Manage_account->delete_account($account);
	}
	public function add_account()
	{
		$email = $this->input->post('email');
		$password =  hash('SHA256', $this->input->post('password'));
		$id_fakultas = $this->input->post('id_fakultas');
		$data = array(
			'id_fakultas' => $id_fakultas,
			'email' => $email,
			'password' => $password,
			'id_rule' => 2
		);
		$this->M_Manage_account->insert("operator", $data);
	}
	public function email_unique()
	{
		$email = $this->input->post("email");
		$result = $this->M_Manage_account->unique_value("operator", "email", $email);
		echo json_encode($result);
	}
}
