<?php 
include "connect.php";

$stmt=$con->prepare("SELECT * FROM blogs");
$stmt->execute();
$blogs=$stmt->fetchAll();

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

  <?php include_once 'navbar.php'; ?>

    <section class="inner-bg over-layer-black">
    <div class="black">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="mini-title inner-style-2">
                        <h3>المقالات</h3>
                        <p><a href="index.php">الرئيسية</a> <span class="fa fa-angle-left"></span> <a href="المقالات.php">المقالات</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section class="blog-area bg-f8 animatedParent animateOnce">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="blog-feature">

                    <?php foreach($blogs as $blog){?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="blog-item style-1">
                                <div class="blog-date text-center">
                                    <i class="pe-7s-link"></i>
                                </div>
                                <div class="blog-img"><a href="#"><img src="dashboard\images\uploads\blogs\<?php echo $blog['image'];?>" alt=""></a>
                                    <div class="blog-event-date">
                                        <h3><?php echo $blog['day'];?> <small><?php echo $blog['month'];?></small></h3>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <a href="blog-single.php?id=<?php echo $blog['ID'];?>"><h4><?php echo $blog['title'];?></h4></a>
                                    <p><?php echo $blog['text'];?></p>
                                    <a href="blog-single.php?id=<?php echo $blog['ID'];?>" class="btn btn-simple">اقرا المزيد</a>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                       
                        
                      

                        
                    </div>
                </div>
            </div>
        </div>
    </section>

   

  <?php include_once 'footer.php'; ?>

  
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