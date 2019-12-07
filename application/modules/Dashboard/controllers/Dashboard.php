<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->_public_view= $this->config->item('public_view');
		$this->load->model('Dashboard_Model');
	}
	public function index(){
		$content=$this->load->view('dashboard');

		$this->load->view('main_dashboard');
	}
}
?>
