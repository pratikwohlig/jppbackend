<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class restapi_model extends CI_Model
{
    public function getGallerySlide()
    {   
        //GALLERY
        
        $query['photos']=$this->db->query("SELECT * FROM `jpp_gallery` ORDER BY `order` ASC")->result();
        foreach($query['photos'] as $row)
        {
             $row->galleryslides=$this->db->query("SELECT `id`, `order`, `gallery`, `name`, `image` FROM `jpp_galleryslide` WHERE           `gallery`='$row->id' ORDER BY `order` ASC")->result();
        }
        
        //VIDEOS
        
        $query['videos']=$this->db->query("SELECT * FROM `jpp_videogallery` ORDER BY `order` ASC")->result();
        foreach($query['videos'] as $row1)
        {
             $row1->videogallery=$this->db->query("SELECT `id`, `videogallery`, `order`, `name`, `url`, `image` FROM `jpp_videos` WHERE `videogallery`='$row1->id' ORDER BY `order` ASC")->result();
        }
        return $query;
    }
    public function getAllPoints()
    {
         $query=$this->db->query("SELECT `jpp_point`.`id` AS `id` , `jpp_point`.`played` AS `played` , `jpp_point`.`wins` AS `wins` , `jpp_point`.`lost` AS `lost` , `jpp_point`.`point` AS `point` , `jpp_team`.`name` AS `name` FROM `jpp_point` LEFT OUTER JOIN `jpp_team` ON `jpp_team`.`id`=`jpp_point`.`team` ORDER BY `point` DESC")->result();
        return $query;
    } 
    public function getHomeContent()
    {
         $query['latestupdate']=$this->db->query("")->result();
        return $query;
    }
}
?>
