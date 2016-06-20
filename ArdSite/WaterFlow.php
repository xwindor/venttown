<a href="Home.html">Home</a>
<a href="WaterFlow.php">Water Flow</a>
<br>
<?php
	$flow = file_get_contents("C:\\YOURPATH\\flow.txt");
	echo $flow;
?>