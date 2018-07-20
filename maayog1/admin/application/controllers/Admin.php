<?php 
//session_start();
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
       parent :: __construct();	
    }
	public function index() {
		
		$this->load->view('index');
	}
	public function logout() {
		
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
	public function register() {
		
		$this->load->view('register');
	}
	public function registerUser() {
		
		$result = $this->Admin_Model->registerUser();
		
		if($result){
			  echo true;
		}else{
			  echo false;
		}
	}
	public function forgot_password() {
		
		$this->load->view('forgot_password');
	}
	public function check_mail() {
		
		$result = $this->Admin_Model->check_mail();
		// if($result){
			// $result['Success'] = 'success';
			// $this->load->view('forgot_password',$result);
		// }
	}		
	public function dashboard() {
		
		$this->load->view('dashboard');
		
	}
	public function check_login() {
		$result= $this->Admin_Model->check_login();
		
		if($result){
			 $this->load->view('dashboard');
		}else{
			$result['Error'] = 'error';
			$this->load->view('index',$result);
		}
		
	}
	 public function userManagement() {

		$this->load->view('view_users_list');
	}	
	public function add_user() {

		$this->load->view('add_user');
	}
	public function add_class() {

		$this->load->view('add_class');
	}
	public function classManagement() {
		
		$this->load->view('view_classes_list');
	}
	public function add_event() {
		
		$this->load->view('add_event');
	}
	public function eventManagement() {
		
		$this->load->view('view_event_list');
	}
	public function paymentHistory() {
		
		$this->load->view('payment_history');
	}
	public function notification() {
		
		$this->load->view('notification');
	}	
	public function contactus() {
		
		$this->load->view('contact_us');
	}	
	public function check_user() {
		
		$result = $this->Admin_Model->check_user();

	}		

}
