<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Json extends CI_Controller
{
    public function __construct()
    {
        // Call the Model constructor
    parent::__construct();
        $this->db->query("SET time_zone='+5:30'");
    }

    public function getallstadium()
    {
        $elements = array();
        $elements[0] = new stdClass();
        $elements[0]->field = '`jpp_stadium`.`id`';
        $elements[0]->sort = '1';
        $elements[0]->header = 'ID';
        $elements[0]->alias = 'id';

        $elements = array();
        $elements[1] = new stdClass();
        $elements[1]->field = '`jpp_stadium`.`name`';
        $elements[1]->sort = '1';
        $elements[1]->header = 'Name';
        $elements[1]->alias = 'name';

        $search = $this->input->get_post('search');
        $pageno = $this->input->get_post('pageno');
        $orderby = $this->input->get_post('orderby');
        $orderorder = $this->input->get_post('orderorder');
        $maxrow = $this->input->get_post('maxrow');
        if ($maxrow == '') {
        }
        if ($orderby == '') {
            $orderby = 'id';
            $orderorder = 'ASC';
        }
        $data['message'] = $this->chintantable->query($pageno, $maxrow, $orderby, $orderorder, $search, $elements, 'FROM `jpp_stadium`');
        $this->load->view('json', $data);
    }
    public function getsinglestadium()
    {
        $id = $this->input->get_post('id');
        $data['message'] = $this->stadium_model->getsinglestadium($id);
        $this->load->view('json', $data);
    }
    public function getallpoint()
    {
      
$data['message'] = $this->restapi_model->getAllPoints();
        $this->load->view('json', $data);
    }
    public function getsinglepoint()
    {
        $id = $this->input->get_post('id');
        $data['message'] = $this->point_model->getsinglepoint($id);
        $this->load->view('json', $data);
    }
    public function getallschedule()
    {
        $elements = array();
        $elements[0] = new stdClass();
        $elements[0]->field = '`jpp_schedule`.`id`';
        $elements[0]->sort = '1';
        $elements[0]->header = 'ID';
        $elements[0]->alias = 'id';

        $elements = array();
        $elements[1] = new stdClass();
        $elements[1]->field = '`jpp_schedule`.`stadium`';
        $elements[1]->sort = '1';
        $elements[1]->header = 'stadium';
        $elements[1]->alias = 'stadium';

        $elements = array();
        $elements[2] = new stdClass();
        $elements[2]->field = '`jpp_schedule`.`team1`';
        $elements[2]->sort = '1';
        $elements[2]->header = 'Team1';
        $elements[2]->alias = 'team1';

        $elements = array();
        $elements[3] = new stdClass();
        $elements[3]->field = '`jpp_schedule`.`team2`';
        $elements[3]->sort = '1';
        $elements[3]->header = 'Team2';
        $elements[3]->alias = 'team2';

        $elements = array();
        $elements[4] = new stdClass();
        $elements[4]->field = '`jpp_schedule`.`bookticket`';
        $elements[4]->sort = '1';
        $elements[4]->header = 'Book Ticket';
        $elements[4]->alias = 'bookticket';

        $elements = array();
        $elements[5] = new stdClass();
        $elements[5]->field = '`jpp_schedule`.`timestamp`';
        $elements[5]->sort = '1';
        $elements[5]->header = 'Timestamp';
        $elements[5]->alias = 'timestamp';

        $search = $this->input->get_post('search');
        $pageno = $this->input->get_post('pageno');
        $orderby = $this->input->get_post('orderby');
        $orderorder = $this->input->get_post('orderorder');
        $maxrow = $this->input->get_post('maxrow');
        if ($maxrow == '') {
        }
        if ($orderby == '') {
            $orderby = 'id';
            $orderorder = 'ASC';
        }
        $data['message'] = $this->chintantable->query($pageno, $maxrow, $orderby, $orderorder, $search, $elements, 'FROM `jpp_schedule`');
        $this->load->view('json', $data);
    }
    public function getsingleschedule()
    {
        $id = $this->input->get_post('id');
        $data['message'] = $this->schedule_model->getsingleschedule($id);
        $this->load->view('json', $data);
    }
    public function getallshop()
    {
        $elements = array();
        $elements[0] = new stdClass();
        $elements[0]->field = '`jpp_shop`.`id`';
        $elements[0]->sort = '1';
        $elements[0]->header = 'ID';
        $elements[0]->alias = 'id';

        $elements = array();
        $elements[1] = new stdClass();
        $elements[1]->field = '`jpp_shop`.`order`';
        $elements[1]->sort = '1';
        $elements[1]->header = 'Order';
        $elements[1]->alias = 'order';

        $elements = array();
        $elements[2] = new stdClass();
        $elements[2]->field = '`jpp_shop`.`product`';
        $elements[2]->sort = '1';
        $elements[2]->header = 'Product';
        $elements[2]->alias = 'product';

        $elements = array();
        $elements[3] = new stdClass();
        $elements[3]->field = '`jpp_shop`.`image`';
        $elements[3]->sort = '1';
        $elements[3]->header = 'Image';
        $elements[3]->alias = 'image';

        $elements = array();
        $elements[4] = new stdClass();
        $elements[4]->field = '`jpp_shop`.`link`';
        $elements[4]->sort = '1';
        $elements[4]->header = 'Link';
        $elements[4]->alias = 'link';

        $search = $this->input->get_post('search');
        $pageno = $this->input->get_post('pageno');
        $orderby = $this->input->get_post('orderby');
        $orderorder = $this->input->get_post('orderorder');
        $maxrow = $this->input->get_post('maxrow');
        if ($maxrow == '') {
        }
        if ($orderby == '') {
            $orderby = 'id';
            $orderorder = 'ASC';
        }
        $data['message'] = $this->chintantable->query($pageno, $maxrow, $orderby, $orderorder, $search, $elements, 'FROM `jpp_shop`');
        $this->load->view('json', $data);
    }
    public function getsingleshop()
    {
        $id = $this->input->get_post('id');
        $data['message'] = $this->shop_model->getsingleshop($id);
        $this->load->view('json', $data);
    }
    public function getallmerchandize()
    {
        $elements = array();
        $elements[0] = new stdClass();
        $elements[0]->field = '`jpp_merchandize`.`id`';
        $elements[0]->sort = '1';
        $elements[0]->header = 'ID';
        $elements[0]->alias = 'id';

        $elements = array();
        $elements[1] = new stdClass();
        $elements[1]->field = '`jpp_merchandize`.`order`';
        $elements[1]->sort = '1';
        $elements[1]->header = 'Order';
        $elements[1]->alias = 'order';

        $elements = array();
        $elements[2] = new stdClass();
        $elements[2]->field = '`jpp_merchandize`.`name`';
        $elements[2]->sort = '1';
        $elements[2]->header = 'Name';
        $elements[2]->alias = 'name';

        $elements = array();
        $elements[3] = new stdClass();
        $elements[3]->field = '`jpp_merchandize`.`image`';
        $elements[3]->sort = '1';
        $elements[3]->header = 'Image';
        $elements[3]->alias = 'image';

        $elements = array();
        $elements[4] = new stdClass();
        $elements[4]->field = '`jpp_merchandize`.`link`';
        $elements[4]->sort = '1';
        $elements[4]->header = 'Link';
        $elements[4]->alias = 'link';

        $search = $this->input->get_post('search');
        $pageno = $this->input->get_post('pageno');
        $orderby = $this->input->get_post('orderby');
        $orderorder = $this->input->get_post('orderorder');
        $maxrow = $this->input->get_post('maxrow');
        if ($maxrow == '') {
        }
        if ($orderby == '') {
            $orderby = 'id';
            $orderorder = 'ASC';
        }
        $data['message'] = $this->chintantable->query($pageno, $maxrow, $orderby, $orderorder, $search, $elements, 'FROM `jpp_merchandize`');
        $this->load->view('json', $data);
    }
    public function getsinglemerchandize()
    {
        $id = $this->input->get_post('id');
        $data['message'] = $this->merchandize_model->getsinglemerchandize($id);
        $this->load->view('json', $data);
    }
    public function getAllGallery()
    {
        $data['message'] = $this->restapi_model->getAllGallery();
        $this->load->view('json', $data);
    }
    public function getWallpaper()
    {
        $type = $this->input->get_post('type');
        $data['message'] = $this->restapi_model->getWallpaper($type);
        $this->load->view('json', $data);
    }
    public function getWallpaperCategoryForDesktop()
    {
        $data['message'] = $this->restapi_model->getWallpaperCategoryForDesktop();
        $this->load->view('json', $data);
    }
    public function getAllVideoGallery()
    {
        $data['message'] = $this->restapi_model->getAllVideoGallery();
        $this->load->view('json', $data);
    }
    public function getGallerySlide()
    {
        $id = $this->input->get_post('galleryid');
        $data['message'] = $this->restapi_model->getGallerySlide($id);
        $this->load->view('json', $data);
    }
    public function getVideos()
    {
        $id = $this->input->get_post('videogalleryid');
        $data['message'] = $this->restapi_model->getVideos($id);
        $this->load->view('json', $data);
    }
    public function getAllSliders()
    {
        $data['message'] = $this->restapi_model->getAllSliders();
        $this->load->view('json', $data);
    }
    public function getsinglegallery()
    {
        $id = $this->input->get_post('id');
        $data['message'] = $this->gallery_model->getsinglegallery($id);
        $this->load->view('json', $data);
    }
    public function getallgalleryslide()
    {
        $elements = array();
        $elements[0] = new stdClass();
        $elements[0]->field = '`jpp_galleryslide`.`id`';
        $elements[0]->sort = '1';
        $elements[0]->header = 'ID';
        $elements[0]->alias = 'id';

        $elements = array();
        $elements[1] = new stdClass();
        $elements[1]->field = '`jpp_galleryslide`.`order`';
        $elements[1]->sort = '1';
        $elements[1]->header = 'Order';
        $elements[1]->alias = 'order';

        $elements = array();
        $elements[2] = new stdClass();
        $elements[2]->field = '`jpp_galleryslide`.`gallery`';
        $elements[2]->sort = '1';
        $elements[2]->header = 'Gallery';
        $elements[2]->alias = 'gallery';

        $elements = array();
        $elements[3] = new stdClass();
        $elements[3]->field = '`jpp_galleryslide`.`name`';
        $elements[3]->sort = '1';
        $elements[3]->header = 'Name';
        $elements[3]->alias = 'name';

        $elements = array();
        $elements[4] = new stdClass();
        $elements[4]->field = '`jpp_galleryslide`.`image`';
        $elements[4]->sort = '1';
        $elements[4]->header = 'Image';
        $elements[4]->alias = 'image';

        $search = $this->input->get_post('search');
        $pageno = $this->input->get_post('pageno');
        $orderby = $this->input->get_post('orderby');
        $orderorder = $this->input->get_post('orderorder');
        $maxrow = $this->input->get_post('maxrow');
        if ($maxrow == '') {
        }
        if ($orderby == '') {
            $orderby = 'id';
            $orderorder = 'ASC';
        }
        $data['message'] = $this->chintantable->query($pageno, $maxrow, $orderby, $orderorder, $search, $elements, 'FROM `jpp_galleryslide`');
        $this->load->view('json', $data);
    }
    public function getsinglegalleryslide()
    {
        $id = $this->input->get_post('id');
        $data['message'] = $this->galleryslide_model->getsinglegalleryslide($id);
        $this->load->view('json', $data);
    }
    public function getallnews()
    {
        $data['message'] = $this->restapi_model->getallnews();
        $this->load->view('json', $data);
    }
    public function getsinglenews()
    {
        $id = $this->input->get_post('id');
        $data['message'] = $this->news_model->getsinglenews($id);
        $this->load->view('json', $data);
    }
    public function getallplayers()
    {
        $elements = array();
        $elements[0] = new stdClass();
        $elements[0]->field = '`jpp_players`.`id`';
        $elements[0]->sort = '1';
        $elements[0]->header = 'ID';
        $elements[0]->alias = 'id';

        $elements = array();
        $elements[1] = new stdClass();
        $elements[1]->field = '`jpp_players`.`order`';
        $elements[1]->sort = '1';
        $elements[1]->header = 'Order';
        $elements[1]->alias = 'order';

        $elements = array();
        $elements[2] = new stdClass();
        $elements[2]->field = '`jpp_players`.`type`';
        $elements[2]->sort = '1';
        $elements[2]->header = 'Type';
        $elements[2]->alias = 'type';

        $elements = array();
        $elements[3] = new stdClass();
        $elements[3]->field = '`jpp_players`.`name`';
        $elements[3]->sort = '1';
        $elements[3]->header = 'Name';
        $elements[3]->alias = 'name';

        $elements = array();
        $elements[4] = new stdClass();
        $elements[4]->field = '`jpp_players`.`nationality`';
        $elements[4]->sort = '1';
        $elements[4]->header = 'Nationality';
        $elements[4]->alias = 'nationality';

        $elements = array();
        $elements[5] = new stdClass();
        $elements[5]->field = '`jpp_players`.`jerseyno`';
        $elements[5]->sort = '1';
        $elements[5]->header = 'Jerseyno';
        $elements[5]->alias = 'jerseyno';

        $elements = array();
        $elements[6] = new stdClass();
        $elements[6]->field = '`jpp_players`.`about`';
        $elements[6]->sort = '1';
        $elements[6]->header = 'About';
        $elements[6]->alias = 'about';

        $elements = array();
        $elements[7] = new stdClass();
        $elements[7]->field = '`jpp_players`.`dob`';
        $elements[7]->sort = '1';
        $elements[7]->header = 'Dob';
        $elements[7]->alias = 'dob';

        $search = $this->input->get_post('search');
        $pageno = $this->input->get_post('pageno');
        $orderby = $this->input->get_post('orderby');
        $orderorder = $this->input->get_post('orderorder');
        $maxrow = $this->input->get_post('maxrow');
        if ($maxrow == '') {
        }
        if ($orderby == '') {
            $orderby = 'id';
            $orderorder = 'ASC';
        }
        $data['message'] = $this->chintantable->query($pageno, $maxrow, $orderby, $orderorder, $search, $elements, 'FROM `jpp_players`');
        $this->load->view('json', $data);
    }
    public function getsingleplayers()
    {
        $id = $this->input->get_post('id');
        $data['message'] = $this->players_model->getsingleplayers($id);
        $this->load->view('json', $data);
    }
    public function getLatestMatch()
    {
        $data['message'] = $this->restapi_model->getLatestMatch();
        $this->load->view('json', $data);
    }

public function getsinglewallpapercategory()
{
    $id = $this->input->get_post('id');
    $data['message'] = $this->wallpapercategory_model->getsinglewallpapercategory($id);
    $this->load->view('json', $data);
}
    public function getallwallpaper()
    {
        $id = $this->input->get_post('wallpapercategory');
        $elements = array();
        $elements[0] = new stdClass();
        $elements[0]->field = '`jpp_wallpaper`.`id`';
        $elements[0]->sort = '1';
        $elements[0]->header = 'ID';
        $elements[0]->alias = 'id';

        $elements[1] = new stdClass();
        $elements[1]->field = '`jpp_wallpaper`.`wallpapercategory`';
        $elements[1]->sort = '1';
        $elements[1]->header = 'Wallpaper Category';
        $elements[1]->alias = 'wallpapercategory';

        $elements[2] = new stdClass();
        $elements[2]->field = '`jpp_wallpaper`.`name`';
        $elements[2]->sort = '1';
        $elements[2]->header = 'Name';
        $elements[2]->alias = 'name';

        $elements[3] = new stdClass();
        $elements[3]->field = '`jpp_wallpaper`.`image1`';
        $elements[3]->sort = '1';
        $elements[3]->header = 'Image1';
        $elements[3]->alias = 'image';

        $search = $this->input->get_post('search');
        $pageno = $this->input->get_post('pageno');
        $orderby = $this->input->get_post('orderby');
        $orderorder = $this->input->get_post('orderorder');
        $maxrow = $this->input->get_post('maxrow');
        if ($maxrow == '') {
            $maxrow=9;
        }
        if ($orderby == '') {
            $orderby = 'id';
            $orderorder = 'ASC';
        }
        $data['message'] = $this->chintantable->query($pageno, $maxrow, $orderby, $orderorder, $search, $elements, 'FROM `jpp_wallpaper`', "WHERE `jpp_wallpaper`.`wallpapercategory`='$id'");
        $this->load->view('json', $data);
    }
    public function getsinglewallpaper()
    {
        $id = $this->input->get_post('id');
        $data['message'] = $this->wallpaper_model->getsinglewallpaper($id);
        $this->load->view('json', $data);
    }
    public function getallpages()
    {
        $elements = array();
        $elements[0] = new stdClass();
        $elements[0]->field = '`jpp_pages`.`id`';
        $elements[0]->sort = '1';
        $elements[0]->header = 'ID';
        $elements[0]->alias = 'id';

        $elements = array();
        $elements[1] = new stdClass();
        $elements[1]->field = '`jpp_pages`.`name`';
        $elements[1]->sort = '1';
        $elements[1]->header = 'Name';
        $elements[1]->alias = 'name';

        $elements = array();
        $elements[2] = new stdClass();
        $elements[2]->field = '`jpp_pages`.`content`';
        $elements[2]->sort = '1';
        $elements[2]->header = 'Content';
        $elements[2]->alias = 'content';

        $search = $this->input->get_post('search');
        $pageno = $this->input->get_post('pageno');
        $orderby = $this->input->get_post('orderby');
        $orderorder = $this->input->get_post('orderorder');
        $maxrow = $this->input->get_post('maxrow');
        if ($maxrow == '') {
        }
        if ($orderby == '') {
            $orderby = 'id';
            $orderorder = 'ASC';
        }
        $data['message'] = $this->chintantable->query($pageno, $maxrow, $orderby, $orderorder, $search, $elements, 'FROM `jpp_pages`');
        $this->load->view('json', $data);
    }
    public function getsinglepages()
    {
        $id = $this->input->get_post('id');
        $data['message'] = $this->pages_model->getsinglepages($id);
        $this->load->view('json', $data);
    }
    public function getallteam()
    {
        $elements = array();
        $elements[0] = new stdClass();
        $elements[0]->field = '`jpp_team`.`id`';
        $elements[0]->sort = '1';
        $elements[0]->header = 'ID';
        $elements[0]->alias = 'id';

        $elements = array();
        $elements[1] = new stdClass();
        $elements[1]->field = '`jpp_team`.`type`';
        $elements[1]->sort = '1';
        $elements[1]->header = 'Type';
        $elements[1]->alias = 'type';

        $elements = array();
        $elements[2] = new stdClass();
        $elements[2]->field = '`jpp_team`.`name`';
        $elements[2]->sort = '1';
        $elements[2]->header = 'Name';
        $elements[2]->alias = 'name';

        $elements = array();
        $elements[3] = new stdClass();
        $elements[3]->field = '`jpp_team`.`image`';
        $elements[3]->sort = '1';
        $elements[3]->header = 'Image';
        $elements[3]->alias = 'image';

        $elements = array();
        $elements[4] = new stdClass();
        $elements[4]->field = '`jpp_team`.`content`';
        $elements[4]->sort = '1';
        $elements[4]->header = 'Content';
        $elements[4]->alias = 'content';

        $search = $this->input->get_post('search');
        $pageno = $this->input->get_post('pageno');
        $orderby = $this->input->get_post('orderby');
        $orderorder = $this->input->get_post('orderorder');
        $maxrow = $this->input->get_post('maxrow');
        if ($maxrow == '') {
        }
        if ($orderby == '') {
            $orderby = 'id';
            $orderorder = 'ASC';
        }
        $data['message'] = $this->chintantable->query($pageno, $maxrow, $orderby, $orderorder, $search, $elements, 'FROM `jpp_team`');
        $this->load->view('json', $data);
    }
    public function getsingleteam()
    {
        $id = $this->input->get_post('id');
        $data['message'] = $this->team_model->getsingleteam($id);
        $this->load->view('json', $data);
    }
    public function getallsponsor()
    {
        $elements = array();
        $elements[0] = new stdClass();
        $elements[0]->field = '`jpp_sponsor`.`id`';
        $elements[0]->sort = '1';
        $elements[0]->header = 'ID';
        $elements[0]->alias = 'id';

        $elements = array();
        $elements[1] = new stdClass();
        $elements[1]->field = '`jpp_sponsor`.`order`';
        $elements[1]->sort = '1';
        $elements[1]->header = 'Order';
        $elements[1]->alias = 'order';

        $elements = array();
        $elements[2] = new stdClass();
        $elements[2]->field = '`jpp_sponsor`.`image`';
        $elements[2]->sort = '1';
        $elements[2]->header = 'Image';
        $elements[2]->alias = 'image';

        $search = $this->input->get_post('search');
        $pageno = $this->input->get_post('pageno');
        $orderby = $this->input->get_post('orderby');
        $orderorder = $this->input->get_post('orderorder');
        $maxrow = $this->input->get_post('maxrow');
        if ($maxrow == '') {
        }
        if ($orderby == '') {
            $orderby = 'id';
            $orderorder = 'ASC';
        }
        $data['message'] = $this->chintantable->query($pageno, $maxrow, $orderby, $orderorder, $search, $elements, 'FROM `jpp_sponsor`');
        $this->load->view('json', $data);
    }
    public function getsinglesponsor()
    {
        $id = $this->input->get_post('id');
        $data['message'] = $this->sponsor_model->getsinglesponsor($id);
        $this->load->view('json', $data);
    }
//function getallvideogallery()
//{
//$elements=array();
//$elements[0]=new stdClass();
//$elements[0]->field="`jpp_videogallery`.`id`";
//$elements[0]->sort="1";
//$elements[0]->header="ID";
//$elements[0]->alias="id";
//
//$elements=array();
//$elements[1]=new stdClass();
//$elements[1]->field="`jpp_videogallery`.`order`";
//$elements[1]->sort="1";
//$elements[1]->header="Order";
//$elements[1]->alias="order";
//
//$elements=array();
//$elements[2]=new stdClass();
//$elements[2]->field="`jpp_videogallery`.`name`";
//$elements[2]->sort="1";
//$elements[2]->header="Name";
//$elements[2]->alias="name";
//
//$elements=array();
//$elements[3]=new stdClass();
//$elements[3]->field="`jpp_videogallery`.`image`";
//$elements[3]->sort="1";
//$elements[3]->header="Image";
//$elements[3]->alias="image";
//
//$search=$this->input->get_post("search");
//$pageno=$this->input->get_post("pageno");
//$orderby=$this->input->get_post("orderby");
//$orderorder=$this->input->get_post("orderorder");
//$maxrow=$this->input->get_post("maxrow");
//if($maxrow=="")
//{
//}
//if($orderby=="")
//{
//$orderby="id";
//$orderorder="ASC";
//}
//$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `jpp_videogallery`");
//$this->load->view("json",$data);
//}
public function getsinglevideogallery()
{
    $id = $this->input->get_post('id');
    $data['message'] = $this->videogallery_model->getsinglevideogallery($id);
    $this->load->view('json', $data);
}
    public function getallvideos()
    {
        $elements = array();
        $elements[0] = new stdClass();
        $elements[0]->field = '`jpp_videos`.`id`';
        $elements[0]->sort = '1';
        $elements[0]->header = 'ID';
        $elements[0]->alias = 'id';

        $elements = array();
        $elements[1] = new stdClass();
        $elements[1]->field = '`jpp_videos`.`videogallery`';
        $elements[1]->sort = '1';
        $elements[1]->header = 'Video Gallery';
        $elements[1]->alias = 'videogallery';

        $elements = array();
        $elements[2] = new stdClass();
        $elements[2]->field = '`jpp_videos`.`order`';
        $elements[2]->sort = '1';
        $elements[2]->header = 'Order';
        $elements[2]->alias = 'order';

        $elements = array();
        $elements[3] = new stdClass();
        $elements[3]->field = '`jpp_videos`.`name`';
        $elements[3]->sort = '1';
        $elements[3]->header = 'Name';
        $elements[3]->alias = 'name';

        $elements = array();
        $elements[4] = new stdClass();
        $elements[4]->field = '`jpp_videos`.`url`';
        $elements[4]->sort = '1';
        $elements[4]->header = 'url';
        $elements[4]->alias = 'url';

        $elements = array();
        $elements[5] = new stdClass();
        $elements[5]->field = '`jpp_videos`.`image`';
        $elements[5]->sort = '1';
        $elements[5]->header = 'Image';
        $elements[5]->alias = 'image';

        $search = $this->input->get_post('search');
        $pageno = $this->input->get_post('pageno');
        $orderby = $this->input->get_post('orderby');
        $orderorder = $this->input->get_post('orderorder');
        $maxrow = $this->input->get_post('maxrow');
        if ($maxrow == '') {
        }
        if ($orderby == '') {
            $orderby = 'id';
            $orderorder = 'ASC';
        }
        $data['message'] = $this->chintantable->query($pageno, $maxrow, $orderby, $orderorder, $search, $elements, 'FROM `jpp_videos`');
        $this->load->view('json', $data);
    }
    public function getsinglevideos()
    {
        $id = $this->input->get_post('id');
        $data['message'] = $this->videos_model->getsinglevideos($id);
        $this->load->view('json', $data);
    }
    public function getallcontactus()
    {
        $elements = array();
        $elements[0] = new stdClass();
        $elements[0]->field = '`jpp_contactus`.`id`';
        $elements[0]->sort = '1';
        $elements[0]->header = 'ID';
        $elements[0]->alias = 'id';

        $elements = array();
        $elements[1] = new stdClass();
        $elements[1]->field = '`jpp_contactus`.`email`';
        $elements[1]->sort = '1';
        $elements[1]->header = 'Email';
        $elements[1]->alias = 'email';

        $elements = array();
        $elements[2] = new stdClass();
        $elements[2]->field = '`jpp_contactus`.`name`';
        $elements[2]->sort = '1';
        $elements[2]->header = 'Name';
        $elements[2]->alias = 'name';

        $elements = array();
        $elements[3] = new stdClass();
        $elements[3]->field = '`jpp_contactus`.`phone`';
        $elements[3]->sort = '1';
        $elements[3]->header = 'Phone';
        $elements[3]->alias = 'phone';

        $elements = array();
        $elements[4] = new stdClass();
        $elements[4]->field = '`jpp_contactus`.`timestamp`';
        $elements[4]->sort = '1';
        $elements[4]->header = 'Timestamp';
        $elements[4]->alias = 'timestamp';

        $elements = array();
        $elements[5] = new stdClass();
        $elements[5]->field = '`jpp_contactus`.`comment`';
        $elements[5]->sort = '1';
        $elements[5]->header = 'Comment';
        $elements[5]->alias = 'comment';

        $search = $this->input->get_post('search');
        $pageno = $this->input->get_post('pageno');
        $orderby = $this->input->get_post('orderby');
        $orderorder = $this->input->get_post('orderorder');
        $maxrow = $this->input->get_post('maxrow');
        if ($maxrow == '') {
        }
        if ($orderby == '') {
            $orderby = 'id';
            $orderorder = 'ASC';
        }
        $data['message'] = $this->chintantable->query($pageno, $maxrow, $orderby, $orderorder, $search, $elements, 'FROM `jpp_contactus`');
        $this->load->view('json', $data);
    }
    public function getsinglecontactus()
    {
        $id = $this->input->get_post('id');
        $data['message'] = $this->contactus_model->getsinglecontactus($id);
        $this->load->view('json', $data);
    }
    public function getallsubscribe()
    {
        $elements = array();
        $elements[0] = new stdClass();
        $elements[0]->field = '`jpp_subscribe`.`id`';
        $elements[0]->sort = '1';
        $elements[0]->header = 'ID';
        $elements[0]->alias = 'id';

        $elements = array();
        $elements[1] = new stdClass();
        $elements[1]->field = '`jpp_subscribe`.`email`';
        $elements[1]->sort = '1';
        $elements[1]->header = 'Email';
        $elements[1]->alias = 'email';

        $elements = array();
        $elements[2] = new stdClass();
        $elements[2]->field = '`jpp_subscribe`.`timestamp`';
        $elements[2]->sort = '1';
        $elements[2]->header = 'Timestamp';
        $elements[2]->alias = 'timestamp';

        $search = $this->input->get_post('search');
        $pageno = $this->input->get_post('pageno');
        $orderby = $this->input->get_post('orderby');
        $orderorder = $this->input->get_post('orderorder');
        $maxrow = $this->input->get_post('maxrow');
        if ($maxrow == '') {
        }
        if ($orderby == '') {
            $orderby = 'id';
            $orderorder = 'ASC';
        }
        $data['message'] = $this->chintantable->query($pageno, $maxrow, $orderby, $orderorder, $search, $elements, 'FROM `jpp_subscribe`');
        $this->load->view('json', $data);
    }
    public function getsinglesubscribe()
    {
        $id = $this->input->get_post('id');
        $data['message'] = $this->subscribe_model->getsinglesubscribe($id);
        $this->load->view('json', $data);
    }
    public function getHomeContent()
    {
        $data['message'] = $this->restapi_model->getHomeContent($id);
        $this->load->view('json', $data);
    }
    public function getSchedule()
    {
        $data['message'] = $this->restapi_model->getSchedulenew();
        $this->load->view('json', $data);
    }
    public function test()
    {
        $data['message'] = $this->restapi_model->getSchedule();
        $this->load->view('json', $data);
    }
      public function contactus() {
        $data = json_decode(file_get_contents('php://input'), true);
        $firstname=$data['firstname'];
        $lastname=$data['lastname'];
        $email=$data['email'];
        $phone=$data['mobile'];
        $data["message"] = $this->restapi_model->contactus($firstname, $lastname, $email, $phone);
        $this->load->view("json", $data);
    }
}
