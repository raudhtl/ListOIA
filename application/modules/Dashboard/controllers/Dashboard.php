<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->_public_view= $this->config->item('public_view');
		$this->load->model('M_Dashboard');
	}
	public function index(){
		$data['chart'] = $this->M_Dashboard->get_years();
		$data['bar'] = $this->M_Dashboard->get_program();
		$content=array('content'=>$this->load->view('dashboard',$data,true));
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
