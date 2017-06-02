<?php
class Customermodel extends CI_Model{
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
	public function retData(){
		return $this->db->get('customer');
	
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
	public function updateData($id,$name,$username,$password,$address,$gender,$contact,$email){
		$arr=array("id"=>$id,
		"name"=>$name,
		"username"=>$username,
		"password"=>$password,
		"address"=>$address,
		"gender"=>$gender,
		"contact"=>$contact,
		"email"=>$email);
		$this->db->where("id",$id);
		$this->db->update('customer',$arr);
		return "data updated";
		
	}
	public function deleteData($username){
		$arr=array("username"=>$username);
		$this->db->where("username",$username);
		$this->db->delete('customer',$arr);
		return "data deleted";
	}
}
?>