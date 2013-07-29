<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
            parent::__construct();
             $this->load->helper(array('form', 'url'));
             $this->load->model('admin_model');
              $this->load->helper('url');
              $this->load->library('javascript');
              $this->load->library('pagination');

                
              }
            


	public function index()
	{
		$this->load->view('index');
	}
        public function blog(){
            
                        $this->load->view('blog');
        }
        public function gallery(){
            
                        $this->load->view('gallery');
        }
        public function connection(){
            
                        $this->load->view('connection');
        }
        public function about_us(){
            
                        $this->load->view('about_us');
        }
        public function contact_us(){
            
                        $this->load->view('contact_us');
        }
         public function test(){
            
                        $this->load->view('test');
        }
        public function charts()
	{
		$this->load->view('charts');
	}
        public function embededtables()
	{
		$this->load->view('dhis/embededtables');
	}
        public function maps()
	{
		$this->load->view('dhis/maps');
	}
        public function reportTables()
	{
		$this->load->view('charts');
	}
        public function load_source(){
            
            header("location:http://localhost/his/source");
            
            
        }
      public function admin(){
    $this->load->view('admin/event');
}
     public function admin_login(){
            
           $this->load->view('admin/admin_login');
        }  
        public function validate_credentials()
    {
        
        
         $this->load->model('admin_model');
          $data=$this->admin_model->validate();
            if($data['success'])
            {
                
               
                $this->session->set_userdata('username',$data['q']->username);
//                $this->session->set_userdata('email',$data['q']->email);
                $this->session->set_userdata('id',$data['q']->company_id);
                $this->session->set_userdata('is_logged_in',TRUE);
                
                $data['title']='Admin';
                $data['heading']='Admin Panel';
                redirect('welcome/admin');
            }
            else
            {
                $data['title']='travel';
                $data['heading']='Admin Travel Login';
                $data['error']='Wrong email or password combination! Try again.';
                $this->load->view('admin/admin_login',$data);
                
            }
        }
        public function redirect($page)
            {
    $this->load->model('admin_model');
        if($page=='reg_company')
        {
            $data=array('title'=>'membership registration');
            $data['heading']='Registration';
            $this->load->view('admin/signup_view',$data);
        }
}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */