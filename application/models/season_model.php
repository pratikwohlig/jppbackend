<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class season_model extends CI_Model
{
public function create($name,$orderno)
{
   
$data=array("name" => $name,"orderno" => $orderno);
$query=$this->db->insert( "jpp_season", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("jpp_season")->row();
return $query;
}
function getsingleseason($id){
$this->db->where("id",$id);
$query=$this->db->get("jpp_season")->row();
return $query;
}
public function edit($id,$name,$orderno)
{
    $data=array("name" => $name,"orderno" => $orderno);
$this->db->where( "id", $id );
$query=$this->db->update( "jpp_season", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `jpp_season` WHERE `id`='$id'");
return $query;
}

public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `jpp_season` ORDER BY `id`
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
        public function getseasondropdown()
    {
   $query=$this->db->query("SELECT * FROM `jpp_season` ORDER BY `id`
                    ASC")->result();
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
