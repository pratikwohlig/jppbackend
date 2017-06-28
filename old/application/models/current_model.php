<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class current_model extends CI_Model
{
    public function create($player,$matchplayed,$totalpoints,$totalraidpoints,$totaldefencepoints,$raids,$successfulraids,$unsuccessfulraids,$emptyraids,$tackles,$successfultackles,$unsuccessfultackles,$greencards,$redcards,$yellowcards)
    {
        $data=array("player" => $player,"matchplayed" => $matchplayed,"totalpoints" => $totalpoints,"totalraidpoints" => $totalraidpoints,"totaldefencepoints" => $totaldefencepoints,"raids" => $raids,"successfulraids" => $successfulraids,"unsuccessfulraids" => $unsuccessfulraids,"emptyraids" => $emptyraids,"tackles" => $tackles,"successfultackles" => $successfultackles,"unsuccessfultackles" => $unsuccessfultackles,"greencards" => $greencards,"redcards" => $redcards,"yellowcards" => $yellowcards);
        $query=$this->db->insert( "current", $data );
        $id=$this->db->insert_id();
        if(!$query)
        return  0;
        else
        return  $id;
    }
    public function beforeedit($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("current")->row();
        return $query;
    }
    function getsinglecurrent($id) 
    {
        $this->db->where("id",$id);
        $query=$this->db->get("current")->row();
        return $query;
    }
    public function edit($id,$player,$matchplayed,$totalpoints,$totalraidpoints,$totaldefencepoints,$raids,$successfulraids,$unsuccessfulraids,$emptyraids,$tackles,$successfultackles,$unsuccessfultackles,$greencards,$redcards,$yellowcards)
    {
        $data=array("player" => $player,"matchplayed" => $matchplayed,"totalpoints" => $totalpoints,"totalraidpoints" => $totalraidpoints,"totaldefencepoints" => $totaldefencepoints,"raids" => $raids,"successfulraids" => $successfulraids,"unsuccessfulraids" => $unsuccessfulraids,"emptyraids" => $emptyraids,"tackles" => $tackles,"successfultackles" => $successfultackles,"unsuccessfultackles" => $unsuccessfultackles,"greencards" => $greencards,"redcards" => $redcards,"yellowcards" => $yellowcards);
        $this->db->where( "id", $id );
        $query=$this->db->update( "current", $data );
        return 1;
    }
    public function delete($id)
    {
        $query=$this->db->query("DELETE FROM `current` WHERE `id`='$id'");
        return $query;
    }
}
?>
