<?php
class Test_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function index(){
		
	}

	public function insert_to_db($data)
	{
		return $this->db->insert('test', $data);
	}


	public function edit_to_db($id=0){
		
		$this->db->where('test_id',$id);
		$query=$this->db->get('test');
		return $result=$query->result();
	}
	public function update_to_db($data,$id)
	{
		$this->db->where('test_id',$id);
		return $this->db->update('test', $data);
	}


	public function delete_to_db($id){
		$this->db->where('test_id',$id);
		return $this->db->delete('test');	
	}

	public function view_of_db($id=0){
		
		return $this->edit_to_db($id);
	}
	
	public function fetch_from_db(){
		
		$query=$this->db->get('test');
		return $result=$query->result();
		
	}
}


?>