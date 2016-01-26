<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class contactus_model extends CI_Model
{
public function create($email,$name,$phone,$timestamp,$comment)
{
$data=array("email" => $email,"name" => $name,"phone" => $phone,"timestamp" => $timestamp,"comment" => $comment);
$query=$this->db->insert( "jpp_contactus", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("jpp_contactus")->row();
return $query;
}
function getsinglecontactus($id){
$this->db->where("id",$id);
$query=$this->db->get("jpp_contactus")->row();
return $query;
}
public function edit($id,$email,$name,$phone,$timestamp,$comment)
{
if($image=="")
{
$image=$this->contactus_model->getimagebyid($id);
$image=$image->image;
}
$data=array("email" => $email,"name" => $name,"phone" => $phone,"timestamp" => $timestamp,"comment" => $comment);
$this->db->where( "id", $id );
$query=$this->db->update( "jpp_contactus", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `jpp_contactus` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `jpp_contactus` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `jpp_contactus` ORDER BY `id` 
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
