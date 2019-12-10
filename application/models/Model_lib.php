<?php

class Model_lib extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function update($tabel,$data,$where)
    {
        $query=$this->db->update($tabel,$data,$where);
        return $query;
    }

    function delete($tabel,$where)
    {
        $query=$this->db->query("delete from $tabel $where");
        return $query;
    }
    function count($table,$where)
    {
        $query=$this->db->query("select count(*) from $table $where");
        return $query;
    }
    function selectQuery($sql)
    {
        $query=$this->db->query($sql);
        return $query;
    }
    function selectWhere($table,$where)
    {
         $query=$this->db->query("select * from $table $where");
         return $query;
    }
    function insert($tabel,$data)
    {
        $query=$this->db->insert($tabel, $data);
        return $query;
    }
}

?>
