<?php

// TODO: SQL

$datafile = 'Database/login_data.txt';
$database = file_get_contents($datafile);
$database = json_decode($database, true);

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(isset($_POST['reginb'])){
		if(!empty($_POST['inputemail']) && !empty($_POST['inputpassword'])){
			if(!isset($_POST['regbox'])){
				require('index.php');
				?><script type="text/javascript">
					window.open('license.html', '_blank');
				</script><?php
				exit;
			}

			if(isset($_POST['regbox'])){
				if(regFinder($_POST['inputemail'], $database)==0){
					// $em = password_hash($_POST['inputemail'], PASSWORD_DEFAULT);
					// $pw = password_hash($_POST['inputpassword'], PASSWORD_BCRYPT);
					$em = $_POST['inputemail'];
					$pw = $_POST['inputpassword'];
					
					$database[] = array(
						'em' => $em,
						'pw' => password_hash($pw, PASSWORD_BCRYPT),
					);
					$database = json_encode($database);
					file_put_contents($datafile, $database);
					header('Content-Type: text/plain; charset=utf-8');
					// echo "Regatud, saada meil ja header location index";
					header('Location: index.php');
					exit;
				}
				
				if(regFinder($_POST['inputemail'], $database)==1){
					?><script type="text/javascript">
						var em = '<?php echo $_POST['inputemail']; ?>';
						alert(em + ' on juba registreeritud, proovi uuesti!');
					</script><?php
					require('index.php');
					exit;
				}
			}
		}
	}
	
	if(isset($_POST['loginb'])){
		if(!empty($_POST['inputemail']) || !empty($_POST['inputpassword'])){
			if(isset($_POST['inputemail']) && isset($_POST['inputpassword'])){
				if(logFinder($_POST['inputemail'], $_POST['inputpassword'], $database)==1){
					// header('Content-Type: text/plain; charset=utf-8');
					// echo 'Login';
					require('indexed.php');
					?><script type="text/javascript">
						document.title = 'Fotokas: ';
					</script><?php
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
	}
}

function regFinder($em, $arr){
	foreach($arr as $i){
		if($em == $i['em']){
			$boo = 1;
			break;
		}else{
			$boo = 0;
		}
	}
	return $boo;
}

function logFinder($em, $pw, $arr){
	foreach($arr as $i){
		if($em == $i['em'] && password_verify($pw, $i['pw'])){
			$boo = 1;
			break;
		}
		
		if($em != $i['em'] || $pw != $i['pw']){
			$boo = 0;
		}
	}
	return $boo;
}

?>
