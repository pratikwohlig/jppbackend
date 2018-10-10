<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class restapi_model extends CI_Model
{


    public function getGallerySlide($id)
    {
        //GALLERY

            $query=$this->db->query("SELECT `id`, `order`, `gallery`, `name`, `image` FROM `jpp_galleryslide` WHERE           `gallery`='$id' ORDER BY `order` ASC")->result();


        return $query;
    }
    public function getVideos($id)
    {
        //VIDEOS


             $query=$this->db->query("SELECT `id`, `videogallery`, `order`, `name`, `url`, `image` FROM `jpp_videos` WHERE `videogallery`='$id' ORDER BY `order` ASC")->result();

        return $query;
    }
    public function getAllPoints()
    {
        $query=$this->db->query("SELECT * FROM `zone` WHERE `id`>0")->result();
        foreach($query as $row)
        {
            $zoneid=$row->id;
            $zonename=$row->name;
            $queryzonewise=$this->db->query("SELECT `jpp_point`.`id` AS `id` , `jpp_point`.`played` AS `played` , `jpp_point`.`wins` AS `wins` , `jpp_point`.`lost` AS `lost` , `jpp_point`.`draw` AS `draw`, `jpp_point`.`point` AS `point` , `jpp_team`.`name` AS `name`,`jpp_team`.`hname` AS `hindiname`,`jpp_point`.`sd` 
            FROM `jpp_point` 
            LEFT OUTER JOIN `jpp_team` ON `jpp_team`.`id`=`jpp_point`.`team` 
            WHERE `jpp_team`.`zone` = '$zoneid'
            ORDER BY `jpp_point`.`point` DESC, `jpp_point`.`sd` DESC")->result();
            if($zoneid==1)
            {
                $pointsTable="pointsTableA";
            }
            else{
                $pointsTable="pointsTableB";
            }
            $row->$pointsTable=$queryzonewise;
        }
        //ORDER BY `jpp_team`.`orderno` DESC
    	//ORDER BY `jpp_point`.`point` DESC, `jpp_point`.`sd` DESC
       //  $query=$this->db->query("SELECT `jpp_point`.`id` AS `id` , `jpp_point`.`played` AS `played` , `jpp_point`.`wins` AS `wins` , `jpp_point`.`lost` AS `lost` , `jpp_point`.`draw` AS `draw`, `jpp_point`.`point` AS `point` , `jpp_team`.`name` AS `name`,`jpp_team`.`hname` AS `hindiname`,`jpp_point`.`sd` FROM `jpp_point` LEFT OUTER JOIN `jpp_team` ON `jpp_team`.`id`=`jpp_point`.`team` ORDER BY `jpp_point`.`point` DESC, `jpp_point`.`sd` DESC")->result();
        /*
        for($i=0;$i<count($query);$i++)
        {
            $query[$i]->id = $i+1;
        }*/
        return $query;
    }
    public function getAllGallery()
    {
         $query=$this->db->query("SELECT `jpp_gallery`.`id` AS `id` , `jpp_gallery`.`order` AS `order` , `jpp_gallery`.`name` AS `name`,`jpp_gallery`.`hname` AS `hindiname` , `jpp_gallery`.`image1` AS `image`,if(`jpp_gallery`.`type`=1,'big','small') as `type`,`season`, `seasonname`, `hname` FROM `jpp_gallery` ORDER BY `order` ASC")->result();
        return $query;
    }
    public function getAllVideoGallery()
    {
         $query=$this->db->query("SELECT * FROM `jpp_videogallery` ORDER BY `order` DESC")->result();
        return $query;
    }
    public function getAllSliders()
    {
         $query['english']=$this->db->query("SELECT `id`, `name`, `image`, `order`, `status`,`link`,`type` FROM `jpp_slider` WHERE `status`=1 AND `type`=1 ORDER BY `order` ASC")->result();
          $query['hindi']=$this->db->query("SELECT `id`, `name`, `image`, `order`, `status`,`link`,`type` FROM `jpp_slider` WHERE `status`=1 AND `type`=2 ORDER BY `order` ASC")->result();
        return $query;
    }
    public function getWallpaper($type)
    {
        if($type==1)
        {
            //for mobile
            $query=$this->db->query("SELECT `id`, `wallpapercategory`, `name`, `image1` as `image` FROM `jpp_wallpaper` WHERE `wallpapercategory`='2' ORDER BY `id` DESC")->result();
        }
        else if($type==2){
            //for desktop
            $query=$this->db->query("SELECT `id`, `wallpapercategory`, `name`, `image1` as `image` FROM `jpp_wallpaper` ORDER BY `id` DESC")->result();
        }
        else if($type==3){
            //for iOS
            $query=$this->db->query("SELECT `id`, `wallpapercategory`, `name`, `image1` as `image` FROM `jpp_wallpaper` WHERE `wallpapercategory`='3' ORDER BY `id` DESC")->result();
        }
        if($query){
            return $query;
        }
         else{
             return false;
         }

    }
    public function getWallpaperCategoryForDesktop()
    {
        $query=$this->db->query("SELECT * FROM `jpp_wallpapercategory` WHERE 1")->result();
       foreach($query as $row){
            $row->wallpapercount=$this->db->query("SELECT COUNT(*) as `wallpapercount` FROM `jpp_wallpaper` WHERE `wallpapercategory`='$row->id'")->result();
       }
        if($query){
            return $query;
        }
         else{
             return false;
         }

    }
    public function getallnews()
    {
         $query=$this->db->query("SELECT `jpp_news`.`id` AS `id` , `jpp_news`.`name` AS `name` , `jpp_news`.`image` AS `image` ,`jpp_news`.`logo` AS `logo`, DATE_FORMAT(`jpp_news`.`timestamp`, '%d %b %Y') as `timestamp` , `jpp_news`.`link` AS `content`, `hname`, `hcontent` FROM `jpp_news` ORDER BY `id` DESC")->result();
        return $query;
    }
    public function getHomeContent()
    {
         $query['review']=$this->db->query("SELECT `jpp_schedule`.`id`, `jpp_stadium`.`name` as `stadium`,`jpp_stadium`.`hname` as `hindistadium`, `jppteam1`.`name` as `team1`, `jppteam1`.`hname` as `hinditeam1`,`jppteam1`.`id` as `team1id`, `jppteam2`.`name` as `team2`,`jppteam2`.`hname` as `hinditeam2`,`jppteam2`.`id` as `team2id`, `jpp_schedule`.`bookticket`, `jpp_schedule`.`score1`, `jpp_schedule`.`score2`,substring(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`), 1, length(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`)) - 3) as `starttimedate`,`jpp_schedule`.`matchtime`,`jpp_schedule`.`ishome`,`jpp_schedule`.`bookticket`,`jpp_schedule`.`galleryid`,`jpp_gallery`.`name` as `galleryname`,`jpp_schedule`.`season`,`jpp_schedule`.`level`,`jppteam1`.`appimage` as `appteamimage1`,`jppteam2`.`appimage` as `appteamimage2`
FROM `jpp_schedule`
LEFT OUTER JOIN `jpp_stadium` ON `jpp_stadium`.`id`=`jpp_schedule`.`stadium`
LEFT OUTER JOIN `jpp_gallery` ON `jpp_gallery`.`id`=`jpp_schedule`.`galleryid`
LEFT OUTER JOIN `jpp_team` as `jppteam1`ON `jppteam1`.`id`=`jpp_schedule`.`team1`
LEFT OUTER JOIN `jpp_team` as `jppteam2`ON `jppteam2`.`id`=`jpp_schedule`.`team2`
WHERE `jpp_schedule`.`score1`<>'' AND `jpp_schedule`.`score2`<>'' AND `jpp_schedule`.`timestamp` < NOW() 
ORDER BY `jpp_schedule`.`startdate` DESC")->result();
        /*latestupdate=SELECT `jpp_schedule`.`id`, `jpp_stadium`.`name` as `stadium`,`jpp_stadium`.`hname` as `hindistadium`, `jppteam1`.`name` as `team1`,`jppteam1`.`hname` as `hinditeam1`,`jppteam1`.`id` as `team1id`, `jppteam2`.`name` as `team2`,`jppteam2`.`hname` as `hinditeam2`,`jppteam2`.`id` as `team2id`, `jpp_schedule`.`bookticket`, `jpp_schedule`.`score1`, `jpp_schedule`.`score2`,substring(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`), 1, length(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`)) - 3) as `starttimedate`,`jpp_schedule`.`matchtime`,`jpp_schedule`.`ishome`,`jpp_schedule`.`bookticket`,`jpp_schedule`.`season`,`jppteam1`.`appimage` as `appteamimage1`,`jppteam2`.`appimage` as `appteamimage2`
FROM `jpp_schedule`
LEFT OUTER JOIN `jpp_stadium` ON `jpp_stadium`.`id`=`jpp_schedule`.`stadium`
LEFT OUTER JOIN `jpp_team` as `jppteam1`ON `jppteam1`.`id`=`jpp_schedule`.`team1`
LEFT OUTER JOIN `jpp_team` as `jppteam2`ON `jppteam2`.`id`=`jpp_schedule`.`team2`
WHERE `jpp_schedule`.`score1`<>'' AND `jpp_schedule`.`score2`<>'' AND `jpp_schedule`.`timestamp` < NOW()
ORDER BY `jpp_schedule`.`startdate` DESC*/
        $query2=$this->db->query("SELECT `id` FROM `jpp_season` ORDER BY `orderno` DESC LIMIT 0,1")->row();
        $seasonid=$query2->id;
        $query['latestupdate']=$this->db->query("SELECT `jpp_schedule`.`id`, `jpp_stadium`.`name` as `stadium`,`jpp_stadium`.`hname` as `hindistadium`, `jppteam1`.`name` as `team1`,`jppteam1`.`hname` as `hinditeam1`,`jppteam1`.`id` as `team1id`, `jppteam2`.`name` as `team2`,`jppteam2`.`hname` as `hinditeam2`,`jppteam2`.`id` as `team2id`, `jpp_schedule`.`bookticket`, `jpp_schedule`.`score1`, `jpp_schedule`.`score2`,substring(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`), 1, length(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`)) - 3) as `starttimedate`,`jpp_schedule`.`matchtime`,`jpp_schedule`.`ishome`,`jpp_schedule`.`bookticket`,`jpp_schedule`.`season`,`jppteam1`.`appimage` as `appteamimage1`,`jppteam2`.`appimage` as `appteamimage2`
FROM `jpp_schedule`
LEFT OUTER JOIN `jpp_stadium` ON `jpp_stadium`.`id`=`jpp_schedule`.`stadium`
LEFT OUTER JOIN `jpp_team` as `jppteam1`ON `jppteam1`.`id`=`jpp_schedule`.`team1`
LEFT OUTER JOIN `jpp_team` as `jppteam2`ON `jppteam2`.`id`=`jpp_schedule`.`team2`
WHERE `jpp_schedule`.`score1`<>'' AND `jpp_schedule`.`score2`<>'' AND `jpp_schedule`.`starttime` < NOW() AND `jpp_schedule`.`season`='$seasonid'
ORDER BY `jpp_schedule`.`startdate` DESC,`jpp_schedule`.`starttime` DESC,`jpp_schedule`.`season` DESC
")->row();


$query['latestMatch']=$this->db->query("SELECT `jpp_schedule`.`id`,`jpp_schedule`.`matchtitle`, `jpp_stadium`.`name` as `stadium`, `jppteam1`.`name` as `team1`,`jppteam1`.`id` as `team1id`, `jppteam2`.`name` as `team2`,`jppteam2`.`id` as `team2id`,`jpp_schedule`.`bookticket`, `jpp_schedule`.`score1`, `jpp_schedule`.`score2`,substring(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`), 1, length(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`)) - 3) as `starttimedate`,`jpp_schedule`.`starttime` as `matchtime`,`jpp_schedule`.`matchtime` as `totalmatchtime`,`jpp_schedule`.`ishome`,`jpp_schedule`.`level`,`jppteam1`.`appimage` as `appteamimage1`,`jppteam2`.`appimage` as `appteamimage2`
FROM `jpp_schedule`
LEFT OUTER JOIN `jpp_stadium` ON `jpp_stadium`.`id`=`jpp_schedule`.`stadium`
LEFT OUTER JOIN `jpp_team` as `jppteam1`ON `jppteam1`.`id`=`jpp_schedule`.`team1`
LEFT OUTER JOIN `jpp_team` as `jppteam2`ON `jppteam2`.`id`=`jpp_schedule`.`team2`
WHERE (`jpp_schedule`.`startdate`= CURDATE() OR CONCAT(`jpp_schedule`.`startdate`, ' ', `starttime`) > NOW()) AND `jpp_schedule`.`levelstatus`=1
ORDER BY CONCAT(`jpp_schedule`.`startdate`, ' ', `starttime`) ASC")->row();
        $query['news']=$this->db->query("SELECT `id`, `name`,`hname` AS 'hindiname', `image`, DATE_FORMAT(`timestamp`,'%d %b %Y, %h:%i') as `timestamp`, `content`,`hcontent` AS 'hindicontent' FROM `jpp_news` ORDER BY `id` DESC")->row();

        //ORDER BY `jpp_point`.`point` DESC, `jpp_point`.`sd` DESC
        $query['points']=$this->db->query("SELECT `jpp_point`.`id` AS `id` , `jpp_point`.`played` AS `played` , `jpp_point`.`wins` AS `wins` , `jpp_point`.`lost` AS `lost`,`jpp_point`.`draw` AS `draw`  , `jpp_point`.`point` AS `point` , `jpp_team`.`name` AS `name`,`jpp_team`.`hname` AS `hindiname` FROM `jpp_point` LEFT OUTER JOIN `jpp_team` ON `jpp_team`.`id`=`jpp_point`.`team` ORDER BY `jpp_team`.`orderno` DESC")->result();
            for($i=0;$i<count($query['points']);$i++)
            {
                $query['points'][$i]->id = $i+1;
            }
        $query["apphomeimage"]=$this->db->get("jpp_apphomeimage")->row();
        $query["sponsorimage"]=$this->db->query("SELECT `image` FROM `jpp_sponsor` ORDER BY `jpp_sponsor`.`order` DESC LIMIT 0,1")->row();
        return $query;
    }

    // public function getAllPoints()
    // {
    //      $query=$this->db->query("SELECT `jpp_point`.`id` AS `id` , `jpp_point`.`played` AS `played` , `jpp_point`.`wins` AS `wins` , `jpp_point`.`lost` AS `lost` , `jpp_point`.`point` AS `point` , `jpp_team`.`name` AS `name`,`jpp_team`.`hname` AS `hindiname` FROM `jpp_point` LEFT OUTER JOIN `jpp_team` ON `jpp_team`.`id`=`jpp_point`.`team` ORDER BY `jpp_point`.`point` DESC, `jpp_point`.`sd` DESC")->result();
    //     for($i=0;$i<count($query);$i++)
    //     {
    //         $query[$i]->id = $i+1;
    //     }
    //     return $query;
    // }
    public function getSchedule()
    {
         $query=$this->db->query("SELECT `jpp_schedule`.`id`,`jpp_schedule`.`season`, `jpp_stadium`.`name` as `stadium`,`jpp_stadium`.`hname` as `hindistadium`, `jppteam1`.`name` as `team1`,`jppteam1`.`hname` as `hinditeam1`,`jppteam1`.`id` as `team1id`, `jppteam2`.`name` as `team2`,`jppteam2`.`hname` as `hinditeam2`,`jppteam2`.`id` as `team2id`,`jpp_schedule`.`bookticket`, `jpp_schedule`.`score1`, `jpp_schedule`.`score2`,substring(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`), 1, length(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`)) - 3) as `starttimedate`,`jpp_schedule`.`level`,`jppteam1`.`appimage` as `appteamimage1`,`jppteam2`.`appimage` as `appteamimage2` FROM `jpp_schedule` LEFT OUTER JOIN `jpp_stadium` ON `jpp_stadium`.`id`=`jpp_schedule`.`stadium` LEFT OUTER JOIN `jpp_team` as `jppteam1`ON `jppteam1`.`id`=`jpp_schedule`.`team1` LEFT OUTER JOIN `jpp_team` as `jppteam2`ON `jppteam2`.`id`=`jpp_schedule`.`team2` WHERE `jpp_schedule`.`score1`='' AND `jpp_schedule`.`score2`='' AND CONCAT(`jpp_schedule`.`startdate`, ' ', `starttime`) > NOW() ORDER BY CONCAT(`jpp_schedule`.`startdate`, ' ', `starttime`) ASC")->result();


        return $query;
    }
    public function getScheduleSeason4()
    {
         $query=$this->db->query("SELECT `jpp_schedule`.`id`,`jpp_schedule`.`ishome`,`jpp_schedule`.`season`, `jpp_stadium`.`name` as `stadium`, `jpp_stadium`.`hname` as `hindistadium`, `jppteam1`.`name` as `team1`, `jppteam1`.`hname` as `hinditeam1`,`jppteam1`.`id` as `team1id`, `jppteam2`.`name` as `team2`,`jppteam2`.`hname` as `hinditeam2`,`jppteam2`.`id` as `team2id`,`jpp_schedule`.`bookticket`, `jpp_schedule`.`score1`, `jpp_schedule`.`score2`,substring(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`), 1, length(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`)) - 3) as `starttimedate`,`jpp_schedule`.`showNumber`,`jpp_schedule`.`level` FROM `jpp_schedule` LEFT OUTER JOIN `jpp_stadium` ON `jpp_stadium`.`id`=`jpp_schedule`.`stadium` LEFT OUTER JOIN `jpp_team` as `jppteam1`ON `jppteam1`.`id`=`jpp_schedule`.`team1` LEFT OUTER JOIN `jpp_team` as `jppteam2`ON `jppteam2`.`id`=`jpp_schedule`.`team2` WHERE `jpp_schedule`.`score1`='' AND   `jpp_schedule`.`score2`='' AND CONCAT(`jpp_schedule`.`startdate`, ' ', `starttime`) > NOW() ORDER BY CONCAT(`jpp_schedule`.`startdate`, ' ', `starttime`) ASC")->result();

        //  $i=3;
        //  foreach ($query as $row) {
        //    $row->showNumber=$i;
        //    $i++;
        //  }


        return $query;
    }
    public function getHomeGameSeason4()
    {
         $query=$this->db->query("SELECT `jpp_schedule`.`id`,`jpp_schedule`.`season`, `jpp_stadium`.`name` as `stadium`, `jpp_stadium`.`hname` as `hindistadium`, `jppteam1`.`name` as `team1`,`jppteam1`.`hname` as `hinditeam1`,`jppteam1`.`id` as `team1id`, `jppteam2`.`name` as `team2`,`jppteam2`.`hname` as `hinditeam2`,`jppteam2`.`id` as `team2id`,`jpp_schedule`.`bookticket`, `jpp_schedule`.`score1`, `jpp_schedule`.`score2`,substring(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`), 1, length(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`)) - 3) as `starttimedate`,`jpp_schedule`.`level` FROM `jpp_schedule` LEFT OUTER JOIN `jpp_stadium` ON `jpp_stadium`.`id`=`jpp_schedule`.`stadium` LEFT OUTER JOIN `jpp_team` as `jppteam1`ON `jppteam1`.`id`=`jpp_schedule`.`team1` LEFT OUTER JOIN `jpp_team` as `jppteam2`ON `jppteam2`.`id`=`jpp_schedule`.`team2` WHERE `jpp_schedule`.`score1`='' AND `jpp_schedule`.`score2`='' AND `jpp_schedule`.`ishome`=1 ORDER BY CONCAT(`jpp_schedule`.`startdate`, ' ', `starttime`) ASC")->result();


        return $query;
    }
    public function getLatestMatch1()
    {
         $query=$this->db->query("SELECT `jpp_schedule`.`id`, `jpp_stadium`.`name` as `stadium`, `jppteam1`.`name` as `team1`,`jppteam1`.`id` as `team1id`, `jppteam2`.`name` as `team2`,`jppteam2`.`id` as `team2id`,`jpp_schedule`.`bookticket`, `jpp_schedule`.`score1`, `jpp_schedule`.`score2`,substring(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`), 1, length(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`)) - 3) as `starttimedate`,`jpp_schedule`.`starttime` as `matchtime`,`jpp_schedule`.`ishome`,`jpp_schedule`.`season`
FROM `jpp_schedule`
LEFT OUTER JOIN `jpp_stadium` ON `jpp_stadium`.`id`=`jpp_schedule`.`stadium`
LEFT OUTER JOIN `jpp_team` as `jppteam1`ON `jppteam1`.`id`=`jpp_schedule`.`team1`
LEFT OUTER JOIN `jpp_team` as `jppteam2`ON `jppteam2`.`id`=`jpp_schedule`.`team2`
WHERE `jpp_schedule`.`score1`='' AND `jpp_schedule`.`score2`='' AND CONCAT(`jpp_schedule`.`startdate`, ' ', `starttime`) > NOW()
ORDER BY CONCAT(`jpp_schedule`.`startdate`, ' ', `starttime`) ASC")->row();
        return $query;
    }
    public function getLatestMatch()
    {
         $query=$this->db->query("SELECT `jpp_schedule`.`id`,`jpp_schedule`.`matchtitle`, `jpp_stadium`.`name` as `stadium`, `jppteam1`.`name` as `team1`,`jppteam1`.`id` as `team1id`, `jppteam2`.`name` as `team2`,`jppteam2`.`id` as `team2id`,`jpp_schedule`.`bookticket`, `jpp_schedule`.`score1`, `jpp_schedule`.`score2`,substring(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%a %b %e %Y'), ' ', `starttime`), 1, length(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%a %b %e %Y'), ' ', `starttime`)) ) as `starttimedate`,DATE_FORMAT(jpp_schedule.starttime, '%H:%i') as `matchtime`,`jpp_schedule`.`matchtime` as `totalmatchtime`,`jpp_schedule`.`ishome`,`jpp_schedule`.`level`,DATE_FORMAT(`jpp_schedule`.`startdate`, '%M %e %Y')  as `matchdate`,`jppteam1`.`image` as `teamimage1`,`jppteam2`.`image` as `teamimage2`
FROM `jpp_schedule`
LEFT OUTER JOIN `jpp_stadium` ON `jpp_stadium`.`id`=`jpp_schedule`.`stadium`
LEFT OUTER JOIN `jpp_team` as `jppteam1`ON `jppteam1`.`id`=`jpp_schedule`.`team1`
LEFT OUTER JOIN `jpp_team` as `jppteam2`ON `jppteam2`.`id`=`jpp_schedule`.`team2`
WHERE (`jpp_schedule`.`startdate`= CURDATE() OR CONCAT(`jpp_schedule`.`startdate`, ' ', `starttime`) > NOW()) AND `jpp_schedule`.`levelstatus`=1
ORDER BY CONCAT(`jpp_schedule`.`startdate`, ' ', `starttime`) ASC")->row();
        return $query;
    }
    public function getSchedulenew()
    {
         $query=$this->db->query("SELECT `jpp_schedule`.`id`,`jpp_schedule`.`bookticket`,`jpp_schedule`.`season`, `jpp_stadium`.`name` as `stadium`,`jpp_stadium`.`hname` as `hindistadium`, `jppteam1`.`name` as `team1`,`jppteam1`.`hname` as `hinditeam1`,`jppteam1`.`id` as `team1id`, `jppteam2`.`name` as `team2`,`jppteam2`.`hname` as `hinditeam2`,`jppteam2`.`id` as `team2id`,`jpp_schedule`.`bookticket` as `link`, `jpp_schedule`.`score1`, `jpp_schedule`.`score2`,substring(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`), 1, length(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`)) - 3) as `starttimedate`,IFNULL(`jpp_schedule`.`ishome`,0) as `ishome`,`jpp_schedule`.`matchtime`,`jpp_schedule`.`level`,`jppteam1`.`image` as `teamimage1`,`jppteam2`.`image` as `teamimage2` FROM `jpp_schedule` LEFT OUTER JOIN `jpp_stadium` ON `jpp_stadium`.`id`=`jpp_schedule`.`stadium` LEFT OUTER JOIN `jpp_fixture` ON `jpp_fixture`.`schedule`=`jpp_schedule`.`id` LEFT OUTER JOIN `jpp_team` as `jppteam1`ON `jppteam1`.`id`=`jpp_schedule`.`team1` LEFT OUTER JOIN `jpp_team` as `jppteam2`ON `jppteam2`.`id`=`jpp_schedule`.`team2` ORDER BY CONCAT(`jpp_schedule`.`startdate`, ' ', `starttime`) ASC")->result();
//        print_r($query);
        foreach($query as $row){
             $row->fixture=$this->db->query("SELECT `id`, `schedule`, `team1player1name`,`team1player1nameh`, `team1player2name`,`team1player2nameh`, `team1player1score`, `team1player2score`, `team2player1name`,`team2player1nameh`, `team2player2name`,`team2player2nameh`, `team2player1score`, `team2player2score`, `raidpointsteam1`, `raidpointsteam2`, `tacklepointsteam1`, `tacklepointsteam2`, `alloutpointteam1`, `alloutpointteam2`, `extrapointsteam1`, `extrapointsteam2` FROM `jpp_fixture` WHERE `schedule`='$row->id'")->row();

        }
        return $query;
    }
    public function getScheduleForIosAndroidSeason4old()
    {
        /*SELECT `jpp_schedule`.`id`,`jpp_schedule`.`bookticket`,`jpp_schedule`.`season`, `jpp_stadium`.`name` as `stadium`,`jpp_stadium`.`hname` as `hindistadium`, `jppteam1`.`name` as `team1`,`jppteam1`.`hname` as `hinditeam1`,`jppteam1`.`id` as `team1id`, `jppteam2`.`name` as `team2`,`jppteam2`.`hname` as `hinditeam2`,`jppteam2`.`id` as `team2id`,`jpp_schedule`.`bookticket` as `link`, `jpp_schedule`.`score1`, `jpp_schedule`.`score2`,substring(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`), 1, length(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`)) - 3) as `starttimedate`,IFNULL(`jpp_schedule`.`ishome`,0) as `ishome`,`jpp_schedule`.`matchtime`,`jpp_schedule`.`level`,`jppteam1`.`appimage` as `teamimage1`,`jppteam2`.`appimage` as `teamimage2` FROM `jpp_schedule`
LEFT OUTER JOIN `jpp_stadium` ON `jpp_stadium`.`id`=`jpp_schedule`.`stadium`
LEFT OUTER JOIN `jpp_fixture` ON `jpp_fixture`.`schedule`=`jpp_schedule`.`id`
LEFT OUTER JOIN `jpp_team` as `jppteam1`ON `jppteam1`.`id`=`jpp_schedule`.`team1`
LEFT OUTER JOIN `jpp_team` as `jppteam2`ON `jppteam2`.`id`=`jpp_schedule`.`team2`
WHERE `jpp_schedule`.`season`=2 AND (`jpp_schedule`.`startdate`!=CURDATE() AND `jpp_schedule`.`startdate`< CURDATE())
GROUP BY `jpp_schedule`.`id`
ORDER BY CONCAT(`jpp_schedule`.`startdate`, ' ', `starttime`) DESC*/
        $query2=$this->db->query("SELECT `id` FROM `jpp_season` ORDER BY `orderno` ASC LIMIT 0,1")->row();
        $seasonid=$query2->id;
         /*echo  "SELECT `jpp_schedule`.`id`, `jpp_stadium`.`name` as `stadium`,`jpp_stadium`.`hname` as `hindistadium`, `jppteam1`.`name` as `team1`,`jppteam1`.`hname` as `hinditeam1`,`jppteam1`.`id` as `team1id`, `jppteam2`.`name` as `team2`,`jppteam2`.`hname` as `hinditeam2`,`jppteam2`.`id` as `team2id`, `jpp_schedule`.`bookticket` as `link`, `jpp_schedule`.`score1`, `jpp_schedule`.`score2`,substring(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`), 1, length(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`)) - 3) as `starttimedate`,IFNULL(`jpp_schedule`.`ishome`,0) as `ishome`,`jpp_schedule`.`matchtime`,`jpp_schedule`.`level`,`jppteam1`.`appimage` as `teamimage1`,`jppteam2`.`appimage` as `teamimage2`,`jpp_schedule`.`bookticket`,`jpp_schedule`.`season`,`jppteam1`.`appimage` as `appteamimage1`,`jppteam2`.`appimage` as `appteamimage2`
FROM `jpp_schedule`
LEFT OUTER JOIN `jpp_stadium` ON `jpp_stadium`.`id`=`jpp_schedule`.`stadium`
LEFT OUTER JOIN `jpp_fixture` ON `jpp_fixture`.`schedule`=`jpp_schedule`.`id`
LEFT OUTER JOIN `jpp_team` as `jppteam1`ON `jppteam1`.`id`=`jpp_schedule`.`team1`
LEFT OUTER JOIN `jpp_team` as `jppteam2`ON `jppteam2`.`id`=`jpp_schedule`.`team2`
WHERE `jpp_schedule`.`score1`<>'' AND `jpp_schedule`.`score2`<>'' AND `jpp_schedule`.`starttime` < NOW() AND `jpp_schedule`.`season`='$seasonid'
GROUP BY `jpp_schedule`.`id`
ORDER BY `jpp_schedule`.`startdate` DESC,`jpp_schedule`.`starttime` DESC,`jpp_schedule`.`season` DESC";*/
         $query=$this->db->query("SELECT `jpp_schedule`.`id`, `jpp_stadium`.`name` as `stadium`,`jpp_stadium`.`hname` as `hindistadium`, `jppteam1`.`name` as `team1`,`jppteam1`.`hname` as `hinditeam1`,`jppteam1`.`id` as `team1id`, `jppteam2`.`name` as `team2`,`jppteam2`.`hname` as `hinditeam2`,`jppteam2`.`id` as `team2id`, `jpp_schedule`.`bookticket` as `link`, `jpp_schedule`.`score1`, `jpp_schedule`.`score2`,substring(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`), 1, length(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`)) - 3) as `starttimedate`,IFNULL(`jpp_schedule`.`ishome`,0) as `ishome`,`jpp_schedule`.`matchtime`,`jpp_schedule`.`level`,`jppteam1`.`appimage` as `teamimage1`,`jppteam2`.`appimage` as `teamimage2`,`jpp_schedule`.`bookticket`,`jpp_schedule`.`season`,`jppteam1`.`appimage` as `appteamimage1`,`jppteam2`.`appimage` as `appteamimage2`
FROM `jpp_schedule`
LEFT OUTER JOIN `jpp_stadium` ON `jpp_stadium`.`id`=`jpp_schedule`.`stadium`
LEFT OUTER JOIN `jpp_fixture` ON `jpp_fixture`.`schedule`=`jpp_schedule`.`id`
LEFT OUTER JOIN `jpp_team` as `jppteam1`ON `jppteam1`.`id`=`jpp_schedule`.`team1`
LEFT OUTER JOIN `jpp_team` as `jppteam2`ON `jppteam2`.`id`=`jpp_schedule`.`team2`
WHERE `jpp_schedule`.`score1`<>'' AND `jpp_schedule`.`score2`<>''  AND `jpp_schedule`.`season`='$seasonid'
GROUP BY `jpp_schedule`.`id`
ORDER BY `jpp_schedule`.`startdate` DESC,`jpp_schedule`.`starttime` DESC,`jpp_schedule`.`season` DESC")->result();
        //print_r($query);
        foreach($query as $row){
             $row->fixture=$this->db->query("SELECT `id`, `schedule`, `team1player1name`,`team1player1nameh`, `team1player2name`,`team1player2nameh`, `team1player1score`, `team1player2score`, `team2player1name`,`team2player1nameh`, `team2player2name`,`team2player2nameh`, `team2player1score`, `team2player2score`, `raidpointsteam1`, `raidpointsteam2`, `tacklepointsteam1`, `tacklepointsteam2`, `alloutpointteam1`, `alloutpointteam2`, `extrapointsteam1`, `extrapointsteam2` FROM `jpp_fixture` WHERE `schedule`='$row->id'")->row();

        }
        return $query;
    }
    public function getScheduleForIosAndroidSeason4()
    {
        $query2=$this->db->query("SELECT `id` FROM `jpp_season` ORDER BY `orderno` ASC LIMIT 0,1")->row();
        $seasonid=$query2->id;
         $query=$this->db->query("SELECT `jpp_schedule`.`id`, `jpp_stadium`.`name` as `stadium`,`jpp_stadium`.`hname` as `hindistadium`, `jppteam1`.`name` as `team1`,`jppteam1`.`hname` as `hinditeam1`,`jppteam1`.`id` as `team1id`, `jppteam2`.`name` as `team2`,`jppteam2`.`hname` as `hinditeam2`,`jppteam2`.`id` as `team2id`, `jpp_schedule`.`bookticket` as `link`, `jpp_schedule`.`score1`, `jpp_schedule`.`score2`,substring(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`), 1, length(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`)) - 3) as `starttimedate`,IFNULL(`jpp_schedule`.`ishome`,0) as `ishome`,`jpp_schedule`.`matchtime`,`jpp_schedule`.`level`,`jppteam1`.`appimage` as `teamimage1`,`jppteam2`.`appimage` as `teamimage2`,`jpp_schedule`.`bookticket`,`jpp_schedule`.`season`,`jppteam1`.`appimage` as `appteamimage1`,`jppteam2`.`appimage` as `appteamimage2`
FROM `jpp_schedule`
LEFT OUTER JOIN `jpp_stadium` ON `jpp_stadium`.`id`=`jpp_schedule`.`stadium`
LEFT OUTER JOIN `jpp_fixture` ON `jpp_fixture`.`schedule`=`jpp_schedule`.`id`
LEFT OUTER JOIN `jpp_team` as `jppteam1`ON `jppteam1`.`id`=`jpp_schedule`.`team1`
LEFT OUTER JOIN `jpp_team` as `jppteam2`ON `jppteam2`.`id`=`jpp_schedule`.`team2`
WHERE `jpp_schedule`.`score1`<>'' AND `jpp_schedule`.`score2`<>''  AND `jpp_schedule`.`season`='$seasonid' AND `jpp_schedule`.`levelstatus`=1
GROUP BY `jpp_schedule`.`id`
ORDER BY `jpp_schedule`.`startdate` DESC,`jpp_schedule`.`starttime` DESC,`jpp_schedule`.`season` DESC")->result();
        //print_r($query);
        foreach($query as $row){
             $row->fixture=$this->db->query("SELECT `id`, `schedule`, `team1player1name`,`team1player1nameh`, `team1player2name`,`team1player2nameh`, `team1player1score`, `team1player2score`, `team2player1name`,`team2player1nameh`, `team2player2name`,`team2player2nameh`, `team2player1score`, `team2player2score`, `raidpointsteam1`, `raidpointsteam2`, `tacklepointsteam1`, `tacklepointsteam2`, `alloutpointteam1`, `alloutpointteam2`, `extrapointsteam1`, `extrapointsteam2` FROM `jpp_fixture` WHERE `schedule`='$row->id'")->row();

        }
        return $query;
    }
    public function getScheduleForIosAndroidWorldCup2016()
    {
         $query=$this->db->query("SELECT `jpp_schedule`.`id`,`jpp_schedule`.`bookticket`,`jpp_schedule`.`season`, `jpp_stadium`.`name` as `stadium`,`jpp_stadium`.`hname` as `hindistadium`, `jppteam1`.`name` as `team1`,`jppteam1`.`hname` as `hinditeam1`,`jppteam1`.`id` as `team1id`, `jppteam2`.`name` as `team2`,`jppteam2`.`hname` as `hinditeam2`,`jppteam2`.`id` as `team2id`,`jpp_schedule`.`bookticket` as `link`, `jpp_schedule`.`score1`, `jpp_schedule`.`score2`,substring(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`), 1, length(CONCAT(DATE_FORMAT(`jpp_schedule`.`startdate`, '%d %b %Y'), ', ', `starttime`)) - 3) as `starttimedate`,IFNULL(`jpp_schedule`.`ishome`,0) as `ishome`,`jpp_schedule`.`matchtime`,`jpp_schedule`.`level`,`jppteam1`.`appimage` as `appteamimage1`,`jppteam2`.`appimage` as `appteamimage2` FROM `jpp_schedule`
LEFT OUTER JOIN `jpp_stadium` ON `jpp_stadium`.`id`=`jpp_schedule`.`stadium`
LEFT OUTER JOIN `jpp_fixture` ON `jpp_fixture`.`schedule`=`jpp_schedule`.`id`
LEFT OUTER JOIN `jpp_team` as `jppteam1`ON `jppteam1`.`id`=`jpp_schedule`.`team1`
LEFT OUTER JOIN `jpp_team` as `jppteam2`ON `jppteam2`.`id`=`jpp_schedule`.`team2`
WHERE `jpp_schedule`.`season`=3 AND (`jpp_schedule`.`startdate`!=CURDATE() AND `jpp_schedule`.`startdate`< CURDATE())
GROUP BY `jpp_schedule`.`id`
ORDER BY CONCAT(`jpp_schedule`.`startdate`, ' ', `starttime`) DESC")->result();

        foreach($query as $row){
             $row->fixture=$this->db->query("SELECT `id`, `schedule`, `team1player1name`,`team1player1nameh`, `team1player2name`,`team1player2nameh`, `team1player1score`, `team1player2score`, `team2player1name`,`team2player1nameh`, `team2player2name`,`team2player2nameh`, `team2player1score`, `team2player2score`, `raidpointsteam1`, `raidpointsteam2`, `tacklepointsteam1`, `tacklepointsteam2`, `alloutpointteam1`, `alloutpointteam2`, `extrapointsteam1`, `extrapointsteam2` FROM `jpp_fixture` WHERE `schedule`='$row->id'")->row();

        }
        return $query;
    }
    function contactus($firstname,$lastname,$email,$phone,$city,$favouriteplayer)
    {
        if($email)
        {
                $query=$this->db->query("INSERT INTO `jpp_contactus`(`firstname`, `lastname`, `email`,`phone`,`city`,`comment`) VALUE('$firstname','$lastname','$email','$phone','$city','$favouriteplayer')");
                $user=$this->db->insert_id();
                if($query)
                {
                  $data['name']=$firstname;
                  $data['email']=$email;
                  $htmltext = $this->load->view('emailer/fancorner', $data, true);
                  $this->menu_model->emailer($htmltext,'Welcome to the JPP Family!',$email,"Sir/Madam");
                    $object = new stdClass();
                    $object->value = true;
                    return $object;
                }
                else{
                 $object = new stdClass();
                $object->value = false;
                return $object;
                }

        }
        else{
                $object = new stdClass();
                $object->value = false;
                return $object;

        }


    }
    function submitClan($name, $email,$json)
    {
        if($email)
        {
                  $query=$this->db->query("INSERT INTO `jpp_clan`(`name`, `email`,`comment`) VALUE('$name','$email','$json')");
                  $clan=$this->db->insert_id();
                      $data['mainname']=$name;
                if($query)
                {
                    for($i=0;$i<sizeof($json);$i++)
                    {
                    $data['name']=$json[$i]["name"];
                    $name=$json[$i]["name"];
                    $data['email']=$json[$i]["email"];
                    $email=$json[$i]["email"];
                    $htmltext = $this->load->view('emailer/pantherclan', $data, true);
                    $this->menu_model->emailer($htmltext,'Panther Family',$email,"Sir/Madam");
                    }


                    $object = new stdClass();
                    $object->value = true;
                    return $object;
                }
                else{
                 $object = new stdClass();
                $object->value = false;
                return $object;
                }

        }
        else{
                $object = new stdClass();
                $object->value = false;
                return $object;

        }


    }
    
     
    //Avinash Functions
    
    public function getGuessWho()
    {
        $query=$this->db->query("SELECT `id`, `image`, `link`, `status`, `timestamp` FROM `jpp_guesswho` WHERE `status`=1")->row();
  
        if($query)
        {
            $obj->value = true;
            $obj->data = $query;
            return $obj;
        }
        else
        {
            $obj->value = false;
            $obj->data = "No data found";
            return $obj;
        }
    }
      
    public function getJourney()
    {
        $query=$this->db->query("SELECT `id`, `image`, `link`, `status`, `timestamp` FROM `jpp_journey`")->row();
  
        if($query)
        {
            $obj->value = true;
            $obj->data = $query;
            return $obj;
        }
        else
        {
            $obj->value = false;
            $obj->data = "No data found";
            return $obj;
        }
    }
    
      
    public function getCongratulation()
    {
        $query=$this->db->query("SELECT `id`, `image`, `link`, `status`, `timestamp` FROM `jpp_congratulation`")->row();
  
        if($query)
        {
            $obj->value = true;
            $obj->data = $query;
            return $obj;
        }
        else
        {
            $obj->value = false;
            $obj->data = "No data found";
            return $obj;
        }
    }
    
public function getSinglePlayer($id)
{
    $query['player']=$this->db->query("SELECT `id`, `order`, `type`, `name`, `nationality`, `jerseyno`, `about`, `dob`, `hname`, `hnationality`, `habout`, `smallimage`, `bigimage`, `fb`, `twitter`, `instagram`, `nativeplace`, `weight`, `height`, `status`, `nativeplacehindi` FROM `jpp_players` WHERE `id`=$id")->row();
    $query['player']->career=$this->db->query("SELECT `id`, `player`, `matchplayed`, `totalpoints`, `totalraidpoints`, `totaldefencepoints`, `raids`, `successfulraids`, `unsuccessfulraids`, `emptyraids`, `tackles`, `successfultackles`, `unsuccessfultackles`, `greencards`, `redcards`, `yellowcards`,`status` FROM `career` WHERE `player`=$id")->row();
    $query['player']->current=$this->db->query("SELECT `id`, `player`, `matchplayed`, `totalpoints`, `totalraidpoints`, `totaldefencepoints`, `raids`, `successfulraids`, `unsuccessfulraids`, `emptyraids`, `tackles`, `successfultackles`, `unsuccessfultackles`, `greencards`, `redcards`, `yellowcards`,`status` FROM `current` WHERE `player`=$id")->row();
    $query['player']->lastseason=$this->db->query("SELECT `id`, `player`, `matchplayed`, `totalpoints`, `totalraidpoints`, `totaldefencepoints`, `raids`, `successfulraids`, `unsuccessfulraids`, `emptyraids`, `tackles`, `successfultackles`, `unsuccessfultackles`, `greencards`, `redcards`, `yellowcards`,`status` FROM `lastseason` WHERE `player`=$id")->row();
    
  $query['tournamentplayed']=$this->db->query("SELECT `id`, `player`, `name`,`namehindi`, `year` FROM `tournamentplayed` WHERE `player`=$id")->result();
  $query['achievmant']=$this->db->query("SELECT `id`, `player`, `name`,`namehindi`, `year` FROM `achievment` WHERE `player`=$id")->result();
    
  $query['alsoview']=$this->db->query("SELECT `id`, `order`, `type`, `name`, `nationality`, `jerseyno`, `about`, `dob`, `hname`, `hnationality`, `habout`, `smallimage`, `bigimage`, `fb`, `twitter`, `instagram`, `nativeplace`, `weight`, `height`, `status`, `nativeplacehindi` FROM `jpp_players` WHERE `id`!=$id ")->result();
    
  if($query)
  {
    $obj->value = true;
    $obj->data = $query;
    return $obj;
  }
  else
  {
    $obj->value = false;
    $obj->data = "No data found";
    return $obj;
  }
}
    
    public function getPantherWorldGuessWho()
    {
        $query=$this->db->query("SELECT `id`, `image`, `link`, `status`, `timestamp` FROM `jpp_pantherworldguesswho` WHERE `status`=1")->row();
  
        if($query)
        {
            $obj->value = true;
            $obj->data = $query;
            return $obj;
        }
        else
        {
            $obj->value = false;
            $obj->data = "No data found";
            return $obj;
        }
    }
    public function getallseason()
    {
         $query=$this->db->query("SELECT `jpp_season`.`id` AS `id` , `jpp_season`.`name` AS `name`,`jpp_season`.`orderno`  FROM `jpp_season` ORDER BY `orderno` ASC")->result();
        return $query;
    }
    
}
?>
