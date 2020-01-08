<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->_public_view= $this->config->item('public_view');
		$this->load->model('Dashboard_Model');
	}
	public function index(){
		$content=array('content'=>$this->load->view('dashboard','',true));
		$this->load->view('main_dashboard',$content);
	}

	public function beranda(){
		$content = $this->load->view('dashboard', '', true);
		$this->output->set_output($content);
	}

	public function addProgram(){
		$this->output->set_output($this->load->view('temp','',true)); 
	}
}
?>
