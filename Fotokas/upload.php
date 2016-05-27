<?php
// image magic php binding for thumbnailing
$dir_ups = './Uploads/';
$dir_thumbs = './Images/Thumbnails/';
$files = putFilesInArray($_FILES['userfile']);

if( file_exists($dir_ups) ){
    foreach( $files as $file ) {
        $type = $file['type'];
        $name = $file['name'];
        if( $type == 'image/jpeg' || $type == 'image/jpg' || $type == 'image/png' ){
	        move_uploaded_file($file['tmp_name'], $dir_ups.$name);
	        convertToThumbnail($dir_ups.$name);
			header('Location: index.php');
	        //echo "File is valid, and was successfully uploaded\n";
        } else {
	        die("Possible file upload attack!");
        }
    }
}

function putFilesInArray($file){
    $arr = array();
    $count = count($file['name']);
    $key = array_keys($file);
    
    for( $i=0;$i<$count;$i++ ){
        foreach( $key as $val ){
            $arr[$i][$val] = $file[$val][$i];
        }
    }
    return $arr;
}
function convertToThumbnail($image){
    $time = new DateTime();
    $time = $time -> format('YmdHis');
    global $dir_thumbs;
        if( file_exists($image) ){
            $img = new Imagick($image);
            $img -> thumbnailImage(120, 0);
            $image_no_extension = pathinfo($image, PATHINFO_FILENAME);
            $img -> writeImage($dir_thumbs . $time . '_' . $image_no_extension . '.jpg');
        }
}