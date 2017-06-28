<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class team_model extends CI_Model
{
public function create($type,$name,$image,$content,$hname,$hcontent,$appimage)
{
$data=array("type" => $type,"name" => $name,"image" => $image,"content" => $content,"hname" => $hname,"hcontent" => $hcontent,"appimage"=>$appimage);
$query=$this->db->insert( "jpp_team", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("jpp_team")->row();
return $query;
}
function getsingleteam($id){
$this->db->where("id",$id);
$query=$this->db->get("jpp_team")->row();
return $query;
}
public function edit($id,$type,$name,$image,$content,$hname,$hcontent,$appimage)
{
if($image=="")
{
$image=$this->team_model->getimagebyid($id);
$image=$image->image;
}
$data=array("type" => $type,"name" => $name,"image" => $image,"content" => $content,"hname" => $hname,"hcontent" => $hcontent,"appimage" => $appimage);
$this->db->where( "id", $id );
$query=$this->db->update( "jpp_team", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `jpp_team` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `jpp_team` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `jpp_team` ORDER BY `id` ASC")->result();
$return=array(
"" => "Select Option"
);
foreach($query as $row)
{
$return[$row->id]=$row->name;
}
return $return;
}
public function apphomecreate($image)
{
    $data=array("image" => $image);
    $q2= $this->db->query("SELECT COUNT(*) as `cnt` FROM `jpp_apphomeimage`")->row();
    if($q2->cnt == 0)
        $query=$this->db->insert( "jpp_apphomeimage", $data );
    else
        $query=$this->db->update( "jpp_apphomeimage", $data );
    if(!$query)
    return  0;
    else
    return  $id;

}
public function beforeeditapphomeimage()
{
//$this->db->where("id",$id);
$query=$this->db->get("jpp_apphomeimage")->row();
return $query;
}
}
?>
