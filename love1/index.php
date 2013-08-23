<?php
	$Date_1=date("Y-m-d");
	$Date_2="2011-1-1";
	$d1=strtotime($Date_1);
	$d2=strtotime($Date_2);
	$Days=round(($d1-$d2)/3600/24);
	$a3=$Days%10;
	$a2=(($Days%100)-$a3)/10;
	$a1=($Days-$a3-($a2*10))/100;
	
	$Date_3=date("Y-m-d");
	$Date_4="2011-2-26";
	$d3=strtotime($Date_3);
	$d4=strtotime($Date_4);
	$Days2=round(($d4-$d3)/3600/24);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Falling in Love With Sweety</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Droid+Serif&subset=latin' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="favicon.ico" >
<style type="text/css">
<!--
.STYLE1 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div id="Top">
<img src="logo.png" />
</div>
<div id="Root" align="center">
<img src="number/<?php echo $a1;?>.jpg" />
<img src="number/<?php echo $a2;?>.jpg" />
<img src="number/<?php echo $a3;?>.jpg" />&nbsp;<span style="font-size:70px">Days With Us.</span>
</div> 
<div id="Bottom">
Since <?php echo $Date_2; ?>  &nbsp; &nbsp; <span class="STYLE1">我们天天在一起</span></div> <!--另外:还有<span class="STYLE1"><?php echo $Days2;?></span>天我们又能相见啦。-->
</body>
</html>