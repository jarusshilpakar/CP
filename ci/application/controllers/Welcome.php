<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}
	public function registration()
	{
		$this->load->view('registration');
	}
	public function home()
	{
		$this->load->view('home');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function login()
	{
		$this->load->view('login');
	}
	
	public function adminPannel()
	{
		$this->load->view('admin panel');
	}
	 
	 public function customerDashboard()
	{
		$this->load->view('customer dashboard');
	}
	public function link()
	{
		$this->load->view('link');
	}
	public function heading()
	{
		$this->load->view('heading');
	}
	public function addProduct()
	{
		$this->load->view('addproduct');
	}
	
	public function dashboard()
	{
		$this->load->view('dashboard');
	}
	public function editProfile()
	{
		$this->load->view('editprofile');
	}
		public function editProduct()
	{
		$this->load->view('productlist');
	}
	
}
