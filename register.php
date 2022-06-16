<?php
include("setting.php");
$name=$_POST['name'];
$email=$_POST['email'];
$sid=$_POST['stuid'];
$pas=sha1($_POST['pass']);
if($name==NULL || $email==NULL || $sem==NULL || $sid==NULL || $_POST['pass']==NULL)
{
	//
}
else
{
	$sql=mysqli_query($set,"INSERT INTO students(sid,name,sem,password,email) VALUES('$sid','$name','$sem','$pas','$email')");
	if($sql)
	{
		$msg="Successfully Registered";
	}
	else
	{
		$msg="User Already Exists";
	}
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book Management System</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="banner">
<span class="head">Book Management System</span><br />
<marquee class="clg" direction="right" behavior="alternate" scrollamount="1">BMS</marquee>
</div>
<br />

<div align="center">
<div id="wrapper">
<br />
<br />

<span class="SubHead">Registration</span>
<br />
<br />
<form method="post" action="">
<table border="0" cellpadding="4" cellspacing="4" class="table">
<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
<tr><td class="labels">Name : </td><td><input type="text" name="name" class="fields" placeholder="Enter Full name" required="required" size="25" /></td></tr>
<tr><td class="labels">Email ID : </td><td><input type="email" name="email" class="fields" placeholder="Enter Email ID" required="required" size="25" /></td></tr>
<tr>
</tr>
<tr><td class="labels">Student ID : </td><td><input type="text" name="sid" class="fields" placeholder="Enter Student ID" required="required" size="25" /></td></tr>
<tr><td class="labels">Password : </td><td><input type="password" name="pass" class="fields" placeholder="Enter Password" required="required" size="25" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Register" class="fields" /></td></tr>
</table>
</form><br />
<br />
<a href="index.php" class="link">Go Back</a>
<br />
<br />

</div>
</div>
</body>
</html>