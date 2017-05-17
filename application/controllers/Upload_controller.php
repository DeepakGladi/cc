<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Upload_Controller extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->model('ContactModel','li');
}
public function index(){
$this->load->view('file_view', array('error' => ' ' ));

}

public function do_upload(){
	
	for($i=0;$i<=sizeof($_POST['name']);$i++){
	
      $file_name = $_FILES['userfile']['name'][$i];
      $file_size =$_FILES['userfile']['size'][$i];
      $file_tmp =$_FILES['userfile']['tmp_name'][$i];
      $file_type=$_FILES['userfile']['type'][$i];
 move_uploaded_file($file_tmp,"images/".$file_name);
 
 
 $data= array(
 'name'=>$_POST['name'][$i],
 'pass'=>$_POST['password'][$i],
 'image'=>$file_name,
 
 );
 
	$this->li->insert($data);

}
	$this->table();
}
function table(){
	$data['bata'] = $this->li->result();
	
	$this->load->view('tableview',$data);
}

}
?>