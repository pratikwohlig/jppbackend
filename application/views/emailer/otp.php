<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
        <title>Emailer</title>
            <link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton|Oswald:200,300,400,700" rel="stylesheet">
     <style>
        * {
            box-sizing: border-box;
        }


        .main {
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
    </style>
</head>

  <body class="body" style="display: block !important; -webkit-text-size-adjust: none; font-family: 'Oswald', sans-serif; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; margin: 0; padding: 0;"><style type="text/css">
@font-face {
font-family: 'Oswald'; font-style: normal; font-weight: 400; src: local('Oswald Regular'), local('Oswald-Regular'), url('https://fonts.gstatic.com/s/oswald/v11/Y_TKV6o8WovbUd3m_X9aAA.ttf') format('truetype');
}
@font-face {
font-family: 'Oswald'; font-style: normal; font-weight: 700; src: local('Oswald Bold'), local('Oswald-Bold'), url('https://fonts.gstatic.com/s/oswald/v11/bH7276GfdCjMjApa_dkG6aCWcynf_cDxXwCLxiixG1c.ttf') format('truetype');
}
</style>

    <table class="main" style="border-collapse: collapse; border-spacing: 2px;">
        <tbody class="img" style=" background-image:url('http://jaipurpinkpanthers.com/emailers/mailer/bg-img.jpg');">
            <tr>
                <td>
                    <img src="http://jaipurpinkpanthers.com/emailers/mailer/2.png">
                </td>
            </tr>
            <tr>
                <td>
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
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td style="padding:0px; color: #000000;
    text-decoration: none;">
                    <div class="j_footer">

                        <div class="foo" style="float:left; margin:10px; margin-top:13px;color: #000000; ">

                            &copy; 2017 <a href="http://jaipurpinkpanthers.com/" style="color: #000000;
    text-decoration: none;">Jaipur Pink Panthers</a>
                        </div>
                        <div class="foo" style="float:right; margin-right:25px; color: #000000;">
                            Follow US ON
                            <a href="https://www.facebook.com/JaipurPinkPanthers"><img class="img-res " src="http://jaipurpinkpanthers.com/emailers/mailer/5.png " alt="FacebookLink "></a>
                            <a href="https://twitter.com/JaipurPanthers"><img class="img-res " src="http://jaipurpinkpanthers.com/emailers/mailer/6.png " alt="TwitterLink "></a>
                            <a href="https://www.instagram.com/jaipur_pinkpanthers/"><img class="img-res " src="http://jaipurpinkpanthers.com/emailers/mailer/7.png " alt="instagramLink "></a>

                        </div>
                    </div>


                </td>
            </tr>
        </tfoot>
    </table>
</body>

</html>