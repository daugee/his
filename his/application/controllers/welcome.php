<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
            parent::__construct();
             $this->load->helper(array('form', 'url'));
             
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
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */