<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class gallery_model extends CI_Model
{
public function create($order,$name,$image)
{
$data=array("order" => $order,"name" => $name,"image" => $image);
$query=$this->db->insert( "jpp_gallery", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("jpp_gallery")->row();
return $query;
}
function getsinglegallery($id){
$this->db->where("id",$id);
$query=$this->db->get("jpp_gallery")->row();
return $query;
}
public function edit($id,$order,$name,$image)
{
if($image=="")
{
$image=$this->gallery_model->getimagebyid($id);
$image=$image->image;
}
$data=array("order" => $order,"name" => $name,"image" => $image);
$this->db->where( "id", $id );
$query=$this->db->update( "jpp_gallery", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `jpp_gallery` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `jpp_gallery` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `jpp_gallery` ORDER BY `id` ASC")->row();
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
