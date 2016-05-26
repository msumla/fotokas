<?php

$path = 'Database/feed_back.txt';
if( !file_exists($path){
    $datafile = fopen($path, "w");
    fwrite($datafile, 'The feedback:'.'\n')
}

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
	if( isset($_POST['feedback-text']) ){
		if( !empty($_POST['feedback-text']) ){
            $text = $_POST['feedback-text'];
            fwrite($datafile, $text);
            fclose($datafile);

			exit;
		}
	}
}
