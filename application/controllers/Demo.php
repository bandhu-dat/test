<?php

class Demo extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('demo_model');
    }

    public function index() {
        echo base_url();
        echo "Hello World!";
        $this->load->view('demohome');
    }
        public function admin() {
        echo base_url();
        echo "Hello World!";
        $this->load->view('logindemo');
    }
    public function store() {
        echo base_url();
        echo "Hello World!";
        $data['records'] = $this->demo_model->dcat();
       // $sdata['srecords']= $this->demo_model->dscat();
        $this->load->view('demostore',$data,$sdata);
    }
    
    public function product() {
        echo base_url();
        echo "Hello World!";
        $data['records'] = $this->demo_model->prodlist();
       // $sdata['srecords']= $this->demo_model->dscat();
        $this->load->view('demostore',$data);
    }
    
    
    public function login() {
        //  echo "Hello World!";
        $name = $this->input->post('name');
        $pwd = $this->input->post('pwd');
        // print_r($name) ;
        //print_r($password) ;
        // exit ;
        //  $sql= $this->demo_model->dsclt($name,$pwd);
        // print_r($name) ;
        //  print_r($sql) ;
        // exit ;
      
        $data = $this->demo_model->dsclt($name, $pwd);
        // print_r($data) ;
        //exit ;
        
        if ($data == 1) {
          //  session_start();
            $_SESSION['name']=$name;
            $this->load->view('admin');
        } else {
            echo "please check userid and password!";
            $this->load->view('logindemo');
        }
    }
             public function sbmt() {
        //echo "updt controller";
       // exit ;
        $data = array(
            'catagory' => $this->input->post('catagory'),
            'Subcatagory' => $this->input->post('subcatagory')
        );        
       // $old_roll_no = $this->input->post('roll_no');
       $sql= $this->demo_model->dbins($data);
      
        $this->load->view('admin');
    }
    
       
    public function edit() {
         
        $this->load->view('demoedit');
    }
     public function updt() {
        echo "updt controller";

        $data = array(
            'catagory' => $this->input->post('catagory'),
            'Subcatagory' => $this->input->post('subcatagory')
        );  
        $old_catagory = $this->input->post('catagory');
        $sql = $this->demo_model->dbupdt($data, $old_catagory);

        $this->load->view('dbtest2');
    }
     public function prod() {
         
        $this->load->view('demoproduct');
    }
     public function prodadd() {
        //echo "updt controller";
       // exit ;
        $data = array(
            'catagory' => $this->input->post('catagory'),
            'Subcatagory' => $this->input->post('subcatagory'),
            'productname' => $this->input->post('productname'),
             'quatity' => $this->input->post('quatity'),
            'price' => $this->input->post('price')
                  );    
       
        $old_catagory = $this->input->post('catagory') ;
        $old_subcatagory= $this->input->post('subcatagory');
        // print_r($data) ;
        //  print_r($old_catagory) ;
        //   print_r($old_subcatagory) ;
      //  exit ;
       // $old_roll_no = $this->input->post('roll_no');
       $sql= $this->demo_model->dbadd($data,$old_catagory,$old_subcatagory);
     
        $this->load->view('demoproduct');
    }
}

?>