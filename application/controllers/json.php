<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");
class Json extends CI_Controller 
{function getallnewsletter()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`localbanya_newsletter`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`localbanya_newsletter`.`email`";
$elements[1]->sort="1";
$elements[1]->header="Email";
$elements[1]->alias="email";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`localbanya_newsletter`.`timestamp`";
$elements[2]->sort="1";
$elements[2]->header="Time stamp";
$elements[2]->alias="timestamp";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `localbanya_newsletter`");
$this->load->view("json",$data);
}
public function getsinglenewsletter()
{
$id=$this->input->get_post("id");
$data["message"]=$this->newsletter_model->getsinglenewsletter($id);
$this->load->view("json",$data);
}
 public function submitemail(){
 $email=$this->input->get_post("email");
$data["message"]=$this->restapi_model->submitemail($email);
$this->load->view("json",$data);
 }
} ?>