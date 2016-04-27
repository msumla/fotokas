<!DOCTYPE html>

<!--TODO: JavaScript/Python dynamic webdings background-->
<!--TODO: Settings, mainarea scroll, logout, sql, upload w/ py-->


<html lang="et">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fotokas</title>
    <link rel="shortcut icon" type="image/png" href="logo2.png">
    <link href="login1.css" rel="stylesheet" type="text/css">
    <link href="login2.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
	<?php include 'Database/cookies.php'; ?>
<!--	--><?php //header('Location: Database/cookies.php'); ?>
</head>

<body>
    <div class="mainarea">
        <p style="color:white; position: absolute; right: 200px; top: 70px;">See on lihtsalt sisu täiteks siin hetkel</p>
        <img src="triangle.gif" id="gif" alt="gif">

        <div class="logform">
            <div id="logformline"></div>

            <form class="form-signin" action="login.php" method="POST">
                <h2 class="form-signin-heading">Palun logi sisse</h2>
                <label for="inputEmail" class="sr-only">E-maili aadress</label>
                <input type="email" id="inputEmail" name="inputemail" class="form-control" placeholder="E-maili aadress" required>
                <label for="inputPassword" class="sr-only">Parool</label>
                <input type="password" id="inputPassword" name="inputpassword" class="form-control" placeholder="Püsiparool" required minlength="8">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me" checked>Jäta mind meelde
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="loginb">Logi sisse</button>

                <div class="form-signin-log">
                    <label style="font-weight: normal;">
                        <input type="checkbox" class="regbox" name="regbox" value="n6us" checked>Nõus
                    </label>
                    <a href="license.html" target="_blank">tingimustega</a> ja
                    <button type="submit" class="regbutton" name="reginb">registreerun</button>
                </div>
            </form>
        </div>
    </div>

    <div class="heading">
        <form method="get" action="http://www.google.com/search" target="_blank">
            <input type="text" name="q" id="srchinput" size="30"
                   maxlength="255" placeholder="Otsing: Google">
            <input type="submit" id="srchbttn">
        </form>

        <a href="index.php" id="logotext">
            <img src="logo2.png" id="logoimage" alt="Logo">FOTOKAS
        </a>

        <div class="login-show">
            <button type="button" id="logintoggle1">Logi sisse ▼</button>
        </div>

        <div class="login-hide">
            <button type="button" id="logintoggle0">Logi sisse ▲</button>
        </div>
    </div>


    <div class="autor">
            <a href="https://www.facebook.com/maku.margus" target="_blank" id="fblink">
                <img src="fb.png" width="40px" height="30px" alt="fb">
            </a>
        <p id="author">&copy; 2016 Margus Sumla</p>
    </div>

	<script src="log_in.js" type="text/javascript"></script>

</body>

</html>