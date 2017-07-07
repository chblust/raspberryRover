<?php
 if (isset($_POST['temp']))
 {
	$path = "/sys/bus/w1/devices/28-04166436faff/w1_slave";
 	$myfile = fopen($path, "r") or die("Unable to open file!");
	echo fread($myfile,filesize($path));
 }
?> 
<html>
<style type="text/css">
//Button colour is now yellow and size has been changed
 #form{font: bold 30px/30px Georgia, serif;}
 button{background: rgba(255, 255, 0, 0.99); width:
250px; height: 180px;border: none;border: 3px solid black;borderradius:20px;}
 #container{margin0px; auto;width:80%;min-width:40%;}
</style>
<body>
<div id="container">
 <form id="form" method="post">
 <center>
<br><br>
<button name="getinfo"><h1>Get Info</h1></button>
 </form>
 </div>
</body>
</html>
