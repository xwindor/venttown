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
    //file_put_contents("put a path for the log file here", $endTime);
?>
