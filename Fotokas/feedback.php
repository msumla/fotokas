<?php

$path = 'Database/feed_back.txt';
// $datafile = fopen($path, "a") or die('Faili ei leitud!');
// if( empty(fread($datafile, 1)) ){
	// fwrite($datafile, 'The feedback:');
	// fwrite($datafile, "\n");
// }

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
	if( isset($_POST['feedback-text']) ){
		if( !empty($_POST['feedback-text']) ){
			$data_file = fopen($path, "a+") or die('Faili ei leitud!');
			$text = $_POST['feedback-text'];
			fwrite($data_file, $text);
			fwrite($data_file, "\n");
			fclose($data_file);
			require('index.php');
			exit;
		}
	}
}
