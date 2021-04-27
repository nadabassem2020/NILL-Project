<?php

  $stmt = $con->prepare("SELECT * FROM user WHERE username= '$owner'");
  $stmt->execute();
  $person = $stmt->fetch();

?>
<div class="true">
  <div class="info">
    <div class="head">
      <h4>More Details About Founder</h4>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="image">
          <img src="design/images/profiles/<?php echo $person['photoPath']; ?>" alt="">
        </div>
      </div>
      <div class="col-md-8">
        <div class="details">
          <ul class="list-unstyled">
            <li><h6> Name: <?php echo $person['name']; ?></h6></li>
            <li><h6> Email: <?php echo $person['email']; ?></h6></li>
            <li><h6> Location: <?php echo $person['location']; ?></h6></li>
            <li><h6> Phone: <?php echo $person['tele']; ?></h6></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
