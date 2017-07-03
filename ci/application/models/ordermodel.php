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
	
	
		
	public function orderDetails()
		{
			$this->db->select('*');
			$this->db->from('order');
			$this->db->join('product','order.product_id=product.product_id','inner');
			$res=$this->db->get();
			return $res->result();
			
		}
		
	public function deleteData($id){
		
		$this->db->where("order_id",$id);
		$this->db->delete('order');
		return "data deleted";
		
	}
	
	public function getData($session){
		$this->db->select('*','sum(product.price as total)');
		$this->db->from('order');
		$this->db->join('product','order.product_id=product.product_id','inner');
		$this->db->where('user_id',$session);
		$res=$this->db->get();
		if ($res->num_rows()>0){
			return $res->result_array();

		}else{
			return null;

		}
	}
	
	

	
	
	
}
?>