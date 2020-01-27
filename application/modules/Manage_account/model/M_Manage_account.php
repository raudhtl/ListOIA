<?php
class M_manage_account extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function get_manage_account($fakultas){
		$cmd=sprintf("select * from operator, fakultas, where operator.id_fakultas = fakultas.id_fakultas");
		$query = $this ->db->query ($cmd);
		return $query->result();
	}
}
?>
