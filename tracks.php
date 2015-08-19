<?php
include 'top.inc.html.php';
	$tracks = array();

 try
{
	$fileName = 'tracks.txt';

	//print_r($tracks);
	
	if ( !file_exists($fileName) ) {
		throw new Exception('File not found.');
	}
	
	$fp = fopen($fileName, "rb");
	if ( !$fp ) {
		throw new Exception('File open failed.');
	}  
	//$str = stream_get_contents($fp);
	
	while (($line = fgets($fp)) !== false) {
        // process the line read.
        $tracks[] = $line;
        //echo ">>>>>>>>> $line";
    }
    
	fclose($fp);

	//print_r($tracks);
} catch ( Exception $e ) {
	echo $e;
} 
    
echo "<ol>\n";
$count = 0;
foreach ($tracks as $track) {
	$count++;
	$track = trim($track);
	$str = sprintf ( "%02d - $track", $count);
	echo "<li>" . $str . "</li>\n";
}
echo '</ol>';

$mp3s = glob('*.mp3');
$mp3count = count($mp3s);
foreach ($mp3s as $mp3) {
	echo "Found: $mp3\n";
}
echo "$mp3count ... found\n";
include 'bottom.inc.html.php';
