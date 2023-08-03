<?php
session_start();
if($_SESSION["Email"])
{$conn=mysqli_connect("localhost","root","","web");
  $email=$_SESSION["Email"];
$sql="delete from reg where Email='$email'";
if(mysqli_query($conn,$sql))
{
  echo "<script>alert('Account Deleted')</script>";

}
else{
  echo "<script>alert('Account Not Deleted')</script>";
}

header('location:login.php');
}

?>