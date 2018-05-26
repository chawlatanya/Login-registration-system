<?php
$servername="localhost";
$username="root";
$password="";
$dbname="innerve";
try {
	$con= new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	echo"Connected";
}
catch(PDOException $e)
{
	echo "Connection failed: ".$e->getMessage();

}
//$con=mysql_connect("localhost","root","") or die("unable to connect");
//mysqli_select_db("innerve",$con);
?>	