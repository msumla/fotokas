<!DOCTYPE html>

<!--TODO: Settings, logout, sql, php variables in html, ENG-->

<html lang="et">
<head>
    <meta charset="utf-8">
<!--	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <title id="title">Fotokas: Kasutaja</title>
    <link rel="shortcut icon" type="image/png" href="Images/Icons/icon.png">
    <link href="login1.css" rel="stylesheet" type="text/css">
    <link href="login2.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
	<div class="preload">
	</div>

	<div class="content">
	
    <div class="mainarea">
        <div id="icon-back">
            <img src="Images/Icons/icon-back.png" alt="Back">
        </div>

        <div class="upload-area">
            <form enctype="multipart/form-data" action="upload.php" method="POST">
                <input type="hidden" accept="image/*" id="uploadbutton" src="Images/Icons/upload.png" alt="Upload" name="MAX_FILE_SIZE" value="2000000">
                    Vali kuni 2MB suuruses pilte: <input name="userfile[]" type="file" multiple>
                <input type="submit" value="Saada">
            </form>
        </div>
        
        <div class="albums-area">
            <iframe src="albums.php" id="albums-box"></iframe>
        </div>
        
        <div class="feed-area">
            <form method="POST" action="feedback.php">
                <textarea name="feedback-text" id="feed-box" placeholder="Siia saad oma mõtted kirja panna .."></textarea>
                <button type="submit" id="feed-submit-button">Saada</button>
            </form>
        </div>
        
        <div class="reg_log_menu-area">
            <div class="login-area">
                <div class="container">
                    <form class="form-signin" method="post" action="authenticate.php">
                        <h2 class="form-signin-heading">Logi sisse</h2>
                        <label for="inputEmail" class="sr-only">Kasutajanimi</label>
                        <input type="text" name="inputemail" id="inputEmail" class="form-control" placeholder="Kasutajanimi" required autofocus>
                        <label for="inputPassword" class="sr-only">Parool</label>
                        <input type="password" name="inputpassword" id="inputPassword" class="form-control" placeholder="Püsiparool" required>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me">Jäta mind meelde
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="loginb">Logi sisse</button>
                    </form>
                </div>
            </div>
        
            <div class="regin-area">
                <div class="container">
                    <form class="form-signin" method="post" action="authenticate.php">
                        <h2 class="form-signin-heading">Registreeri</h2>
                        <label for="inputEmail" class="sr-only">Kasutajanimi</label>
                        <input type="text" name="inputemail" id="inputEmail" class="form-control" placeholder="Kasutajanimi" maxlength="15" required autofocus>
                        <label for="inputPassword" class="sr-only">Parool</label>
                        <input type="password" name="inputpassword" id="inputPassword" class="form-control" placeholder="Püsiparool" required>
                        <div class="checkbox">
                            <label style="font-weight: normal;">
                                <input type="checkbox" class="regbox" name="regbox" value="n6us" style="left: 16px; top: -2px;" checked>
                            </label>
                            Nõustun
                            <a href="license.html" target="_blank">tingimustega</a>
                        </div>
              
                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="reginb">Registreeri</button>
                    </form>
                </div>
            </div>
            
            <div class="menu-area">
                <form class="form-signin" action="index.php" method="POST">
					<div class="colors">
						<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
							<h5>
								Vali veebilehe taustavärv 
							</h5>
							<input type="color" id="color_var">
							<button type="button" id="colorbutton" class="btn btn-lg btn-primary btn-block">Vaheta taustavärv</button>
						</form>
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit" name="logoutb">Logi välja</button>
                </form>
                
                <!--<form class="form-signin" method="post" action="login.php">
                    <input type="hidden" name="action" value="logout">
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="logoutb">Logi välja</button>
                </form>-->
            </div>
        </div>
    </div>
    
    <div class="heading">
        <div class="heading-line">
            <div class="user-name" id="user-name">
                <?php if( !empty($_SESSION['input_user']) ): ?>
                    <?= $_SESSION['input_user'] ?>
                <?php else: ?>
                    Palun logi sisse
                <?php endif ?>
            </div>
			
			<div class="">
			
			</div>
        </div>

		<div class="buttons">
			<table>
			    <tr>
                    <td>
                        <a href="index.php" id="home-icon">
                            <img src="Images/Icons/icon.png" id="logoimage" alt="Logo">
                            <!--<img src="Images/Icons/flash.png" id="logoimageflash" alt="Flash">-->
                        </a>
                    </td>

			        <td>
			            <div class="upload">
                            <input type="image" id="uploadbutton" img src="Images/Icons/upload.png" alt="Upload">
			            </div>
			        </td>
			
			        <td>
			            <div class="albums">
                            <input type="image" id="albumsbutton" img src="Images/Icons/albums.png" alt="Albums">
			            </div>
			        </td>
                                        
                    <td>
			        <!--    <div class="logout-show">
				            <input type="image" id="logouttoggle1" img src="Images/Icons/menu.png" alt="Menu">
			            </div>
                    </td>

                    <td>
			            <div class="logout-hide">
				            <input type="image" id="logouttoggle0" img src="Images/Icons/menu.png" alt="Menu">
			            </div>
                    </td> -->
                    
			        <td>
			            <div class="feedback">
                            <input type="image" id="feedbutton" img src="Images/Icons/feedback.png" alt="Feedback">
			            <div>
			        </td>
			
			        <td>
                        <div class="info">
                            <a href="license.html" target="_blank">
                                <input type="image" id="infobutton" img src="Images/Icons/info.png" alt="Info">
                            </a>
			            </div>
			        <td>

                    <td>
			            <div class="login-show">
				            <input type="image" id="logintoggle1" img src="Images/Icons/login.png" alt="Log in">
			            </div>
                    </td>

                    <td>
			            <div class="login-hide">
				            <input type="image" id="logintoggle0" img src="Images/Icons/login.png" alt="Log in">
			            </div>
                    </td>
                    
                    <td>
			            <div class="regin-show">
				            <input type="image" id="regintoggle1" img src="Images/Icons/regin.png" alt="Register">
			            </div>
                    </td>

                    <td>
			            <div class="regin-hide">
				            <input type="image" id="regintoggle0" img src="Images/Icons/regin.png" alt="Register">
			            </div>
                    </td>
                    
                    <td>
			            <div class="menu-show">
				            <input type="image" id="menutoggle1" img src="Images/Icons/menu.png" alt="Menu">
			            </div>
                    </td>
                    
                    <td>
			            <div class="menu-hide">
				            <input type="image" id="menutoggle0" img src="Images/Icons/menu.png" alt="Menu">
			            </div>
                    </td>
		        </tr>
		    </table>
		</div>
    </div>

    <div class="autor">
            <a href="https://www.facebook.com/maku.margus" target="_blank" id="fblink">
                <img src="Images/Icons/fb.png" width="40px" height="30px" alt="fb">
            </a>
        <p id="author">&copy; 2016 Margus Sumla</p>
    </div>

	</div> <!-- main content after loading -->

	<script src="buttons.js" type="text/javascript"></script>
	
</body>
</html>
