<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dataModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	public function InsertCommon($data,$table)
	{
		$this->db->insert($table, $data);
	}
	public function updateCommon($table, $data,$where)
	{
		$this->db->where($where);
		$this->db->update($table, $data);		
	}
	public function getsingleSelected($table,$data,$selVariabes)
	{
		$query = $this->db->select($selVariabes);
		$query = $this->db->get_where($table,$data);
		$result = $query->row();
		return $result;
	}
	public function getmultiSelected($table,$data,$selVariabes)
	{
		$query = $this->db->select($selVariabes);
		$query = $this->db->get_where($table,$data);
		$result = $query->result();
		return $result;
	}
	public function getAllSelected($table,$data)
	{
		$query = $this->db->get_where($table,$data);
		$result = $query->result();
		return $result;
	}
	
	public function getAllSelectedrow($table,$data)
	{
		$query = $this->db->get_where($table,$data);
		$result = $query->row();
		return $result;
	}
	public function getlimitSelected($table,$data,$selVariabes,$start,$end)
	{
		$this->db->select($selVariabes);	
	    $this->db->from($table);
		$this->db->where($data);
		$this->db->limit($end,$start);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function getCount()
	{
		$db 	= $this->db->get_where($table,$data);
		$result = $db->count_all();
		return $result;
	}
	
}
