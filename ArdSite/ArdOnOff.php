<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
    	<link rel="stylesheet" type="text/css" href="./main.css" />
        <title></title>
    </head>
</html>
	
<?php
    $endTime = file_get_contents("log.txt");
    $currentTime = time();
	if($currentTime>$endTime){
		echo "ThisCodeTurnsTheUnoOff";
	}
	else{
		echo "ThisCodeTurnsTheUnoOnn";
	}
?>
