<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class achievment_model extends CI_Model
{
    public function create($player,$name,$year,$namehindi)
    {
        $data=array("player" => $player,"name" => $name,"year" => $year,"namehindi" => $namehindi);
        $query=$this->db->insert( "achievment", $data );
        $id=$this->db->insert_id();
        if(!$query)
        return  0;
        else
        return  $id;
    }
    public function beforeedit($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("achievment")->row();
        return $query;
    }
    function getsingleachievment($id) 
    {
        $this->db->where("id",$id);
        $query=$this->db->get("achievment")->row();
        return $query;
    }
    public function edit($id,$player,$name,$year,$namehindi)
    {
        $data=array("player" => $player,"name" => $name,"year" => $year,"namehindi" => $namehindi);
        $this->db->where( "id", $id );
        $query=$this->db->update( "achievment", $data );
        return 1;
    }
    public function delete($id)
    {
        $query=$this->db->query("DELETE FROM `achievment` WHERE `id`='$id'");
        return $query;
    }
}
?>
