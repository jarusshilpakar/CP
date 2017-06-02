<?php
class Customer extends CI_Controller{
	public function getRegister(){
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$username=$this->input->post('uname');
		$password=$this->input->post('password');
		$address=$this->input->post('address');
		$phone=$this->input->post('phone');
		$email=$this->input->post('email');
		$this->load->model('customermodel');
		$data['modelmsg']=$this->customermodel->insertIt($fname,$lname,$username,$password,$address,$phone,$email);
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
			
			$this->load->model('customermodel');
			$result=$this->customermodel->checkLogin($username,$password);
			if ($result){
				if ($result==1){
					return redirect('Welcome/adminPannel');
				}else{
					$this->load->library('session');
					$this->session->set_userdata('user_id',$result);
					echo "customer login";
					
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
	
	public function selectData(){
		$this->load->model('customermodel');
		
		$select=$this->customermodel->retData();
		$data['select']=$select;
		$this->load->view('message',$data);
	}
	
	public function searchUser(){
		$this->load->model('customermodel');
		$username=$this->input->post('username');
		$select=$this->customermodel->retData1($username);
		$data['select']=$select;
		$this->load->view('message',$data);
	}
	
	public function updateIt(){
						$id=$this->input->post('id');

				$name=$this->input->post('name');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$address=$this->input->post('address');
		$gender=$this->input->post('gnd');
		$contact=$this->input->post('no');
		$email=$this->input->post('email');
		$this->load->model('customermodel');
		$this->customermodel->updateData($id,$name,$username,$password,$address,$gender,$contact,$email);
		
	}
	public function deleteIt(){
		$this->load->model('customermodel');
		$username=$this->input->post('username');
		$select=$this->customermodel->deleteData($username);
		$data['select']=$select;
		
	}
}
?>