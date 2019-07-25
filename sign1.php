<?php
include_once("db_login.php");
include_once("db_sign.php");
$a1=$_GET['t1'];
$a2=$_GET['t2'];
$a3=$_GET['t3'];
$a4=$_GET['t4'];
$a5=$_GET['t5'];
$a6=$_GET['t6'];
$a7=$_GET['t7'];
$a8=$_GET['t8'];

$res=mysqli_query($con , "select * from login_data where uid='$a3' ");
$cnt=mysqli_num_rows($res);
if($cnt!=0)
{
	header("location:sign.php?x=1");
}
else
{
	mysqli_query($con , "insert into login_data values('$a3','$a4')");
	mysqli_query($con1 , "insert into user_data values('$a3','$a1','$a2','$a5','$a6','$a7','$a8')");
	header("location:sign.php?x=2");
}
?>
