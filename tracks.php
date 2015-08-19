<?php
include 'top.inc.html.php';


 try
{
	$fileName = 'tracks.txt';
	
	if ( !file_exists($fileName) ) {
		throw new Exception('File not found.');
	}
	
	$fp = fopen($fileName, "rb");
	if ( !$fp ) {
		throw new Exception('File open failed.');
	}  
	$str = stream_get_contents($fp);
	fclose($fp);

} catch ( Exception $e ) {
	echo $e;
} 
    
foreach () {
	
}

include 'bottom.inc.html.php';
