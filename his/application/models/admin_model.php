<?php

class admin_model extends CI_Model {

//    function get_all_books() {
//
//        $sql = "SELECT librarybooks.temp_id,librarybooks.title, librarybooks.class, librarybooks.author, 
//            librarybooks.edition, librarybooks.publisher, librarybooks.pub_year,
//            librarybooks.book_cat, librarybooks.purchase_date, subjects.subject_name FROM librarybooks 
//                    INNER JOIN subjects ON subjects.subject_id = librarybooks.subject 
//                        WHERE librarybooks.is_valid = '1'";
//        $query = $this->db->query($sql);
//        if ($query) {
//            return $query->result();
//        } else {
//            return FALSE;
//        }
//    }
    function insert($data){
        $this->db->insert('event',$data);
    }
    
//                function fetch_template($value) {
//        $sql = "SELECT librarybooks.temp_id,librarybooks.title, librarybooks.class, librarybooks.author, 
//            librarybooks.edition, librarybooks.publisher, librarybooks.pub_year,
//            librarybooks.book_cat, librarybooks.purchase_date, subjects.subject_name FROM librarybooks 
//                    INNER JOIN subjects ON subjects.subject_id = librarybooks.subject 
//                        WHERE librarybooks.temp_id = '$value'";
//        $query = $this->db->query($sql);
//        if ($query) {
//            return $query->row();
//        } else {
//            return false;
//        }
//    }
    public function validate()
    {
        $data=array(
            'username'=>$this->input->post('username'),
            'password'=>md5($this->input->post('password'))
        );
        
        $this->db->where($data);
        $query=$this->db->get('admin');
        
        if($query->num_rows()==1)
        {
            $data['q']=$query->row();
            $data['success']=TRUE;
            return $data;
            
        }
        else
        {
            $data['success']=FALSE;
            return $data;
        }
    }
     public function create_member(){
        $new_member_insert_data=array(
            'name'=>  $this->input->post('name'),
            'email'=>  $this->input->post('email'),
            'phone_number'=>  $this->input->post('phone_number'),
            'username'=>  $this->input->post('username'),
            'password'=>  md5($this->input->post('password'))
            
        );
        $insert= $this->db->insert('admin',$new_member_insert_data);
        return $insert;
    }
    public function event_details(){
         
        $query=$this->db->get('event');
        return $query->result();
    }
}
?>
