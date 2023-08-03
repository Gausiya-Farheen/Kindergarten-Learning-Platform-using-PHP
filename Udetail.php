<?php
session_start();
if($_SESSION["Email"])
{
  $name=$_SESSION["Name"];
  $email=$_SESSION["Email"];
  $phno=$_SESSION["Phno"];
  $pass=$_SESSION["Password"];
  echo "
        <div class='row'>
        <div class='col-md-3'></div>
        <div class='col-md-6 well weell'>
            <h4>PROFILE</h4><hr>
            <h6>Name: ".$name."</h6>
            <h6>E-mail: ".$email."</h6>
            <h6>Phone Number: ".$phno."</h6>
            <h6>Password: ".$pass."</h6>
            </div>
            </div>
            </div>";

}
?>
<html>
  <style>
     html{
     background-color:moccasin;
     font-size: 17px;
     margin=0;
     box-sizing: border-box;
  display:flex;
  flex-wrap: wrap;
  flex-direction: column;
  }
  body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color:burlywood;
        /* background-image: url('image/background1.jpg');
        background-repeat: no-repeat;
        background-size: 200% 200%; */

    }


    h4 {
        margin: 0 0 10px;
        color: #333;
        font-size: 20px;
        font-weight: bold;
    }

    h6 {
        margin: 5px 0;
        color: #555;
        font-size: 16px;
        font-weight: normal;
    }

    hr {
        margin: 10px 0;
        border: none;
        border-top: 1px solid #ccc;
    }

    .weell{
        margin-top: 20px;
        text-align: center;
    }

    a {
        text-decoration: none;
        margin-left: 10px;
    }
    .row {
        display: flex;
        flex-wrap: wrap;
        margin:  100px;
        height: 250px;
    }

    .col-md-3,
    .col-md-6 {
        width: calc(33.33% - 20px);
        padding: 0 10px;
        margin-bottom: 20px;
    }

    .well {
        background-color: #f2f2f2;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
    }
    
*, *:before, *:after {
  box-sizing:inherit;
}
body::-webkit-scrollbar{
  display: none;
}
.button{
  margin-left: 45%;
  margin-top: -7%;
}
    </style>
 <div class="button"> <a href="http://localhost/alphabet/update.php">Edit</a>
  <a href="http://localhost/alphabet/delete.php">delete</a></div>
  

