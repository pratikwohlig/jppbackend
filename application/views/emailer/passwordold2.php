<!DOCTYPE html>
<html>

<head>
    <meata charset="UTF-8">
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
                    <img src="http://wohlig.co.in/pinkpanther/jppbackend/otpimagesnew/cmlogo.png" alt="Logo" class="img-responsive">
                </div>
            </caption>
        </thead>
        <tbody>
            <tr>
                <td style="position:relative;">
                    <!--<h1>welcome to jpp</h1>
                    <img src="http://wohlig.co.in/pinkpanther/jppbackend/otpimagesnew/enquery.jpg" class="img-responsive" alt="Enquiry">-->
                </td>
            </tr>
            <tr>
                <td>
                    Dear <span style="color: #b72c7a"><?php echo $fullname;?></span>,<br><br> We got a request to reset the JPP password.Use below OTP to reset password.
                    <br><?php echo $otp;?>.
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
                                <a href=""><img src="http://wohlig.co.in/pinkpanther/jppbackend/otpimagesnew/fb.png" alt="FacebookLink"></a>
                            </li>
                            <li>
                                <a href=""><img src="http://wohlig.co.in/pinkpanther/jppbackend/otpimagesnew/twitter.png" alt="TwitterLink"></a>
                            </li>
                            <li>
                                <a href=""><img src="http://wohlig.co.in/pinkpanther/jppbackend/otpimagesnew/linkedin.png" alt="LinkedinLink"></a>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>
</body>

</html>