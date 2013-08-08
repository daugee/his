<?php

class admin extends CI_Controller {

   

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
        
       public function events_edit() {
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
       
        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('period', 'Period', 'required|trim');
        $this->form_validation->set_rules('description', 'Description', 'required|trim');
        $this->form_validation->set_rules('organizers', 'Organizers', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->helper('url');
           
            
            $this->load->view('admin/event_edit');
        } else {
            $this->load->model('admin_model');
            
                $data['title']= $this->input->post('title');
                 $data['period'] = $this->input->post('period');
                $data['organizers'] = $this->input->post('organizers');
                 $data['description'] = $this->input->post('description');
                 
                $this->admin_model->events_edit($data);
                
              $this->load->view('admin/event');
               
                
                
            }
        }
    }



?>
