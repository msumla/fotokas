<!DOCTYPE html>

<!--TODO: JavaScript/Python dynamic webdings background-->
<!--TODO: Settings, mainarea scroll, logout, sql, upload w/ py-->


<html lang="et">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fotokas: msumla</title>
    <link rel="shortcut icon" type="image/png" href="logo2.png">
    <link href="logout1.css" rel="stylesheet" type="text/css">
    <link href="logout2.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="styled.css" type="text/css">
	<?php include 'Database/cookies.php'; ?>
<!--	--><?php //header('Location: Database/cookies.php'); ?>
</head>

<body>
    <div class="mainarea">
        <p style="color:white; position: absolute; right: 200px; top: 70px;">See on lihtsalt sisu täiteks siin hetkel</p>
        <img src="triangle.gif" id="gif" alt="gif">

        <div class="logform">
            <div id="logformline"></div>

            <form class="form-signin" action="index.php" method="POST">
        <!--        <h2 class="form-signin-heading">Palun logi sisse</h2>
                <label for="inputEmail" class="sr-only">E-maili aadress</label>
                <input type="email" id="inputEmail" name="inputemail" class="form-control" placeholder="E-maili aadress">
                <label for="inputPassword" class="sr-only">Parool</label>
                <input type="password" id="inputPassword" name="inputpassword" class="form-control" placeholder="Püsiparool">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me" checked>Jäta mind meelde
                    </label>
                </div>
        -->        
				<p>Seaded</p>
				<button class="btn btn-lg btn-primary btn-block" type="submit" name="logoutb">Logi välja</button>
        <!--        <div class="form-signin-log">
                    <label style="font-weight: normal;">
                        <input type="checkbox" class="regbox" name="regbox" value="n6us" checked>Nõus
                    </label>
                    <a href="license.html" target="_blank">tingimustega</a>&nbsp;ja
                    <button type="button" class="regbutton" name="reginb">registreerun</button>
                </div>
        -->    </form>
        </div>
    </div>

    <div class="heading">
        <form method="get" action="http://www.google.com/search" target="_blank">
            <input type="text" name="q" id="srchinput" size="30"
                   maxlength="255" placeholder="Otsing: Google">
            <input type="submit" id="srchbttn">
        </form>

        <a href="indexed.php" id="logotext">
            <img src="logo2.png" id="logoimage" alt="Logo">FOTOKAS
        </a>

        <div class="logout-show">
            <button type="button" id="logouttoggle1">msumla ▼</button>
        </div>

        <div class="logout-hide">
            <button type="button" id="logouttoggle0">msumla ▲</button>
        </div>
		
		<form method="post" action="upload.html" target="_blank">
			<div class="upload">
				<button type="submit" id="uploadbutton">Lae ülesse</button>
			</div>
		</form>
		
		<form method="post" action="Uploads" target="_blank">
			<div class="albums">
				<button type="submit" id="albumsbutton">Albumid</button>
			</div>
		</form>
    </div>


    <div class="autor">
            <a href="https://www.facebook.com/maku.margus" target="_blank" id="fblink">
                <img src="fb.png" width="40px" height="30px" alt="fb">
            </a>
        <p id="author">&copy; 2016 Margus Sumla</p>
    </div>

	<script src="log_out.js" type="text/javascript"></script>

</body>

</html>
