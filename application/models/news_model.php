<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class news_model extends CI_Model
{
public function create($type,$name,$image,$timestamp,$content,$link,$logo,$hname,$hcontent)
{
$data=array("type" => $type,"name" => $name,"image" => $image,"timestamp" => $timestamp,"content" => $content,"link" => $link,"logo" => $logo,"hname" => $hname,"hcontent" => $hcontent);
$query=$this->db->insert( "jpp_news", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("jpp_news")->row();
return $query;
}
function getsinglenews($id){
$this->db->where("id",$id);
$query=$this->db->get("jpp_news")->row();
return $query;
}
public function edit($id,$type,$name,$image,$timestamp,$content,$link,$logo,$hname,$hcontent)
{
if($image=="")
{
$image=$this->news_model->getimagebyid($id);
$image=$image->image;
}
    if($logo=="")
{
$logo=$this->news_model->getlogobyid($id);
$logo=$logo->logo;
}
$data=array("type" => $type,"name" => $name,"image" => $image,"timestamp" => $timestamp,"content" => $content,"link" => $link,"logo" => $logo,"hname" => $hname,"hcontent" => $hcontent);
$this->db->where( "id", $id );
$query=$this->db->update( "jpp_news", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `jpp_news` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `jpp_news` WHERE `id`='$id'")->row();
return $query;
}
    public function getlogobyid($id)
{
$query=$this->db->query("SELECT `logo` FROM `jpp_news` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `jpp_news` ORDER BY `id`
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
