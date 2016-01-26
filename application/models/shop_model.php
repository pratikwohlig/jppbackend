<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class shop_model extends CI_Model
{
public function create($order,$product,$image,$link)
{
$data=array("order" => $order,"product" => $product,"image" => $image,"link" => $link);
$query=$this->db->insert( "jpp_shop", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("jpp_shop")->row();
return $query;
}
function getsingleshop($id){
$this->db->where("id",$id);
$query=$this->db->get("jpp_shop")->row();
return $query;
}
public function edit($id,$order,$product,$image,$link)
{
if($image=="")
{
$image=$this->shop_model->getimagebyid($id);
$image=$image->image;
}
$data=array("order" => $order,"product" => $product,"image" => $image,"link" => $link);
$this->db->where( "id", $id );
$query=$this->db->update( "jpp_shop", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `jpp_shop` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `jpp_shop` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `jpp_shop` ORDER BY `id` 
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
