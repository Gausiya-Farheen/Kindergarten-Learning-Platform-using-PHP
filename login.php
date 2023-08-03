<?php
if(isset($_POST["login"])){

$conn=mysqli_connect("localhost","root","","web");
$email=$_POST["email"];
$pass=$_POST["pass"];
$sql="select*from reg where Email='$email' and Password='$pass'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($res);
    if($row>0){
      
      $hash=$row[3];

      if($pass==$hash){
        session_start();
      $_SESSION["Email"]=$row[1];
      $_SESSION["Name"]=$row[0];
      $_SESSION["Phno"]=$row[2];
      $_SESSION["Password"]=$row[3];
      header('location:index.php');
    }
    else{
      echo "data not found";
    }
  }
}
    ?>
    <html>
  <link rel="stylesheet"href="login.css">
  <form action="#" method="POST">
    <h1>Login</h1>
  <table border=0>
  <tr>
       <td><label for="email">EMAIL:</label></td>
       <td><input type="email" id="email" name="email" size=20 required></td>
     </tr>
     <tr>
        <td><label for="psswrd">PASSWORD:</label></td>
        <td><input type="password" id="psswrd" name="pass" size="20" required></td></tr>
        <tr>
       <td><input type="submit" value="Login" name="login" id="button"></td>
       <td>don't have an account?<a href="http://localhost/alphabet/signup.php">sign-up</a></td>
       <td><a href="http://localhost/alphabet/Fpassword.php">Forgot Password?</a></td>
</tr>
  </table>

</form>


