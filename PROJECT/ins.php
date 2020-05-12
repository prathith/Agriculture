<?php
$co=mysqli_connect("localhost","root","","Register")or die("Error in Connection Contact Tech Support");
if($_SERVER["REQUEST_METHOD"] == "POST"){
$name=$_POST['user'];
$password=$_POST['pass'];
$mail=$_POST['mailid'];
$occ=$_POST['occupation'];
$qu="INSERT INTO `register` (`username`, `password`,`emailId`,`occupation`) VALUES ('$name','$password','$mail','$occ')";
$result=mysqli_query($co,$qu);
if($result)
{
echo "<script>alert('Registration Sucessfull Login for furter operations')</script>>";
$co=1;
}
else
{header('location:register.php');}
}
if($co==1)
{
header('location:login.php');
}

?>
