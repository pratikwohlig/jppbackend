<?php
if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );
class User_model extends CI_Model
{
	protected $id,$username ,$password;
	public function validate($username,$password )
	{

		$password=md5($password);
		$query ="SELECT `user`.`id`,`user`.`name` as `name`,`email`,`user`.`accesslevel`,`accesslevel`.`name` as `access` FROM `user`
		INNER JOIN `accesslevel` ON `user`.`accesslevel` = `accesslevel`.`id`
		WHERE `email` LIKE '$username' AND `password` LIKE '$password' AND `status`=1 AND  `accesslevel` IN (1,2) ";
		$row =$this->db->query( $query );
		if ( $row->num_rows() > 0 ) {
			$row=$row->row();
			$this->id       = $row->id;
			$this->name = $row->name;
			$this->email = $row->email;
			$newdata        = array(
				'id' => $this->id,
				'email' => $this->email,
				'name' => $this->name ,
				'accesslevel' => $row->accesslevel ,
				'logged_in' => 'true',
			);
			$this->session->set_userdata( $newdata );
			return true;
		} //count( $row_array ) == 1
		else
			return false;
	}


	public function create($name,$email,$password,$accesslevel,$status,$socialid,$logintype,$image,$json,$firstname,$lastname,$phone,$billingaddress,$billingcity,$billingstate,$billingcountry,$billingpincode,$billingcontact,$shippingaddress,$shippingcity,$shippingstate,$shippingcountry,$shippingpincode,$shippingcontact,$shippingname,$currency,$credit,$companyname,$registrationno,$vatnumber,$country,$fax,$gender)
	{
		$data  = array(
			'name' => $name,
			'email' => $email,
			'password' =>md5($password),
			'accesslevel' => $accesslevel,
			'status' => $status,
            'socialid'=> $socialid,
            'image'=> $image,
            'json'=> $json,
			'firstname' => $firstname,
			'lastname' => $lastname,
			'phone' => $phone,
			'billingaddress' => $billingaddress,
			'billingcity' => $billingcity,
			'billingstate' => $billingstate,
			'billingcountry' => $billingcountry,
			'billingpincode' => $billingpincode,
			'billingcontact' => $billingcontact,
			'shippingaddress' => $shippingaddress,
			'shippingcity' => $shippingcity,
			'shippingstate' => $shippingstate,
			'shippingcountry' => $shippingcountry,
			'shippingpincode' => $shippingpincode,
			'shippingcontact' => $shippingcontact,
			'shippingname' => $shippingname,
			'currency' => $currency,
			'credit' => $credit,
			'companyname' => $companyname,
			'registrationno' => $registrationno,
			'vatnumber' => $vatnumber,
			'country' => $country,
			'fax' => $fax,
			'gender' => $gender
		);
		$query=$this->db->insert( 'user', $data );
		$id=$this->db->insert_id();

		if(!$query)
			return  0;
		else
			return  1;
	}

	function viewusers($startfrom,$totallength)
	{
		$user = $this->session->userdata('accesslevel');
		$query="SELECT DISTINCT `user`.`id` as `id`,`user`.`firstname` as `firstname`,`user`.`lastname` as `lastname`,`accesslevel`.`name` as `accesslevel`	,`user`.`email` as `email`,`user`.`contact` as `contact`,`user`.`status` as `status`,`user`.`accesslevel` as `access`
		FROM `user`
	   INNER JOIN `accesslevel` ON `user`.`accesslevel`=`accesslevel`.`id`  ";
	   $accesslevel=$this->session->userdata('accesslevel');
	   if($accesslevel==1)
		{
			$query .= " ";
		}
		else if($accesslevel==2)
		{
			$query .= " WHERE `user`.`accesslevel`> '$accesslevel' ";
		}

	   $query.=" ORDER BY `user`.`id` ASC LIMIT $startfrom,$totallength";
		$query=$this->db->query($query)->result();

        $return=new stdClass();
        $return->query=$query;
        $return->totalcount=$this->db->query("SELECT count(*) as `totalcount` FROM `user`
	   INNER JOIN `accesslevel` ON `user`.`accesslevel`=`accesslevel`.`id`  ")->row();
        $return->totalcount=$return->totalcount->totalcount;
		return $return;
	}
	public function beforeedit( $id )
	{
		$this->db->where( 'id', $id );
		$query=$this->db->get( 'user' )->row();
		return $query;
	}

	public function edit($id,$name,$email,$password,$accesslevel,$status,$socialid,$logintype,$image,$json,$firstname,$lastname,$phone,$billingaddress,$billingcity,$billingstate,$billingcountry,$billingpincode,$billingcontact,$shippingaddress,$shippingcity,$shippingstate,$shippingcountry,$shippingpincode,$shippingcontact,$shippingname,$currency,$credit,$companyname,$registrationno,$vatnumber,$country,$fax,$gender)
	{
		$data  = array(
			'name' => $name,
			'email' => $email,
			'accesslevel' => $accesslevel,
			'status' => $status,
            'socialid'=> $socialid,
            'image'=> $image,
            'json'=> $json,
			'logintype' => $logintype,
            'firstname' => $firstname,
			'lastname' => $lastname,
			'phone' => $phone,
			'billingaddress' => $billingaddress,
			'billingcity' => $billingcity,
			'billingstate' => $billingstate,
			'billingcountry' => $billingcountry,
			'billingpincode' => $billingpincode,
			'billingcontact' => $billingcontact,
			'shippingaddress' => $shippingaddress,
			'shippingcity' => $shippingcity,
			'shippingstate' => $shippingstate,
			'shippingcountry' => $shippingcountry,
			'shippingpincode' => $shippingpincode,
			'shippingcontact' => $shippingcontact,
			'shippingname' => $shippingname,
			'currency' => $currency,
			'credit' => $credit,
			'companyname' => $companyname,
			'registrationno' => $registrationno,
			'vatnumber' => $vatnumber,
			'country' => $country,
			'fax' => $fax,
			'gender' => $gender
		);
		if($password != "")
			$data['password'] =md5($password);
		$this->db->where( 'id', $id );
		$query=$this->db->update( 'user', $data );

		return 1;
	}

	public function getuserimagebyid($id)
	{
		$query=$this->db->query("SELECT `image` FROM `user` WHERE `id`='$id'")->row();
		return $query;
	}
	function deleteuser($id)
	{
		$query=$this->db->query("DELETE FROM `user` WHERE `id`='$id'");
	}
	function changepassword($id,$password)
	{
		$data  = array(
			'password' =>md5($password),
		);
		$this->db->where('id',$id);
		$query=$this->db->update( 'user', $data );
		if(!$query)
			return  0;
		else
			return  1;
	}

    public function getuserdropdown()
	{
		$query=$this->db->query("SELECT * FROM `user`  ORDER BY `id` ASC")->result();
		$return=array(
		"" => ""
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}

		return $return;
	}

	public function getaccesslevels()
	{
		$return=array();
		$query=$this->db->query("SELECT * FROM `accesslevel` ORDER BY `id` ASC")->result();
		$accesslevel=$this->session->userdata('accesslevel');
			foreach($query as $row)
			{
				if($accesslevel==1)
				{
					$return[$row->id]=$row->name;
				}
				else if($accesslevel==2)
				{
					if($row->id > $accesslevel)
					{
						$return[$row->id]=$row->name;
					}
				}
				else if($accesslevel==3)
				{
					if($row->id > $accesslevel)
					{
						$return[$row->id]=$row->name;
					}
				}
				else if($accesslevel==4)
				{
					if($row->id == $accesslevel)
					{
						$return[$row->id]=$row->name;
					}
				}
			}

		return $return;
	}
    public function getstatusdropdown()
	{
		$query=$this->db->query("SELECT * FROM `statuses`  ORDER BY `id` ASC")->result();
		$return=array(
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}

		return $return;
	}

	function changestatus($id)
	{
		$query=$this->db->query("SELECT `status` FROM `user` WHERE `id`='$id'")->row();
		$status=$query->status;
		if($status==1)
		{
			$status=0;
		}
		else if($status==0)
		{
			$status=1;
		}
		$data  = array(
			'status' =>$status,
		);
		$this->db->where('id',$id);
		$query=$this->db->update( 'user', $data );
		if(!$query)
			return  0;
		else
			return  1;
	}
	function editaddress($id,$address,$city,$pincode)
	{
		$data  = array(
			'address' => $address,
			'city' => $city,
			'pincode' => $pincode,
		);

		$this->db->where( 'id', $id );
		$query=$this->db->update( 'user', $data );
		if($query)
		{
			$this->saveuserlog($id,'User Address Edited');
		}
		return 1;
	}

	function saveuserlog($id,$status)
	{
//		$fromuser = $this->session->userdata('id');
		$data2  = array(
			'onuser' => $id,
			'status' => $status
		);
		$query2=$this->db->insert( 'userlog', $data2 );
        $query=$this->db->query("UPDATE `user` SET `status`='$status' WHERE `id`='$user'");
	}
    function signup($email,$password)
    {
         $password=md5($password);
        $query=$this->db->query("SELECT `id` FROM `user` WHERE `email`='$email' ");
        if($query->num_rows == 0)
        {
            $this->db->query("INSERT INTO `user` (`id`, `firstname`, `lastname`, `password`, `email`, `website`, `description`, `eventinfo`, `contact`, `address`, `city`, `pincode`, `dob`, `accesslevel`, `timestamp`, `facebookuserid`, `newsletterstatus`, `status`,`logo`,`showwebsite`,`eventsheld`,`topeventlocation`) VALUES (NULL, NULL, NULL, '$password', '$email', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP, NULL, NULL, NULL,NULL, NULL, NULL,NULL);");
            $user=$this->db->insert_id();
            $newdata = array(
                'email'     => $email,
                'password' => $password,
                'logged_in' => true,
                'id'=> $user
            );

            $this->session->set_userdata($newdata);

          //  $queryorganizer=$this->db->query("INSERT INTO `organizer`(`name`, `description`, `email`, `info`, `website`, `contact`, `user`) VALUES(NULL,NULL,NULL,NULL,NULL,NULL,'$user')");


           return $user;
        }
        else
         return false;


    }
    function loginold($email,$password)
    {
        $password=md5($password);
        $query=$this->db->query("SELECT `id` FROM `user` WHERE `email`='$email' AND `password`= '$password'");
        if($query->num_rows > 0)
        {
            $user=$query->row();
            $user=$user->id;


            $newdata = array(
                'email'     => $email,
                'password' => $password,
                'logged_in' => true,
                'id'=> $user
            );

            $this->session->set_userdata($newdata);
            //print_r($newdata);
            return $user;
        }
        else
        return false;


    }
    function authenticateold() {
         $is_logged_in = $this->session->userdata( 'logged_in' );
//        return $is_logged_in;
        if ( $is_logged_in != true) {
            return false;
        } //$is_logged_in !== 'true' || !isset( $is_logged_in )
        else {
		$userid=$this->session->userdata('id');
		$query=$this->db->query("SELECT * FROM `user` WHERE `id`='$userid'")->row();
           // $userid = $this->session->userdata( );
         return $query;
        }
    }

    function frontendauthenticate($email,$password)
    {
        $query=$this->db->query("SELECT `id`, `name`, `email`, `accesslevel`, `timestamp`, `status`, `image`, `username`, `socialid`, `logintype`, `json` FROM `user` WHERE `email` LIKE '$email' AND `password`='$password' LIMIT 0,1");
        if ($query->num_rows() > 0)
        {
        	$query=$query->row();
            $data['user']=$query;
            $id=$query->id;
            $status=$query->status;
            if($status==3)
            {
//                $updatequery=$this->db->query("UPDATE `user` SET `status`=4 WHERE `id`='$id'");
                $status=4;
//                if($updatequery)
//                {
                    $this->saveuserlog($id,$status);
//                }
            }
            else if($status==1)
            {
                $status=2;
//                $updatequery=$this->db->query("UPDATE `user` SET `status`=2 WHERE `id`='$id'");
//                if($updatequery)
//                {
                    $this->saveuserlog($id,$status);
//                }
            }

        $query2=$this->db->query("SELECT `id`, `name`, `email`, `accesslevel`, `timestamp`, `status`, `image`, `username`, `socialid`, `logintype`, `json` FROM `user` WHERE `id`='$id' LIMIT 0,1")->row();

        $newdata        = array(
				'id' => $query2->id,
				'email' => $query2->email,
				'name' => $query2->name ,
				'accesslevel' => $query2->accesslevel ,
				'status' => $query2->status ,
				'logged_in' => 'true',
			);
			$this->session->set_userdata( $newdata );


            $accesslevel=$query->accesslevel;
            if($accesslevel==2)
            {
            $data['category']=$this->db->query("SELECT `id`,`categoryid`,`operatorid` FROM `operatorcategory` WHERE `operatorid`='$id'")->result();
            }
        	return $data;
        }
        else
        {
        	return false;
        }
    }

    function frontendregister($name,$email,$password,$socialid,$logintype,$json)
    {
        $data  = array(
			'name' => $name,
			'email' => $email,
			'password' =>md5($password),
			'accesslevel' => 3,
			'status' => 2,
            'socialid'=> $socialid,
            'json'=> $json,
			'logintype' => $logintype
		);
		$query=$this->db->insert( 'user', $data );
		$id=$this->db->insert_id();
        $queryselect=$this->db->query("SELECT * FROM `user` WHERE `id` LIKE '$id' LIMIT 0,1")->row();

        $accesslevel=$queryselect->accesslevel;
//        $queryselect=$query;
        $data1['user']=$queryselect;
        if($accesslevel==2)
        {
            $data1['category']=$this->db->query("SELECT `id`,`categoryid`,`operatorid` FROM `operatorcategory` WHERE `operatorid`='$id'")->result();
        }
        return $data1;
    }

	function getallinfoofuser($id)
	{
		$user = $this->session->userdata('accesslevel');
		$query="SELECT DISTINCT `user`.`id` as `id`,`user`.`firstname` as `firstname`,`user`.`lastname` as `lastname`,`accesslevel`.`name` as `accesslevel`	,`user`.`email` as `email`,`user`.`contact` as `contact`,`user`.`status` as `status`,`user`.`accesslevel` as `access`
		FROM `user`
	   INNER JOIN `accesslevel` ON `user`.`accesslevel`=`accesslevel`.`id`
       WHERE `user`.`id`='$id'";
		$query=$this->db->query($query)->row();
		return $query;
	}

	public function getlogintypedropdown()
	{
		$query=$this->db->query("SELECT * FROM `logintype`  ORDER BY `id` ASC")->result();
		$return=array(
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}

		return $return;
	}
    public function getgenderdropdown()
	{
		$status= array(
			 "" => "Choose Gender",
			 "1" => "Male",
			 "2" => "Female"
			);
		return $status;
	}
	public function frontendlogout($user)
	{
        $query=$this->db->query("SELECT `id`, `name`, `email`, `accesslevel`, `timestamp`, `status`, `image`, `username`, `socialid`, `logintype`, `json` FROM `user` WHERE `id`='$user' LIMIT 0,1")->row();
        $status=$query->status;
        if($status==4)
        {
            $status=3;
//            $updatequery=$this->db->query("UPDATE `user` SET `status`=3 WHERE `id`='$user'");
//            if($updatequery)
//            {
                $this->saveuserlog($id,$status);
//            }
        }
        else if($status==2)
        {
            $status=1;
//            $updatequery=$this->db->query("UPDATE `user` SET `status`=1 WHERE `id`='$user'");
//            if($updatequery)
//            {
                $this->saveuserlog($id,$status);
//            }
        }
//        $updatequery=$this->db->query("UPDATE `user` SET `status`=5 WHERE `id`='$user'");

//        if(!$updatequery)
//            return 0;
//        else
//        {

		$this->session->sess_destroy();
            return 1;
//        }
	}

     function sociallogin($user_profile,$provider)
    {
        $query=$this->db->query("SELECT * FROM `user` WHERE `user`.`socialid`='$user_profile->identifier'");
        if($query->num_rows == 0)
        {

					$googleid="";
					$facebookid="";
					$twitterid="";
					switch($provider)
					{
						case "Google":
						$googleid=$user_profile->identifier;
						break;
						case "Facebook":
						$facebookid=$user_profile->identifier;
						break;
						case "Twitter":
						$twitterid=$user_profile->identifier;
						break;
					}

            $query2=$this->db->query("INSERT INTO `user` (`id`, `name`, `password`, `email`, `accesslevel`, `timestamp`, `status`, `image`, `username`, `socialid`, `logintype`, `json`,`facebook`, `google`, `twitter`) VALUES (NULL, '$user_profile->displayName', '', '$user_profile->email', '3', CURRENT_TIMESTAMP, '1', '$user_profile->photoURL', '', '$user_profile->identifier', '$provider', '', '$facebookid', '$googleid', '$twitterid')");
            $id=$this->db->insert_id();
            $newdata = array(
                'email'     => $user_profile->email,
                'password' => "",
                'logged_in' => true,
                'id'=> $id,
                'name'=> $user_profile->displayName,
                'image'=> $user_profile->photoURL,
                'logintype'=>$provider
            );

            $this->session->set_userdata($newdata);
            print_r($newdata);
            return $newdata;

        }
        else
        {
            $query=$query->row();
            $newdata = array(
                'email'     => $user_profile->email,
                'password' => "",
                'logged_in' => true,
                'id'=> $query->id,
                'name'=> $user_profile->displayName,
                'image'=> $user_profile->photoURL,
                'logintype'=>$provider
            );

            $this->session->set_userdata($newdata);
             print_r($newdata);
            return $newdata;
        }
    }
    function registeruser($firstname,$lastname,$email,$password)
    {
    	$newdata=0;
        $password=md5($password);
        //echo $email;
        $query=$this->db->query("SELECT `id` FROM `user` WHERE `email`='$email'");
				$num=$query->num_rows();

        if($num == 0)
        {
             $this->db->query("INSERT INTO `user`(`firstname`, `lastname`, `email`, `password`) VALUE('$firstname','$lastname','$email','$password')");
            $user=$this->db->insert_id();

            $newdata = array(
                    'id' => $user,
                    'email' => $email,
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'logged_in' => 'true'
            );

            $this->session->set_userdata($newdata);


        }
        else
        {
						$newdata=false;

				}
        return $newdata;

    }
      function loginuser($email,$password)
    {
        $password=md5($password);
        $query=$this->db->query("SELECT `id`,`firstname`,`lastname`,`username`,`name` FROM `user` WHERE `email`='$email' AND `password`= '$password'");
        if($query->num_rows > 0)
        {
            $user=$query->row();
            $userid=$user->id;
            $firstname=$user->firstname;
            $lastname=$user->lastname;
            $username=$user->username;
            $name=$user->name;


            $newdata = array(
                'email'     => $email,
                'firstname'     => $firstname,
                'lastname'     => $lastname,
                'username'     => $username,
                'name'     => $name,
                'logged_in' => 'true',
                'id'=> $userid
            );

            $this->session->set_userdata($newdata);

            return $newdata;
        }
        else
        return false;
    }
        function addToCart($product, $quantity) {
        //$data=$this->cart->contents();

        $sizequery=$this->db->query("SELECT `size`,`name`,`price`,`color`,`image1` FROM `fynx_product` WHERE `id` = '$product' LIMIT 0,1")->row();
        $size=$sizequery->size;
        $productname=$sizequery->name;
        $price=$sizequery->price;
        $color=$sizequery->color;
        $image=$sizequery->image1;

        $getsize=$this->db->query("SELECT `id`, `status`, `name` FROM `fynx_size` WHERE `id`='$size'")->row();
        $sizeid=$getsize->id;
        $sizename=$getsize->name;
        $getcolor=$this->db->query("SELECT `id`, `name`, `status`, `timestamp` FROM `fynx_color` WHERE `id`='$color'")->row();
        $colorid=$getcolor->id;
        $colorname=$getcolor->name;
        $data = array(
               'id'      => $product,
               'name'      => '1',
               'qty'     => $quantity,
               'price'   => $price,
               'image'   => $image,
                'options' =>array(
                    'realname' => $productname,
                    'sizeid' => $sizeid,
                    'colorid' => $colorid,
                    'sizename' => $sizename,
                    'colorname' => $colorname
                )
        );
        $userid=$this->session->userdata('id');
        if($userid=="")
        {
            $this->cart->insert($data);
            $returnval=$this->cart->insert($data);
            if(!empty($returnval)){
            return true;
            }
            else{
            return false;
            }
        }
        else
        {
            $query=$this->db->query("INSERT INTO `fynx_cart`(`user`, `product`, `quantity`, `timestamp`,`size`,`color`) VALUES ('$userid','$product','$quantity',NULL,'$size','$color')");
            $this->cart->insert($data);
            if($query)
            return true;
            else
            return false;
        }

    }
    function deletecartfromdb($id,$user){
    $query=$this->db->query("DELETE FROM `fynx_cart` WHERE `product`='$id' AND `user`='$user'");
    }

		public function getlanguagedropdown()
	{
		$language= array(
			 "" => "Choose Language",
			 "1" => "English",
			 "2" => "Hindi"
			);
		return $language;
	}
    
    //avinash functions
    
    
    function frontendsignup($firstname, $lastname, $phoneno, $email,$password) 
    {
         $password=md5($password);   
        $query=$this->db->query("SELECT `id` FROM `user` WHERE `email`='$email'");
        if($query->num_rows == 0)
        {
            $dig = 3; // Amount of digits
            $min = pow(10,$dig);
            $max = pow(10,$dig+1)-1;
            $value = rand($min, $max);
            
            $fullname=$firstname." ".$lastname;
            $this->db->query("INSERT INTO `user`(`firstname`, `lastname`, `password`, `email`, `phone`, `accesslevel`, `status`,`otp`) VALUES ('$firstname','$lastname','$password','$email','$phoneno','3','2','$value')");
            $user=$this->db->insert_id();
            
            $hashvalue=base64_encode ($user."&jpp");
            $link="<a href='http://jaipurpinkpnthers.com/signupotp/$hashvalue'><img src='http://jaipurpinkpanthers.com/emailers/invited/click.png' /></a> To Verify your Account.";
            $data["otp"]=$value;
            $data["fullname"]=$fullname;
            $data["link"]=$link;
            $htmltext = $this->load->view('emailer/signup', $data, true);
            $this->menu_model->emailer($htmltext,'Welcome to the JPP Family!',$email,$fullname);
//            return $return;
//            $newdata = array(
//                'firstname' => $firstname,
//                'lastname' => $lastname,
//                'email'     => $email,
//                'accesslevel' => 3,
//                'logged_in' => true,
//                'id'=> $user
//            );
//            $this->session->set_userdata($newdata);
            
//           return $newdata;
        }
        else
         return false;
        
        
    }
    
    function login($email,$password) 
    {
        $password=md5($password);
        $query=$this->db->query("SELECT `id`,`firstname`,`lastname`,`password`,`email` FROM `user` WHERE `email`='$email' AND `password`= '$password'");
        
        if($query->num_rows > 0)
        {
            $user=$query->row();
            $userid=$user->id;
            $firstname=$user->firstname;
            $lastname=$user->lastname;
            $newdata = array(
                'email'     => $email,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'logged_in' => true,
                'id'=> $userid
            );
            $this->session->set_userdata($newdata);
            return $this->session->all_userdata();
        }
        else
        return false;
    }
    function authenticate() {
        $is_logged_in = $this->session->userdata('logged_in');
//        print_r($this->session->userdata);
        //print_r($is_logged_in);
        if ( $is_logged_in != 'true' || !isset($is_logged_in) ) {
            return false;
        } //$is_logged_in !== 'true' || !isset( $is_logged_in )
        else {
            return $this->session->all_userdata();
        }
    }
    
    
    
    function signupotpsubmit($hashcode,$otp)
    {
        $normalfromhash=base64_decode ($hashcode);
        $returnvalue=explode("&",$normalfromhash);
//        print_r($returnvalue);
//        echo $returnvalue[0]."<br>";
        $userid=$returnvalue[0];
        
        $userdetails=$this->db->query("SELECT * FROM `user` WHERE `id`='$userid' AND `otp`='$otp'")->row();
        if(!empty($userdetails))
        {
            $userdetailsotp=$userdetails->otp;
            $userdetailsfirstname=$userdetails->firstname;
            $userdetailslastname=$userdetails->lastname;
            $userdetailsemail=$userdetails->email;
            $userdetailsid=$userdetails->id;
            $updateuser=$this->db->query("UPDATE `user` SET `status`='1' WHERE `id`='$userdetailsid'");
            $newdata = array(
                'firstname' => $userdetailsfirstname,
                'lastname' => $userdetailslastname,
                'email'     => $userdetailsemail,
                'accesslevel' => 3,
                'logged_in' => true,
                'id'=> $userdetailsid
            );
            $this->session->set_userdata($newdata);

            return $newdata;
        }
        else
        {
            return false;
        }
         
    }

	function getidbyemail($useremail)
	{
		$query = $this->db->query("SELECT `id` FROM `user`
		WHERE `email`='$useremail'")->row();
        $userid=$query->id;
		return $userid;
	}
    
    
    function forgotpasswordsubmit($hashcode,$password,$forgototp)
    {
        $normalfromhash=base64_decode ($hashcode);
        $returnvalue=explode("&",$normalfromhash);
//        print_r($returnvalue);
//        echo $returnvalue[0]."<br>";
        $userid=$returnvalue[0];
        $password=md5($password);
        
        $checkotp=$this->db->query("SELECT * FROM `user` WHERE `id`='$userid' AND `forgototp`='$forgototp'")->row();
        if(!empty($checkotp))
        {
            $query=$this->db->query("UPDATE `user` SET `password`='$password' WHERE `id`='$userid'");

            $getemailbyid=$this->db->query("SELECT `email`,`firstname`,`lastname` FROM `user` WHERE `id`='$userid'")->row();
            $email=$getemailbyid->email;
            $firstname=$getemailbyid->firstname;
            $lastname=$getemailbyid->lastname;
            $fullname=$firstname." ".$lastname;

            $link="<a href='http://jaipurpinkpnthers.com/login'><img src='http://jaipurpinkpanthers.com/emailers/invited/click.png' /></a> To Login.";
            $data["fullname"]=$fullname;
            $data["link"]=$link;
    //            
    //            $dig = 3; // Amount of digits
    //            $min = pow(10,$dig);
    //            $max = pow(10,$dig+1)-1;
    //            $value = rand($min, $max);
    //            
    //            $this->db->update("UPDATE `user` SET `forgototp`='$value',`forgototptimestamp`=NULL  WHERE `id`='$userid'");

            $htmltext = $this->load->view('emailer/passwordchangesuccess', $data, true);
            $this->menu_model->emailer($htmltext,'Forgot Password!',$email,$fullname);
            return true;
        }
        else
        {
            return false;
        }
        
        if(!$query)
			return  0;
		else
			return  1;
    }

    
    
}
?>
