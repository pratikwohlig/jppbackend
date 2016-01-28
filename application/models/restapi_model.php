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
    public function getVideos()
    {   
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
    public function getAllGallery()
    {
         $query=$this->db->query("SELECT `jpp_gallery`.`id` AS `id` , `jpp_gallery`.`order` AS `order` , `jpp_gallery`.`name` AS `name` , `jpp_gallery`.`image` AS `image` FROM `jpp_gallery` ORDER BY `order` ASC")->result();
        return $query;
    } 
    public function getAllVideoGallery()
    {
         $query=$this->db->query("SELECT * FROM `jpp_videogallery` ORDER BY `order` ASC")->result();
        return $query;
    } 
    public function getallnews()
    {
         $query=$this->db->query("SELECT `jpp_news`.`id` AS `id` , `jpp_news`.`name` AS `name` , `jpp_news`.`image` AS `image` , DATE_FORMAT(`jpp_news`.`timestamp`, '%d %b %Y') as `timestamp` , `jpp_news`.`content` AS `content` FROM `jpp_news` ORDER BY `id` DESC")->result();
        return $query;
    } 
    public function getHomeContent()
    {
         $query['latestupdate']=$this->db->query("SELECT `jpp_schedule`.`id`, `jpp_stadium`.`name` as `stadium`, `jppteam1`.`name` as `team1`,`jppteam1`.`id` as `team1id`, `jppteam2`.`name` as `team2`,`jppteam2`.`id` as `team2id`, `jpp_schedule`.`bookticket`, `jpp_schedule`.`score1`, `jpp_schedule`.`score2`,substring(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`), 1, length(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`)) - 3) as `starttimedate`
FROM `jpp_schedule` 
LEFT OUTER JOIN `jpp_stadium` ON `jpp_stadium`.`id`=`jpp_schedule`.`stadium`
LEFT OUTER JOIN `jpp_team` as `jppteam1`ON `jppteam1`.`id`=`jpp_schedule`.`team1`
LEFT OUTER JOIN `jpp_team` as `jppteam2`ON `jppteam2`.`id`=`jpp_schedule`.`team2`
WHERE `jpp_schedule`.`score1`<>'' AND `jpp_schedule`.`score2`<>'' AND `jpp_schedule`.`timestamp` < NOW()")->row();
        $query['news']=$this->db->query("SELECT `id`, `name`, `image`, DATE_FORMAT(`timestamp`,'%d %b %Y, %h:%i') as `timestamp`, `content` FROM `jpp_news` ORDER BY `timestamp` DESC")->row();    
        $query['points']=$this->db->query("SELECT `jpp_point`.`id` AS `id` , `jpp_point`.`played` AS `played` , `jpp_point`.`wins` AS `wins` , `jpp_point`.`lost` AS `lost` , `jpp_point`.`point` AS `point` , `jpp_team`.`name` AS `name` FROM `jpp_point` LEFT OUTER JOIN `jpp_team` ON `jpp_team`.`id`=`jpp_point`.`team` ORDER BY `point` DESC")->result();
        return $query;
    } 
    public function getSchedule()
    {
         $query=$this->db->query("SELECT `jpp_schedule`.`id`, `jpp_stadium`.`name` as `stadium`, `jppteam1`.`name` as `team1`, `jppteam2`.`name` as `team2`, `jpp_schedule`.`bookticket`, `jpp_schedule`.`score1`, `jpp_schedule`.`score2`,substring(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`), 1, length(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`)) - 3) as `starttimedate`
FROM `jpp_schedule` 
LEFT OUTER JOIN `jpp_stadium` ON `jpp_stadium`.`id`=`jpp_schedule`.`stadium`
LEFT OUTER JOIN `jpp_team` as `jppteam1`ON `jppteam1`.`id`=`jpp_schedule`.`team1`
LEFT OUTER JOIN `jpp_team` as `jppteam2`ON `jppteam2`.`id`=`jpp_schedule`.`team2`
WHERE `jpp_schedule`.`score1`='' AND `jpp_schedule`.`score2`='' AND CONCAT(`jpp_schedule`.`startdate`, ' ', `starttime`) > NOW()
ORDER BY CONCAT(`jpp_schedule`.`startdate`, ' ', `starttime`) ASC")->result();
        return $query;
    }
}
?>