<?php

if(isset($_POST["get"]))
{
  
  $conn=mysqli_connect("localhost","root","","web");
  $email=$_POST["email"];
  $pass=$_POST["pass"];
  $sql="update reg set Password='$pass' where Email='$email'";
  if(mysqli_query($conn,$sql))
    {
    echo "<script>alert('password changed')</script>";
  }
  else{
    echo "<script>alert('password changed')</script>";
  }
 header('location:login.php');

}
?>

<html>
<link rel="stylesheet" href="fpassword.css">
<form action="#" method="POST">
  <h1>Reset Password</h1>
<table border=0>
  <tr>
       <td><label for="email">EMAIL:</label></td>
       <td><input type="email" id="email" name="email" size=20 required></td>
     </tr>
     <tr>
        <td><label for="psswrd">PASSWORD:</label></td>
        <td><input type="password" id="psswrd" name="pass" size="20" required></td></tr>
        <tr>
       <td>  <input type="submit" name="get" value="enter" id="button"></td>

</form>
