<!DOCTYPE html>
<html>

<head>
    <meata charset="UTF-8">
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