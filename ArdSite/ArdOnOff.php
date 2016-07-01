<?php
    $endTime = file_get_contents("C:\\YOURPATH\\log.txt");
    $currentTime = time();
	if($currentTime>$endTime){
		echo "ThisCodeTurnsTheUnoOff";
	}
	else{
		echo "ThisCodeTurnsTheUnoOnn";
	}
?>
