<!DOCTYPE html>

<!--TODO: JavaScript/Python dynamic webdings background-->
<!--TODO: Settings, mainarea scroll, logout, sql, upload w/ py-->


<html lang="et">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title id="title">Fotokas: Login</title>
    <link rel="shortcut icon" type="image/png" href="Images/logo2.png">
    <link href="login1.css" rel="stylesheet" type="text/css">
    <link href="login2.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
	<?php //include 'Database/cookies.php'; ?>
<!--	--><?php //header('Location: Database/cookies.php'); ?>
</head>

<body>
    <div class="mainarea">
        <!--<p style="color:white; position: absolute; right: 200px; top: 70px;">See on lihtsalt sisu täiteks siin hetkel</p>
        <img src="Images/triangle.gif" id="gif" alt="gif">-->

        <div class="logform">
            <div id="logformline"></div>

            <form class="form-signin" action="log_in.html" method="POST">
                <iframe src="log_in.html"></iframe>
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

        <a href="index.php" id="logotext">
            <img src="Images/logo2.png" id="logoimage" alt="Logo">
        </a>

		<div class="buttons">
			<table>
			<tr>
			<td>
			    <div class="login-show">
				    <input type="image" id="logintoggle1" img src="Images/menu.png" alt="Menu" width="60px" height="60px">
			    </div>

			    <div class="login-hide">
				    <input type="image" id="logintoggle0" img src="Images/menu.png" alt="Menu" width="60px" height="60px">
			    </div>
            </td>

            <td>
			    <div class="user-name" id="user-name">
                    Palun logi sisse
			    </div>
            </td>
			
			    <form method="post" action="upload.html" target="_blank">
				    <div class="upload">
                    	<button type="submit" id="uploadbutton">Lae ülesse</button>
					    <!--<input type="image" id="uploadbutton" src="Images/upload.png" alt="Upload" width="60px" height="60px">-->
				    </div>
			    </form>
			
			    <form method="post" action="Uploads" target="_blank">
				    <div class="albums">
					    <button type="submit" id="albumsbutton">Albumid</button>
				    </div>
			    </form>
			
			    <form method="post" action="feedback.php">
				    <button type="button" id="feedbutton">Tagasiside</button>
			    </form>
			
			    <form method="post" action="">
				    <button type="button" id="infobutton">Info</button>
			    </form>
		    </tr>
		    </table>
		</div>
    </div>

<!--    <div class="heading-line">-->
<!---->
<!--    </div>-->


    <div class="autor">
            <a href="https://www.facebook.com/maku.margus" target="_blank" id="fblink">
                <img src="Images/fb.png" width="40px" height="30px" alt="fb">
            </a>
        <p id="author">&copy; 2016 Margus Sumla</p>
    </div>

	<script src="buttons.js" type="text/javascript"></script>

</body>

</html>
