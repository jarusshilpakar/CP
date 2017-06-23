<?php
class Order extends CI_controller{
	public function orderProduct($product_id){
		
		$user_id=$this->session->userdata('user_id');
		

		$this->load->model('ordermodel');
		$this->ordermodel->getOrder($user_id,$product_id);
		$this->ordermodel->getPrice($product_id);
		//$this->load->view('customer dashboard');
		
	
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
}
?>