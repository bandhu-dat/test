<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Upload_Controller extends CI_Controller {
public function __construct() {
parent::__construct();
}

function do_upload()
{
$config['upload_path'] = './uploads/';
$config['allowed_types'] = 'gif|jpg|png';
$config['max_size']    = '1000';
$config['max_width']  = '2024';
$config['max_height']  = '1468';
 
// You can give video formats if you want to upload any video file.
 
$this->load->library('upload', $config);
 
if ( ! $this->upload->do_upload())
{
	
//$error = array('error' = $this->upload->display_errors());
 
// uploading failed. $error will holds the errors.
echo "error in file uploading ";

}
else
{
$data = array('upload_data' => $this->upload->data());
 
// uploading successfull, now do your further actions
echo "file uploading successfull ";

}
}




public function test(){


echo "test" ;
}



}
?>