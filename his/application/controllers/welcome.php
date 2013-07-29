<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
            parent::__construct();
             $this->load->helper(array('form', 'url'));
             
              $this->load->helper('url');
              $this->load->library('javascript');
              $this->load->library('pagination');

                $config['base_url'] = 'http://localhost/his/index.php/welcome/blog';
                $config['total_rows'] = 200;
                $config['per_page'] = 20; 

                $this->pagination->initialize($config); 

                echo $this->pagination->create_links();
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
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */