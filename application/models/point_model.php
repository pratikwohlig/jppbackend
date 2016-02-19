<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class point_model extends CI_Model
{
public function create($played,$wins,$lost,$point,$team,$sd)
{
$data=array("played" => $played,"wins" => $wins,"lost" => $lost,"point" => $point,"team" => $team,"sd" => $sd);
$query=$this->db->insert( "jpp_point", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("jpp_point")->row();
return $query;
}
function getsinglepoint($id){
$this->db->where("id",$id);
$query=$this->db->get("jpp_point")->row();
return $query;
}
public function edit($id,$played,$wins,$lost,$point,$team,$sd)
{

$data=array("played" => $played,"wins" => $wins,"lost" => $lost,"point" => $point,"team" => $team,"sd" => $sd);
$this->db->where( "id", $id );
$query=$this->db->update( "jpp_point", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `jpp_point` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `jpp_point` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `jpp_point` ORDER BY `id` ASC")->result();
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
