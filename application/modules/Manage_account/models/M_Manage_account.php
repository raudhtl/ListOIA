<?php
class M_Manage_account extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function get_account(){
		$cmd=sprintf("select * from operator, fakultas where operator.id_fakultas = fakultas.id and fakultas.id  <> 13");
		$query = $this ->db->query ($cmd);
		return $query->result();
	}
	function delete_account($id_account){
		$cmd=sprintf("DELETE FROM operator WHERE id_fakultas = $id_account ");
		$query = $this ->db->query ($cmd);
		return $query;
	}
	function get_faculty(){
		$cmd=sprintf("select * from fakultas where fakultas.id  <> 13");
		$query = $this ->db->query ($cmd);
		return $query->result();
	}
	function insert($table, $data){
		$this->db->insert($table, $data);
	}
	function unique_value($table, $column, $value){
		$query = $this->db->get_where($table, array($column => $value));
		if ($query->num_rows() > 0) {
			return false;
		} else {
			return true;
		}
	}
}
?>
