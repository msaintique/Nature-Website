<?php
$conn=mysqli_connect("localhost","root","","forms");
if($conn)
{
    echo"login successful";
}
else
{
    echo"login fail";
}
$email=$_POST["form-email"];
$password=$_POST["form-password"];
$query="SELECT Email,Password FROM contact WHERE Email='$email' AND Password='$password'";
// header('location:contactus.php');
?>