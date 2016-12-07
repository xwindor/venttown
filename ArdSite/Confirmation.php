<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
    	<link rel="stylesheet" type="text/css" href="./main.css" />
        <title></title>
    </head>
    <body>
    <div id="menuwrapper">
        <div id="menu">
            <ul>
                <li>
                    <a href="Home.php">
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="WaterFlow.php">
                        <span>Water Flow Info</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <hr class="line" />
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
    file_put_contents("log.txt", $endTime);
?>
