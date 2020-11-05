<html>
<head>
<title> Welcome!</title>
</head>
<body>
<p> Welcome to my movie review site!<br/>
<?php
date_default_timezone_set("America/New_York");
echo "Today is ";
echo date("F d");
echo ", ";
echo date("Y");
echo "<br>";
echo "Yesterday it was ";
echo date("F d", strtotime("yesterday"));
echo ", ";
echo date("Y");
echo "<br>";
echo "The previous month is ";
$mes_anterior = date('m', strtotime('-1 month'));
echo $mes_anterior;
echo "<br>";
echo "There are ";
$dia_mes = date("d");
$total_dias = date ("t");
$resta = $total_dias - $dia_mes;
echo $resta;
echo " days left in this month.";
echo "<br>";
echo "There are ";
$mes = date("m");
$resta_mes = 12 - $mes;
echo $resta_mes;
echo " months left in the current year.";
echo "<br>";
if($mes==1){echo "Good winter";}
if($mes==2){echo "Good winter";}
if($mes==3){echo "Good spring";}
if($mes==4){echo "Good spring";}
if($mes==5){echo "Good spring";}
if($mes==6){echo "Good summer";}
if($mes==7){echo "Good summer";}
if($mes==8){echo "Good summer";}
if($mes==9){echo "Good autumn";}
if($mes==10){echo "Good autumn";}
if($mes==11){echo "Good autumn";}
if($mes==12){echo "Good winter";}
?>
<br/>
<div style="text-align: center">
<?php
include "footer.php";
?>
</div>
</body>
</html>