<?php
  $pageTitle="NIL - Find Item";
  include 'init.php';
  $lock = false;
  session_start();
  if(!isset($_SESSION['username'])){
    header('Location: login.php');
    exit();
  }
  if($_SERVER['REQUEST_METHOD']=='POST'){

    $username= $_SESSION['username'];

    $name = $_POST['item-name'];
    $date =  $_POST['date'];
    $timestamp = date('Y-m-d', strtotime($date));
    $cate = $_POST['cate'];
    $desc = $_POST['description'];
    $path=$_POST['image'];

    $quest1 = $_POST['question1'];
    $quest2 = $_POST['question2'];
    $quest3 = $_POST['question3'];
    $ans1 = $_POST['ans1'];
    $ans2 = $_POST['ans2'];
    $ans3 = $_POST['ans3'];

    // Send Date to DataBase
    $q1=$con->prepare("INSERT INTO post (username, name, date, category, description, quest1, quest2, quest3, ans1, ans2, ans3, photoPath) values ('$username','$name','$timestamp','$cate','$desc','$quest1','$quest2','$quest3','$ans1','$ans2','$ans3','$path')");
    try{
      $q1->execute();
      header('Location: done.php');
      exit();
    }catch(PDOException $e){
      echo "Error: " . $e;
    }

  }
  include $tp1.'header.php';
?>
    <!-- Start Founder -->
    <div class="fouder">
      <!-- Start Body -->
      <div class="container">
        <div class="content">
          <div class="head text-center">
              <h2>Share Your Post</h2>
          </div>
          <div class="form">
            <form class="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" novalidate>
              <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="item-name" autofocus required>
              </div>
              <div class="form-group">
                <label for="date">Date</label>
                <input class="form-control" type="date" name="date"  required>
              </div>
              <div class="form-group">
                <label for="cate">Categories</label>
                <input list="categories" name="cate" id="cate" class="form-control" required>
                <datalist id="categories">
                  <option value="Devices">
                  <option value="Wallets">
                  <option value="Books">
                  <option value="Accessories">
                  <option value="Personal Belongs">
                </datalist>
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" rows="5"  required></textarea>
              </div>
              <div class="form-group quest">
                <label for="name">Question1</label>
                <input class="form-control" type="text" name="question1"  required>
                <label for="ans">ANS</label>
                <input class="form-control" type="text" name="ans1"  required>
              </div>
              <div class="form-group quest">
                <label for="name">Question2</label>
                <input class="form-control" type="text" name="question2"  required>
                <label for="ans">ANS</label>
                <input class="form-control" type="text" name="ans2"  required>
              </div>
              <div class="form-group quest">
                <label for="name">Question3</label>
                <input class="form-control" type="text" name="question3" required>
                <label for="ans">ANS</label>
                <input class="form-control" type="text" name="ans3" required>
              </div>
              <div class="d-flex file">
                <label for="photo">Item Photo</label>
                <div class="d-flex">
                  <input type="file" name="image" id="image" required>
                </div>
              </div>
              <input type="submit" name="submit" value="Share Now" class="btn second-back">
            </form>
          </div>
        </div>
      </div>
      <!-- End Body -->
    </div>
    <!-- End Header -->

<?php include $tp1.'footer.php' ?>
