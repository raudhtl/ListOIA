<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->_public_view = $this->config->item('public_view');
		$this->load->model('M_Dashboard');
	}
	public function index()
	{
		//cek session username
		if ($this->session->userdata('ses_username') == '') {
			//set notifikasi
			$this->session->set_flashdata('sukses', 'You have not login...');
			//alihkan ke halaman login
			redirect(ci_site_url('login'));
		} else {
			$data['bar'] = $this->M_Dashboard->get_years_fakultas($this->session->userdata('ses_fakultas'));
			$data['chart'] = $this->M_Dashboard->get_program_fakultas($this->session->userdata('ses_fakultas'));
            $data['line_se'] = $this->M_Dashboard->get_students_se_fakultas($this->session->userdata('ses_fakultas'));
            $data['total'] = $this->M_Dashboard->get_total($this->session->userdata('ses_fakultas'));
            $data['short_term'] = $this->M_Dashboard->get_total_based_program($this->session->userdata('ses_fakultas'), "st");
            $data['student_exchange'] = $this->M_Dashboard->get_total_based_program($this->session->userdata('ses_fakultas'), "se");
			$content = array('content' => $this->load->view('dashboard', $data, true));
			$this->load->view('main_dashboard', $content);
		}
	}

	public function beranda()
	{
		$data['bar'] = $this->M_Dashboard->get_years_fakultas($this->session->userdata('ses_fakultas'));
			$data['chart'] = $this->M_Dashboard->get_program_fakultas($this->session->userdata('ses_fakultas'));
      	 $data['line_se'] = $this->M_Dashboard->get_students_se_fakultas($this->session->userdata('ses_fakultas'));
            $data['total'] = $this->M_Dashboard->get_total($this->session->userdata('ses_fakultas'));
            $data['short_term'] = $this->M_Dashboard->get_total_based_program($this->session->userdata('ses_fakultas'), "st");
            $data['student_exchange'] = $this->M_Dashboard->get_total_based_program($this->session->userdata('ses_fakultas'), "se");
		$content = $this->load->view('dashboard', $data, true);
		$this->output->set_output($content);
	}

	public function addProgram()
	{
		$this->output->set_output($this->load->view('temp', '', true));
	}
}
