<?php

$dir = './Uploads/';
// $path = $dir . basename($_FILES['userfile']['name']);
//$ext = pathinfo($path, PATHINFO_EXTENSION);
$files = putFilesInArray($_FILES['userfile']);

// echo '<pre>';

foreach($files as $val) {
	$type = $val['type'];
	$name = $val['name'];
	if($type == 'image/jpeg' || $type == 'image/png'){
		move_uploaded_file($val['tmp_name'],$dir.$name);
		echo "File is valid, and was successfully uploaded.\n";
	} else {
		echo "Possible file upload attack!\n";
	}
}

// echo "Here is some more debugging info:\n";
// print_r($_FILES);

echo '<pre>';

function putFilesInArray($file){
    $arr = array();
    $count = count($file['name']);
    $key = array_keys($file);
    
    for($i=0;$i<$count;$i++){
        foreach($key as $val){
            $arr[$i][$val] = $file[$val][$i];
        }
    }
    return $arr;
}

//exec('python test.py');
