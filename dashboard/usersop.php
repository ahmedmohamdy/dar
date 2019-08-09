<?php
//ob_start();
 session_start();
 $pagetitle = 'Edit - Directors';

 if(isset($_SESSION['username'])){

  include "init.php";

  $stmt = $con->prepare("SELECT * FROM admins WHERE username = :ztype");
  $stmt->bindParam(":ztype", $username);
  $stmt->execute();
  $type1 =$stmt->fetch();

$do = $_GET['do'];

   if($do == 'add'){
      if(isset($_POST['add'])){
            $name = $_POST['name'];
            $committee = $_POST['committee'];
            $uname = $_POST['username'];
            $pass= $_POST['pass'];

            $stmt = $con->prepare("INSERT INTO admins (name , committee , username , pass)
            VALUES(:zname,:zcommittee,:zusername ,:zpass)");
            $stmt->execute(array(
                'zname' => $name,
                'zcommittee' => $committee,
                'zusername' =>$uname,
                'zpass' => $pass
            ));
            header("Location:directors.php?dmsg=".urlencode("Done Adding Director"));
            exit();

   }}

   if($do == 'Edit'){
        $IID=$_POST['ID'];
        $name = $_POST['name'];
        $committee = $_POST['committee'];
        $uname = $_POST['username'];
        $pass= $_POST['pass'];

        $stmt = $con->prepare("UPDATE admins SET name = ? , committee = ? , username = ? , pass = ? WHERE ID = ?");
        $stmt->execute(array($name,$committee,$uname,$pass,$IID));

        header("Location:directors.php?dmsg=".urlencode("Done Editing Directors"));
        exit();

   }

   if($do == 'delete'){
    $IID = '' ;
    if($_GET['id']){
       $IID = $_GET['id'];
    }

      $stmt = $con->prepare("DELETE  FROM admins WHERE ID = :zid");
      $stmt->bindParam(":zid", $IID);
      $stmt->execute();

      header("Location:directors.php?dmsg=".urlencode("Done Deleteing Director"));
      exit();

   }



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Enactus-O6U Dashboard</title>
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
  <link rel="shortcut icon" href="images\logo1.png">
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php"><img src="images\flogo.png" alt="logo"></a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images\logo1.png" alt="logo"></a>
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
              Dashboard - Directors
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
                            Add Director | Admins
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard - Director</a></li>
                            <li class="breadcrumb-item"><a href="directors.php">Director</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Director</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-12 grid-margin">
                        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Director | Admins</h4>
                            <form class="form-sample" action="directorop.php?do=add" method="post">
                            <p class="card-description">
                            Details
                            </p>
                            <div class="row">

                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"> Name</label>
                                    <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                </div>

                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Committee</label>
                                    <div class="col-sm-8">
                                    <select name="committee" class="select floating form-control" id = "myList">
                                            <option value = "Admin">Admin</option>
                                            <option value = "President">President</option>
                                            <option value = "IT">IT</option>
                                            <option value = "Opreation">Opreation</option>
                                            <option value = "Presentation">Presentation</option>
                                            <option value = "Photography">Photography</option>
                                            <option value = "Marketing">Marketing</option>
                                            <option value = "HR">HR</option>

                                    </select>
                                    </div>
                                </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">  
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">UserName</label>
                                    <div class="col-sm-7">
                                    <input type="text" class="form-control" name="username"placeholder="">
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Password</label>
                                    <div class="col-sm-8">
                                    <input class="form-control" name="pass"placeholder="">
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
                      $stmt = $con->prepare("SELECT * FROM admins WHERE ID = :zid");
                      $stmt->bindParam(":zid", $IID);
                      $stmt->execute();
                      $director =$stmt->fetch();

                ?>
                <div class="main-panel">
                    <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            Add Director | Admins
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="directors.php">Director</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Directors</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-12 grid-margin">
                        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Directors | Admins</h4>
                            <form class="form-sample" action="directorop.php?do=Edit" method="post">
                            <p class="card-description">
                            Details
                            </p>
                            <input type="text" name="ID" hidden class="form-control" value="<?php echo $director['ID'] ?>">
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" value="<?php echo $director['name'] ?>">
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Committee</label>
                                    <div class="col-sm-9">
                                    <select name="committee" class="select floating form-control" id = "myList">
                                            <option value = "IT">IT</option>
                                            <option value = "Opreation">Opreation</option>
                                            <option value = "Presentation">Presentation</option>
                                            <option value = "Photography">Photography</option>
                                            <option value = "Marketing">Marketing</option>
                                            <option value = "HR">HR</option>
                                    </select>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">UserName</label>
                                    <div class="col-sm-9">
                                    <input class="form-control" name="username" placeholder="" value="<?php echo $director['username'] ?>">
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                    <input class="form-control" name="pass" placeholder="" value="<?php echo $director['pass'] ?>">
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
    <!-- This is data table -->
    <script src="../assets/node_modules/datatables/datatables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="../../../../../cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="../../../../../cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="../../../../../cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="../../../../../cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
    $(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/styleswitcher/jQuery.style.switcher.js"></script>
</body>


<!-- Mirrored from wrappixel.com/demos/admin-templates/admin-wrap/main/table-data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Feb 2019 09:56:44 GMT -->
</html>
<?php
}else{
  header('Location:index.php');
        exit();
}

 ?>