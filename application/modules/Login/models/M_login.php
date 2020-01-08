<?php
class M_login extends CI_Model {
	function login_user ($username, $password){
		$query = $this -> db ->query ("select * from operator, fakultas where password = '$password' and email = '$username' and fakultas.id = operator.id_fakultas");
		return $query;

	}
	function login_admin ($username,$password) {
		$query = $this -> db ->query("select * from admin where password = ''$password' and email_admin = '$username'");
		return $query;
	}
}

?>
