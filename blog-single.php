<?php 
include "connect.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $stmt=$con->prepare("SELECT * FROM blogs WHERE ID = ?");
    $stmt->execute(array($id));
    $blog=$stmt->fetch();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>دار التعافي لعلاج الادمان</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-cSfiDrYfMj9eYCidq//oGXEkMc0vuTxHXizrMOFAaPsLt1zoCUVnSsURN+nef1lj" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-YNPmfeOM29goUYCxqyaDVPToebWWQrHk0e3QYEs7Ovg6r5hSRKr73uQ69DkzT1LH" crossorigin="anonymous"> -->

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css\style.css">

    <!-- Responsive stylesheet  -->
    <link rel="stylesheet" type="text/css" href="css\responsive.css">

    <!-- Favicon -->
    <link href="img/logo.png" rel="shortcut icon" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    
    <div class="whats"> <a href="https://api.whatsapp.com/send?phone=201030002121&text=&source=&data=" target="_blank"><img src="img/whatsapp.png" alt=""></a></div>
    <div class="preloader"></div>

   <?php include "navbar.php"; ?>


    <section class="inner-bg over-layer-black">
    <div class="black">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="mini-title inner-style-2">
                        <h3>المقالات</h3>
                        <p><a href="index.html">الرئيسية</a> <span class="fa fa-angle-left"></span> <a href="blog-single.php">المقالات</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Blog Posts -->
    <div class="bg-f8">
        <div class="container">
            <div class="black">
            <div class="row">
                <div class="col-md-9">
                    <div class="margin-bottom-30">
                        <img class="img-responsive" src="dashboard\images\uploads\blogs\<?php echo $blog['image'];?>" alt="">
                        <div class="blog-post">
                            <ul class="list-inline blog-info">
                                <li>تم النشر <?php echo $blog['month']." ".$blog['day'].", ".$blog['year'];?></li>
                            </ul>
                            <h3><a href="#"><?php echo $blog['title'];?></a></h3>
                            <p><?php echo $blog['textt'];?></p>
                            
                            
                        </div>
                    </div>

                
                    


                </div>
                
                       
                        
                        


                    </div>
                </div>
            </div>
        </div>
    <!-- End Blog Posts -->

   <?php include "footer.php"; ?>
    <!-- Footer Style End -->

  
    <a href="#" class="scrollup"><i class="pe-7s-up-arrow" aria-hidden="true"></i></a>
    <!-- jQuery -->
    <script type="text/javascript" src="js\jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="js\bootstrap.min.js"></script>

    <!-- all plugins and JavaScript -->
    <script type="text/javascript" src="js\bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js\css3-animate-it.js"></script>
    <script type="text/javascript" src="js\bootstrap-dropdownhover.min.js"></script>
    <script type="text/javascript" src="js\owl.carousel.min.js"></script>
    <script type="text/javascript" src="js\gallery.js"></script>
    <script type="text/javascript" src="js\player.min.js"></script>
    <script type="text/javascript" src="js\retina.js"></script>
    <script type="text/javascript" src="js\comming-soon.js"></script>

    <!-- Main Custom JS -->
    <script type="text/javascript" src="js\script.js"></script>


</body>

</html>