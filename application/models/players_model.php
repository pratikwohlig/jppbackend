<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class players_model extends CI_Model
{
    public function create($order,$type,$name,$nationality,$jerseyno,$about,$dob,$hname,$habout,$hnationality,$smallimage,$bigimage,$fb,$twitter,$instagram,$country,$nativeplace,$weight,$height,$status)
    {
        $data=array("order" => $order,"type" => $type,"name" => $name,"nationality" => $nationality,"jerseyno" => $jerseyno,"about" => $about,"dob" => $dob,"hname" => $hname,"habout" => $habout,"hnationality" => $hnationality,"smallimage" => $smallimage,"bigimage" => $bigimage,"fb" => $fb,"twitter" => $twitter,"instagram" => $instagram,"country" => $country,"nativeplace" => $nativeplace,"weight" => $weight,"height" => $height,"status" => $status);
        $query=$this->db->insert( "jpp_players", $data );
        $id=$this->db->insert_id();
        
        
        if(!$query)
            return  0;
        else
        {
            $insertcareer=$this->db->query("INSERT INTO `career`(`player`) VALUES ($id)");
            return  $id;
        }
    }
    public function beforeedit($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("jpp_players")->row();
        return $query;
    }
    function getsingleplayers($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("jpp_players")->row();
        return $query;
    }
    public function edit($id,$order,$type,$name,$nationality,$jerseyno,$about,$dob,$hname,$habout,$hnationality,$smallimage,$bigimage,$fb,$twitter,$instagram,$country,$nativeplace,$weight,$height,$status)
    {
        
        if($smallimage=="")
        {
            $smallimage=$this->players_model->getsmallimagebyid($id);
            $smallimage=$smallimage->smallimage;
        }
        if($bigimage=="")
        {
            $bigimage=$this->players_model->getbigimagebyid($id);
            $bigimage=$bigimage->bigimage;
        }
        $data=array("order" => $order,"type" => $type,"name" => $name,"nationality" => $nationality,"jerseyno" => $jerseyno,"about" => $about,"dob" => $dob,"hname" => $hname,"habout" => $habout,"hnationality" => $hnationality,"smallimage" => $smallimage,"bigimage" => $bigimage,"fb" => $fb,"twitter" => $twitter,"instagram" => $instagram,"country" => $country,"nativeplace" => $nativeplace,"weight" => $weight,"height" => $height,"status" => $status);
        $this->db->where( "id", $id );
        $query=$this->db->update( "jpp_players", $data );
        return 1;
    }
    public function delete($id)
    {
        $query=$this->db->query("DELETE FROM `jpp_players` WHERE `id`='$id'");
        return $query;
    }
    public function getsmallimagebyid($id)
    {
        $query=$this->db->query("SELECT `smallimage` FROM `jpp_players` WHERE `id`='$id'")->row();
        return $query;
    }
    public function getbigimagebyid($id)
    {
        $query=$this->db->query("SELECT `bigimage` FROM `jpp_players` WHERE `id`='$id'")->row();
        return $query;
    }
    public function getdropdown()
    {
        $query=$this->db->query("SELECT * FROM `jpp_players` ORDER BY `id`
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
