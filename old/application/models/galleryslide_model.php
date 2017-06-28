<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class galleryslide_model extends CI_Model
{
public function create($order,$gallery,$name,$image)
{
$data=array("order" => $order,"gallery" => $gallery,"name" => $name,"image" => $image);
$query=$this->db->insert( "jpp_galleryslide", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("jpp_galleryslide")->row();
return $query;
}
function getsinglegalleryslide($id){
$this->db->where("id",$id);
$query=$this->db->get("jpp_galleryslide")->row();
return $query;
}
public function edit($id,$order,$gallery,$name,$image)
{
if($image=="")
{
$image=$this->galleryslide_model->getimagebyid($id);
$image=$image->image;
}
$data=array("order" => $order,"gallery" => $gallery,"name" => $name,"image" => $image);
$this->db->where( "id", $id );
$query=$this->db->update( "jpp_galleryslide", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `jpp_galleryslide` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `jpp_galleryslide` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `jpp_galleryslide` ORDER BY `id` 
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
