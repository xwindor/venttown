<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
    	<link rel="stylesheet" type="text/css" href="./main.css" />
        <title></title>
    </head>
    <body>
        <a href="Home.html">Home</a>
        <a href="WaterFlow.php">Water Flow</a>
        <br>
    </body>
</html>
<?php
	$flow = file_get_contents("C:\\YOURPATH\\flow.txt");
	echo $flow;
?>
