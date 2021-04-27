<?php
  $pageTitle = 'NIL - Mine';
  include 'init.php';
  session_start();
  if(!isset($_SESSION['username'])){
    header ('Location: login.php');
    exit();
  }
  $honest= false;
  $id=$_GET['id'];
  $stmt = $con->prepare("SELECT * FROM post WHERE postID = '$id'");
  $stmt->execute();
  $item=$stmt->fetch();

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $userAns1=$_POST['ans1'];
      $userAns2=$_POST['ans2'];
      $userAns3=$_POST['ans3'];
      if($userAns1==$item['ans1'] && $userAns2==$item['ans2'] && $userAns3==$item['ans3'] ){
          $honest = true;
      }else{
          header ('Location: false.php');
          exit();
      }
  }

  include $tp1.'header.php';
 ?>
 <!-- Start mine -->
 <div class="mine">
   <div class="container">
     <!-- Start Body -->
     <div class="content">
       <div class="head text-center">
         <?php
            if($honest){
              echo'
                <div class="cograts second-back">
                  <h2 class="h1">Congrats!!, All Your Answers Were True</h2>
                  <h2 class="h1">We Are Very Happy That You Found Your Item :)</h2>
                  <br><br><br><br><br><br><br><br>
                </div>
              ';
            }
          ?>
         <h2 class="main-color">More Details</h2>
       </div>
       <div class="row text-center">
         <div class="col-md-8">
           <div class="item">
             <div class="image">
               <?php
                  if($honest){
                    echo'
                      <img src="design/images/items/'.$item['photoPath'].'" alt="">
                    ';
                  }else {
                    echo '
                      <img src="design/images/temp.jpg" alt="">
                    ';
                  }
                ?>
             </div>
             <div class="text">
               <h2><?php echo $item['name'] ?></h2>
               <span><?php echo $item['date'] ?></span>
               <p class="desc"><?php echo $item['description'] ?></p>
             </div>
             <?php
                if ($honest){
                  $owner = $item['username'];
                  include 'true.php';
                }else{
                  echo'
                  <div class="form">
                    <h4>Please Answer Those Questions</h4>
                    <form action="'.$_SERVER["PHP_SELF"].'?id='.$id.'" method="post">
                      <div class="form-group quest">
                        <label for="name">'.$item["quest1"] .'</label>
                        <div class="ans">
                          <label for="ans">ANS</label>
                          <input class="form-control" type="text" name="ans1"  required>
                        </div>
                      </div>
                      <div class="form-group quest">
                        <label for="name">'.$item["quest2"].'></label>
                        <div class="ans">
                          <label for="ans">ANS</label>
                          <input class="form-control" type="text" name="ans2"  required>
                        </div>
                      </div>
                      <div class="form-group quest">
                        <label for="name">'.$item["quest2"].'</label>
                        <div class="ans">
                          <label for="ans">ANS</label>
                          <input class="form-control" type="text" name="ans3"  required>
                        </div>
                      </div>
                      <input type="submit" name="" value="Submit Answers" class="btn second-back">
                    </form>
                  </div>
                  ';
                }

              ?>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- End Body -->
 </div>
 <!-- End mine -->
 <?php include $tp1.'footer.php'; ?>
