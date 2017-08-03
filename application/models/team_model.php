<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class team_model extends CI_Model
{
public function create($type,$name,$image,$content,$hname,$hcontent,$appimage,$zone)
{
$data=array("type" => $type,"name" => $name,"image" => $image,"content" => $content,"hname" => $hname,"hcontent" => $hcontent,"appimage"=>$appimage,"zone"=>$zone);
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
public function edit($id,$type,$name,$image,$content,$hname,$hcontent,$appimage,$zone)
{
if($image=="")
{
$image=$this->team_model->getimagebyid($id);
$image=$image->image;
}
$data=array("type" => $type,"name" => $name,"image" => $image,"content" => $content,"hname" => $hname,"hcontent" => $hcontent,"appimage" => $appimage,"zone"=>$zone);
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
public function apphomecreate($image,$status)
{
    $id=0;
    $data=array("status"=>$status);
    if($image!="")
        $data["image"]=$image;
    //print_r($data);
    $q2= $this->db->query("SELECT COUNT(*) as `cnt` FROM `jpp_apphomeimage`")->row();
    if($q2->cnt == 0)
    {
        $query=$this->db->insert( "jpp_apphomeimage", $data );
    	$id=$this->db->insert_id();
    	//echo "inserting";
    }
    else
        $query=$this->db->update( "jpp_apphomeimage", $data );
    if(!$query)
    return  $id;
    else
    return $id;

}

public function aftergroupstagecreate($image,$status)
{
    $id=0;
    $data=array("status"=>$status);
    if($image!="")
        $data["image"]=$image;
    //print_r($data);
    $q2= $this->db->query("SELECT COUNT(*) as `cnt` FROM `jpp_aftergroupstage`")->row();
    if($q2->cnt == 0)
    {
        $query=$this->db->insert( "jpp_aftergroupstage", $data );
    	$id=$this->db->insert_id();
    	//echo "inserting";
    }
    else
        $query=$this->db->update( "jpp_aftergroupstage", $data );
    if(!$query)
    return  $id;
    else
    return $id;

}
public function beforeeditapphomeimage()
{
//$this->db->where("id",$id);
$query=$this->db->get("jpp_apphomeimage")->row();
return $query;
}

public function beforeeditaftergroupstage()
{
//$this->db->where("id",$id);
$query=$this->db->get("jpp_aftergroupstage")->row();
return $query;
}

	public function getzonedropdown()
	{
		$query=$this->db->query("SELECT * FROM `zone`  ORDER BY `id` ASC")->result();
		$return=array(
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}

		return $return;
	}
}
?>
