<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="./main.css" />
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        window.onload = function() {
            window.setInterval(myTimer, 1000);
        }
        function myTimer(){
            $('#ref').load(document.URL + ' #ref');
        }
    </script>
</head>
<body>

    <div id="menuwrapper">
        <div id="menu">
            <ul>
                <li>
                    <a href="index.php">
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="WaterFlow.php" class=>
                        <span>Water Flow Info</span>
                    </a>
                </li>
                <li>
                    <a href="Moisture.php" class="active">
                        <span>Moisture Info</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <hr class="line" />

    <br>
    <div id="ref">
        <?php
            $moisture0 = file_get_contents("moisture0.txt");
            $moisture1 = file_get_contents("moisture1.txt");
            $moisture2 = file_get_contents("moisture2.txt");
	        echo "Sensor 1: $moisture0 \r\n Sensor 2: 					$moisture1 \r\n Sensor 3: $moisture2";
        ?>
    </div>
</body>
</html>


