<?php
  if(isset($_POST["signup"]))
  {
    $conn=mysqli_connect("localhost","root","","web");
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phno=$_POST["phno"];
    $pass=$_POST["pass"];
    $sql="insert into reg values('$name','$email',$phno,'$pass')";
    $res=mysqli_query($conn,$sql);
    
    if($res)
     { echo "<script>alert('Registered Successfully')</script>";
      header('location:login.php');
    }
    
    else{
      echo "<script>alert('Please fill required details')</script>";
    }
    
   
  }

?>
<html>
  <link rel="stylesheet"href="signup.css">
  <form action="#" method="POST">
    <title>Register</title>
  <h1>REGISTER</h1>

    <table border=0>
  <tr>
        <td><label for="name"> NAME:</label></td>
        <td><input type="text" id="name" name="name" size="20" maxlength="25" pattern="[A-Za-z/s]*"></td>
      </tr>

     <tr>
       <td><label for="email">EMAIL:</label></td>
       <td><input type="email" id="email" name="email" size=20 required pattern="[a-z0-9._/%+-4]*@gmail.com"></td>
     </tr>

     <tr>
       <td><label for="phno">PHONE NUMBER:</label></td>
       <td><input type="text" id="phno" name="phno" size=20 pattern="[0-9]{10}"></td>
     </tr>

     <tr>
        <td><label for="psswrd">PASSWORD:</label></td>
        <td><input type="password" id="psswrd" name="pass" size="20" required ></td></tr>
      <tr>
       <td><input type="submit" value="SignUp" name="signup" id="button"></td>
       <td>already have an account?<a href="http://localhost/alphabet/login.php ">login</a></td>
     </tr>
    </table>