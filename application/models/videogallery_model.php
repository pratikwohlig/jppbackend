<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class videogallery_model extends CI_Model
{
public function create($order,$name,$image)
{
$data=array("order" => $order,"name" => $name,"image" => $image);
$query=$this->db->insert( "jpp_videogallery", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("jpp_videogallery")->row();
return $query;
}
function getsinglevideogallery($id){
$this->db->where("id",$id);
$query=$this->db->get("jpp_videogallery")->row();
return $query;
}
public function edit($id,$order,$name,$image)
{
if($image=="")
{
$image=$this->videogallery_model->getimagebyid($id);
$image=$image->image;
}
$data=array("order" => $order,"name" => $name,"image" => $image);
$this->db->where( "id", $id );
$query=$this->db->update( "jpp_videogallery", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `jpp_videogallery` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `jpp_videogallery` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `jpp_videogallery` ORDER BY `id` ASC")->result();
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
