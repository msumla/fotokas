<?php

//session_start();

// if ( empty($_SESSION['csrf_token']) ){
    // $_SESSION['csrf_token'] = bin2hex(openssl_random_pseudo_bytes(20));
// }

$datafile = 'Database/login_data.txt';
$database = file_get_contents($datafile);
$database = json_decode($database, true);

//if (!empty($_POST['csrf_token']) && $_POST['csrf_token'] == $_SESSION['csrf_token']) {
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
	    if( isset($_POST['reginb']) ){
		    if( !empty($_POST['inputemail']) && !empty($_POST['inputpassword']) ){
			    if( !isset($_POST['regbox']) ){
				    //require('index.php');
				    ?><script type="text/javascript">
					    window.open('license.html', '_blank');
				    </script><?php
				    exit;
			    } // license

			    if( isset($_POST['regbox']) ){
				    if( regFinder($_POST['inputemail'], $database)==0  ){
					    $em = $_POST['inputemail'];
					    $pw = $_POST['inputpassword'];
					
					    $database[] = array(
						    'em' => $em,
						    'pw' => password_hash($pw, PASSWORD_BCRYPT),
					    );
					    $database = json_encode($database);
					    file_put_contents($datafile, $database);
					    
//					    header('Content-Type: text/plain; charset=utf-8');
	//				    echo "Regatud, saada meil ja header location index";
					    
					    require('index.php');
					    exit;
				    }
				
				    if( regFinder($_POST['inputemail'], $database)==1 ){
					    require('index.php');
					    ?><script type="text/javascript">
						    var em = '<?php echo $_POST['inputemail']; ?>';
						    alert(em + ' on juba registreeritud, proovi uuesti!');
					    </script><?php
					    exit;
				    }
			    }
		    } // register
	    } // method
	
	    if( isset($_POST['loginb']) ){
		    if( !empty($_POST['inputemail']) || !empty($_POST['inputpassword']) ){
			    if( isset($_POST['inputemail']) && isset($_POST['inputpassword']) ){
				    if( logFinder($_POST['inputemail'], $_POST['inputpassword'], $database)==1 ){
					    $_SESSION['input_user'] = $_POST['inputemail'];
					    header('Location: index.php');
					    ?><script type="text/javascript">
						    //document.getElementById("title").innerHTML = 'Fotokas: <?= $_SESSION['input_user'] ?>';
						    //document.getElementById("user-name").innerHTML = "<?= $_SESSION['input_user'] ?>";
					    </script><?php
  
//    				     header('Content-Type: text/plain; charset=utf-8');
  //  		    	     echo 'Login';
					    exit;
				    }else{
					    // header('Content-Type: text/plain; charset=utf-8');
					    // echo 'Vale e-mail/passw';
					    require('index.php');
					    ?><script type="text/javascript">
						    alert('Oled sisestanud vale e-maili või parooli, proovi uuesti!');
					    </script><?php
					    exit;
				    }
			    }
		    }
	    } // loginb
    } // method
//} // csrf_token

function regFinder($em, $arr){
	foreach( $arr as $i ){
		if( $em == $i['em'] ){
			$boo = 1;
			break;
		}else{
			$boo = 0;
		}
	}
	return $boo;
}

function logFinder($em, $pw, $arr){
	foreach( $arr as $i ){
		if( $em == $i['em'] && password_verify($pw, $i['pw']) ){
			$boo = 1;
			break;
		}
		
		if( $em != $i['em'] || $pw != $i['pw'] ){
		    $boo = 0;
		}
	}
	return $boo;
}
