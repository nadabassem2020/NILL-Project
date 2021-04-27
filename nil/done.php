<?php
  $pageTitle = 'NIL - Posted';
  include 'init.php';
  session_start();
  if(!isset($_SESSION['username'])){
    herad('Location: login.php');
    exit();
  }
  include $tp1.'header.php';
 ?>
  <div class="done">
    <div class="container">
      <!-- Start Body -->
      <div class="content">
        <div class="head text-center">
          <h2 class="h1">Your Post is Shared Successfully</h2>
          <br><br><br><br>
          <h2 class="h1">Thanks For Being a Good Person</h2>
        </div>
      </div>
    </div>
  </div>

 <?php include $tp1.'footer.php'; ?>
