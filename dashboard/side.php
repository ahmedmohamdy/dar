<?php
 //session_start();
 $username = $_SESSION['username'];

    $stmt = $con->prepare("SELECT * FROM admins WHERE username = :ztype");
    $stmt->bindParam(":ztype", $username);
    $stmt->execute();
    $type1 =$stmt->fetch();


?>   

     <nav class="sidebar sidebar-offcanvas" id="sidebar">
       <br>
     <hr>
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="images\face1.jpeg" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->              
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2"><?php echo $type1['username']; ?></span>
                <span class="text-secondary text-small">Admin</span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>

       
          <li class="nav-item">
            <a class="nav-link" href="admins.php">
              <span class="menu-title"> Admins</span>
              <i class="fa fa-user-secret menu-icon" aria-hidden="true"></i>
            </a>
          </li>
  
          <li class="nav-item">
            <a class="nav-link" href="users.php">
              <span class="menu-title">Users - Contact</span>
              <i class="fa fa-id-card-o menu-icon" aria-hidden="true"></i>
            </a>
          </li> 

          <li class="nav-item">
            <a class="nav-link" href="blogs.php">
              <span class="menu-title">BLOGs</span>
              <i class="fa fa-rss-square menu-icon" aria-hidden="true"></i>

            </a>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link" href="reviews.php">
              <span class="menu-title">Reviews</span>
              <i class="fa fa-rss-square menu-icon" aria-hidden="true"></i>

            </a>
          </li> -->

        </ul>
      </nav>