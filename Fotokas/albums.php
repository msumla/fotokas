<?php

$dir_thumbs = './Images/Thumbnails/';
$files = glob($dir_thumbs . '*.*');
$dir_origs = 'http://enos.itcollege.ee/~msumla/Fotokas/Uploads/';
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
            echo '
				<a href=" ', $dir_origs, substr($file, 40), ' " target="_blank">
					<img src=" ', $file, $style, ' ">
				</a>';
			// findFile($file);
        }
    }
}

?>
