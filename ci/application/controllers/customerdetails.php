<?php
class Customerdetails extends CI_Controller{
	public function getData(){
		$name=$this->input->post('name');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$address=$this->input->post('address');
		$gender=$this->input->post('gnd');
		$contact=$this->input->post('no');
		$email=$this->input->post('email');
		$this->load->model('customermodel');
		$data['modelmsg']=$this->customermodel->insertIt($name,$username,$password,$address,$gender,$contact,$email);
		$this->load->view('message',$data);
		
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