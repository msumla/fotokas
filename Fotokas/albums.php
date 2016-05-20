<?php

$dir_thumbs = './Images/Thumbnails/';
$files = glob($dir_thumbs . '*.jpg');
$style = '"style="
    position: relative;
    display: inline;
    margin: 2px;
    border: 1px solid black;
    top: 0px;
    vertical-align: top;
"';

if( file_exists($dir_thumbs) ){
    foreach( $files as $file ){
        if( file_exists($file) ){
            echo '<img src="', $file, $style,  '">';
        }
    }
}

?>
