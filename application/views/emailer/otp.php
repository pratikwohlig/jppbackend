<!DOCTYPE html>
<html>

<head>
    <meata charset="UTF-8">
        <title>Emailer</title>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Dosis:500');
            @import url('https://fonts.googleapis.com/css?family=Damion');

            @font-face {
   font-family: Verdana, sans-serif;
    src: url("../fonts/Verdana.ttf");
} 
            table {
                width: 600px;
                margin: 0 auto;
                border-collapse: collapse;
                background-image:url("http://admin.jaipurpinkpanthers.com/otpimagesnew/bgs.png");
               
            }
/*
            body{
                  background-image:url("http://admin.jaipurpinkpanthers.com/otpimagesnew/bgs.png");
            }
            */
            td {
                font-family: Verdana, sans-serif;
            }
            
            caption>div.logo {
                width: 120px;
                height: auto;
                padding: 5px 0;
                display: inline-block;
            }
            
            /*tbody>tr:nth-child(2)>td {
                font-size: 13pt;
                padding: 25px 0px;
                font-family: Helvetica, sans-serif;
            }*/
            
            tfoot {
                background-color: #4ecaf5;
                 font-family: "Verdana";
                color: white;
                font-size: 15px;
            }
            
            tfoot>ul.list-inline {
                padding-left: 0;
                list-style: none;
                margin-left: -5px;
            }
            
            tfoot>ul {
                -webkit-margin-before: 0!important;
                -webkit-margin-after: 0!important;
            }
            
            .list-inline>li {
                display: inline-block;
                padding-left: 5px;
                padding-right: 5px;
            }
            
            .img-responsive {
                display: block;
                max-width: 100%;
                height: auto;
            }
            
            .cpyright {
                line-height: 1.6;
                padding: 10px 30px;
            }
            
            .social-icns {
                padding: 10px 30px;
            }
            
            .social-icns>ul.list-inline>li {
                vertical-align: -webkit-baseline-middle;
            }
        </style>
</head>

<body>
    <table >
        <!--<thead>
            <caption>
                <div class="logo">
                    <img src="http://admin.jaipurpinkpanthers.com/otpimagesnew/cmlogo.png" alt="Logo" class="img-responsive">
                </div>
            </caption>
        </thead>-->
        <tbody>
            <tr>
                <td>
 <img src="http://admin.jaipurpinkpanthers.com/otpimagesnew/welcome.png" class="img-responsive" alt="" style="margin: 0 auto;
    padding: 15px 0;">
                </td>
               
            </tr>
           
            <tr>
                  <td style="padding: 30px 50px 40px;
    color: #fff;
    font-weight: 500;
    font-size: 20px;">
                   Dear  <span style="color: #b72c7a"><?php echo $fullname;?></span>,<br>Use below OTP to create an account on JPP. <br> 
                    <?php echo $otp;?> 
                    <br>
                    <br><br> CHEERS! 
                    <br> TEAM JPP
                </td>
            </tr>
        </tbody>
        <tfoot >
            <tr>
                <td>
                    <div class="cpyright" style="float: left; color:#000;    margin-top: 5px;">
                        &copy; 2017 Jaipur Pink Panthers
                    </div>
                    <div class="social-icns" style="float: right">
                        <ul class="list-inline" style="-webkit-margin-before: 0!important;-webkit-margin-after: 0!important; -webkit-padding-before: 0 !important;
    -webkit-padding-start: 0 !important; color:#000;">
    <li>FOLLOW US ON</li>
                            <li>
                                <a href="https://www.facebook.com/JaipurPinkPanthers/" target="_blank"><img src="http://admin.jaipurpinkpanthers.com/otpimagesnew/fb.png" alt="FacebookLink"></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/JaipurPanthers" target="_blank"><img src="http://admin.jaipurpinkpanthers.com/otpimagesnew/tw.png" alt="TwitterLink"></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/jaipur_pinkpanthers/
" target="_blank"><img src="http://admin.jaipurpinkpanthers.com/otpimagesnew/insta.png" alt="InstagramLink"></a>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>
</body>

</html>