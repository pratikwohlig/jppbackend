<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class sponsor_model extends CI_Model
{
public function create($order,$image)
{
$data=array("order" => $order,"image" => $image);
$query=$this->db->insert( "jpp_sponsor", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("jpp_sponsor")->row();
return $query;
}
function getsinglesponsor($id){
$this->db->where("id",$id);
$query=$this->db->get("jpp_sponsor")->row();
return $query;
}
public function edit($id,$order,$image)
{
if($image=="")
{
$image=$this->sponsor_model->getimagebyid($id);
$image=$image->image;
}
$data=array("order" => $order,"image" => $image);
$this->db->where( "id", $id );
$query=$this->db->update( "jpp_sponsor", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `jpp_sponsor` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `jpp_sponsor` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `jpp_sponsor` ORDER BY `id` 
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
