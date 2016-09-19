<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
    	<link rel="stylesheet" type="text/css" href="./main.css" />
        <title></title>
    </head>
</html>
<?php
    $flow = $_GET["flow"];
    file_put_contents("C:\\YOURPATH\\flow.txt", $flow);
?>
