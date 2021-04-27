<?php
  $pageTitle = "NIL - Team";
  include 'init.php';
  session_start();
  if(!isset($_SESSION)){
    header ('Location: login.php');
  }
  include $tp1.'header.php';
?>
  <!-- Start Home -->
  <div class="team">
    <div class="container">
      <!-- Start Body -->
      <div class="content">
        <div class="head text-center">
          <h2>Our Team</h2>
        </div>
        <div class="ourTeam">
          <div class="row">
            <div class="col-md-4">
              <div class="member text-center">
                <div class="image">
                  <img src="<?php echo $design;?>/images/team/1.jpeg" alt="">
                </div>
                <span>CEO Of <span class="logo">NIL</span></span>
                <h5 >Nada Bassem</h5>
                <div class="icons">
                  <i class="fab fa-facebook-f"></i>
                  <i class="fab fa-twitter"></i>
                  <i class="fab fa-google"></i>
                </div>

              </div>
            </div>
            <div class="col-md-4 active">
              <div class="member text-center one">
                <div class="image">
                  <img src="<?php echo $design;?>/images/team/1.jpeg" alt="">
                </div>
                <span>CEO Of <span class="logo">NIL</span></span>
                <h5 >Amr Hussien</h5>
                <div class="icons">
                  <i class="fab fa-facebook-f"></i>
                  <i class="fab fa-twitter"></i>
                  <i class="fab fa-google"></i>
                </div>

              </div>
            </div>
            <div class="col-md-4">
              <div class="member text-center">
                <div class="image">
                  <img src="<?php echo $design;?>/images/team/1.jpeg" alt="">
                </div>
                <span>CEO Of <span class="logo">NIL</span></span>
                <h5 >Shaimaa Samir</h5>
                <div class="icons">
                  <i class="fab fa-facebook-f"></i>
                  <i class="fab fa-twitter"></i>
                  <i class="fab fa-google"></i>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Body -->
  </div>
  <!-- End Home -->
<?php include $tp1.'footer.php'; ?>
