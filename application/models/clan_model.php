<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class clan_model extends CI_Model
{
public function create($email,$name,$comment)
{
$data=array("email" => $email,"name" => $name,"comment" => $comment,"timestamp" => $timestamp);
$query=$this->db->insert( "jpp_clan", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("jpp_clan")->row();
return $query;
}
function getsingleclan($id){
$this->db->where("id",$id);
$query=$this->db->get("jpp_clan")->row();
return $query;
}
public function edit($id,$email,$name,$comment)
{
$data=array("email" => $email,"name" => $name,"comment" => $comment,"timestamp" => $timestamp);
$this->db->where( "id", $id );
$query=$this->db->update( "jpp_clan", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `jpp_clan` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `jpp_clan` WHERE `id`='$id'")->row();
return $query;
}

public function exportcontactcsv()
{
  $this->load->dbutil();
  $query=$this->db->query("SELECT * FROM `jpp_clan` ORDER BY `id` DESC");

     $content= $this->dbutil->csv_from_result($query);
      //$data = 'Some file data';
$timestamp=new DateTime();
      $timestamp=$timestamp->format('Y-m-d_H.i.s');
//        file_put_contents("gs://magicmirroruploads/products_$timestamp.csv", $content);
//		redirect("http://magicmirror.in/servepublic?name=products_$timestamp.csv", 'refresh');
      if ( ! write_file("./uploads/fancorner_$timestamp.csv", $content))
      {
           echo 'Unable to write the file';
      }
      else
      {
          redirect(base_url("uploads/fancorner_$timestamp.csv"), 'refresh');
           echo 'File written!';
      }
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `jpp_clan` ORDER BY `id` ASC")->row();
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
