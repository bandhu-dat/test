<?php

class Demo_prj extends CI_Controller {
    
function __construct() {
        parent::__construct();
        $this->load->model('demoproj_model');
    }
    public function index() {
        echo base_url();
        echo "Hello World!";
        $data['records'] = $this->demoproj_model->dsprod();
       // $this->load->view('demoproj/demoprjhome');
        $this->load->view('demoproj/demoprjhome1',$data);
    }
   public function admin() {
        echo base_url();
        echo "Hello World!";
        $this->load->view('demoproj/logindemoprj');
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
      
        $data = $this->demoproj_model->dsclt($name, $pwd);
        // print_r($data) ;
        //exit ;
        
        if ($data == 1) {
          //  session_start();
            $_SESSION['name']=$name;
            $this->load->view('demoproj/demoadmin');
        } else {
            echo "please check userid and password!";
            $this->load->view('demoproj/logindemo');
        }
    }
    
     public function sbmt() {
      //  $date_array = getdate();        
         //      $sdt= $date_array[year];
               
        $data = array(
            'catagory' => $this->input->post('catagory'),
            //'Subcatagory' => $this->input->post('subcatagory'),
            'entryname'  =>  $_SESSION['name']     
        );        
       // $old_roll_no = $this->input->post('roll_no');
       $sql= $this->demoproj_model->dbins($data);
      
        $this->load->view('demoproj/demoadmin');
    }
    public function subcat() {
        echo base_url();
        echo "Hello World!";
        $this->load->view('demoproj/subcatagory');
    }
    public function product(){
        
         echo base_url();
        echo "Hello World!";
        $this->load->view('demoproj/product');
    }
    public function catview(){
        $data['records'] = $this->demoproj_model->cat_view() ;
         $this->load->view('demoproj/catagory_view',$data);
        
    }
    public function subcatview(){
         echo base_url();
        echo "Hello World!";
         $data['records'] = $this->demoproj_model->subcat_view() ;
          $this->load->view('demoproj/subcatagory_view',$data);
    }
    
    public function productview(){
        echo base_url();
        echo "Hello World!";
       $data['records'] = $this->demoproj_model->product_view() ; 
        $this->load->view('demoproj/product_view',$data);
    }

    public function customerview (){

      $data['records'] = $this->demoproj_model->cust_view() ;
          $this->load->view('demoproj/customer_view',$data);

    }

    public function addsub(){
       // echo "hello" ;
     //   exit ;
        $cat = $this->input->post('catagory') ;
        $data = array(
            'catagory' => $this->input->post('catagory'),
            'Subcatagory' => $this->input->post('subcatagory')
              
        ); 
          $dt = $this->demoproj_model->addsb($data,$cat) ;
         
         if ($dt == 1) {
          
            $this->load->view('demoproj/subcatagory');
        } else {
            echo "please check the catagory you have enterd!";
            $this->load->view('demoproj/subcatagory');
        }
              
    }
    
    public function addprod(){
         // echo "hello" ;
      //  exit ;
        $subcat = $this->input->post('subcatagory') ;
        
        $data = array(
           'Subcatagory' => $this->input->post('subcatagory'),
            'name' => $this->input->post('name'),
            'quantity' => $this->input->post('quantity'),
            'price' => $this->input->post('price')
              
        ); 
         $dt = $this->demoproj_model->addpd($data,$subcat) ;
        
        if ($dt == 1) {
          
            $this->load->view('demoproj/product');
        } else {
            echo "please check the Subcatagory you have enterd!";
            $this->load->view('demoproj/product');
        }
        
    }
    
   


    public function catedit($cat_id){
         echo "hello" ;
       // print_r($cat_id) ;
       // exit ;
         $data['id'] = $cat_id ;
         //print_r($cat_id) ;
       //exit ;) ;
        //exit ;
         $this->load->view('demoproj/catagory_edit',$data);
         
         
    }
    
    public function catupdt(){
        //echo "update" ;
       $cat_id = $this->input->post('cat_id') ;
     //   print_r($cat_id) ;
      // exit ;
        
       $data = array(
            'cat_id' => $this->input->post('cat_id'),
            'catagory' => $this->input->post('catagory')
            
       ); 
           $dt = $this->demoproj_model->catpdt($data,$cat_id) ;
       $this->load->view('demoproj/demoadmin');
    }
    public function subcatedit($subcat_id){
        
        echo "hello" ;
        //  print_r($subcat_id) ;
      // exit ;
        $data['id'] = $subcat_id ;
        
        $this->load->view('demoproj/subcatagory_edit',$data);
                
    }
    
    public function subcatupdt(){
        $subcat_id = $this->input->post('subcat_id') ;
        
        $data = array(
            'subcat_id' => $this->input->post('subcat_id'),
            'subcatagory' => $this->input->post('subcatagory')
            
       ); 
        $dt = $this->demoproj_model->subcatpdt($data,$subcat_id) ;
       $this->load->view('demoproj/subcatagory');
        
    }

    public function prodedit($prod_id){

 // echo "hello0000" ;
 //print_r($prod_id) ;
 // exit ;
 $data['id'] = $prod_id ;

 $this->load->view('demoproj/product_edit',$data);


    }

    public function produpdt(){
$prod_id = $this->input->post('prod_id') ;
$data = array(
             'prod_id' => $this->input->post('prod_id'),
            'name' => $this->input->post('name'),
            'quantity' => $this->input->post('quantity'),
            'price' => $this->input->post('price')
          
       ); 
    // print_r($data) ;
    // exit ;
        $dt = $this->demoproj_model->prodpdt($data,$prod_id) ;
         $this->load->view('demoproj/product');
  

    }

      public function store () {


        $data['records'] = $this->demoproj_model->dcat();

      $this->load->view('demoproj/store',$data);

      }

public function store1 ($cat_id) {
        
         $id = $cat_id ;

        $data['records'] = $this->demoproj_model->dscat($id);

      $this->load->view('demoproj/store1',$data);

      }


public function store2 ($subcatagory){

      $id = $subcatagory ;
    $data['records'] = $this->demoproj_model->dprod($id);

      $this->load->view('demoproj/store2',$data);
}



public function shop($prod_id){

echo "shop now";
 $id = $prod_id ;
  $data['records'] = $this->demoproj_model->shopdetails($id);
  //print_r($data) ;
   //  exit ;

  $this->load->view('demoproj/shop',$data);
}

public function customer (){

   echo " customer";

$data = array (
             'prod_id' => $this->input->post('prod_id'),
             'product_name'=>$this->input->post('product_name'),
             'price' => $this->input->post('price'),
            'quantity' =>$this->input->post('quantity'),
            'customername'=>$this->input->post('customername'),
            'phone' =>$this->input->post('phone'),
            'address' =>$this->input->post('address')
             
       );
 $dt = $this->demoproj_model->addshop($data) ;

 if($dt == 1){

    $this->load->view('demoproj/success');

  }
else{
     $this->load->view('demoproj/shop');
  }


  }


 public function store3 () {


        $dt['record'] = $this->demoproj_model->dcat1();
       $data['records'] = $this->demoproj_model->dscat1();

       $this->load->view('demoproj/store3',$data,$dt);

      }

public function home(){

  echo "new home page ";

  $data['records'] = $this->demoproj_model->dsprod();

$this->load->view('demoproj/demoprjhome1',$data);


}

public function store4 () {
      

      //  $dt['record'] = $this->demoproj_model->dcat1();
       $data['records'] = $this->demoproj_model->dscat1();
       $dat['records'] = $this->demoproj_model->dsprod();
       $this->load->view('demoproj/store4',$data);
       $this->load->view('demoproj/store5',$dat);
      }

//public function test(){

//$dat['records'] = $this->demoproj_model->dsprod();
//$this->load->view('demoproj/store5',$dat);

//}

}
?>