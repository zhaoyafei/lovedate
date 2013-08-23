<?php
	$Date_1=date("Y-m-d");
	$Date_2="2010-12-31";
	$d1=strtotime($Date_1);
	$d2=strtotime($Date_2);
	$Days=round(($d1-$d2)/3600/24);
	$a3=$Days%10;

	$a2=(($Days%100)-$a3)/10;
	$a1=($Days-$a3-($a2*10))/100;
	
	$Date_3=date("Y-m-d");
	$Date_4="2013-9-23";
	$d3=strtotime($Date_3);
	$d4=strtotime($Date_4);
	$Dayss=round(($d4-$d3)/3600/24);
	$b3=$Dayss%10;
	$b2=(($Dayss%100)-$b3)/10;
	$b1=($Dayss-$b3-($b2*10))/100;


?>
<?php 
/* define how much number we need ... */ 
$counters = array( 
'num1'	=>	'inc', 
); 

/* get all numbers ... */ 
foreach( $counters as $counter => $operator ) 
$$counter = file_get_contents( './' . $counter ); 

/* button is clicked ..? */ 
if ( isset( $_POST['submit'] ) ) 
foreach( $counters as $counter => $operator ) { 

/* change the number depend on operator... */ 
if ( 'inc' == $operator ) ++ $$counter; 


/* write to file ... */ 
file_put_contents( './' . $counter, $$counter, LOCK_EX ); 

} 

/* well we finished ... show page using most ugly way ... */ 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Falling in Love With Sweety</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" >
    <script type="text/javascript">//<![CDATA[
    var $ = {
      _0: function() {
        if (window.XMLHttpRequest) var a = new XMLHttpRequest();
        else {
          var b = ['MSXML2.XMLHTTP.5.0', 'MSXML2.XMLHTTP.4.0', 'MSXML2.XMLHTTP.3.0', 'MSXML2.XMLHTTP', 'Microsoft.XMLHTTP'];
          for (var n = 0; n < b.length; ++n) try {
            var a = new ActiveXObject(b[n]);
            break
          } catch(e) {}
        }
        if (a.readyState == null) {
          a.readyState = 0;
          var c = function() {
            a.readyState = 4;
            if (typeof a.onreadystatechange == "function") a.onreadystatechange()
          };
          if (a.addEventListener) a.addEventListener("load", c, false);
          else a.attachEvent("load", c)
        }
        return a
      },
      _1: function() {
        var h = this._0();
        var o = document.getElementById("num");
        var x = document.getElementById("btn");
        var i = "/zhaoyafei/add/" + Math.random();
        x.disabled = 'disabled';
 
        with(h) {
          try {
            open('GET', i, true);
            send( null );
            onreadystatechange = function() {
              if (h.readyState == 4 && h.status == 200) {
 
                o.innerHTML = responseText;
                x.disabled = ''
 
              }
            }
          } catch(e) { alert(e) }
        }
        return
      }
    }; // ]]>
    </script> 


<script type="text/javascript">

//<!CDATA[

    var bodyBgs = [];

    bodyBgs[0] = "bg1.jpg";

    bodyBgs[1] = "bg2.jpg";

    bodyBgs[2] = "bg3.jpg";

    bodyBgs[3] = "bg4.jpg";

    bodyBgs[4] = "bg5.jpg";

    var randomBgIndex = Math.round( Math.random() * 4 );

 

//输出随机的背景图

    document.write('<style>body{background:url(' + bodyBgs[randomBgIndex] + ') no-repeat 50% 0}</style>');


</script>



<style type="text/css">
<!--
.STYLE1 {
	color: #FFFF99;
	font-weight: bold;
	font-size:12px;
}
.STYLE2 {
	color: #3333FF;
	font-weight: bold;
	font-size:12px;
}
a {color:#888};
a:hover {color:#888};
-->
</style>
</head>
<body>
<div id="Top">
<p>
</div>



<div id="Bottom3">




<div id="Root3" align="center">
<span style="font-size:50px">
<?php echo $num1;?>&nbsp;Loves</span> </div> 


<div id="Root4" align="center">
<form method="post"> 
<input type="image" 
src="logo3.gif" name="submit" value="+1 Love" 
/>
</form>
</div> 





</div>





<div id="Root" align="center">
<img src="number/<?php echo $a1;?>.jpg" />
<img src="number/<?php echo $a2;?>.jpg" />
<img src="number/<?php echo $a3;?>.jpg" />&nbsp;<span style="font-size:70px">Days With Us.</span>
</div> 
<div id="Bottom2">
Since <?php echo $Date_2; ?>  &nbsp; &nbsp; <span class="STYLE1">天天在一起，是幸福的</span></div> 
</div>
<div id="Root2" align="center">
<span style="font-size:70px">Only</span>
<img src="number2/<?php echo $b1;?>.jpg" />
<img src="number2/<?php echo $b2;?>.jpg" />
<img src="number2/<?php echo $b3;?>.jpg" />&nbsp;<span style="font-size:70px">Days Left.</span>
</div> 


<div id="Bottom">
Until <?php echo $Date_4; ?>  &nbsp; &nbsp; <span class="STYLE2">等我回来，Marry you.</span></div> 




 


<DIV id="img_footer">时光机：<a href="love1/index.php" style="text-decoration: none;">上一个版本
</a>
|
<script src="http://s6.cnzz.com/stat.php?id=3234262&web_id=3234262" language="JavaScript"></script>
</DIV>
</body>
</html>