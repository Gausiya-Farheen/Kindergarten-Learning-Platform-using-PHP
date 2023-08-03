<?php
session_start();
?>
 <?php if (isset($_SESSION["Email"])) : ?>
    <nav class="nav nav-pills flex-column flex-sm-row" id="nav">
      <a class="flex-sm-fill text-sm-center nav-link nav-items" href="#">HOME</a>
      <a class="flex-sm-fill text-sm-center nav-link nav-items" href="Alphabets.php">ALPHABETS</a>
      <a class="flex-sm-fill text-sm-center nav-link nav-items" href="numbers.php">NUMBERS</a>
      <a class="flex-sm-fill text-sm-center nav-link nav-items" href="hindi.php">HINDI</a>
      <a class="flex-sm-fill text-sm-center nav-link nav-items" href="logout.php">LOGOUT</a>
      <a class="flex-sm-fill text-sm-center nav-link nav-items" href="Udetail.php">YOUR DETAIL</a>
    </nav>
  <?php endif; ?>
  <?php if (!isset($_SESSION["Email"])) : ?>
    
    <a href="login.php" class="btn-start">Start Learning</a>
    
  <?php endif; ?>
