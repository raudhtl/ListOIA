<?php

// TODO
// 1.  ubah semua style query ke satu model
// 2.  ubah semua inline string ke string format << for query handling at unix style
class M_Upload extends CI_Model {
	function get_all_short_term($fakultas){
		$cmd=sprintf("select * from short_term where short_term.id_program in (select id_program from program where id_fakultas ='%s')",$fakultas);
		$query = $this ->db->query ($cmd);
		return $query->result();
	}
	function get_all_mhs($table, $fakultas){
		$cmd=sprintf("select * from mahasiswa, program, short_term where mahasiswa.id_program in (select id_program from program where id_fakultas ='%s' and class ='st') and mahasiswa.id_program = program.id_program and program.id_program = short_term.id_program",$fakultas);
		$query = $this ->db->query($cmd);
		return $query;

	}
	function insert_data($table, $data){
		if(!$this->db->insert($table, $data)){
			return "failed";
		}
	}
	function get_id_program($nama_program, $id_fakultas){
			$cmd=sprintf("select program.id_program as id from short_term, program where short_term.nama_program = '%s' and program.id_fakultas = '%s' and short_term.id_program = program.id_program",$nama_program,$id_fakultas);
			$query = $this ->db->query ($cmd);
			return $query->row()->id;
	}
	function get_program($id){
		$hsl = $this->db-> query("select * from short_term, program where short_term.id_program = $id");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id' => $data->id,
                    'nama' => $data->nama_program,
                    'tujuan' => $data->tujuan,
										'tgl_mulai' => $data->tgl_mulai,
										'tgl_akhir' => $data->tgl_akhir,
										'jenis' => $data->jenis_program,
										'tahun' => $data->tahun
                    );
            }
        }
        return $hasil;
	}

	function insert_data_get_key($table, $data){
		$this->db->insert($table, $data);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}

	function check_db($table, $column, $value, $id_program){
		$query = $this->db->get_where($table, array($column => $value, 'id_program' => $id_program));
		if ($query->num_rows() > 0){
        return true;
    }
    else{
        return false;
    }
	}

	function program_exists($nama_program, $id_fakultas){
  	$query = $this ->db->query ("select * from short_term, program where short_term.nama_program = '$nama_program' and id_fakultas = $id_fakultas and short_term.id_program = program.id_program");
    if ($query->num_rows() > 0){
        return true;
    }
    else{
        return false;
    }
	}

  // Buat sebuah fungsi untuk melakukan insert lebih dari 1 data
  public function insert_multiple($data){
    $this->db->insert_batch('siswa', $data);
	}
}

?>
