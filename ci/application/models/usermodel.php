<?php
class Usermodel extends CI_Model{
	public function insertIt($fname,$lname,$username,$password,$address,$phone,$email){
		$arr=array(
		"firstname"=>$fname,
		"lastname"=>$lname,
		"username"=>$username,
		"password"=>$password,
		"address"=>$address,
		"phone"=>$phone,
		"email"=>$email);
		$this->db->insert('user',$arr);
		return "data inserted";
		
	}
	public function retData($name){
		$this->db->where('product_name',$name);
		 $query=$this->db->get('product');
		 return $query->result();
	
	}
	public function checkLogin($username,$password){
		$query=$this->db->where(['username'=>$username,'password'=>$password])
								->get('user');
		if($query->num_rows()){
			return $query->row()->user_id;
		} else {
			return FALSE;
		}
		
	}
	
	public function addProduct($productname,$type,$size,$price,$image){
		$arr=array(
		"product_name"=>$productname,
		"product_type"=>$type,
		"size"=>$size,
		"price"=>$price,
		"image"=>$image);
		$this->db->insert("product",$arr);
		
	}
	
	public function userDetails($session)
		{
			$this->db->where('user_id',$session);
			$query=$this->db->get('user');
			return $query->result();
		}
		
	public function selectUserId($id){
		$this->db->where("user_id", $id);
			$result=$this->db->get("user");
			
			return $result->result();
	}
	
	public function userListDetails()
		{
			$query=$this->db->get('user');
			return $query->result();
		}
		
	public function updateData($id,$fname,$lname,$username,$password,$address,$phone,$email){
		$arr=array("user_id"=>$id,
		"firstname"=>$fname,
		"lastname"=>$lname,
		"username"=>$username,
		"password"=>$password,
		"address"=>$address,
		"phone"=>$phone,
		"email"=>$email);
		$this->db->where("user_id",$id);
		$this->db->update('user',$arr);
		return "data updated";
		
	}
     
	
	public function updateDetails()
		{
			$query=$this->db->get('product');
			return $query->result();
		}
	
	public function selectProductId($id){
		$this->db->where("product_id", $id);
			$result=$this->db->get("product");
			
			return $result->result();
	}
		
		
	public function updateProduct($id,$productname,$type,$size,$price,$image){
		
		
		$arr=array(
		"product_id"=>$id,
		"product_name"=>$productname,
		"product_type"=>$type,
		"size"=>$size,
		"price"=>$price,
		"image"=>$image);
		
		$this->db->where("product_id",$id);
		$this->db->update('product',$arr);
		return "data updated";
		
	}
	public function deleteData($id){
		
		$this->db->where("product_id",$id);
		$this->db->delete('product');
		return "data deleted";
		
	}
	
	public function select(){
		$image=$this->db->get('product');
		return $image->result();
	}
}
?>