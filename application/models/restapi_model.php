<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class restapi_model extends CI_Model
{
public function submitemail($email)
{
$data=array("email" => $email);
$query=$this->db->insert( "localbanya_newsletter", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
}
?>
