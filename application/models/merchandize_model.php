<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class merchandize_model extends CI_Model
{
public function create($order,$name,$image,$link,$price)
{
$data=array("order" => $order,"name" => $name,"image" => $image,"link" => $link,"price" => $price);
$query=$this->db->insert( "jpp_merchandize", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("jpp_merchandize")->row();
return $query;
}
function getsinglemerchandize($id){
$this->db->where("id",$id);
$query=$this->db->get("jpp_merchandize")->row();
return $query;
}
public function edit($id,$order,$name,$image,$link,$price)
{
if($image=="")
{
$image=$this->merchandize_model->getimagebyid($id);
$image=$image->image;
}
$data=array("order" => $order,"name" => $name,"image" => $image,"link" => $link,"price" => $price);
$this->db->where( "id", $id );
$query=$this->db->update( "jpp_merchandize", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `jpp_merchandize` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `jpp_merchandize` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `jpp_merchandize` ORDER BY `id` 
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
