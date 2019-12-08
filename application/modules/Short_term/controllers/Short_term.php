<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// TODO
// 1 : ubah semua style menu ke ajax style 

class Short_term extends CI_Controller {

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

	// TODO 1
	public function index(){
    	$this->load->model('M_Upload');
		$data['mhs'] = $this->M_Upload->get_all_mhs("short_term", $this->session->userdata('ses_fakultas'))->result();
		$content=$this->load->view('v_list', $data,true);

		echo json_encode(array('content',$content));
	}

	public function list()
	{
		$this->load->model('M_Upload');
		$data['mhs'] = $this->M_Upload->get_all_mhs("short_term", $this->session->userdata('ses_fakultas'))->result();
		$content=$this->load->view('v_list', $data,true);
		$this->output->set_output($content); 

	}
	
	// TODO 1
	public function upload(){
		$this->load->model('M_Upload');
		$upload['program'] = $this->M_Upload->get_all_short_term($this->session->userdata('ses_fakultas'));
		$content=$this->load->view('v_upload', $upload,true);
		$this->output->set_output($content); 

	}

	public function download_doc(){
		$nama=$this->input->post('name');
		$doc=$this->input->post('doc_name');
		force_download($nama.".zip", file_get_contents('/uploads/' . $doc));
	}

	public function download_doc_all(){
		$this->load->model('M_Upload');
		$mhs = $this->M_Upload->get_all_mhs("short_term", $this->session->userdata('ses_fakultas'));
		if($mhs->num_rows()>0){
			foreach ($mhs->result() as $data) {
				$this->zip->read_file(FCPATH.'/uploads/'.$data->dokumen, $data->nama.$data->id.".zip");
			}
		}
		$this->zip->download("short_term.zip");
	}

	public function download(){
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$this->load->model('M_Upload');
		$mhs = $this->M_Upload->get_all_mhs("short_term", $this->session->userdata('ses_fakultas'));
		$sheet->setCellValue('A1', 'Nama');
		$sheet->setCellValue('B1', 'Email');
		$sheet->setCellValue('C1', 'No Passport');
		$sheet->setCellValue('D1', 'Negara Asal');
		$sheet->setCellValue('E1', 'Jurusan Asal');
		$sheet->setCellValue('F1', 'Fakultas Asal');
		$sheet->setCellValue('G1', 'Universitas Asal');
		$sheet->setCellValue('H1', 'Negara Tujuan');
		$sheet->setCellValue('I1', 'Universitas Tujuan');
		$sheet->setCellValue('J1', 'Nama Program');
		$sheet->setCellValue('K1', 'Jenis Program');
		$sheet->setCellValue('L1', 'Tahun');
		$sheet->setCellValue('M1', 'Tujuan Kunjungan');
		$sheet->setCellValue('N1', 'Tanggal Awal Program');
		$sheet->setCellValue('O1', 'Tanggal Akhir Program');
		if($mhs->num_rows()>0){
			$i = 2;
				foreach ($mhs->result() as $data) {
					$sheet->setCellValue('A'.$i, $data->nama);
					$sheet->setCellValue('B'.$i, $data->email);
					$sheet->setCellValue('C'.$i, $data->no_passport);
					$sheet->setCellValue('D'.$i, $data->negara_asal);
					$sheet->setCellValue('E'.$i, $data->jurusan_asal);
					$sheet->setCellValue('F'.$i, $data->fakultas_asal);
					$sheet->setCellValue('G'.$i, $data->univ_asal);
					$sheet->setCellValue('H'.$i, $data->negara_tujuan);
					$sheet->setCellValue('I'.$i, $data->univ_tujuan);
					$sheet->setCellValue('J'.$i, $data->nama_program);
					$sheet->setCellValue('K'.$i, $data->jenis_program);
					$sheet->setCellValue('L'.$i, $data->tahun);
					$sheet->setCellValue('M'.$i, $data->tujuan);
					$sheet->setCellValue('N'.$i, $data->tgl_mulai);
					$sheet->setCellValue('O'.$i++, $data->tgl_akhir);
				}
		}
		$writer = new Xlsx($spreadsheet);


		$filename = "ShortTerm";

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"');
		header('Cache-Control: max-age=0');


		$writer->save('php://output');
	}
	public function get_program()
	{
		$this->load->model('M_Upload');
		$id_short_term = $this->M_Upload->get_id_program($this->input->post('nama'), $this->session->userdata('ses_fakultas'));
		$data=$this->M_Upload->get_program($id_short_term);
		echo json_encode($data);
	}
	public function check_email()
	{
		$this->load->model('M_Upload');
		$check_email = $this->M_Upload->check_db("mahasiswa", "email", $this->input->post('email'));

		print json_encode($check_email);
	}
	public function check_passport()
	{
		$this->load->model('M_Upload');
		$check_passport = $this->M_Upload->check_db("mahasiswa", "no_passport", $this->input->post('no_passport'));

		print json_encode($check_passport);
	}
	public function input()
	{

					$config['upload_path'] = './uploads/';
					$config['allowed_types'] = 'zip|rar';
					$config['encrypt_name'] = TRUE;
					// $upload = "User_file";

				  $this->load->library('upload', $config);
					if ( !($this->upload->do_upload("userfile")))
					{
						$error = array('error' => $this->upload->display_errors());
						echo "halo";
						print_r($error);

						// $this->session->set_flashdata('error',$error['error']);
						// redirect('Login');

					}
					else
					{
						$upload_data = $this->upload->data();
						$file_name = $upload_data['file_name'];
						$nama=$this->input->post('nama');
						$email=$this->input->post('email');
						$univ_asal=$this->input->post('univ_asal');
						$negara_asal=$this->input->post('negara_asal');
						$tgl_lahir=$this->input->post('tgl_lahir');
						$fakultas_asal = $this->input->post('fakultas_asal');
						$jurusan_asal = $this->input->post('jurusan_asal');
						$no_passport=$this->input->post('no_passport');
						$univ_tujuan=$this->input->post('univ_tujuan');
						$negara_tujuan=$this->input->post('negara_tujuan');
						$nama_program=$this->input->post('program');
						$id_fakultas = $this->session->userdata('ses_fakultas');

						$this->load->Model('M_Upload');
						if ($this->M_Upload->program_exists($nama_program, $id_fakultas) === FALSE){
							$jenis_program = $this->input->post('jenis_program');
							$tujuan_kunjungan = $this->input->post('tujuan_kunjungan');
							$tgl_mulai = $this->input->post('tgl_mulai');
							$tgl_akhir = $this->input->post('tgl_akhir');
							$tahun_program = $this->input->post('tahun');
							$data_program = array(
								'jenis_program' => $jenis_program,
								'tgl_mulai' => $tgl_mulai,
								'tgl_akhir' => $tgl_akhir,
								'id_fakultas' => $id_fakultas,
								'class' => 'st'
							);
							$id_program = $this->M_Upload->insert_data_get_key('program', $data_program);
							$data_short_term = array(
								'nama_program' => $nama_program,
								'tujuan' => $tujuan_kunjungan,
								'id_program' => $id_program,
								'tahun' => $tahun_program
							);
							$this->M_Upload->insert_data('short_term', $data_short_term);
						}else{
							$id_program = $this->M_Upload->get_id_program($this->input->post('program'), $this->session->userdata('ses_fakultas'));
						}
						$data_mhs = array(
	        		'nama' => $nama,
	        		'email' => $email,
	        		'univ_asal' => $univ_asal,
							'negara_asal' => $negara_asal,
							'no_passport' => $no_passport,
							'univ_tujuan' => $univ_tujuan,
							'fakultas_asal' => $fakultas_asal,
							'jurusan_asal' => $jurusan_asal,
							'negara_tujuan' => $negara_tujuan,
							'id_program' => $id_program,
							'dokumen' => $file_name
						);
						$this->M_Upload->insert_data('mahasiswa', $data_mhs);
	        }
	}
	function insert_excel(){
		$this->load->model('M_Upload');
		$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		if(isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) {
			$arr_file = explode('.', $_FILES['file']['name']);
			$extension = end($arr_file);
			if('csv' == $extension){
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
			} else {
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			}
			//$reader->setReadDataOnly(true);
			$spreadsheet = $reader->load($_FILES['file']['tmp_name']);
			$worksheet = $spreadsheet->getActiveSheet()->toArray($nullValue = null, $calculateFormulas = false, $formatData = true, $returnCellRef = false);
			$data = array();

			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'zip|rar';
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload',$config);

			if(isset($_FILES['dokumen']['name'][1])){
				echo json_encode("haha");
			}
			foreach($worksheet as $key => $value) {
				$index = $key;
				if($index > 0){
					$_FILES['doc']['name'] = $_FILES['dokumen']['name'][$index-1];
          $_FILES['doc']['type'] = $_FILES['dokumen']['type'][$index-1];
          $_FILES['doc']['tmp_name'] = $_FILES['dokumen']['tmp_name'][$index-1];
          $_FILES['doc']['error'] = $_FILES['dokumen']['error'][$index-1];
          $_FILES['doc']['size'] = $_FILES['dokumen']['size'][$index-1];

					if ( !($this->upload->do_upload("doc")))
					{
						$error = array('error' => $this->upload->display_errors());
						echo json_encode($error);
					}
					else
					{
						$upload_data = $this->upload->data();
						$file_name = $upload_data['file_name'];
						$nama=$value[0];
						$email=$value[2];
						$no_passport=$value[3];
						$jurusan_asal = $value[4];
						$fakultas_asal = $value[5];
						$univ_asal= $value[6];
						$negara_tujuan=$value[7];
						$univ_tujuan=$value[8];
						$negara_asal=$value[9];
						$tgl_lahir=$value[1];
						$nama_program=$value[10];
						$id_fakultas = $this->session->userdata('ses_fakultas');
						$start = array();
						$end = array();
						if (!$this->M_Upload->program_exists($nama_program, $id_fakultas)){
							$jenis_program = $value[11];
							$tahun_program = $value[12];
							$tujuan_kunjungan = $value[13];
							$start = explode("/", $value[14]);
							$tgl_mulai =  $start[2]."-".$start[1]."-".$start[0];
							$end = explode("/", $value[15]);
							$tgl_akhir = $end[2]."-".$end[1]."-".$end[0];
							$data_program = array(
								'jenis_program' => $jenis_program,
								'tgl_mulai' => $tgl_mulai,
								'tgl_akhir' => $tgl_akhir,
								'id_fakultas' => $id_fakultas,
								'class' => 'st'
							);
							$id_program = $this->M_Upload->insert_data_get_key('program', $data_program);
							$data_short_term = array(
								'nama_program' => $nama_program,
								'tujuan' => $tujuan_kunjungan,
								'id_program' => $id_program,
								'tahun' => $tahun_program
							);
							$this->M_Upload->insert_data('short_term', $data_short_term);
						} else{
							$id_program = $this->M_Upload->get_id_program($nama_program, $this->session->userdata('ses_fakultas'));
						}
						$data_mhs = array(
							'nama' => $nama,
							'email' => $email,
							'univ_asal' => $univ_asal,
							'negara_asal' => $negara_asal,
							'no_passport' => $no_passport,
							'univ_tujuan' => $univ_tujuan,
							'fakultas_asal' => $fakultas_asal,
							'jurusan_asal' => $jurusan_asal,
							'negara_tujuan' => $negara_tujuan,
							'id_program' => $id_program,
							'dokumen' => $file_name
						);
						$this->M_Upload->insert_data('mahasiswa', $data_mhs);
					}
				}
			}
			echo json_encode($index);
    }
	}

	function read(){
		$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		if(isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) {
			$arr_file = explode('.', $_FILES['file']['name']);
			$extension = end($arr_file);
			if('csv' == $extension){
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
			} else {
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			}
			//$reader->setReadDataOnly(true);
			$spreadsheet = $reader->load($_FILES['file']['tmp_name']);
			$worksheet = $spreadsheet->getActiveSheet()->toArray($nullValue = null, $calculateFormulas = false, $formatData = true, $returnCellRef = false);
			$data = array();

			$i = 0;
			foreach($worksheet as $key => $value) {
				$cells = array();
				$row = $key;
				$C = 'A';
				if($row>0){
	    		foreach($value as $iter => $column_value) {
						$index = $iter;
						$value = $column_value;
						$date = array();
						if($index == 1 || $index == 14 || $index == 15){
							if (preg_match('#^(\d+)/(\d+)/(\d+)$#', $value)) {
								$date = explode("/", $value);
								if (checkdate($date[1], $date[0], $date[2])){
								 	$cells[$C] = $value;
								}
								else {
									$cells[$C] = "WRONG FORMAT";
								}
							}
							else{
								$cells[$C] = "WRONG FORMAT";
							}
						}
						else if($index == 2){
							if(filter_var($value, FILTER_VALIDATE_EMAIL)){
								$cells[$C] = $value;
							}
							else {
								$cells[$C] = "WRONG FORMAT";
							}
						}
						else if($index == 7 || $index == 9){
							$query = $this->db->get_where('countries', array("country_name" => $value));
							if ($query->num_rows() > 0){
					        $cells[$C] = $value;
					    }
					    else{
					        $cells[$C] = "WRONG FORMAT";
					    }
						}

						else if($index == 11){
							if("inbound" == strtolower($value) || "outbound" == strtolower($value)){
								$cells[$C] = $value;
							}
							else {
								$cells[$C] = "WRONG FORMAT";
							}
						}
						else if($index == 12){
								if(preg_match('#^(\d{4})$#', $value)){
									$cells[$C] = $value;
								}
								else {
									$cells[$C] = "WRONG FORMAT";
								}
						}
						else if($index == 13){
							if("conference" == strtolower($column_value) || "workshop" == strtolower($column_value) || "seminar" == strtolower($column_value) || "magang" == strtolower($column_value) || "summercamp" == strtolower($column_value) || "short-course" == strtolower($column_value) || "darmasiswa" == strtolower($column_value) ||
							"visit" == strtolower($value)){
								$cells[$C] = $value;
							}
							else {
								$cells[$C] = "WRONG FORMAT";
							}
						}
						else {
							$cells[$C] =  $value;
						}
						$C++;
	    		}

					if(isset($_FILES['dokumen']['name'][$i])){
							$cells[$C] = $_FILES['dokumen']['name'][$i];
					}
					else{
						$cells[$C] = NULL;
					}
					$i++;
					$data[] = $cells;
				}
			}
			echo json_encode($data);
		}
	}
}
