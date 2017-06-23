<?php
class Ordermodel extends CI_Model{
	public function getOrder($user_id,$product_id){
		
		$arr=array(
		"user_id"=>$user_id,
		"product_id"=>$product_id
		);
		
		$this->db->set('orderdate','now()',false);
		$this->db->insert("order",$arr);
		return "data inserted";
		
		
	}
	public function selectProductId($id){
		$this->db->where("product_id", $id);
			$result=$this->db->get("product");
			
			return $result->result();
	}
	
	public function getPrice($product_id){
		$this->db->where("product_id", $product_id);
			$result=$this->db->get("product");
			$row=$result->result_array();
			$price= ($row[0]['price']);
			
			$arr=array(
			"product_id"=>$product_id,
			"price"=>$price);
		$this->db->where("product_id",$product_id);
		$this->db->update('order',$arr);
	}
		
	public function orderDetails()
		{
			$query=$this->db->get('order');
			return $query->result();
		}
		
	public function deleteData($id){
		
		$this->db->where("order_id",$id);
		$this->db->delete('order');
		return "data deleted";
		
	}
}
?>