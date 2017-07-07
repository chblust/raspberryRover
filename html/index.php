<?php
function killPy(){
	exec("sudo killall python");
}

if (isset($_POST['start'])){
	killPy();
	exec("sudo python /var/www/python/start.py");
}
if (isset($_POST['stop'])){
	killPy();
	exec("sudo python /var/www/python/stop.py");
}
if (isset($_POST['left'])){
	killPy();
	exec("sudo python /var/www/python/turnLeft.py");
}
if(isset($_POST['straight'])){
	killPy();
	exec("sudo python /var/www/python/goStraight.py");
}
if(isset($_POST['right'])){
	killPy();
	exec("sudo python /var/www/python/turnRight.py");
}
if (isset($_POST['off'])){
	killPy();
	exec("sudo shutdown -h now");
}
if (isset($_POST['getInfo'])){
	killPy();
	exec("sudo python /var/www/python/getInfo.py");
	$path = "/var/www/python/info.txt";
	$file = fopen($path, "r+");
	echo "<strong>" . fread($file, filesize($path)) . "</strong>";
	fclose($file);
}

?>
<html>
<head>
<style>
.startButton{
	position: absolute;
	top: 30%;
	left: 50%;
	background-color: #32CD32;
	border: none;
	color: white;
	padding: 70px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 32px;
	margin: 4px 2px;
	cursor: pointer;
	border-radius: 12px;
}
.stopButton{
	position: absolute;
	top: 70%;
	left: 50%;
	background-color: #FF0000;
	border: none;
	color: white;
	padding: 70px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 32px;
	margin: 4px 2px;
	cursor: pointer;
	border-radius: 12px;
}
.leftButton{
	position: absolute;
	top: 50%;
	left: 30%;
	background-color: #708090;
	border: none;
	color: white;
	padding: 70px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 32px;
	margin: 4px 2px;
	cursor: pointer;
	border-radius: 12px;
}
.rightButton{
	position: absolute;
	top: 50%;
	left: 70%;
	background-color: #708090;
	border: none;
	color: white;
	padding: 70px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 32px;
	margin: 4px 2px;
	cursor: pointer;
	border-radius: 12px;
}
.straightButton{
	position: absolute;
	top: 50%;
	left: 50%;
	background-color: #DAA520;
	border: none;
	color: white;
	padding: 70px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 32px;
	margin: 4px 2px;
	cursor: pointer;
	border-radius: 12px; 
}
.infoButton{
	position: absolute;
	top: 10%;
	left: 10%;
	background-color: #708090;
	border: none;
	color: white;
	padding: 55px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 32px;
	margin: 4px 2px;
	cursor: pointer;
	border-radius: 12px;
}
</style>
<title>ROBOT CONTROL PANEL</title>
</head>
<form id="buttons" method="post">
<button name="start" class="startButton">Start</button>
<button name="stop" class="stopButton">Stop</button>
<button name="left" class="leftButton">&#8592;</button>
<button name="right" class= "rightButton">&#8594</button>
<button name="straight" class= "straightButton">&#8593</button>
<button name="getInfo" class= "infobutton">Get Location Data</button>
</form>

</html>
