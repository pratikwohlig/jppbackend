<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class tournamentplayed_model extends CI_Model
{
    public function create($player,$name,$year)
    {
        $data=array("player" => $player,"name" => $name,"year" => $year);
        $query=$this->db->insert( "tournamentplayed", $data );
        $id=$this->db->insert_id();
        if(!$query)
        return  0;
        else
        return  $id;
    }
    public function beforeedit($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("tournamentplayed")->row();
        return $query;
    }
    function getsingletournamentplayed($id) 
    {
        $this->db->where("id",$id);
        $query=$this->db->get("tournamentplayed")->row();
        return $query;
    }
    public function edit($id,$player,$name,$year)
    {
        $data=array("player" => $player,"name" => $name,"year" => $year);
        $this->db->where( "id", $id );
        $query=$this->db->update( "tournamentplayed", $data );
        return 1;
    }
    public function delete($id)
    {
        $query=$this->db->query("DELETE FROM `tournamentplayed` WHERE `id`='$id'");
        return $query;
    }
}
?>
