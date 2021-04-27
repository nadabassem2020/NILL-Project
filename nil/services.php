<?php
  $pageTitle = "NIL - Services";
  include 'init.php';
  session_start();
  if(!isset($_SESSION['username'])){
    header ('Location: login.php');
    exit();
  }
  include $tp1.'header.php';
 ?>

   <!-- Start Type -->
   <div class="type">
     <div class="container">
       <div class="content">
         <div class="head text-center">
           <h2 class="main-color">Choose Login Type</h2>
         </div>
         <div class="choices">
           <div class="row">
             <div class="col-md-4 text-center">
               <div class="choice ">
                 <a href="searcher.php">
                 <div class="icon second-back">
                   <i class="fas fa-search"></i>
                 </div>
                 <h3 class="main-color">Searcher</h3>
                 </a>
               </div>
             </div>
             <div class="col-md-4 text-center">
               <div class="choice">
                 <a href="founder.php">
                   <div class="icon second-back">
                     <i class="fas fa-user-alt"></i>
                   </div>
                   <h3 class="main-color">Founder</h3>
                 </a>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- End Type -->

<?php include $tp1.'footer.php';?>
