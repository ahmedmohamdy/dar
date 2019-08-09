<?php
 session_start();
 $pagetitle = 'Dashboard';

 if(isset($_SESSION['username'])){

  include "init.php";

  $username = $_SESSION['username'];

  $stmt = $con->prepare("SELECT * FROM admins WHERE username = :ztype");
  $stmt->bindParam(":ztype", $username);
  $stmt->execute();
  $type1 =$stmt->fetch();


  $stmt = $con->prepare("SELECT * FROM admins ORDER BY ID DESC");
  //$stmt->bindParam(":zid", $IID);
  $stmt->execute();
  $admin =$stmt->fetchAll();


 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>دار التعافي</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors\iconfonts\mdi\css\materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors\css\vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors\css\vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors\iconfonts\font-awesome\css\font-awesome.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css\style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images\flogo.png">
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="images\flogo.png" alt="logo"></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images\flogo.png" alt="logo"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <div class="search-field d-none d-md-block">
          <form class="d-flex align-items-center h-100" action="#">
            <div class="input-group">
              <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>                
              </div>
              <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
            </div>
          </form>
        </div>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="images\face1.jpeg" alt="image">
                <span class="availability-status online"></span>             
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black"><?php echo $type1['username']; ?></p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
          </li>
          <li class="nav-item d-none d-lg-block full-screen-link">
            <a class="nav-link">
              <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
            </a>
          </li>

          <li class="nav-item nav-logout d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="mdi mdi-power"></i>
            </a>
          </li>
          
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close mdi mdi-close"></i>
        <ul class="nav nav-tabs bg-gradient-warning" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-warning todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked="">
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked="">
                      Project review
                    </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
              </ul>
            </div>
          </div>
          <!-- To do section tab ends -->
        </div>
      </div>
      <!-- Start Sidebar -->
      <!------------------------------------------>
      <?php 
            require 'side.php';
          ?>
      <!------------------------------------------>
      <!-- End Sidebar -->
      <!--=------------------------------------------ Page Content ---------------------------------------------->

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-warning text-white mr-2">
                <i class="mdi mdi-home"></i>                 
              </span>
              Dashboard - Admins
            </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                  <span></span>Overview
                  <i class="mdi mdi-alert-circle-outline icon-sm text-warning align-middle"></i>
                </li>
              </ul>
            </nav>
          </div>
          
          <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Manage Admins </h4>
                  <a href="adminsop.php?do=add"><button class="col-4 btn btn-outline-success add">Add Admins</button></a>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                          <th>#ID</th>
                          <th>UserName</th>
                          <th>Password</th>
                          <th>Controls</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                     foreach ($admin as $ad) {
                     ?>
                      <tr class="table-info">
                        <td><?php echo $ad['ID']?></td>
                        <td><?php echo $ad['username']?></td>
                        <td><?php echo $ad['password']?></td>
                        <td class="tdcont"> 
                        <a href="adminsop.php?do=edit&id=<?php echo $ad["ID"] ; ?> "><button class="btn btn-outline-success">Edit</button></a>
                        <a href="adminsop.php?do=delete&id=<?php echo $ad["ID"] ; ?> "><button class="btn btn-outline-success">Delete</button></a>
                        </td>

                      </tr>
                      <?php
                          }
                        ?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>


            
              </div>
            </div>
          </div>
          
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="#" target="_blank">Enactus-O6U</a>. All rights reserved.</span>

          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors\js\vendor.bundle.base.js"></script>
  <script src="vendors\js\vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js\off-canvas.js"></script>
  <script src="js\hoverable-collapse.js"></script>
  <script src="js\misc.js"></script>
  <script src="js\settings.js"></script>
  <script src="js\todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js\dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
<?php
}else{
  header('Location: index.php');
        exit();
}
 ?>