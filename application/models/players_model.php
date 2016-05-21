<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class players_model extends CI_Model
{
public function create($order,$type,$name,$nationality,$jerseyno,$about,$dob,$hname,$habout,$hnationality)
{
$data=array("order" => $order,"type" => $type,"name" => $name,"nationality" => $nationality,"jerseyno" => $jerseyno,"about" => $about,"dob" => $dob,"hname" => $hname,"habout" => $habout,"hnationality" => $hnationality);
$query=$this->db->insert( "jpp_players", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("jpp_players")->row();
return $query;
}
function getsingleplayers($id){
$this->db->where("id",$id);
$query=$this->db->get("jpp_players")->row();
return $query;
}
public function edit($id,$order,$type,$name,$nationality,$jerseyno,$about,$dob,$hname,$habout,$hnationality)
{
$data=array("order" => $order,"type" => $type,"name" => $name,"nationality" => $nationality,"jerseyno" => $jerseyno,"about" => $about,"dob" => $dob,"hname" => $hname,"habout" => $habout,"hnationality" => $hnationality);
$this->db->where( "id", $id );
$query=$this->db->update( "jpp_players", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `jpp_players` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `jpp_players` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `jpp_players` ORDER BY `id`
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
