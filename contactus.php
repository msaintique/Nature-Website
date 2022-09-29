<?php
$conn=mysqli_connect("localhost","root","");
if($conn)
{
    echo "connected successfully";
}else
{
    echo "connection fail";
}
mysqli_select_db($conn,"forms");

$name=$_POST["form-names"];
$email=$_POST["form-email"];
$password=$_POST["form-password"];
$message=$_POST["form-message"];
$sql="INSERT INTO contact(Names,Email,Password,Message) VALUES('$name','$email','$password','$message')";
mysqli_query($conn,$sql);
header("location:login.php");
?>
