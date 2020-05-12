<?php
$co=mysqli_connect("localhost","root","","Register")or die("Error in Connection Contact Tech Support");
if($_SERVER["REQUEST_METHOD"] == "POST"){
$name=$_POST['user'];
$query=$_POST['query'];
$mail=$_POST['mailid'];
$phone=$_POST['phone'];
$qu="INSERT INTO `query`(`name`, `mail`, `phone`, `quesition`) VALUES ('$name','$mail','$phone','$query')";
$result=mysqli_query($co,$qu);
if($result)
{
echo "<script>alert('Thank You will get a call shortly')</script>";
header('location:query.html');
}
else
{
echo "script>alert('Tecnical Issue contact tecnical support')</script>";
header('location:query.html');

}
}
?>
