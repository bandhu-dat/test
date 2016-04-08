<?php
class Demoproj_model extends CI_Model{
    
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
     $this->db->insert("democatagory", $data);
    }
    
    public function addsb($data,$cat){
        $test=array();
        $test['catagory']=$data['catagory'];
        $test['Subcatagory'] = $data['Subcatagory'];
        $this->db->select('cat_id,catagory');
         $this->db->from('democatagory');
          $this->db->where('catagory',$cat);
          $sql = $this->db->get();
         //  echo $this->db->last_query();
          if($sql->num_rows() > 0){
           //echo '<pre>';print_r($sql);
           foreach($sql->result() as $result){
              // echo $result->cat_id;
               $test['cat_id'] = $result->cat_id;
              $this->db->insert("demosubcatagory", $test);  
              $rs= true ;
              return $rs ;
            }     
          //    $id = $sql->result['cat_id'];
     }
     else{
            $rs= false ;
           // print_r($rs) ;
           // exit ;
            return $rs ; 
        }
     
    // print_r($test);
    //  die ;    
          
    }
     
    public function addpd ($data,$subcat){
        $test=array();
        $test['subcatagory'] = $data['Subcatagory'];
        $test['name'] = $data['name'];
        $test['quantity'] = $data['quantity'];
        $test['price'] = $data['price'];
        $this->db->select('subcatagory,subcat_id');
         $this->db->from('demosubcatagory');
          $this->db->where('subcatagory',$subcat);
          $sql = $this->db->get();
          //  echo $this->db->last_query();
            //    exit ;
          if($sql->num_rows() > 0){
          $this->db->insert("demoproduct", $test); 
              $rs= true ;
              return $rs ;
          }
           else{
            $rs= false ;
           // print_r($rs) ;
           // exit ;
            return $rs ; 
        }
        
    }
    
    public function cat_view (){
        $sql = $this->db->get('democatagory');
        return $sql ;
        
    }
    
    public function subcat_view(){
        
         $sql = $this->db->get('demosubcatagory');
        return $sql ;
    }
    
    public function product_view(){
        $sql = $this->db->get('demoproduct');
        return $sql ;
    }
    
     public function cust_view(){
     
     $sql = $this->db->get('customer');
        return $sql ;
     }


    public function catpdt($data,$cat_id){
       //  print_r($cat_id) ;
       // print_r($data) ;
      //   exit ;
         $this->db->set($data); 
         $this->db->where("cat_id", $cat_id); 
         $this->db->update("democatagory",$data);
        
    }
    public function subcatpdt($data,$subcat_id){
         
        $this->db->set($data); 
         $this->db->where("subcat_id", $subcat_id); 
         $this->db->update("demosubcatagory",$data);
        
    }
      public function prodpdt($data,$prod_id){
         $this->db->set($data); 
         $this->db->where("prod_id", $prod_id); 
         $this->db->update("demoproduct",$data);

      }

       public function dcat() {
        
      $this->db->select('catagory, cat_id');
       $this->db->from('democatagory');
     //  $this->db->group_by("democatagory");
        $sql = $this->db->get();   
       // $this->db->distinct();
      //$sql=$this->db->get('democatagory');
        //$sql = $this->db->get('democatagory') ;
      // print_r($sql) ;
      // exit ;
         return $sql;    
         }


         public function dscat ($id){

        
        $this->db->select('subcat_id, cat_id,catagory,subcatagory');
       $this->db->from('demosubcatagory');
        $this->db->where('cat_id',$id);
        $sql = $this->db->get();   
     
         return $sql;

        }


        public function dprod ($id){

         $this->db->select('prod_id, subcatagory,name,quantity,price');
         $this->db->from('demoproduct');
         $this->db->where('subcatagory',$id);
          $sql = $this->db->get();   
     
         return $sql;

        }


        public function shopdetails($id) {

        $this->db->select('prod_id, subcatagory,name,quantity,price');
         $this->db->from('demoproduct');
         $this->db->where('prod_id',$id);
          $sql = $this->db->get();   
        //  echo $this->db->last_query() ;
       //   exit ;
         return $sql;

       }

      public function addshop ($data){
       
       $test = $data ;

       $rs=$this->db->insert("customer", $test); 
             
              return $rs ;

        }


public function dcat1() {
        
      $this->db->select('catagory, cat_id');
       $this->db->from('democatagory');
     //  $this->db->group_by("democatagory");
        $sql = $this->db->get();   
       // $this->db->distinct();
      //$sql=$this->db->get('democatagory');
        //$sql = $this->db->get('democatagory') ;
      // print_r($sql) ;
      // exit ;
         return $sql;    
         }

         public function dscat1() {
        
      $this->db->select('subcat_id, cat_id,catagory,subcatagory');
       $this->db->from('demosubcatagory');
     //  $this->db->group_by("democatagory");
        $sql = $this->db->get();   
       // $this->db->distinct();
      //$sql=$this->db->get('democatagory');
        //$sql = $this->db->get('democatagory') ;
     // print_r($sql) ;
    //  exit ;
         return $sql;    
         }
       
      public function dsprod() {

         $this->db->select('prod_id, subcatagory,name,quantity,price');
       $this->db->from('demoproduct');
     //  $this->db->group_by("democatagory");
        $sql = $this->db->get();   
       // $this->db->distinct();
      //$sql=$this->db->get('democatagory');
        //$sql = $this->db->get('democatagory') ;
     // print_r($sql) ;
    //  exit ;
         return $sql;    
         }


     }
?>