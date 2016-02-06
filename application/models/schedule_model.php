<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class schedule_model extends CI_Model
{
public function create($stadium,$team1,$team2,$bookticket,$timestamp,$starttime,$score1,$score2,$startdate)
{
    $startdate = new DateTime($startdate);
        $startdate = $startdate->format('Y-m-d');
$data=array("stadium" => $stadium,"team1" => $team1,"team2" => $team2,"bookticket" => $bookticket,"timestamp" => $timestamp,"starttime" => $starttime,"score1" => $score1,"score2" => $score2,"startdate" => $startdate);
$query=$this->db->insert( "jpp_schedule", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("jpp_schedule")->row();
return $query;
}
function getsingleschedule($id){
$this->db->where("id",$id);
$query=$this->db->get("jpp_schedule")->row();
return $query;
}
public function edit($id,$stadium,$team1,$team2,$bookticket,$timestamp,$starttime,$score1,$score2,$startdate)
{
    $startdate = new DateTime($startdate);
        $startdate = $startdate->format('Y-m-d');
$data=array("stadium" => $stadium,"team1" => $team1,"team2" => $team2,"bookticket" => $bookticket,"timestamp" =>$timestamp,"starttime"=> $starttime,"score1" => $score1,"score2" => $score2,"startdate" => $startdate);
$this->db->where( "id", $id );
$query=$this->db->update( "jpp_schedule", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `jpp_schedule` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `jpp_schedule` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `jpp_schedule` ORDER BY `id` 
                    ASC")->row();
$return=array(
"" => "Select Option"
);
foreach($query as $row)
{
$return[$row->id]=$row->id;
}
return $return;
}
}
?>
