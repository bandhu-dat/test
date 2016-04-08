<?php

class Myfirst_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function dbins($data) {


        $this->db->insert("stud", $data);
    }

    public function dbupdt($data,$old_roll_no) {
        
        $this->db->set($data); 
         $this->db->where("roll_no", $old_roll_no); 
         $this->db->update("stud", $data);
    }
    public function dbdlt($roll_no) {
        
        $this->db->delete("stud", "roll_no = ".$roll_no);
    }
   
    public function dsclt($roll_no) {
        
       $this->db->select('roll_no, name');
       $this->db->from('stud');
        $this->db->where('roll_no', $roll_no);
        $sql = $this->db->get(); 
        
        
         return $sql;    
         
    }
    public function get_result() {

        echo 123;
        exit;
    }

}

?>