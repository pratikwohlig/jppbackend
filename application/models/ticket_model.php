<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class ticket_model extends CI_Model
{
public function create($image,$link,$status,$order)
{
$data=array("image" => $image,"link" => $link,"status" => $status,"order" => $order);
$query=$this->db->insert( "jpp_ticket", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("jpp_ticket")->row();
return $query;
}
function getsingleticket($id){
$this->db->where("id",$id);
$query=$this->db->get("jpp_ticket")->row();
return $query;
}
public function edit($id,$image,$link,$status,$order)
{
if($image=="")
{
$image=$this->ticket_model->getimagebyid($id);
$image=$image->image;
}
$data=array("image" => $image,"link" => $link,"status" => $status,"order" => $order);
$this->db->where( "id", $id );
$query=$this->db->update( "jpp_ticket", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `jpp_ticket` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `jpp_ticket` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
    $query=$this->db->query("SELECT * FROM `jpp_ticket` ORDER BY `id` ASC")->result();
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
