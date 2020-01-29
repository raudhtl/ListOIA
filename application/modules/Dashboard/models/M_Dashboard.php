<?php
class M_Dashboard extends CI_Model{
	function __construct(){
		parent::__construct();
	}
//	function get_years(){
//		$cmd=sprintf("SELECT count(*) as jumlah, tahun from (select nama, no_passport, tahun from mahasiswa, short_term where mahasiswa.id_program = short_term.id_program) AS tes group by tahun");
//		$query = $this ->db->query($cmd);
//		return $query->result();
//	}
//	function get_program(){
//		$cmd=sprintf("SELECT count(*) as jumlah, tahun from (select short_term.id_program, jenis_program, tahun from short_term, program where program.id_program = short_term.id_program) AS tes group by tahun");
//		$query = $this ->db->query($cmd);
//		return $query->result();
//	}
	function get_program_fakultas($fakultas){
		$cmd=sprintf("SELECT count(*) as jumlah, tahun from (select nama, no_passport, tahun, program.id_fakultas from mahasiswa, short_term, program where mahasiswa.id_program = short_term.id_program and mahasiswa.id_program = program.id_program and program.id_fakultas = $fakultas) AS tes group by tahun");
		$query = $this ->db->query($cmd);
		return $query->result();
	}
	function get_years_fakultas($fakultas){
		$cmd=sprintf("SELECT count(*) as jumlah, tahun from (select short_term.id_program, jenis_program, tahun, program.id_fakultas from short_term, program where program.id_program = short_term.id_program and program.id_fakultas = $fakultas) AS tes group by tahun");
		$query = $this ->db->query($cmd);
		return $query->result();
	}
}
?>
