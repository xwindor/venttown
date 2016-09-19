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
    $onOff = $_POST["onOff"];
    $minutes = intval($_POST["time"]);
    $endTime = time();
    if($onOff == 'on'){
      $endTime = time() + $minutes*60;
      echo 'solenoid valve has been turned on for: ' . $minutes . ' minutes';
    }
    if($onOff == 'off'){
      echo 'solenoid valve is turned off';
    }
    file_put_contents("C:\\YOURPATH\\log.txt", $endTime);
?>
