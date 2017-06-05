<?php
class Order_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function index(){
		
	}

	public function createOrder(){
		$sql="INSERT INTO tr_Order ()VALUES()";
		$query=$this->db->query($sql,array($orderid));
		$rowUpdated=$query->num_rows();
		return $result=$query->result();

	}

	public function editOrder($orderid=0){
		
		$sql="SELECT * FROM tr_order WHERE order_id=?";
		$query=$this->db->query($sql,array($orderid));
		$rowUpdated=$query->num_rows();
		return $result=$query->result();
	}

	public function deleteOrder(){
		$sql="DELETE FROM tr_order WHERE order_id=?";
		$query=$this->db->query($sql,$Orderid);
		$rowDeleted=$query->num_rows();	
		return $result=$query->result();
		
	}

	public function viewOrder($orderid=0){
		
		$sql="SELECT * FROM tr_order WHERE order_id=?";
		$query=$this->db->query($sql,array($orderid));
		return $result=$query->result();
	}
	
	public function fetchOrder(){
		
		$sql="SELECT * FROM tr_order";
		$query=$this->db->query($sql);
		return $result=$query->result();
	}
}


?>