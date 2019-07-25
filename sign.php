<html>
	<head>
		<title>
		Online course portal
		</title>
	</head>
		<body background='bg.jpg' topmargin=10 leftmargin=10><center>
         <img src=am.jpg weight=100 height=100>
		<font face='Bernard MT Condensed' size=7 color=RED face='#8A2BE2'><b><i><u>ONLINE COURSE PORTAL</u></i></b></font><br><hr>

		<table width=90%>
		<tr bgcolor=pink><td><center><a href=index.php>HOME</a></center></td><td><center><a href=about.php>About Us</a></center></td><td><center><a href=login.php>Login</a></center></td><td><center><a href=sign.php>Sign Up</a></center></td></tr>
		<tr><td colspan=2 width=50%>
		<font size=5><br>
			Online course portal for a  campus is a web based
 	   application which can be used for a campus.<br><br>
 	   In the present computerized world, one can built up
 	   his career through online courses having
 	   beneficial in time and achieving his goal
 	   in earning the biggest and most
 	   important investment in life.<br>
 	   The system stores information about
 	   all the latest courses and the registered users.<br><br>
 	   This allows registered users of the system
 	   to join a course available in the site
 	   and access the materials published for the course.<br>
 	   There will be a course portal home page
 	   which contain a registration link as well as login
</td><td colspan=2 width=50%>
<center>
<table>
<form name=frm1 action=sign1.php>
<?php
if(isset($_GET['x'])){
$a=$_GET['x'];
if($a==1)
{
	echo"<tr bgcolor=yellow><td colspan=2><center><font color=blue>User Already Exists</font></center></td></tr>";
}
if($a==2)
{
	echo"<tr><td colspan=2 bgcolor=pink><center><font color=blue>User created sucessfully</font></center></td></tr>";
}
}
?><br>
<tr ><td colspan=2><center><font color=yellow>Sign up here</font></center></td></tr>
	<tr><td>Enter First Name</td><td><input type=text name=t1></td></tr>
	<tr><td>Enter Last Name</td><td><input type=text name=t2></td></tr>
	<tr><td>Enter User Id</td><td><input type=text name=t3></td></tr>
	<tr><td>Enter Password</td><td><input type=text name=t4></td></tr>
	<tr><td>Select Department</td><td>
	<select name=t5><option>B.Tech</option><option>MBA</option><option>MCA</option><option>M.Tech</option></select>	</td></tr>
	<tr><td>Select Year</td><td>
	<select name=t6>
		<option value=1>1 Year</option>
		<option value=2>2 Year</option>
		<option value=3>3 Year</option>
		<option value=4>4 Year</option>
	</select></td></tr>
	<tr><td>Enter Mobile</td><td><input type=text name=t7 maxlength=10></td></tr>
	<tr><td>Enter Email</td><td><input type=text name=t8></td></tr>
	<tr></tr><tr></tr><br>
	<tr><td></td><td><input type=submit></td></tr>
</table>
</form>
</center>
</td></tr></table>
</font>
</pre>
<br><br><br><br><br><br><hr>
<center><a href="about.php">About us</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="about.php">Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href>Site map</a></center>



			</form>
			</body>
</html>
