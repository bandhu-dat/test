<?php

class Test extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('myfirst_model');
    }

    public function index() {
        echo base_url();
        echo "Hello World!";
        $this->load->view('validfinal');
    }

    public function register() {
        echo "Hello World!";
        print_r($_POST);

        $this->load->view('validation1');
    }

    public function contact() {
         echo base_url();
 
        echo "Hello World!";
        $this->load->view('contactus');
    }

    public function store() {
       
        echo "Hello World!";
        $this->load->view('store');
    }

    public function home() {
        echo "Hello World!";
        $this->load->helper('url');
        $this->load->view('homepage3');
    }

    public function sbmt() {
        echo "sbmt controller";

        $data = array(
            'roll_no' => $this->input->post('roll_no'),
            'name' => $this->input->post('name')
        );

        $this->myfirst_model->dbins($data);

        $this->load->view('dbtest1');
    }

    public function updt() {
        echo "updt controller";

        $data = array(
            'roll_no' => $this->input->post('roll_no'),
            'name' => $this->input->post('name')
        );
        $old_roll_no = $this->input->post('roll_no');
        $this->myfirst_model->dbupdt($data, $old_roll_no);

        $this->load->view('dbtest2');
    }

    public function dlt() {
        echo "dlt controller";

        $roll_no = $this->input->post('roll_no');

        $this->myfirst_model->dbdlt($roll_no);

        $this->load->view('dbtest1');
    }

    public function dsclt() {
        echo "dsclt controller";

        $roll_no = $this->input->post('roll_no');

       //$sql= $this->myfirst_model->dsclt($roll_no);

        $data['records'] = $this->myfirst_model->dsclt($roll_no);
        $data['old_roll_no'] = $roll_no;
        echo "<pre>";
      //  print_r($data) ;
        $this->load->view('selecttest',$data);
        
    }

    public function dbt() {
        echo "Hello World!!!!!!!!!!!!!!!1";


        $this->load->view('dbtest1');
    }

    public function dbt2() {
        echo "hi";


        $this->load->view('dbtest2');
    }

    public function dbt3() {
        echo "hi";


        $this->load->view('dbtest3');
    }

    public function dbt4() {
        echo "hi";


        $this->load->view('dbtest4');
    }


public function upld(){

$this->load->view('file_view');


}




}

?>