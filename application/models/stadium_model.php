<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class stadium_model extends CI_Model
{
public function create($name)
{
$data=array("name" => $name);
$query=$this->db->insert( "jpp_stadium", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("jpp_stadium")->row();
return $query;
}
function getsinglestadium($id){
$this->db->where("id",$id);
$query=$this->db->get("jpp_stadium")->row();
return $query;
}
public function edit($id,$name)
{
if($image=="")
{
$image=$this->stadium_model->getimagebyid($id);
$image=$image->image;
}
$data=array("name" => $name);
$this->db->where( "id", $id );
$query=$this->db->update( "jpp_stadium", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `jpp_stadium` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `jpp_stadium` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `jpp_stadium` ORDER BY `id` 
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
