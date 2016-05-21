<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class pages_model extends CI_Model
{
public function create($name,$content)
{
$data=array("name" => $name,"content" => $content);
$query=$this->db->insert( "jpp_pages", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("jpp_pages")->row();
return $query;
}
function getsinglepages($id){
$this->db->where("id",$id);
$query=$this->db->get("jpp_pages")->row();
return $query;
}
public function edit($id,$name,$content)
{
$data=array("name" => $name,"content" => $content);
$this->db->where( "id", $id );
$query=$this->db->update( "jpp_pages", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `jpp_pages` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `jpp_pages` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `jpp_pages` ORDER BY `id` 
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
