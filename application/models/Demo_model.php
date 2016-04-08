<?php
class Demo_model extends CI_Model{
    
     public function __construct() {
        parent::__construct();
    }

    
    public function dsclt($name,$pwd) {
      //  echo "hi" ;
      //print_r($name) ;
       // print_r($pwd) ;
      // exit ;
       $this->db->select('password, name');
       $this->db->from('login');
        $this->db->where('name', $name);
         $this->db->where('password', $pwd);
        $sql = $this->db->get(); 
        // print_r($sql) ;
      // exit ;
        if($sql->num_rows() > 0){
            $rs= true ;
          // print_r($rs) ;
          // exit ;
            return $rs ; 
        }
        
        else{
            $rs= false ;
           // print_r($rs) ;
           // exit ;
            return $rs ; 
        }
                 
    }
     public function dbins($data) {
     $this->db->insert("catagory", $data);
    }
    public function dbupdt($data,$old_catagory ) {
        
        $this->db->set($data); 
         $this->db->where("catagory", $old_catagory); 
         $this->db->update("catagory", $data);
    }
    
    public function dbadd($data,$old_catagory,$old_subcatagory) {
        echo "hi";
       // print_r($data) ;
      //  print_r($old_catagory) ;
       // print_r($old_subcatagory) ;
      //  exit ;
        $this->db->select('catagory, subcatagory');
       $this->db->from('catagory');
        $this->db->where('catagory', $old_catagory);
         $this->db->where('subcatagory', $old_subcatagory);
        $sql = $this->db->get(); 
       
       if($sql->num_rows() > 0){ 
        $this->db->insert("product", $data);
       }
    }
    
    public function dcat() {
        
       $this->db->select('catagory, subcatagory');
       $this->db->from('catagory');
       $this->db->group_by("catagory");
        $sql = $this->db->get();   
      //  $this->db->distinct();
      //$sql=$this->db->get('catagory');
         return $sql;    
         }
     public function dscat() {
      $this->db->select('catagory, subcatagory');
        $this->db->from('catagory');
        $query = $this->db->get();
         return $query;    
         }
         public function prodlist(){
             $this->db->select('*');
             $this->db->from('product');
             $sql = $this->db->get();
             return $sql; 
             
         } 
}
?>