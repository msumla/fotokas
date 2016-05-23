<!DOCTYPE html>

<!--TODO: Settings, logout, sql, php variables in html, ENG-->


<html lang="et">
<head>
    <meta charset="utf-8">
<!--	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <title id="title">Fotokas: Kasutaja</title>
    <link rel="shortcut icon" type="image/png" href="Images/Icons/icon.png">
    <link href="logout1.css" rel="stylesheet" type="text/css">
    <link href="logout2.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="styled.css" type="text/css">
	<?php //include 'Database/cookies.php'; ?>
<!--	--><?php //header('Location: Database/cookies.php'); ?>
</head>

<body>
    <div class="mainarea">
        <div id="icon-back">
            <img src="Images/Icons/icon-back.png" alt="Back">
        </div>
        
        <div class="upload-area">
            <!--<iframe src="upload.html" id="upload-box"></iframe>-->
		        <form enctype="multipart/form-data" action="upload.php" method="POST">
			        <input type="hidden" accept="image/*" id="uploadbutton" src="Images/Icons/upload.png" alt="Upload" name="MAX_FILE_SIZE" value="2000000">
			            Vali jpeg/jpg/png-formaadis pildid: <input name="userfile[]" type="file" multiple>
			        <input type="submit" value="Saada">

                    <div id="uploadbutton-text">
                        Lae ülesse
                    </div>
		        </form>
        </div>
        
        <div class="albums-area">
            <iframe src="albums.php" id="albums-box"></iframe>
        </div>
        
        <div class="feed-area">
            <form method="POST">
                <textarea id="feed-box" placeholder="Siia saad oma mõtteid kirja panna ..">
                </textarea
            </form>
        </div>

        <div class="logform">
            <div id="logformline">
        </div>

            <form class="form-signin" action="index.php" method="POST">
				<p>Seaded</p>
				<button class="btn btn-lg btn-primary btn-block" type="submit" name="logoutb">Logi välja</button>
            </form>
        </div>
    </div>

    <div class="heading">
        <!--<form method="get" action="http://www.google.com/search" target="_blank">
            <input type="text" name="q" id="srchinput" size="30"
                   maxlength="255" placeholder="Otsing: Google">
            <input type="submit" id="srchbttn">
        </form>-->

        <a href="indexed.php" id="home-icon">
            <img src="Images/Icons/icon-back.png" id="logoimage" alt="Logo">
        </a>

		<div class="buttons">
			<table>
			    <tr>
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
			            <div class="feedback">
			                <form method="post" action="feedback.php">
                                <input type="image" id="feedbutton" img src="Images/Icons/feedback.png" alt="Feedback">
			                    </button>
			                </form>
			            <div>
			        </td>
			
			        <td>
                        <div class="info">
                            <input type="image" id="infobutton" img src="Images/Icons/info.png" alt="Info">
			            </div>
			        <td>

                    <td>
			            <div class="user-name" id="user-name">
                            PHP kasutajanimi
			            </div>
                    </td>
                    
                    <td>
			            <div class="logout-show">
				            <input type="image" id="logouttoggle1" img src="Images/Icons/menu.png" alt="Menu" width="60px" height="60px">
			            </div>
                    </td>

                    <td>
			            <div class="logout-hide">
				            <input type="image" id="logouttoggle0" img src="Images/Icons/menu.png" alt="Menu" width="60px" height="60px">
			            </div>
                    </td>
		        </tr>
		    </table>
		    
            <div class="heading-line">
            </div>
		</div>
    </div>



    <div class="autor">
            <a href="https://www.facebook.com/maku.margus" target="_blank" id="fblink">
                <img src="Images/Icons/fb.png" width="40px" height="30px" alt="fb">
            </a>
        <p id="author">&copy; 2016 Margus Sumla</p>
    </div>

	<!--<script src="log_out.js" type="text/javascript"></script>-->
	<script src="buttons.js" type="text/javascript"></script>

</body>

</html>
