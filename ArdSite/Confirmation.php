<a href="Home.html">Home</a>
<a href="WaterFlow.php">Water Flow</a>
<br>
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
