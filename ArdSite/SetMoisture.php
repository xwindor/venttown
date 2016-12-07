<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
    	<link rel="stylesheet" type="text/css" href="./main.css" />
        <title></title>
    </head>
</html>
<?php
    $moisture = $_GET["moisture"];
    file_put_contents("C:\\YOURPATH\\moisture.txt", $moisture);
?>

