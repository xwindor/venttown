<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

    <link rel="stylesheet" type="text/css" href="./main.css" />

    <script type="text/javascript">
        window.onload = function () {
            document.getElementById("timer").style.display = "none";
        }

        function func(Val){
            if (Val.value == "on") {
                document.getElementById("timer").style.display = "inline";
            }
            else {
                document.getElementById("timer").style.display = "none";
            }
        }
    </script>

    <meta charset="utf-8" />
    <title></title>
</head>
<body>

    <div id="menuwrapper">
        <div id="menu">
            <ul>
                <li>
                    <a href="index.php" class="active">
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="WaterFlow.php">
                        <span>Water Flow Info</span>
                    </a>
                </li>
                <li>
                    <a href="Moisture.php">
                        <span>Moisture Info</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <hr class="line" />

    <?php
        $classon = "inactive";
        $classoff = "";
        $endTime = @file_get_contents("log.txt");
        if($endTime){
            $currentTime = time();
            if($currentTime<$endTime){
                $classon = "";
                $classoff = "inactive";
            }
        }
    ?>

   <div id="onOff1">
        <div id="onOff2">
            <span class="circle <?php echo $classon; ?>" id="on">on</span>
            <span class="circle <?php echo $classoff; ?>" id="off">off</span>
        </div>
    </div>

    <form action="/Confirmation.php" method="POST">
        Solenoid Valve:
        <input type="radio" name="onOff" value="on" onclick="func(this)"> On
        <input type="radio" name="onOff" value="off" onclick="func(this)"> Off<br>
        <div id="timer">
            How long should the valve remain on (in minutes) :<br>
            <input type="text" value="0" name="time"><br>
        </div>
        <input type="submit" value="Complete">
    </form>
</body>
</html>

