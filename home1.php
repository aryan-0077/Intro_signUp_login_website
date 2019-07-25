<?php
session_start();
if(!isset($_SESSION['uid'])){
header('location:login.php');

}
else
{
echo "WELCOME :".$_SESSION['uid'];
echo "<br>" ;

echo "<a href='logout.php'>LOGOUT</a>";
}

?>
