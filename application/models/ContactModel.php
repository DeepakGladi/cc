<?php
class ContactModel extends CI_model{
	function __construct() {
		$this->load->database();
        parent::__construct();
    }
function insert($data){

$this->db->insert('divakar',$data);

}
function result(){

	$this->db->select('*');
$this->db->from('divakar');
$query = $this->db->get();
return $query->result();

}


}
?>
