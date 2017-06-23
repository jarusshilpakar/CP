<?php
class User extends CI_Controller{
	public function getRegister(){
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$username=$this->input->post('uname');
		$password=$this->input->post('password');
		$address=$this->input->post('address');
		$phone=$this->input->post('phone');
		$email=$this->input->post('email');
		$this->load->model('usermodel');
		$data['modelmsg']=$this->usermodel->insertIt($fname,$lname,$username,$password,$address,$phone,$email);
		$this->load->view('login');
		
	}
	public function login(){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('user','username',
					'required|trim|min_length[3]|max_length[20]');
					
			$this->form_validation->set_rules('pass','password',
					'required|trim|min_length[5]|max_length[15]');
		if ($this->form_validation->run()){
			$username=$this->input->post('user');
			$password=$this->input->post('pass');
			
			$this->load->model('usermodel');
			$result=$this->usermodel->checkLogin($username,$password);
			if ($result){
				if ($result==1){
					$this->load->library('session');
					$this->session->set_userdata('user_id',$result);
								
				return redirect('Welcome/adminPannel');
				}else{
					$this->load->library('session');
					$this->session->set_userdata('user_id',$result);
					return redirect('user/productDetails');

					
				}
			}else{
				echo ("password not match");
			}
			}
			else{
				$this->load->view('login');
			}
				
				
					//echo "customer login";
					//$data['msg']="successfull";
					//$this->load->view("message",$data);
				//echo "login bhayo";
			
	}
	
	public function getProduct()
	{
		
		//uploading image
		$config['upload_path']="assets/img";
		$config['allowed_types']="*";
		
		
		$this->load->library('upload',$config);
		$this->upload->do_upload('file');
		
		$data=array('upload_data'=>$this->upload->data());
		
		$productname=$this->input->post('name');
		$type=$this->input->post('type');
		$size=$this->input->post('size');
		$price=$this->input->post('price');
		$image=$data['upload_data']['file_name'];

		$this->load->model('usermodel');
		$this->usermodel->addProduct($productname,$type,$size,$price,$image);
		
		$data['insertmsg']="data inserted";
		$this->load->view('addProduct',$data);

		


	}
	
	
	public function updateProductdetails()
	{
		$this->load->model('usermodel');
		$result=$this->usermodel->updateDetails();
		$data['productlist']=$result;
		$this->load->view('productlist',$data);

	}
	
	public function editDetails($id){
		
	$this->load->model("usermodel");

	$data['productlist']=$this->usermodel->selectProductId($id);
	//echo "<pre>";
	//print_r array_rows(); exit;
	$this->load->view('editproduct',$data);
	}
	
	public function editProduct(){
			$id=$this->input->post('id');
			$productname=$this->input->post('name');
			$type=$this->input->post('type');
			$size=$this->input->post('size');
			$price=$this->input->post('price');
			$image=$this->input->post('image');
		
			$this->load->model('usermodel');
			$productlist=$this->usermodel->updateProduct($id,$productname,$type,$size,$price,$image);
	
	}
	
	
	public function updateUserdetails()
	{
		$id=$this->input->get('id');
		$this->load->model('usermodel');
		$result=$this->usermodel->userDetails($id);
		$data['record']=$result;
		$this->load->view('editprofile',$data);

	}
	
	public function edituserDetails($id){
		$id=$this->input->get('id');
	$this->load->model("usermodel");

	$data['record']=$this->usermodel->selectUserId($id);
	
	$this->load->view('editprofile',$data);
	}
	
	public function updateUser(){
		$id=$this->input->post('id');
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$username=$this->input->post('uname');
		$password=$this->input->post('password');
		$address=$this->input->post('address');
		$phone=$this->input->post('phone');
		$email=$this->input->post('email');
		$this->load->model('usermodel');
		$this->usermodel->updateData($id,$fname,$lname,$username,$password,$address,$phone,$email);
		
		$data['update_message']="data sucessfully update";
		$this->load->view('editprofile',$data);
	}
	
	public function deleteProduct(){
		$this->load->model('usermodel');
		$id=$this->input->get('id');
		$this->usermodel->deleteData($id);
		
		echo "data deleted";
	}
	
	public function productDetails()
	{
		$this->load->model('usermodel');
		$result=$this->usermodel->updateDetails();
		$data['productlist']=$result;
		$this->load->view('customer dashboard',$data);

	}
	
	public function updateMyprofile(){
		$session=$this->session->userdata('user_id');
		if ($session!=''){
			$this->load->model('usermodel');
			$myprofile=$this->usermodel->userDetails($session);
			$this->load->view('editprofile',['myprofile'=>$myprofile]);
			
		}else{
			$this->load->view('login');
		}
	}
	
	public function logout(){
		$this->session->sess_destroy();
		return redirect('welcome/login');
		
	}
	public function userList()
	{
		$this->load->model('usermodel');

		$result=$this->usermodel->userListDetails();
		$data['customerlist']=$result;
		$this->load->view('customer list',$data);

	}
	
	public function selectImage(){
		$this->load->model('usermodel');
		$data['productlist']=$this->usermodel->select();
		$this->load->view('customer dashboard',$data);
		
	}
	public function selectData(){
		$name=$this->input->get('search');
		$this->load->model('usermodel');
		$select=$this->usermodel->retData($name);
		$data['select']=$select;
		$this->load->view('messages',$data);
		
	}
	
	
}
?>