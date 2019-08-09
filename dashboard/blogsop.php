<?php
//ob_start();
 session_start();
 $pagetitle = 'Edit - BLOSs';

 if(isset($_SESSION['username'])){

  include "init.php";

  $username = $_SESSION['username'];

  $stmt = $con->prepare("SELECT * FROM admins WHERE username = :ztype");
  $stmt->bindParam(":ztype", $username);
  $stmt->execute();
  $type1 =$stmt->fetch();

$do = $_GET['do'];

   if($do == 'add'){
      if(isset($_POST['add'])){
            $title = $_POST['title'];
            $text = $_POST['text'];
            $ftext = $_POST['ftext'];
            $day = $_POST['day'];
            $month = $_POST['month'];
            $year = $_POST['year'];

            $imageName = $_FILES['image']['name'];
            $imageSize = $_FILES['image']['size'];
            $imageTmp  = $_FILES['image']['tmp_name'];
            $imageType = $_FILES['image']['type'];

            $exp = explode('.' , $imageName);
            $imageExtension = strtolower(end($exp));
            $Mimage = rand(0,100000) . '_' .$imageName;
            move_uploaded_file($imageTmp , "images/uploads/blogs//" . $Mimage);
            

            $stmt = $con->prepare("INSERT INTO blogs (title , text ,textt, day , month, year, image)
            VALUES(:ztitle,:ztext,:zftext,:zday,:zmonth,:zyear ,:zimage)");
            $stmt->execute(array(
                'ztitle' => $title,
                'ztext' => $text,
                'zftext' => $ftext,
                'zday' =>$day,
                'zmonth' =>$month,
                'zyear' =>$year,
                'zimage' => $Mimage
            ));
            header("Location:blogs.php?dmsg=".urlencode("Done Adding BLOG"));
            exit();

   }}

   if($do == 'Edit'){
        $IID = $_POST['id'];
        $title = $_POST['title'];
        $text = $_POST['text'];
        $ftext = $_POST['ftext'];
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];

        $imageName = $_FILES['image']['name'];
        $imageSize = $_FILES['image']['size'];
        $imageTmp  = $_FILES['image']['tmp_name'];
        $imageType = $_FILES['image']['type'];

        if(empty($imageName)){
          $stmt = $con->prepare("select image From blogs where ID = $IID");
          $stmt->execute();
          $result = $stmt->fetch();
          $Mimage = $result['image']; 
      } else {
          $imageName = $_FILES['image']['name'];
          $imageSize = $_FILES['image']['size'];
          $imageTmp  = $_FILES['image']['tmp_name'];
          $imageType = $_FILES['image']['type'];

          $exp = explode('.' , $imageName);
          $imageExtension = strtolower(end($exp));
          $Mimage = rand(0,100000) . '_' .$imageName;
          move_uploaded_file($imageTmp , "images/uploads/blogs//" . $Mimage);
      }

        $stmt = $con->prepare("UPDATE blogs SET title = ? , text = ? , textt = ? , day = ? , month = ? , year = ? , image = ? WHERE ID = ?");
        $stmt->execute(array($title,$text,$ftext,$day,$month,$year,$Mimage,$IID));

        header("Location:blogs.php?dmsg=".urlencode("Done Editing BLOG"));
        exit();

   }

   if($do == 'delete'){
    $IID = '' ;
    if($_GET['id']){
       $IID = $_GET['id'];
    }

      $stmt = $con->prepare("DELETE  FROM blogs WHERE ID = :zid");
      $stmt->bindParam(":zid", $IID);
      $stmt->execute();

      header("Location:blogs.php?dmsg=".urlencode("Done Deleteing BLOG"));
      exit();

   }



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
        <a class="navbar-brand brand-logo" href="index.php"><img src="images\flogo.png" alt="logo"></a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images\flogo.png" alt="logo"></a>
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
              Dashboard - BLOGs
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
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <?php
                  if($do == 'add'){
                ?>
                <div class="main-panel">
                    <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            Add BLOGs
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard - BLOGs</a></li>
                            <li class="breadcrumb-item"><a href="blogs.php">BLOGs</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add BLOGs</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-12 grid-margin">
                        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add BLOGs</h4>
                            <form class="form-sample" action="blogsop.php?do=add" method="post" enctype="multipart/form-data">
                            <p class="card-description">
                            Details
                            </p>
                            <div class="row">

                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-form-label"> Title</label>
                                    <div class="col-sm-8">
                                    <input type="text" name="title" class="form-control">
                                    </div>
                                </div>
                                </div>

                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-form-label"> Text </label>
                                    <div class="col-sm-8">
                                    <input type="text" name="text" class="form-control">
                                    </div>
                                </div>
                                </div>
                                
                            </div>
                            <div class="row">
                               <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-form-label">Image</label>
                                    <div class="col-sm-8">
                                    <input type="file" class="form-control" name="image"placeholder="">
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-6">  
                                <div class="form-group row">
                                    <label class=" col-form-label">Day</label>
                                    <div class="col-lg-9">
                                    <input type="text" class="form-control" name="day" placeholder="">
                                    </div>
                                </div>
                                </div>

                                <div class="col-md-6">  
                                <div class="form-group row">
                                    <label class=" col-form-label">Month</label>
                                    <div class="col-lg-9">
                                    <input type="text" class="form-control" name="month" placeholder="">
                                    </div>
                                </div>
                                </div>

                                <div class="col-md-6">  
                                <div class="form-group row">
                                    <label class=" col-form-label">Year</label>
                                    <div class="col-lg-9">
                                    <input type="text" class="form-control" name="year" placeholder="">
                                    </div>
                                </div>
                                </div>
                               
                                </div>

                            <div class="row">
                                <div class="col-lg-12">
                                  <div class="card">
                                    <div class="card-body">
                                    <label class="col-form-label">BLOG</label>
                                      <textarea name="ftext" id="simpleMde">
                                      </textarea>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            
                    
                            </div>
                                <button type="submit" class="dt-button buttons-copy buttons-html5 btn btn-primary mr-1" name="add" >Add</button>

                            </div>

                            </form>
                        </div>
                        </div>
                    </div>
                  <?php } ?>

                  <!----------------------Do = Edit------------------------------------------->

                  <?php
                  if($do == 'edit'){
                    $IID = '' ;
                    if($_GET['id']){
      
                       $IID = $_GET['id'];
                     }
                      $stmt = $con->prepare("SELECT * FROM blogs WHERE ID = :zid");
                      $stmt->bindParam(":zid", $IID);
                      $stmt->execute();
                      $blogs =$stmt->fetch();

                ?>
                <div class="main-panel">
                    <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            Add BLOGs
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="blogs.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="blogs.php">BLOGs</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit BLOGs</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-12 grid-margin">
                        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit BLOGs</h4>
                            <form class="form-sample" action="blogsop.php?do=Edit" method="post" enctype="multipart/form-data">
                            <p class="card-description">
                            Details
                            </p>
                            <input type="text" name="id" hidden class="form-control" value="<?php echo $blogs['ID'] ?>">
                            <div class="row">

                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-form-label"> Title</label>
                                    <div class="col-sm-8">
                                    <input type="text" name="title" class="form-control" value="<?php echo $blogs['title'] ?>">
                                    </div>
                                </div>
                                </div>

                                <div class="col-md-6">  
                                <div class="form-group row">
                                    <label class=" col-form-label">Text</label>
                                    <div class="col-lg-9">
                                    <input type="text" class="form-control" name="text" value="<?php echo $blogs['text'] ?>">
                                    </div>
                                </div>
                                </div>
                                
                            </div>
                            <div class="row">
                               <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-form-label">Image</label>
                                    <div class="col-sm-8">
                                    <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-6">  
                                <div class="form-group row">
                                    <label class=" col-form-label">Day</label>
                                    <div class="col-lg-9">
                                    <input type="text" class="form-control" name="day" value="<?php echo $blogs['day'] ?>">
                                    </div>
                                </div>
                                </div>

                                <div class="col-md-6">  
                                <div class="form-group row">
                                    <label class=" col-form-label">Month</label>
                                    <div class="col-lg-9">
                                    <input type="text" class="form-control" name="month" value="<?php echo $blogs['month'] ?>">
                                    </div>
                                </div>
                                </div>

                                <div class="col-md-6">  
                                <div class="form-group row">
                                    <label class=" col-form-label">Year</label>
                                    <div class="col-lg-9">
                                    <input type="text" class="form-control" name="year" value="<?php echo $blogs['year'] ?>">
                                    </div>
                                </div>
                                </div>
                               
                                </div>

                            <div class="row">
                                <div class="col-lg-12">
                                  <div class="card">
                                    <div class="card-body">
                                    <label class="col-form-label">BLOG</label>
                                      <textarea name="ftext" id="simpleMde" value=""> 
                                      <?php echo $blogs['textt'] ?></textarea>
                                    </div>
                                  </div>
                                </div>
                            </div>
                    
                            </div>
                                <button type="submit" class="dt-button buttons-copy buttons-html5 btn btn-primary mr-1" name="edit" >Edit</button>

                            </div>

                            </form>
                        </div>
                        </div>
                    </div>
                  <?php } ?>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                Copyright © 2017 STS. All rights reserved.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/node_modules/bootstrap/js/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/node_modules/ps/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- plugins:js -->
  <script src="vendors\js\vendor.bundle.base.js"></script>
  <script src="vendors\js\vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="vendors\tinymce\tinymce.min.js"></script>
  <script src="vendors\tinymce\themes\modern\theme.js"></script>
  <script src="vendors\summernote\dist\summernote-bs4.min.js"></script>
  <!-- plugin js for this page -->
  <!-- inject:js -->
  <script src="js\off-canvas.js"></script>
  <script src="js\hoverable-collapse.js"></script>
  <script src="js\misc.js"></script>
  <script src="js\settings.js"></script>
  <script src="js\todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js\editorDemo.js"></script>
  <!-- End custom js for this page-->
    
</body>
</html>
<?php
}else{
  header('Location:index.php');
        exit();
}

 ?>