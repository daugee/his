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
            $data['events']=$this->admin_model->event_details();
                        $this->load->view('about_us',$data);
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
        public function admin_event(){
          
          $this->load->view('admin/event_add');
        }
        public function admin_events(){
          $data['query']=$this->admin_model->get_all_events();
          $this->load->view('admin/event_edit',$data);
            }
            public function delete_events(){
          $data['query']=$this->admin_model->get_all_events();
          $this->load->view('admin/delete_events',$data);
            }
     public function admin_login(){
            
           $this->load->view('admin/admin_login');
        } 
        public function logout()
    {
        
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
                $this->session->set_userdata('id',$data['q']->id_user);
                $this->session->set_userdata('is_logged_in',TRUE);
                
               
                $this->load->view('admin/event');
            }
            else
            {
              
                $data['error']='Wrong email or password combination! Try again.';
                $this->load->view('admin/admin_login',$data);
                
            }
        }
        public function redirect($page)
            {
    $this->load->model('admin_model');
        if($page=='reg_member')
        {
            $data=array('title'=>'membership registration');
            $data['heading']='Registration';
            $this->load->view('admin/signup_view',$data);
        }
}
function create_member(){
            $this->load->library('form_validation');
            
            //form validation for signup
            $this->form_validation->set_rules('name','name','trim|required');
            $this->form_validation->set_rules('email','email','trim|required|valid_email');
            $this->form_validation->set_rules('phone_number','phone_number','trim|required');
            $this->form_validation->set_rules('username','username','trim|required|min_length[5]');
            $this->form_validation->set_rules('password','password','trim|required|min_length[6]');
            $this->form_validation->set_rules('password2','','trim|required|min_length[6]|matches[password]');
            
            if($this->form_validation->run()==FALSE){
                $this->load->view('admin/signup_view');
            }
        
        else
        {    $this->load->model('admin_model');
            $this->admin_model->create_member();
            $data['title']='success';
            $data['heading']='Success';
             $this->load->view('admin/signup_success');
        }
        }
       public function events_edit(){
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
       
        $this->form_validation->set_rules('title', 'title', 'required|trim');
        $this->form_validation->set_rules('period', 'period', 'required|trim');
        $this->form_validation->set_rules('description', 'description', 'required|trim');
        $this->form_validation->set_rules('organizers', 'organizers', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->helper('url');
           
            
            redirect('welcome/admin_events');
        } else {
           
            $this->load->model('admin_model');
             $this->admin_model->events_edit();
               $this->load->view('admin/event');
            }
        }
        public function events_delete(){
            $this->load->model('admin_model');
             $this->admin_model->events_delete();
             $this->load->view('admin/event');
        }
         public function validate() {
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
       
        $this->form_validation->set_rules('Title', 'Title', 'required|trim');
        $this->form_validation->set_rules('period', 'Period', 'required|trim');
        $this->form_validation->set_rules('description', 'Description', 'required|trim');
        $this->form_validation->set_rules('organizers', 'Organizers', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->helper('url');
           $this->load->view('admin/event');
            
            
        } else {
            $this->load->model('admin_model');
            
                $data['title']= $this->input->post('Title');
                 $data['period'] = $this->input->post('period');
                $data['organizers'] = $this->input->post('organizers');
                 $data['description'] = $this->input->post('description');
                 
                $this->admin_model->insert($data);
                $this->load->view('admin/event');
                
               
                
                
            }
        }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */