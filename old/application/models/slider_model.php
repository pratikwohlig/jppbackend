<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class slider_model extends CI_Model
{
public function create($order,$name,$image,$status,$link,$type)
{
$data=array("order" => $order,"name" => $name,"image" => $image,"status" => $status,"link" => $link,"type" => $type);
$query=$this->db->insert( "jpp_slider", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("jpp_slider")->row();
return $query;
}
function getsingleslider($id){
$this->db->where("id",$id);
$query=$this->db->get("jpp_slider")->row();
return $query;
}
public function edit($id,$order,$name,$image,$status,$link,$type)
{
if($image=="")
{
$image=$this->slider_model->getimagebyid($id);
$image=$image->image;
}
$data=array("order" => $order,"name" => $name,"image" => $image,"status" => $status,"link" => $link,"type" => $type);
$this->db->where( "id", $id );
$query=$this->db->update( "jpp_slider", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `jpp_slider` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `jpp_slider` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
    $query=$this->db->query("SELECT * FROM `jpp_slider` ORDER BY `id` ASC")->result();
    $return=array(
    "" => "Select Option"
    );
    foreach($query as $row)
    {
    $return[$row->id]=$row->name;
    }
    return $return;
}
public function gettypedropdown()
{
    $return=array(
    "" => "Select Option",
    "1"=>"English",
    "2"=>"Hindi"
    );

    return $return;
}
}
?>
