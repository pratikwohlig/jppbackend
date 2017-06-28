<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class videos_model extends CI_Model
{
public function create($videogallery,$order,$name,$url,$image)
{
$data=array("videogallery" => $videogallery,"order" => $order,"name" => $name,"url" => $url,"image" => $image);
$query=$this->db->insert( "jpp_videos", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("jpp_videos")->row();
return $query;
}
function getsinglevideos($id){
$this->db->where("id",$id);
$query=$this->db->get("jpp_videos")->row();
return $query;
}
public function edit($id,$videogallery,$order,$name,$url,$image)
{
if($image=="")
{
$image=$this->videos_model->getimagebyid($id);
$image=$image->image;
}
$data=array("videogallery" => $videogallery,"order" => $order,"name" => $name,"url" => $url,"image" => $image);
$this->db->where( "id", $id );
$query=$this->db->update( "jpp_videos", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `jpp_videos` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `jpp_videos` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `jpp_videos` ORDER BY `id` 
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
