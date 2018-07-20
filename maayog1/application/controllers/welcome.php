<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function __construct()
   {
       parent :: __construct();	
       $this->load->database();       
       $this->load->model("register_model");
   }

	public function index()
	{
		$data["users"]  = $this->register_model->all_users();
		$this->load->view('index', $data);
	}
	public function form_insert()
	{
		
		echo "success";

	}

	public function class_()
	{
	
		 $this->load->view('classes.php');     
	}
	public function about()
	{
	
		 $this->load->view('about.php');    
	}
	
	public function live()
	{
	
		 $this->load->view('live.php');    
	}
	
	public function contact()
	{
	
		 $this->load->view('contact.php');    
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */