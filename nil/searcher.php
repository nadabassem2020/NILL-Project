<?php
  $pageTitle = 'NIL - Search';
  include 'init.php';
  session_start();
  if(!isset($_SESSION['username'])){
    header ('Location: login.php');
    exit();
  }
  include $tp1.'header.php';
 ?>
    <!-- Start Founder -->
    <div class="searcher">
      <!-- Start Body -->
      <div class="container">
        <div class="content">
          <div class="head text-center">
              <h2>Search To Find Your Item Now</h2>
          </div>
          <div class="search">
            <div class="search-bar d-flex">
              <form class="" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                <input type="text" name="name" value="" placeholder="Search by Your Item Name" required>
                <button type="submit" name="button" class="btn second-back">
                  <i class="fas fa-search"></i>
                </button>
              </form>
            </div>
            <div class="filters">
              <div class="d-flex">
                <h6 class="main-color">Categories:</h6>
                <div class="controls">
                  <ul class="list-unstyled">
                    <li class="active" data-filter="all" value="all">ALL</li>
                    <li data-filter=".Devices" value="Devices">Devices</li>
                    <li data-filter=".Wallets" value="Wallets">Wallets</li>
                    <li data-filter=".Books" value="Books">Books</li>
                    <li data-filter=".Accessories" value="Accessories">Accessories</li>
                    <li data-filter=".Personal Belongs" value="Personal Belongs">Personal Belongs</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="row mixItUp">
              <?php
                $con=mysql_connect("localhost","root","");
                mysql_select_db("nil");
                if($_SERVER['REQUEST_METHOD']!="POST"){
                  $q=mysql_query("SELECT * FROM post");
                }else {
                  $name = $_POST['name'];
                  $q=mysql_query("SELECT * FROM post WHERE name='$name' ");
                }
                while($row=mysql_fetch_array($q))
                {
                  $id=$row["postID"];
                  echo'
                  <div class="col-md-4 mix '.$row['category'].'">
                    <div class="item text-center">
                      <div class="image">
                        <img src="design/images/temp.jpg" alt="">
                      </div>
                      <div class="text">
                        <h4 class="name">'.$row['name'].'</h4>
                        <span class="date">'.$row['date'].'</span>
                        <p class="desc">'.$row['description'].'</p>
                      </div>
                      <div class="mine">
                        <a href="mine.php?id='.$id.'" class="btn second-back">
                        This is Mine
                        </a>
                      </div>
                    </div>
                  </div>
                  ';
                }
               ?>
               <div class="match head text-center col-md-12">
                 <h2 class="h1">No Match Items</h2>
               </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Body -->
    </div>
    <!-- End Founder -->

    <script src="design/js/mixitup.js"></script>
<?php include $tp1.'footer.php'; ?>
