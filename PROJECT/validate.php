<?php
$co=mysqli_connect("localhost","root","","Register")or die("Error in Connection Contact Tech Support");
session_start();
$name=$_POST['uname'];
$password=$_POST['password'];
$qu="select * from register where username='$name' and password='$password'";
$result=mysqli_query($co,$qu);
$c=-1;
if($r=mysqli_fetch_array($result))
{
	if(($r['username']==$_POST['uname'])&&($r['password']==$_POST['password']))
	{
		$qu="INSERT INTO `login` (`username`, `password`,`result`) VALUES ('$name','$password','correct')";
	   $result=mysqli_query($co,$qu);
	   $c=1;
	   $_SESSION['user']=$name;
	   $_SESSION['mail']=$mail;
	}
	else
	{
		$qu="INSERT INTO `login` (`username`, `password`,`result`) VALUES ('$name','$password','incorrect')";
	   $result=mysqli_query($co,$qu);
	   $c=-1;
	}
}
if($c==1)
{header('location:HOME.php');}
else
{
header('location:register.php');
}
?>
