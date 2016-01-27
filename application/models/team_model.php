<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class team_model extends CI_Model
{
public function create($type,$name,$image,$content)
{
$data=array("type" => $type,"name" => $name,"image" => $image,"content" => $content);
$query=$this->db->insert( "jpp_team", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("jpp_team")->row();
return $query;
}
function getsingleteam($id){
$this->db->where("id",$id);
$query=$this->db->get("jpp_team")->row();
return $query;
}
public function edit($id,$type,$name,$image,$content)
{
if($image=="")
{
$image=$this->team_model->getimagebyid($id);
$image=$image->image;
}
$data=array("type" => $type,"name" => $name,"image" => $image,"content" => $content);
$this->db->where( "id", $id );
$query=$this->db->update( "jpp_team", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `jpp_team` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `jpp_team` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `jpp_team` ORDER BY `id` ASC")->result();
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
