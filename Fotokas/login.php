<?php

$datafile = 'Database/login_data.txt';
$database = file_get_contents($datafile);
$database = json_decode($database, true);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(isset($_POST['reginb'])) {
<<<<<<< HEAD
		if(!empty($_POST['inputemail']) || !empty($_POST['inputpassword'])) {
			if(isset($_POST['inputemail']) && isset($_POST['inputpassword']) && isset($_POST['regbox'])) {
				$em = $_POST['inputemail'];
				$pw = $_POST['inputpassword'];
				
				$database[] = array(
					'em' => $em,
					'pw' => $pw,
				);
				
				$database = json_encode($database);
				file_put_contents($datafile, $database);
				header('Content-Type: text/plain; charset=utf-8');
				echo 'Regatud';
				exit;
			} else {
				// header('Location: license.html');
				?><script type="text/javascript">window.open('license.html', '_blank');</script><?php
				exit;
			}
		}
	}
	if(isset($_POST['loginb'])) {
		if(!empty($_POST['inputemail']) || !empty($_POST['inputpassword'])) {
			header('Content-Type: text/plain; charset=utf-8');
			echo 'Login';
		}
	}
}

function regFinder($em, $pw, $arr) {
	$boo = false;
	// for($i;$i<$arr;$i+=1) {
		if($em == $_POST['inputemail'] && $pw == $_POST['inputpassword']) {
			$boo = true;
		}
		if($em != $_POST['inputemail'] || $pw != $_POST['inputpassword']) {
			$boo = false;
		}
	// }
=======
		if(isset($_POST['inputemail']) && isset($_POST['inputpassword']) && isset($_POST['regbox'])) {
			$em = $_POST['inputemail'];
			$pw = $_POST['inputpassword'];
			
			$database[] = array(
				'em' => $em,
				'pw' => $pw,
			);
			
			$database = json_encode($database);
			file_put_contents($datafile, $database);
			header('Content-Type: text/plain; charset=utf-8');
			echo 'Regatud';
			exit;
		} else {
			// header('Location: license.html');
			?><script type="text/javascript">window.open('license.html', '_blank');</script><?php
			exit;
		}
	}
	if(isset($_POST['loginb'])) {
		header('Content-Type: text/plain; charset=utf-8');
		echo 'Login';
	}
}

function regFinder($em, $pw) {
	$boo = false;
	if($em == $_POST['inputemail'] && $pw == $_POST['inputpassword']) {
		$boo = true;
	}
	if($em != $_POST['inputemail'] || $pw != $_POST['inputpassword']) {
		$boo = false;
	}
>>>>>>> refs/remotes/origin/master
	return $boo;
}

?>