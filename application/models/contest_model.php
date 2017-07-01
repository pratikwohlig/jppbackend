<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class Contest_model extends CI_Model
{
	public function savescore($user,$contest,$score,$totalquestions,$correctanswer)
	{
		$ip = $this->input->ip_address();
		if($user != 0)
		{
			 $query=$this->db->query("INSERT INTO `contestscore` (`contest`,`user`,`score`,`totalquestions`,`correctanswer`,`ip_address`) VALUES ('$contest','$user','$score','$totalquestions','$correctanswer','$ip')");
		        return $query;
		}
		else
			return false;
	}
    /*
    public function create($player,$matchplayed,$totalpoints,$totalraidpoints,$totaldefencepoints,$raids,$successfulraids,$unsuccessfulraids,$emptyraids,$tackles,$successfultackles,$unsuccessfultackles,$greencards,$redcards,$yellowcards)
    {
        $data=array("player" => $player,"matchplayed" => $matchplayed,"totalpoints" => $totalpoints,"totalraidpoints" => $totalraidpoints,"totaldefencepoints" => $totaldefencepoints,"raids" => $raids,"successfulraids" => $successfulraids,"unsuccessfulraids" => $unsuccessfulraids,"emptyraids" => $emptyraids,"tackles" => $tackles,"successfultackles" => $successfultackles,"unsuccessfultackles" => $unsuccessfultackles,"greencards" => $greencards,"redcards" => $redcards,"yellowcards" => $yellowcards);
        $query=$this->db->insert( "career", $data );
        $id=$this->db->insert_id();
        if(!$query)
        return  0;
        else
        return  $id;
    }
    public function beforeedit($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("career")->row();
        return $query;
    }
    function getsinglecareer($id) 
    {
        $this->db->where("id",$id);
        $query=$this->db->get("career")->row();
        return $query;
    }
    public function edit($id,$player,$matchplayed,$totalpoints,$totalraidpoints,$totaldefencepoints,$raids,$successfulraids,$unsuccessfulraids,$emptyraids,$tackles,$successfultackles,$unsuccessfultackles,$greencards,$redcards,$yellowcards,$status)
    {
        $data=array("player" => $player,"matchplayed" => $matchplayed,"totalpoints" => $totalpoints,"totalraidpoints" => $totalraidpoints,"totaldefencepoints" => $totaldefencepoints,"raids" => $raids,"successfulraids" => $successfulraids,"unsuccessfulraids" => $unsuccessfulraids,"emptyraids" => $emptyraids,"tackles" => $tackles,"successfultackles" => $successfultackles,"unsuccessfultackles" => $unsuccessfultackles,"greencards" => $greencards,"redcards" => $redcards,"yellowcards" => $yellowcards,"status"=> $status);
        $this->db->where( "id", $id );
        $query=$this->db->update( "career", $data );
        return 1;
    }
    public function delete($id)
    {
        $query=$this->db->query("DELETE FROM `career` WHERE `id`='$id'");
        return $query;
    }*/
}
?>
