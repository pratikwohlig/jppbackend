<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class subscribe_model extends CI_Model
{
public function create($email,$timestamp)
{
$data=array("email" => $email,"timestamp" => $timestamp);
$query=$this->db->insert( "jpp_subscribe", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("jpp_subscribe")->row();
return $query;
}
function getsinglesubscribe($id){
$this->db->where("id",$id);
$query=$this->db->get("jpp_subscribe")->row();
return $query;
}
public function edit($id,$email,$timestamp)
{
$data=array("email" => $email,"timestamp" => $timestamp);
$this->db->where( "id", $id );
$query=$this->db->update( "jpp_subscribe", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `jpp_subscribe` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `jpp_subscribe` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `jpp_subscribe` ORDER BY `id` 
                    ASC")->row();
$return=array(
"" => "Select Option"
);
foreach($query as $row)
{
$return[$row->id]=$row->name;
}
return $return;
}
}
?>
