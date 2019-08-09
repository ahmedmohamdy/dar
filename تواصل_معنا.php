<?php 
include_once 'connect.php';
function check($var){
  return trim(strip_tags(stripcslashes($var)));
}
if(isset($_POST['submit']))
{
     $name=check($_POST['name']);
     $phone=check($_POST['phone']);   
     $text=check($_POST['message']);
    
     $err=array();

     if(!$name || !filter_var($name,FILTER_SANITIZE_STRING) ){
        $err['name']="Invalid Name";
        }
    if(!$phone || !filter_var($name,FILTER_SANITIZE_STRING) ){
        $err['phone']="Invalid phone";
        }


    $to="ahmedmohamdy@gmail.com";
    $subject="دار التعافي";
    $message= "name: ". $name ."\nPhone: ". $phone . "\nMessage: ".$text;

if(empty($err)){
     $stmt=$con->prepare("INSERT INTO users(name,phone,text)
         VALUES(:name,:phone,:message)");
     $stmt->execute(array('name'=>$name , 'phone'=>$phone ,'message'=>$text));
     mail($to, $subject, $message);
}   
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

<?php include_once 'navbar.php'; ?>


    <section class="inner-bg over-layer-black">
    <div class="black">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="mini-title inner-style-2">
                        <h3>تواصل معنا</h3>
                        <p><a href="index.php">الرئيسية</a> <span class="fa fa-angle-left"></span> <a href="تواصل_معنا.php">تواصل معنا</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- service start -->
    <section class="service-area contact-info">
        <div class="container padding-bottom-none">
            <div class="section-content">
                <div class="row">
                <div class="col-sm-12 col-md-4">
                        <div class="service-item style-1 bg-f8">
                            <div class="">
                                <i class="pe-7s-call"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#" class="color-333">اتصل بنا</a></h5>
                                <p>01030002121<br>01030002121</p>
                            </div>
                        </div>
                </div>


                <div class="col-sm-12 col-md-4">
                        <div class="service-item style-1 bg-f8">
                            <div class="">
                                <i class="pe-7s-mail-open"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#" class="color-333">التواصل عبر الايميل</a></h5>
                                <p>info@domain.com <br> set-info@domain.com </p>
                            </div>
                        </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="service-item style-1 bg-f8">
                        <div class="service-icon">
                            <i class="pe-7s-map"></i>
                        </div>
                        <div class="content">
                            <h5><a href="#" class="color-333">موقعنا</a></h5>
                            <p>القاهرة الجديدة - التجمع الاول بجوار <br> أكاديمية الشرطة - القاهرة - مصر</p>
                        </div>
                    </div>
                </div>

                    
                    

                </div>
            </div>
        </div>
    </section>
    <!-- service end -->
    <hr>

    <section>
        <div class="container padding-bottom-80">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-title margin-left-20 ">
                            <h2>تواصل معنا</h2>
                            <div class="small-line-border-2"></div>
                        </div>
                        <form  method="post" action="#">
                           
                            <div class="col-md-6">
                                <input type="text" name="name" id="name" class="form-control" placeholder="اسمك" required="">
                            </div>
                                <div class="col-md-6">
                                        <input type="text" name="phone" class="form-control" placeholder="رقمك" id="phone" required="">
                                    </div>
                           
                            <div class="col-md-12">
                                <div class="contact-textarea">
                                    <textarea class="form-control" rows="6" placeholder="اكتب رساله " id="message" name="message" required=""></textarea>
                                    <button class="btn btn-theme" type="submit" value="Submit Form" name="submit"> ارسال الرساله </button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="col-lg-6">
                        <div class="map"><iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=30.06310285,31.45544747510749&amp;q=First%20Settlement%2C%20neighbourhood%2C%20New%20Cairo%20City%2C%20Egypt+(DarEltaafi)&amp;ie=UTF8&amp;t=&amp;z=12&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Plot a route map</a></iframe></div><br />
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
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="js\map.js"></script>
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsTvi2dmx_Bnel6F0POzTg6-TaQ16JeDs&callback=initMap" type="text/javascript"></script>


    <!-- Main Custom JS -->
    <script type="text/javascript" src="js\script.js"></script>


</body>

</html>
