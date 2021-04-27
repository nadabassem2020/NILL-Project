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
  <div class="true">
    <div class="container">
      <!-- Start Body -->
      <div class="content">
        <div class="head text-center">
          <h2 class="h1">You've Submitted a Wrong Answers</h2>
          <br><br><br>
          <h2 class="h1">Please Be Honest <br><br>And Don't Try To Take Something That You Don't Own</h2>
        </div>
      </div>
    </div>
  </div>
 <?php include $tp1.'footer.php'; ?>
