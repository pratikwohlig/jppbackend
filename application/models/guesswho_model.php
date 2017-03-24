<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class guesswho_model extends CI_Model
{
    public function create($image,$link,$status)
    {
        $data=array("image" => $image,"link" => $link,"status" => $status);
        $query=$this->db->insert( "jpp_guesswho", $data );
        $id=$this->db->insert_id();
        if(!$query)
        return  0;
        else
        return  $id;
    }
    public function beforeedit($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("jpp_guesswho")->row();
        return $query;
    }
    function getsingleguesswho($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("jpp_guesswho")->row();
        return $query;
    }
    public function edit($id,$image,$link,$status)
    {
        if($image=="")
        {
        $image=$this->guesswho_model->getimagebyid($id);
        $image=$image->image;
        }
        $data=array("image" => $image,"link" => $link,"status" => $status);
        $this->db->where( "id", $id );
        $query=$this->db->update( "jpp_guesswho", $data );
        return 1;
    }
    public function delete($id)
    {
        $query=$this->db->query("DELETE FROM `jpp_guesswho` WHERE `id`='$id'");
        return $query;
    }
    public function getimagebyid($id)
    {
        $query=$this->db->query("SELECT `image` FROM `jpp_guesswho` WHERE `id`='$id'")->row();
        return $query;
    }
    public function getdropdown()
    {
        $query=$this->db->query("SELECT * FROM `jpp_guesswho` ORDER BY `id` ASC")->result();
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
