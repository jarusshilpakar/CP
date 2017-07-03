<?php
class Order extends CI_controller{
	public function orderProduct($product_id){
		
		$user_id=$this->session->userdata('user_id');
		

		$this->load->model('ordermodel');
		$this->ordermodel->getOrder($user_id,$product_id);
		echo "<script>alert('product order sucessfully');</script>";
		$this->load->model('usermodel');
		$data['productlist']=$this->usermodel->select();
		$this->load->view('customer dashboard',$data);
		
		
	
	}
	public function orderList()
	{
		$this->load->model('ordermodel');
		$result=$this->ordermodel->orderDetails();
		$data['orderlist']=$result;
		$this->load->view('orderlist',$data);

	}
	public function deleteOrder(){
		$this->load->model('ordermodel');
		$id=$this->input->get('id');
		$this->ordermodel->deleteData($id);
		echo "data deleted";
	}
	
	public function showBill(){
		$session=$this->session->userdata('user_id');
		$this->load->model('ordermodel');
		$data['bill']=$this->ordermodel->getData($session);

		$this->load->view('showbill',$data);
	}
}
?>