<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_input extends CI_Model {

	function get($table){
		$this->db->select("*");
		$this->db->from($table);

		$query=$this->db->get();
		return $query->result();
	}

	function insert($table,$data){
		$query = $this->db->insert($table,$data);
		return $query;
	}

	function update($table,$set,$data,$par,$id){
		$query=$this->db->query(" UPDATE $table SET $set=$data WHERE $par=$id ");
		
	}

	function getdisct($table){
		$query=$this->db->query("SELECT DISTINCT id_header FROM tb_jfa ");
		return $query->result();
	}
	function getdiscti($table,$par){
		$query=$this->db->query("SELECT DISTINCT $par FROM $table ");
		return $query->result();
	}
	function getdisctiwhereid($table,$par1,$par2,$value){
		$query=$this->db->query("SELECT DISTINCT $par1 FROM $table WHERE $par2=$value ");
		return $query->result();
	}

	function getdisctiwhereidand($table,$par1,$par2,$par3,$value){
		$query=$this->db->query("SELECT DISTINCT $par1,$par2,$par3 FROM $table WHERE $par1='$value' ");
		return $query->result();
	}

	function getdisctiwhereiddouble($table,$par1,$par2,$par3,$value1,$value2){
		$query=$this->db->query("SELECT DISTINCT $par1,$par2,$par3 FROM $table WHERE $par1='$value1' AND $par2='$value2' ");
		return $query->result();
	}

	function max($table,$par){
		$query=$this->db->query("SELECT MAX($par) AS kode FROM $table ");
		return $query->result();
	}

	function getwhere($table,$par){
		$this->db->select("*");
		$this->db->from($table);
		$this->db->where('id_header',$par);

		$query=$this->db->get();
		return $query->result();
	}
	function getwhereid($table,$par,$id){
		$this->db->select("*");
		$this->db->from($table);
		$this->db->where($par,$id);

		$query=$this->db->get();
		return $query->result();
	}

	function getwhereidand($table,$par1,$id1,$par2,$id2){
		$this->db->select("*");
		$this->db->from($table);
		$this->db->where($par2,$id2);

		$query=$this->db->get();
		return $query->result();
	}

	function delete($table,$par,$id){
		$this->db->where($par, $id);
		$this->db->delete($table);

	}

}

?>
