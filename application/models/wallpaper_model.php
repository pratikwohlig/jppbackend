<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class wallpaper_model extends CI_Model
{
public function create($wallpapercategory,$name,$image1,$image2,$image3,$image4,$image5,$image6)
{
$data=array("wallpapercategory" => $wallpapercategory,"name" => $name,"image1" => $image1,"image2" => $image2,"image3" => $image3,"image4" => $image4,"image5" => $image5,"image6" => $image6);
$query=$this->db->insert( "jpp_wallpaper", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("jpp_wallpaper")->row();
return $query;
}
function getsinglewallpaper($id){
$this->db->where("id",$id);
$query=$this->db->get("jpp_wallpaper")->row();
return $query;
}
public function edit($id,$wallpapercategory,$name,$image1,$image2,$image3,$image4,$image5,$image6)
{
if($image1=="")
{
$image1=$this->wallpaper_model->getimage1byid($id);
$image1=$image1->image1;
}
    if($image2=="")
{
$image2=$this->wallpaper_model->getimage2byid($id);
$image2=$image2->image2;
}
     if($image3=="")
{
$image3=$this->wallpaper_model->getimage3byid($id);
$image3=$image3->image3;
}
    
     if($image4=="")
{
$image4=$this->wallpaper_model->getimage4byid($id);
$image4=$image4->image4;
}
    
     if($image5=="")
{
$image5=$this->wallpaper_model->getimage5byid($id);
$image5=$image5->image5;
}
    
    if($image6=="")
{
$image6=$this->wallpaper_model->getimage6byid($id);
$image6=$image6->image6;
}
$data=array("wallpapercategory" => $wallpapercategory,"name" => $name,"image1" => $image1,"image2" => $image2,"image3" => $image3,"image4" => $image4,"image5" => $image5,"image6" => $image6);
$this->db->where( "id", $id );
$query=$this->db->update( "jpp_wallpaper", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `jpp_wallpaper` WHERE `id`='$id'");
return $query;
}
public function getimage1byid($id)
{
$query=$this->db->query("SELECT `image1` FROM `jpp_wallpaper` WHERE `id`='$id'")->row();
return $query;
}
    public function getimage2byid($id)
{
$query=$this->db->query("SELECT `image2` FROM `jpp_wallpaper` WHERE `id`='$id'")->row();
return $query;
}
    public function getimage3byid($id)
{
$query=$this->db->query("SELECT `image3` FROM `jpp_wallpaper` WHERE `id`='$id'")->row();
return $query;
}
    public function getimage4byid($id)
{
$query=$this->db->query("SELECT `image4` FROM `jpp_wallpaper` WHERE `id`='$id'")->row();
return $query;
}
    public function getimage5byid($id)
{
$query=$this->db->query("SELECT `image5` FROM `jpp_wallpaper` WHERE `id`='$id'")->row();
return $query;
}
    public function getimage6byid($id)
{
$query=$this->db->query("SELECT `image6` FROM `jpp_wallpaper` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `jpp_wallpaper` ORDER BY `id` ASC")->row();
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
