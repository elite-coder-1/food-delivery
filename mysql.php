<?php

$a=$_POST["PAROTTA"];
$b=$_POST["BIRYANI"];
$c=$_POST["NON VEG MEALS"];
$d=$_POST["DOSA WITH CURRY"];
$e=$_POST["FRIED RICE"];
$f=$_POST["NOODLES"];
$g=$_POST["s"];

$con=mysql_connect("localhost","root","");
mysql_select_db("sample");
mysql_query("insert into hello(PAROTTA,BIRYANI,NON VEG MEALS,DOSA WITH CURRY,FRIED RICE,NOODLES) values('$a','$b','$c','$d','$e','$f','$g')");
echo("Registered Successfully");
include("order.php");
mysql_close($con);
?>
