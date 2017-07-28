<!--<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Emailer</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Dosis:500');
        @import url('https://fonts.googleapis.com/css?family=Damion');
        table {
            width: 600px;
            margin: 0 auto;
        }

        td h1 {
            color: #fff;
            font-size: 36px;
            font-family: 'Damion', cursive;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-transform: uppercase;
        }

        caption>div.logo {
            width: 120px;
            height: auto;
            padding: 5px 0;
            display: inline-block;
        }

        tbody>tr:nth-child(2)>td {
            font-size: 13pt;
            padding: 25px 0px;
            font-family: Helvetica, sans-serif;
        }

        tfoot {
            background-color: #4ecaf5;
            font-family: 'Dosis', sans-serif;
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
    <table>
        <thead>
            <caption>
                <div class="logo">
                    <img src="http://admin.jaipurpinkpanthers.com/otpimagesnew/cmlogo.png" alt="Logo" class="img-responsive">
                </div>
            </caption>
        </thead>
        <tbody>
            <tr>
                <td style="position:relative;">
     
                </td>
            </tr>
            <tr>
                <td>
                    Dear <span style="color: #b72c7a">Manan Vora</span>,<br><br> We got a request to reset the JPP password.Use
                    below OTP to reset password.
                    <br>7345.
                    <br><br> Cheers!
                    <br> Team JPP
                </td>
            </tr>
        </tbody>
        <tfoot style="font-family: 'Dosis', sans-serif;">
            <tr>
                <td>
                    <div class="cpyright" style="float: left">
                        &copy; 2017 Jaipur Pink Panthers
                    </div>
                    <div class="social-icns" style="float: right">
                        <ul class="list-inline" style="-webkit-margin-before: 0!important;-webkit-margin-after: 0!important; -webkit-padding-before: 0 !important;
    -webkit-padding-start: 0 !important;">
                            <li>
                                <a href=""><img src="http://admin.jaipurpinkpanthers.com/otpimagesnew/fb.png" alt="FacebookLink"></a>
                            </li>
                            <li>
                                <a href=""><img src="http://admin.jaipurpinkpanthers.com/otpimagesnew/twitter.png" alt="TwitterLink"></a>
                            </li>
                            <li>
                                <a href=""><img src="http://admin.jaipurpinkpanthers.com/otpimagesnew/linkedin.png" alt="LinkedinLink"></a>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>
</body>

</html>-->

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
        <title>Emailer</title>
   <style>
        * {
            box-sizing: border-box;
        }

        a {
            text-decoration: none !important;
            color: inherit;
        }

        #main {
            width: 600px;
            margin: 0 auto;
        }

        .noBorder {
            border: none !important;
            padding: 5px;
            padding-left: 5%;
            font-family: 'Oswald', sans-serif;
            line-height: 1;
            color: aliceblue;
            letter-spacing: 2.5px;
            font-size: 20px;
        }

        .j_footer {
            background-color: #32a3c6;
            width: 100%;
            height: 45px;
        }

        .img-res {
            vertical-align: middle;
            margin: 10px 7px;
        }


        .foo {
            padding-left: 25px;
            font-family: 'Hind', sans-serif;
            letter-spacing: 1.5px;
            font-size: .7em;
        }


        .img {
            background-image: url("http://jaipurpinkpanthers.com/emailers/mailer/3.jpg");
        }
    </style>
</head>

<body>
      <div id="main">
        <div class=img>
            <img src="http://jaipurpinkpanthers.com/emailers/mailer/2.png">
            <div class=" noBorder">
                <table width="100%">
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="noBorder" style="padding-bottom:30px;">Dear <?php echo $fullname;?>,</td>
                    </tr>
                    <tr>
                        <td class="noBorder">
                            Use below OTP to create an account on JPP.
                        </td>
                    </tr>
                    <tr>
                        <td class="noBorder">
                            <?php echo $otp;?>
                        </td>
                    </tr>
                    <tr>
                        <td class="noBorder" style="padding-top:35px;line-height:.8">CHEERS!</td>
                    </tr>
                    <tr>
                        <td class="noBorder" style="line-height:.8; padding-bottom:35px;">TEAM JPP</td>
                    </tr>

                </table>
            </div>
        </div>

        <div class="j_footer">

            <div class="foo" style="float:left; margin:10px; margin-top:13px;">

                &copy; 2017 <a href="http://jaipurpinkpanthers.com">Jaipur Pink Panthers</a>
            </div>
            <div class="foo" style="float:right; margin-right:25px;">
                Follow US ON
                <a href="https://www.facebook.com/JaipurPinkPanthers"><img class="img-res " src="http://jaipurpinkpanthers.com/emailers/mailer/5.png " alt="FacebookLink "></a>
                <a href="https://twitter.com/JaipurPanthers"><img class="img-res " src="http://jaipurpinkpanthers.com/emailers/mailer/6.png " alt="TwitterLink "></a>
                <a href="https://www.instagram.com/jaipur_pinkpanthers/"><img class="img-res " src="http://jaipurpinkpanthers.com/emailers/mailer/7.png " alt="instagramLink "></a>

            </div>
        </div>
    </div>
</body>

</html>