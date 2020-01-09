<?php

// TODO
// 1.  ubah semua style query ke satu model
// 2.  ubah semua inline string ke string format << for query handling at unix style
class M_Student_Exchange extends CI_Model {

	function get_all_mhs($table, $fakultas){
		$cmd=sprintf("select * from mahasiswa, program, student_exchange where mahasiswa.id_program in (select id_program from program where id_fakultas ='%s' and class ='se') and mahasiswa.id_program = program.id_program and program.id_program = student_exchange.id_program",$fakultas);
		$query = $this ->db->query($cmd);
		return $query;

	}
	function insert_data($table, $data){
		if(!$this->db->insert($table, $data)){
			return "failed";
		}
	}
	function update_data_program($table, $id_program, $data)
	{	
		$this->db->where('id_program', $id_program);
		$this->db->update($table, $data);
	}

	function get_id_program($nama_program, $id_fakultas){
			$cmd=sprintf("select program.id_program as id from student_exchange, program where student_exchange.nama_program = '%s' and program.id_fakultas = '%s' and student_exchange.id_program = program.id_program",$nama_program,$id_fakultas);
			$query = $this ->db->query ($cmd);
			return $query->row()->id;
	}
	function get_program($id){
		$hsl = $this->db-> query("select * from student_exchange, program where student_exchange.id_program = '$id' and program.id_program='$id'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id' => $data->id,
                    'nama' => $data->nama_program,
										'tgl_mulai' => $data->tgl_mulai,
										'tgl_akhir' => $data->tgl_akhir,
										'jenis' => $data->jenis_program,
										'tahun' => $data->tahun
                    );
            }
        }
        return $hasil;
	}

	function get_all_program($id_fakultas){
		$query = $this->db->query("select * from student_exchange, program where student_exchange.id_program = program.id_program and program.id_fakultas='$id_fakultas'");
		return $query->result();
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

	function mahasiswa_exists($no_passport, $univ_tujuan, $jurusan_tujuan, $fakultas_tujuan, $univ_asal, $fakultas_asal, $jurusan_asal){
		$query = $this->db->get_where("mahasiswa", array( "no_passport" => $no_passport, 'univ_tujuan' => $univ_tujuan, 'jurusan_tujuan' => $jurusan_tujuan, 'fakultas_tujuan' => $fakultas_tujuan, 'univ_asal' => $univ_asal, 'fakultas_asal' => $fakultas_asal, 'jurusan_asal' => $jurusan_asal));
		if ($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}
}

?>
