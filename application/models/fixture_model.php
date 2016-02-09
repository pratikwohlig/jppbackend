<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class fixture_model extends CI_Model
{
public function create($schedule,$team1player1name,$team1player2name,$team1player1score,$team1player2score,$team2player1name,$team2player2name,$team2player1score,$team2player2score,$raidpointsteam1,$raidpointsteam2,$tacklepointsteam1,$tacklepointsteam2,$alloutpointteam1,$alloutpointteam2,$extrapointsteam1,$extrapointsteam2,$ishome,$link)
{
$data=array("schedule" => $schedule,"team1player1name" => $team1player1name,"team1player2name" => $team1player2name,"team1player1score" => $team1player1score,"team1player2score" => $team1player2score,"team2player1name" => $team2player1name,"team2player2name" => $team2player2name,"team2player1score" => $team2player1score,"team2player2score" => $team2player2score,"raidpointsteam1" => $raidpointsteam1,"raidpointsteam2" => $raidpointsteam2,"tacklepointsteam1" => $tacklepointsteam1,"tacklepointsteam2" => $tacklepointsteam2,"alloutpointteam1" => $alloutpointteam1,"alloutpointteam2" => $alloutpointteam2,"extrapointsteam1" => $extrapointsteam1,"extrapointsteam2" => $extrapointsteam2,"ishome" => $ishome,"link" => $link);
$query=$this->db->insert( "jpp_fixture", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("jpp_fixture")->row();
return $query;
}
function getsinglefixture($id){
$this->db->where("id",$id);
$query=$this->db->get("jpp_fixture")->row();
return $query;
}
function checkrow($id)
{
$query=$this->db->query("SELECT * FROM `jpp_fixture` WHERE `schedule`='$id'");
if($query->num_rows() ==0)
{
    // fixture not created don't show create
    return 0;
}
else
{
      // fixture created don't show create
    return 1;
}

}
public function edit($id,$schedule,$team1player1name,$team1player2name,$team1player1score,$team1player2score,$team2player1name,$team2player2name,$team2player1score,$team2player2score,$raidpointsteam1,$raidpointsteam2,$tacklepointsteam1,$tacklepointsteam2,$alloutpointteam1,$alloutpointteam2,$extrapointsteam1,$extrapointsteam2,$ishome)
{
$data=array("schedule" => $schedule,"team1player1name" => $team1player1name,"team1player2name" => $team1player2name,"team1player1score" => $team1player1score,"team1player2score" => $team1player2score,"team2player1name" => $team2player1name,"team2player2name" => $team2player2name,"team2player1score" => $team2player1score,"team2player2score" => $team2player2score,"raidpointsteam1" => $raidpointsteam1,"raidpointsteam2" => $raidpointsteam2,"tacklepointsteam1" => $tacklepointsteam1,"tacklepointsteam2" => $tacklepointsteam2,"alloutpointteam1" => $alloutpointteam1,"alloutpointteam2" => $alloutpointteam2,"extrapointsteam1" => $extrapointsteam1,"extrapointsteam2" => $extrapointsteam2,"ishome" => $ishome,"link" => $link);
$this->db->where( "id", $id );
$query=$this->db->update( "jpp_fixture", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `jpp_fixture` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `jpp_fixture` WHERE `id`='$id'")->row();
return $query;
}
//public function getdropdown()
//{
//$ishome=array(
//"" => "Select Option",
//"1" => "Yes",
//"2" => "No"
//);
//return $ishome;
//}
    	public function getdropdown()
	{
		$gender=array(
			""=>"Home Game",
			"1"=>"Yes",
			"2"=>"No" 
		);

		
		return $gender;
	} 
}
?>
