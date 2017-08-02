<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class congratulation_model extends CI_Model
{
    public function create($image,$link,$status)
    {
        $data=array("image" => $image,"link" => $link,"status" => $status);
        $query=$this->db->insert( "jpp_congratulation", $data );
        $id=$this->db->insert_id();
        if(!$query)
        return  0;
        else
        return  $id;
    }
    public function beforeedit($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("jpp_congratulation")->row();
        return $query;
    }
    function getsinglecongratulation($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("jpp_congratulation")->row();
        return $query;
    }
    public function edit($id,$image,$link,$status)
    {
        if($image=="")
        {
        $image=$this->congratulation_model->getimagebyid($id);
        $image=$image->image;
        }
        $data=array("image" => $image,"link" => $link,"status" => $status);
        $this->db->where( "id", $id );
        $query=$this->db->update( "jpp_congratulation", $data );
        return 1;
    }
    public function delete($id)
    {
        $query=$this->db->query("DELETE FROM `jpp_congratulation` WHERE `id`='$id'");
        return $query;
    }
    public function getimagebyid($id)
    {
        $query=$this->db->query("SELECT `image` FROM `jpp_congratulation` WHERE `id`='$id'")->row();
        return $query;
    }
    public function getdropdown()
    {
        $query=$this->db->query("SELECT * FROM `jpp_congratulation` ORDER BY `id` ASC")->result();
        $return=array(
        "" => "Select Option"
        );
        foreach($query as $row)
        {
        $return[$row->id]=$row->name;
        }
        return $return;
    }
    public function gettypedropdown()
    {
        $return=array(
        "" => "Select Option",
        "1"=>"English",
        "2"=>"Hindi"
        );

        return $return;
    }
}
?>
