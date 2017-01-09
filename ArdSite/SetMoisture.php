<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
    	<link rel="stylesheet" type="text/css" href="./main.css" />
        <title></title>
    </head>
</html>
<?php
    $moisture0 = $_GET["moisture0"];
    file_put_contents("moisture0.txt", $moisture0);
?>
<?php
    $moisture1 = $_GET["moisture1"];
    file_put_contents("moisture1.txt", $moisture1);
?>
<?php
    $moisture2 = $_GET["moisture2"];
    file_put_contents("moisture2.txt", $moisture2);
?>

