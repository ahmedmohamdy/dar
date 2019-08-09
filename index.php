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


    <div class="whats"> <a href="https://api.whatsapp.com/send?phone=201030002121&text=&source=&data=" target="_blank"><img src="img/whatsapp.png" alt="whatsapp icon"></a></div>
    <div class="preloader"></div>

    <?php  include_once 'navbar.php'; ?>

    <!-- Start  bootstrap-touch-slider Slider -->
    <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox">
            <!-- Third Slide -->
            <div class="item active">
                <!-- Slide Background -->
                <img src="img\3.png" alt="Slider Images" class="slide-image">
                <div class="bs-slider-overlay"></div>

                <div class="slide-text slide_style_center">
                    <h1 data-animation="animated fadeInRight">دار <span class="color-defult"> التعافي </span>لعلاج الادمان</h1>
                    <p data-animation="animated fadeInLeft">لدينا اقوي فريق عمل وهدفنا القضاء علي الادمان <br></p>
                    <a href="#" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">اقرا المزيد</a>
                    <a href="#" target="_blank" class="btn btn-primary" data-animation="animated fadeInRight">اتصل الان</a>
                </div>
            </div>
            <!-- End of Slide -->

            <!-- Second Slide -->
            <div class="item">            
                <!-- Slide Background -->
                <img src="img\3.png" alt="Slider Images" class="slide-image">
                <div class="bs-slider-overlay"></div>
                <!-- Slide Text Layer -->
                <div class="slide-text slide_style_center">
                    <h1 data-animation="animated bounceInDown"> دار <span class="color-defult"> التعافي </span> لعلاج الادمان   </h1>
                    <p data-animation="animated lightSpeedIn">برنامج رعاية الاسر الكامل <br></p>
                    <a href="#" target="_blank" class="btn btn-default" data-animation="animated fadeInUp">اقرا المزيد</a>
                    <a href="#" target="_blank" class="btn btn-primary" data-animation="animated fadeInDown">اتصل الان</a>
                </div>
            </div>
            <!-- End of Slide -->
            
            <!-- Third Slide -->
            <div class="item">            
                <!-- Slide Background -->
                <img src="img\3.png" alt="Slider Images" class="slide-image">
                <div class="bs-slider-overlay"></div>
                <!-- Slide Text Layer -->
                <div class="slide-text slide_style_center">
                    <h1 data-animation="animated fadeInLeft">دار التعافي<span class="color-defult"> لعلاج الادمان   </span></h1>
                    <p data-animation="animated fadeInRight">انت اقوي من المخدرات <br></p>
                    <a href="#" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">اقرا المزيد</a>
                    <a href="#" target="_blank" class="btn btn-primary" data-animation="animated fadeInRight">اتصل الان</a>
                </div>
            </div>
            <!-- End of Slide -->
        </div><!-- End of Wrapper For Slides -->

        <!-- Left Control -->
        <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <!-- Right Control -->
        <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div> <!-- End  bootstrap-touch-slider Slider -->

    <!-- divider start -->
    <section class="about-3col animatedParent animateOnce">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="about-feature style-2">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="appointment-item">
                                <i class="flaticon-ribbon"></i>
                                <h5><a href="#">رعاية طبية علي مدار اليوم</a></h5>
                                <div class="line-border-center bg-gray margin-bottom-20"></div>
                                <p> مركز دار التعافى يقديم مجموعة كبيرة من البرامج العلاجية</p>
                                <button class="btn btn-theme btn-sm">اتصل الان <i class="pe-7s-angle-right"></i></button>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="appointment-item">
                                <i class="flaticon-cardiogram"></i>
                                <h5><a href="#">اولادنا امانة</a></h5>
                                <div class="line-border-center bg-gray margin-bottom-20"></div>
                                <p>مركز دار التعافى يقديم مجموعة كبيرة من البرامج العلاجية</p>
                                <button class="btn btn-theme btn-sm">تعرف علي البرنامج <i class="pe-7s-angle-right"></i></button>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 center-block">
                            <div class="appointment-item">
                                <i class="flaticon-first-aid-kit"></i>
                                <h5><a href="#">الادمان يقتل ابنائنا</a></h5>
                                <div class="line-border-center bg-gray margin-bottom-20"></div>
                                <p>مركز دار التعافى يقديم مجموعة كبيرة من البرامج العلاجية</p>
                                <button class="btn btn-theme btn-sm">اتصل الان <i class="pe-7s-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider end -->

    <!-- welcome start -->
    <section>
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-7">
                        <h2>لماذا تختار دار التعافي</h2>
                        <h3 class="color-defult">يتميز مركز دار التعافى بتقديم مجموعة كبيرة من البرامج العلاجية التي يصعُب تواجدُها في المراكز العلاجية الأخرى</h3>
                        <p class="lead">وذلك لتلبي كل احتياجات المرضى مهما كانت عن طريق الاختبارات العلاجية التي يقوم بها الفريق العلاجي  <span class="ff-p"> لتحديد أفضل برنامج علاجي يتناسب مع المريض</span></p>
                        <p><span class="fw-b">يضم مركز</span>   دار التعافي فريق علاجي على درجة عاليه من الخبره تصل إلى 14 عاماً وحصول الفريق العلاجي على عدد من الشهادات المعتمده محلياً ودولياً التي تجعله متميزاً في حل مشاكل الادمان بالاضافة إلى الخبرة العلاجيه التي تصل إلي عشر سنوات تقدَّم بنجاح غير مسبوق.</p>
                        <div class="row margin-top-20">
                            <div class="col-md-6">
                                <img class="margin-top-10" src="img\services\s1.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <p>ويقدم مركز <span class="color-defult fw-b"> دار التعافى </span>  لغلاج الادمان خدماته العلاجية مع الحفاظ علي السرية التامة فيما يخص أي معلومات عن المريض، مع استمرار مساعدة ومتابعة المرضى بعد الانتهاء من المراحل العلاجية ومساندتهم في حل المشاكل الحياتية بكل جوانبها.</p>
                            </div>
                        </div>
                        <div class="clearfix margin-top-20 margin-right-10"> 
                            <div class="skills" data-percent="85%">
                                <div class="title-bar">
                                  <h5>علاج الاضطرابات المتزامنة مع المخدرات</h5>
                                </div>
                                <span>٨٥%</span>
                                <div class="skillbar-1"></div>  
                            </div>
                            <div class="skills" data-percent="60%">
                                <div class="title-bar">
                                  <h5>لاقامه الكامله وإعادة التأهيل</h5>
                                </div>
                                <span>٦٠%</span>
                                <div class="skillbar-2"></div>  
                            </div>
                            <div class="skills" data-percent="89%">
                                <div class="title-bar">
                                  <h5>ازالة السموم من الجسم بدون ألم</h5>
                                </div>
                                <span>٨٩%</span>
                                <div class="skillbar-3"></div>  
                            </div>
                            <div class="skills" data-percent="60%">
                                <div class="title-bar">
                                  <h5>برنامج الدعم الاسري</h5>
                                </div>
                                <span>٦٠%</span>
                                <div class="skillbar-4"></div>  
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5">
                        <div>
                           <img alt="" src="img\services\w1.jpg"> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- welcome end -->

    <!-- service start -->
    <section class="service-area bg-f8 animatedParent animateOnce">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2><span class="color-defult">البرامج العلاجية</span></h2>
                        <div class="line-border-center bg-defult"></div>
                        <p>البرامج علاجية مواكبة لأحدث البرامج العلاجية في العالم ، فيضم ايضاً برامج رياضية متكاملة ليساعد علي التخلص من الأضرار الصحية الناتجة من تعاطي المخدرات</p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="service-item text-center style-3">
                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ5MC42NjcgNDkwLjY2NyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDkwLjY2NyA0OTAuNjY3OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMiIgaGVpZ2h0PSI1MTIiPjxnPjxnPgoJPGc+CgkJPHBhdGggZD0iTTE1OC41NzEsNzMuNzI4bC0yMS4zMzMtMzYuOTQ5Yy0yLjk0NC01LjE0MS05LjQ5My02Ljg0OC0xNC41NzEtMy45MDRjLTUuMDk5LDIuOTQ0LTYuODQ4LDkuNDUxLTMuOTA0LDE0LjU3MSAgICBsMjEuMzMzLDM2Ljk0OWMxLjk2MywzLjQzNSw1LjU2OCw1LjMzMyw5LjIzNyw1LjMzM2MxLjgxMywwLDMuNjQ4LTAuNDY5LDUuMzMzLTEuNDI5ICAgIEMxNTkuNzY1LDg1LjMzMywxNjEuNTE1LDc4LjgyNywxNTguNTcxLDczLjcyOHoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6IzAwQTZFNCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvcGF0aD4KCTwvZz4KPC9nPjxnPgoJPGc+CgkJPHBhdGggZD0iTTM3MS45MDQsNDQzLjIyMWwtMjEuMzMzLTM2Ljk0OWMtMi45NDQtNS4xMi05LjQ3Mi02Ljg2OS0xNC41NzEtMy45MDRjLTUuMTIsMi45NDQtNi44NjksOS40NzItMy45MDQsMTQuNTcxICAgIGwyMS4zMzMsMzYuOTQ5YzEuOTYzLDMuNDM1LDUuNTY4LDUuMzMzLDkuMjM3LDUuMzMzYzEuODEzLDAsMy42NDgtMC40NDgsNS4zMzMtMS40MjkgICAgQzM3My4xMiw0NTQuODQ4LDM3NC44NjksNDQ4LjMyLDM3MS45MDQsNDQzLjIyMXoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6IzAwQTZFNCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvcGF0aD4KCTwvZz4KPC9nPjxnPgoJPGc+CgkJPHBhdGggZD0iTTg0LjM5NSwxNDAuMDk2bC0zNi45NDktMjEuMzMzYy01LjA5OS0yLjkwMS0xMS42MjctMS4xOTUtMTQuNTcxLDMuOTA0Yy0yLjk2NSw1LjA5OS0xLjIxNiwxMS42MjcsMy45MDQsMTQuNTcxICAgIGwzNi45NDksMjEuMzMzYzEuNjg1LDAuOTgxLDMuNTIsMS40MjksNS4zMzMsMS40MjljMy42NjksMCw3LjI3NS0xLjkyLDkuMjM3LTUuMzMzQzkxLjI0MywxNDkuNTY4LDg5LjQ5MywxNDMuMDQsODQuMzk1LDE0MC4wOTZ6ICAgICIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojMDBBNkU0IiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCI+PC9wYXRoPgoJPC9nPgo8L2c+PGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDUzLjg4OCwzNTMuNDI5bC0zNi45NDktMjEuMzMzYy01LjA5OS0yLjkwMS0xMS42MjctMS4xOTUtMTQuNTcxLDMuOTA0cy0xLjE5NSwxMS42MjcsMy45MDQsMTQuNTcxbDM2Ljk0OSwyMS4zMzMgICAgYzEuNjg1LDAuOTgxLDMuNTIsMS40MjksNS4zMzMsMS40MjljMy42NjksMCw3LjI3NS0xLjkyLDkuMjM3LTUuMzMzQzQ2MC43MzYsMzYyLjkwMSw0NTguOTg3LDM1Ni4zNzMsNDUzLjg4OCwzNTMuNDI5eiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojMDBBNkU0IiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCI+PC9wYXRoPgoJPC9nPgo8L2c+PGc+Cgk8Zz4KCQk8cGF0aCBkPSJNODguMjk5LDMzNmMtMi45NDQtNS4xMi05LjQ5My02LjgyNy0xNC41NzEtMy45MDRsLTM2Ljk0OSwyMS4zMzNjLTUuMTIsMi45NDQtNi44NjksOS40NzItMy45MDQsMTQuNTcxICAgIGMxLjk2MywzLjQxMyw1LjU2OCw1LjMzMyw5LjIzNyw1LjMzM2MxLjgxMywwLDMuNjQ4LTAuNDQ4LDUuMzMzLTEuNDI5bDM2Ljk0OS0yMS4zMzNDODkuNTE1LDM0Ny42MjcsOTEuMjY0LDM0MS4wOTksODguMjk5LDMzNnoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6IzAwQTZFNCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvcGF0aD4KCTwvZz4KPC9nPjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ1Ny43OTIsMTIyLjY2N2MtMi45NDQtNS4wOTktOS40OTMtNi44NDgtMTQuNTcxLTMuOTA0bC0zNi45NDksMjEuMzMzYy01LjEyLDIuOTQ0LTYuODY5LDkuNDcyLTMuOTA0LDE0LjU3MSAgICBjMS45NjMsMy40MTMsNS41NjgsNS4zMzMsOS4yMzcsNS4zMzNjMS44MTMsMCwzLjY0OC0wLjQ0OCw1LjMzMy0xLjQyOWwzNi45NDktMjEuMzMzICAgIEM0NTkuMDA4LDEzNC4yOTMsNDYwLjc1NywxMjcuNzY1LDQ1Ny43OTIsMTIyLjY2N3oiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6IzAwQTZFNCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvcGF0aD4KCTwvZz4KPC9nPjxnPgoJPGc+CgkJPHBhdGggZD0iTTE1NC42NjcsNDAyLjM2OGMtNS4wOTktMi45MjMtMTEuNjI3LTEuMjE2LTE0LjU3MSwzLjkwNGwtMjEuMzMzLDM2Ljk0OWMtMi45NDQsNS4wOTktMS4xOTUsMTEuNjI3LDMuOTA0LDE0LjU3MSAgICBjMS42ODUsMC45ODEsMy41MiwxLjQyOSw1LjMzMywxLjQyOWMzLjY2OSwwLDcuMjc1LTEuODk5LDkuMjM3LTUuMzMzbDIxLjMzMy0zNi45NDkgICAgQzE2MS41MTUsNDExLjg0LDE1OS43NjUsNDA1LjMxMiwxNTQuNjY3LDQwMi4zNjh6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiMwMEE2RTQiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L3BhdGg+Cgk8L2c+CjwvZz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0zNjgsMzIuODc1Yy01LjA5OS0yLjkyMy0xMS42MjctMS4yMTYtMTQuNTcxLDMuOTA0bC0yMS4zMzMsMzYuOTQ5Yy0yLjk0NCw1LjA5OS0xLjE5NSwxMS42MjcsMy45MDQsMTQuNTcxICAgIGMxLjY4NSwwLjk4MSwzLjUyLDEuNDI5LDUuMzMzLDEuNDI5YzMuNjY5LDAsNy4yNzUtMS45Miw5LjIzNy01LjMzM2wyMS4zMzMtMzYuOTQ5QzM3NC44NDgsNDIuMzQ3LDM3My4wOTksMzUuODE5LDM2OCwzMi44NzV6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiMwMEE2RTQiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L3BhdGg+Cgk8L2c+CjwvZz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yNDUuMzMzLDBjLTUuODg4LDAtMTAuNjY3LDQuNzc5LTEwLjY2NywxMC42Njd2NDIuNjY3YzAsNS44ODgsNC43NzksMTAuNjY3LDEwLjY2NywxMC42NjdTMjU2LDU5LjIyMSwyNTYsNTMuMzMzVjEwLjY2NyAgICBDMjU2LDQuNzc5LDI1MS4yMjEsMCwyNDUuMzMzLDB6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiMwMEE2RTQiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L3BhdGg+Cgk8L2c+CjwvZz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik01My4zMzMsMjM0LjY2N0gxMC42NjdDNC43NzksMjM0LjY2NywwLDIzOS40NDUsMCwyNDUuMzMzUzQuNzc5LDI1NiwxMC42NjcsMjU2aDQyLjY2N0M1OS4yMjEsMjU2LDY0LDI1MS4yMjEsNjQsMjQ1LjMzMyAgICBTNTkuMjIxLDIzNC42NjcsNTMuMzMzLDIzNC42Njd6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiMwMEE2RTQiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L3BhdGg+Cgk8L2c+CjwvZz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00ODAsMjM0LjY2N2gtNDIuNjY3Yy01Ljg4OCwwLTEwLjY2Nyw0Ljc3OS0xMC42NjcsMTAuNjY3UzQzMS40NDUsMjU2LDQzNy4zMzMsMjU2SDQ4MCAgICBjNS44ODgsMCwxMC42NjctNC43NzksMTAuNjY3LTEwLjY2N1M0ODUuODg4LDIzNC42NjcsNDgwLDIzNC42Njd6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiMwMEE2RTQiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L3BhdGg+Cgk8L2c+CjwvZz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yNDUuMzMzLDQyNi42NjdjLTUuODg4LDAtMTAuNjY3LDQuNzc5LTEwLjY2NywxMC42NjdWNDgwYzAsNS44ODgsNC43NzksMTAuNjY3LDEwLjY2NywxMC42NjdTMjU2LDQ4NS44ODgsMjU2LDQ4MCAgICB2LTQyLjY2N0MyNTYsNDMxLjQ0NSwyNTEuMjIxLDQyNi42NjcsMjQ1LjMzMyw0MjYuNjY3eiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojMDBBNkU0IiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCI+PC9wYXRoPgoJPC9nPgo8L2c+PGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjQ1LjMzMywwYy01Ljg4OCwwLTEwLjY2Nyw0Ljc3OS0xMC42NjcsMTAuNjY3VjQ4MGMwLDUuODg4LDQuNzc5LDEwLjY2NywxMC42NjcsMTAuNjY3ICAgIGMxMzUuMjc1LDAsMjQ1LjMzMy0xMTAuMDU5LDI0NS4zMzMtMjQ1LjMzM1MzODAuNjA4LDAsMjQ1LjMzMywweiBNMjU2LDQ2OS4wOTlWMjEuNTg5ICAgIGMxMTguNTkyLDUuNTY4LDIxMy4zMzMsMTAzLjgyOSwyMTMuMzMzLDIyMy43NjVTMzc0LjU5Miw0NjMuNTA5LDI1Niw0NjkuMDk5eiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojMDBBNkU0IiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCI+PC9wYXRoPgoJPC9nPgo8L2c+PC9nPiA8L3N2Zz4=" />
                            <h4><a href="#">برنامج نصف الإقامة</a></h4>
                            <div class="border-center"></div>
                            <p> هذا البرنامج هو أسلوب حديث للتعامل مع مرضى الإدمان الذين لايستطيعون تمضية فترات طويلة للعلاج وهذا البرنامج هو الأحدث في طرق العلاج  </p>
                            <button type="submit" class="btn btn-theme margin-top-20" data-text="Send Message">اقرا المزيد</button>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="service-item text-center style-3">
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ4OS42IDQ4OS42IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0ODkuNiA0ODkuNjsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIj48Zz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00MjYuMTMzLDI0NC44YzAtNS44ODgsNC43NzktMTAuNjY3LDEwLjY2Ny0xMC42NjdoNTIuOGMtMS42LTM2Ljg2NC0xMS4yLTcxLjYzNy0yNy4zNzEtMTAyLjU0OWwtNDUuODI0LDI2LjQ1MyAgICBjLTEuNjg1LDAuOTgxLTMuNTIsMS40MjktNS4zMzMsMS40MjljLTMuNjY5LDAtNy4yNzUtMS45Mi05LjIzNy01LjMzM2MtMi45NjUtNS4wOTktMS4yMTYtMTEuNjI3LDMuOTA0LTE0LjU3MWw0NS43MzktMjYuNDExICAgIGMtMTkuMjY0LTMwLjE0NC00NC44ODUtNTUuNzY1LTc1LjA1MS03NS4wMjlsLTI2LjQxMSw0NS43MzljLTEuOTYzLDMuNDM1LTUuNTY4LDUuMzMzLTkuMjM3LDUuMzMzICAgIGMtMS44MTMsMC0zLjY0OC0wLjQ0OC01LjMzMy0xLjQyOWMtNS4wOTktMi45NDQtNi44NDgtOS40NzItMy45MDQtMTQuNTcxbDI2LjQ1My00NS44MDNDMzI3LjEwNCwxMS4yLDI5Mi4zMzEsMS42LDI1NS40NjcsMHY1Mi44ICAgIGMwLDUuODg4LTQuNzc5LDEwLjY2Ny0xMC42NjcsMTAuNjY3cy0xMC42NjctNC43NzktMTAuNjY3LTEwLjY2N1YwYy0zNi44NjQsMS42LTcxLjYzNywxMS4yLTEwMi41NDksMjcuMzcxbDI2LjQ1Myw0NS44MDMgICAgYzIuOTQ0LDUuMTIsMS4xOTUsMTEuNjI3LTMuOTA0LDE0LjU5MmMtMS42ODUsMC45Ni0zLjUyLDEuNDI5LTUuMzMzLDEuNDI5Yy0zLjY2OSwwLTcuMjc1LTEuODk5LTkuMjM3LTUuMzMzbC0yNi40MTEtNDUuNzM5ICAgIGMtMzAuMTQ0LDE5LjI2NC01NS43NjUsNDQuODg1LTc1LjAyOSw3NS4wMjlsNDUuNzM5LDI2LjQxMWM1LjA5OSwyLjk0NCw2Ljg0OCw5LjQ3MiwzLjkwNCwxNC41NzEgICAgYy0xLjk2MywzLjQxMy01LjU2OCw1LjMzMy05LjIzNyw1LjMzM2MtMS44MTMsMC0zLjY0OC0wLjQ0OC01LjMzMy0xLjQyOWwtNDUuODI0LTI2LjQ1M0MxMS4yLDE2Mi40OTYsMS42LDE5Ny4yNjksMCwyMzQuMTMzaDUyLjggICAgYzUuODg4LDAsMTAuNjY3LDQuNzc5LDEwLjY2NywxMC42NjdzLTQuNzc5LDEwLjY2Ny0xMC42NjcsMTAuNjY3SDBjMS42LDM2Ljg2NCwxMS4yLDcxLjYzNywyNy4zNzEsMTAyLjU0OWw0NS44MjQtMjYuNDUzICAgIGM1LjA3Ny0yLjkyMywxMS42MjctMS4yMTYsMTQuNTcxLDMuOTA0YzIuOTY1LDUuMDk5LDEuMjE2LDExLjYyNy0zLjkwNCwxNC41NzFsLTQ1LjczOSwyNi40MTEgICAgYzE5LjI2NCwzMC4xNDQsNDQuODg1LDU1Ljc2NSw3NS4wNTEsNzUuMDI5bDI2LjQxMS00NS43MzljMi45NDQtNS4xMiw5LjQ5My02LjgyNywxNC41NzEtMy45MDQgICAgYzUuMDk5LDIuOTQ0LDYuODQ4LDkuNDcyLDMuOTA0LDE0LjU3MWwtMjYuNDUzLDQ1LjgwM2MzMC45MzMsMTYuMTcxLDY1LjcwNywyNS43NzEsMTAyLjU0OSwyNy4zNzFWNDM2LjggICAgYzAtNS44ODgsNC43NzktMTAuNjY3LDEwLjY2Ny0xMC42NjdzMTAuNjY3LDQuNzc5LDEwLjY2NywxMC42Njd2NTIuOGMzNi44NjQtMS42LDcxLjYzNy0xMS4yLDEwMi41NDktMjcuMzcxbC0yNi40NTMtNDUuODAzICAgIGMtMi45NjUtNS4wOTktMS4yMTYtMTEuNjI3LDMuOTA0LTE0LjU3MWM1LjA3Ny0yLjk2NSwxMS42MjctMS4yMTYsMTQuNTcxLDMuOTA0bDI2LjQxMSw0NS43MzkgICAgYzMwLjE0NC0xOS4yNjQsNTUuNzY1LTQ0Ljg4NSw3NS4wNTEtNzUuMDI5bC00NS43ODEtMjYuNDMyYy01LjA5OS0yLjk0NC02Ljg0OC05LjQ3Mi0zLjkwNC0xNC41NzEgICAgYzIuOTIzLTUuMDk5LDkuNDUxLTYuODA1LDE0LjU3MS0zLjkwNGw0NS44MjQsMjYuNDUzQzQ3OC40LDMyNy4xMDQsNDg4LDI5Mi4zMzEsNDg5LjYsMjU1LjQ2N2gtNTIuOCAgICBDNDMwLjkxMiwyNTUuNDY3LDQyNi4xMzMsMjUwLjY4OCw0MjYuMTMzLDI0NC44eiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojMDBBNkU0IiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCI+PC9wYXRoPgoJPC9nPgo8L2c+PC9nPiA8L3N2Zz4=" />
                            <h4><a href="#">برنامج الاقامة الكاملة</a></h4>
                            <div class="border-center"></div>
                            <p>هى بيئة آمنة يمارس فيهاالشخص الحياةالطبيعية بدون تعاطى ويطلق عليها halfway house وهى فلسفة علاج جديدة في مصر</p>
                            <button type="submit" class="btn btn-theme margin-top-20" data-text="Send Message">اقرا المزيد</button>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="service-item text-center style-3">
                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iNTEyIiB2aWV3Qm94PSIwIDAgNDk2IDQ5NiIgd2lkdGg9IjUxMiI+PGc+PHBhdGggZD0ibTI1NiAzMmgtMTZ2MTZoLTE2djE2aDE2djE2aDE2di0xNmgxNnYtMTZoLTE2em0wIDAiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6IzAwQTZFNCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvcGF0aD48cGF0aCBkPSJtMjcyIDE2MHYtMzJoMTZjOC44MjQyMTkgMCAxNi03LjE3NTc4MSAxNi0xNnYtOGg0My43MTg3NWwyMi40MDIzNDQgMzMuNTkzNzUgMzAuNDk2MDk0LTgzLjg2NzE4OCAxOC4xMDkzNzQgNDIuMjczNDM4aDc3LjI3MzQzOHYtMTZoLTY2LjcyNjU2MmwtMjkuODgyODEzLTY5LjcyNjU2Mi0zMy41MDM5MDYgOTIuMTMyODEyLTkuNjA1NDY5LTE0LjQwNjI1aC01Mi4yODEyNXYtNzJjMC04LjgyNDIxOS03LjE3NTc4MS0xNi0xNi0xNmgtODBjLTguODI0MjE5IDAtMTYgNy4xNzU3ODEtMTYgMTZ2NDBoLTY5LjI3MzQzOGwtMTguMTE3MTg3IDQyLjI3MzQzOC0zMC40ODgyODEtODMuODY3MTg4LTIyLjQwMjM0NCAzMy41OTM3NWgtNTEuNzE4NzV2MTZoNjAuMjgxMjVsOS41OTc2NTYtMTQuNDA2MjUgMzMuNTAzOTA2IDkyLjEzMjgxMiAyOS44OTA2MjYtNjkuNzI2NTYyaDU4LjcyNjU2MnY0MGMwIDguODI0MjE5IDcuMTc1NzgxIDE2IDE2IDE2aDE2djMyaDE2djQ4aC00MGMtMTMuNTkzNzUgMC0yNy4xOTkyMTkgMy4yMDcwMzEtMzkuMzUxNTYyIDkuMjg5MDYybC01LjU1MDc4MiAyLjc3MzQzOGMtNS4xMTMyODEtMTYuMTk5MjE5LTIwLjEwNTQ2OC0yOC4wNjI1LTM3Ljk3NjU2Mi0yOC4wNjI1aC0yOS4xMjEwOTRjLTkuMDM5MDYyIDAtMTcuMjk2ODc1IDMuMTI4OTA2LTI0IDguMjA3MDMxdi0zMi4yMDcwMzFjMC0xMy4yMzA0NjktMTAuNzY5NTMxLTI0LTI0LTI0cy0yNCAxMC43Njk1MzEtMjQgMjR2MTIwYy04LjgyNDIxOSAwLTE2IDcuMTc1NzgxLTE2IDE2djE2YzAgOC44MjQyMTkgNy4xNzU3ODEgMTYgMTYgMTZoMjR2ODguMDg5ODQ0Yy0xMC4wMjM0MzggNy41NDI5NjgtMTYgMTkuMjg1MTU2LTE2IDMxLjkxMDE1NiAwIDIyLjA1NDY4OCAxNy45NDUzMTIgNDAgNDAgNDBzNDAtMTcuOTQ1MzEyIDQwLTQwYzAtMTIuNjE3MTg4LTYuMDM5MDYyLTI0LjQ1NzAzMS0xNi0zMS45NjA5Mzh2LTg4LjAzOTA2MmgzMjB2ODguMDM5MDYyYy05Ljk2MDkzOCA3LjQ5NjA5NC0xNiAxOS4zNDM3NS0xNiAzMS45NjA5MzggMCAyMi4wNTQ2ODggMTcuOTQ1MzEyIDQwIDQwIDQwczQwLTE3Ljk0NTMxMiA0MC00MGMwLTEyLjYxNzE4OC02LjAzOTA2Mi0yNC40NTcwMzEtMTYtMzEuOTYwOTM4di04OC4wMzkwNjJoMjRjOC44MjQyMTkgMCAxNi03LjE3NTc4MSAxNi0xNnYtMTZjMC04LjgyNDIxOS03LjE3NTc4MS0xNi0xNi0xNmgtLjQwNjI1Yy00LjA1ODU5NC00NC43ODUxNTYtNDEuNzY5NTMxLTgwLTg3LjU5Mzc1LTgwaC0xMzZ2LTQ4em0tMTg0IDQ4aDI5LjEyMTA5NGMxMy4yMzA0NjggMCAyNCAxMC43Njk1MzEgMjQgMjRzLTEwLjc2OTUzMiAyNC0yNCAyNGgtMjkuMTIxMDk0Yy0xMy4yMzA0NjkgMC0yNC0xMC43Njk1MzEtMjQtMjRzMTAuNzY5NTMxLTI0IDI0LTI0em0zMiA2NGMxMC40MTQwNjIgMCAxOS4yMTQ4NDQgNi43MTA5MzggMjIuNTI3MzQ0IDE2aC03Ny4wNTQ2ODhjMy4zMTI1LTkuMjg5MDYyIDEyLjExMzI4Mi0xNiAyMi41MjczNDQtMTZ6bS01Ni04LjIwNzAzMWMuMDg5ODQ0LjA3MDMxMi4xNjAxNTYuMTQ0NTMxLjI0NjA5NC4yMDcwMzEtLjA4NTkzOC4wNjI1LS4xNTYyNS4xMzY3MTktLjI0NjA5NC4yMDcwMzF6bS0zMi05NS43OTI5NjljMC00LjQwNjI1IDMuNTg1OTM4LTggOC04czggMy41OTM3NSA4IDh2MTIwaC0xNnptMzIgMzEyYy0xMy4yMzA0NjkgMC0yNC0xMC43Njk1MzEtMjQtMjQgMC0yLjc1MzkwNi42MjUtNS4zNjcxODggMS41MTE3MTktNy44ODY3MTkgMy4zMzU5MzcgOS4yMzA0NjkgMTIuMTEzMjgxIDE1Ljg4NjcxOSAyMi40ODgyODEgMTUuODg2NzE5IDEwLjM2NzE4OCAwIDE5LjE0NDUzMS02LjY0ODQzOCAyMi40ODgyODEtMTUuODc4OTA2Ljg4NjcxOSAyLjUxOTUzMSAxLjUxMTcxOSA1LjEzNjcxOCAxLjUxMTcxOSA3Ljg3ODkwNiAwIDEzLjIzMDQ2OS0xMC43Njk1MzEgMjQtMjQgMjR6bTgtNDBjMCA0LjQwNjI1LTMuNTg1OTM4IDgtOCA4cy04LTMuNTkzNzUtOC04di0xMDRoMTZ6bTM2MCA0MGMtMTMuMjMwNDY5IDAtMjQtMTAuNzY5NTMxLTI0LTI0IDAtMi43NDIxODguNjI1LTUuMzU5Mzc1IDEuNTExNzE5LTcuODc4OTA2IDMuMzQzNzUgOS4yMzA0NjggMTIuMTIxMDkzIDE1Ljg3ODkwNiAyMi40ODgyODEgMTUuODc4OTA2czE5LjE0NDUzMS02LjY0ODQzOCAyMi40ODgyODEtMTUuODc4OTA2Yy44ODY3MTkgMi41MTk1MzEgMS41MTE3MTkgNS4xMzY3MTggMS41MTE3MTkgNy44Nzg5MDYgMCAxMy4yMzA0NjktMTAuNzY5NTMxIDI0LTI0IDI0em04LTQwYzAgNC40MDYyNS0zLjU4NTkzOCA4LTggOHMtOC0zLjU5Mzc1LTgtOHYtMTA0aDE2em0yMy41MjczNDQtMTUyaC0zMS41MjczNDR2MTZoNDh2MTZoLTQ2NHYtMTZoNDAwdi0xNmgtMjU2LjgwODU5NGMtMi4xMjg5MDYtMTAuNDQxNDA2LTguMzM1OTM3LTE5LjQxNDA2Mi0xNi44ODY3MTgtMjUuMTgzNTk0IDcuNjc5Njg3LTYuMjg5MDYyIDEyLjkyNTc4MS0xNS4yOTY4NzUgMTQuMjg5MDYyLTI1LjYwOTM3NWwxMS4yMTQ4NDQtNS42MDU0NjljOS45MzM1OTQtNC45Njg3NSAyMS4wNjI1LTcuNjAxNTYyIDMyLjE5MTQwNi03LjYwMTU2MmgxOTJjMzcgMCA2Ny41MzUxNTYgMjguMDU0Njg4IDcxLjUyNzM0NCA2NHptLTI1NS41MjczNDQtMjcyaDgwbC4wMDc4MTIgOTZoLTgwLjAwNzgxMnptNDggMTEydjE2aC0xNnYtMTZ6bTAgMCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojMDBBNkU0IiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCI+PC9wYXRoPjwvZz4gPC9zdmc+" />
                            <h4><a href="#">علاج الاضطرابات المتزامنة مع المخدرات</a></h4>
                            <div class="border-center"></div>
                            <p>رنامج التشخيص المزدوج يقوم على أساس التعامل مع محور الإدمان ومحور الاضطراب النفسى المصاحب نتيجة الإدمان</p>
                            <button type="submit" class="btn btn-theme margin-top-20" data-text="Send Message">اقرا المزيد</button>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="service-item text-center style-3">
                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iNTEyIiB2aWV3Qm94PSIxIDEgNTExIDUxMS45OTk1IiB3aWR0aD0iNTEyIj48Zz48cGF0aCBkPSJtNDYzLjE1MjM0NCAxMzguMDk3NjU2IDIzLjc0MjE4NyAyMy43NDIxODhjMi45MjU3ODEgMi45Mjk2ODcgNi43NjU2MjUgNC4zOTQ1MzEgMTAuNjA1NDY5IDQuMzk0NTMxczcuNjc1NzgxLTEuNDY0ODQ0IDEwLjYwNTQ2OS00LjM5NDUzMWM1Ljg1OTM3NS01Ljg1OTM3NSA1Ljg1OTM3NS0xNS4zNTU0NjkgMC0yMS4yMTQ4NDRsLTEzNi4yMzQzNzUtMTM2LjIzMDQ2OWMtNS44NTU0NjktNS44NTkzNzUtMTUuMzU1NDY5LTUuODU5Mzc1LTIxLjIxMDkzOCAwLTUuODU5Mzc1IDUuODU1NDY5LTUuODU5Mzc1IDE1LjM1NTQ2OSAwIDIxLjIxMDkzOGwyMy43MzgyODIgMjMuNzQyMTg3LTI4LjgzOTg0NCAyOC44Mzk4NDQtNTguOTY0ODQ0LTU4Ljk2ODc1Yy01Ljg1OTM3NS01Ljg1NTQ2OS0xNS4zNTU0NjktNS44NTU0NjktMjEuMjE0ODQ0IDAtNS44NTU0NjggNS44NTkzNzUtNS44NTU0NjggMTUuMzU1NDY5IDAgMjEuMjE0ODQ0bDMzLjQyOTY4OCAzMy40Mjk2ODctMTkxLjYwMTU2MyAxOTEuNjAxNTYzYy0xNC43MTQ4NDMgMTQuNzE4NzUtMjIuODIwMzEyIDM0LjI4NTE1Ni0yMi44MjAzMTIgNTUuMTAxNTYyIDAgMTAuMjQyMTg4IDEuOTcyNjU2IDIwLjE3OTY4OCA1LjcxODc1IDI5LjM5MDYyNWwtNTcuMzYzMjgxIDU3LjM2MzI4MWMtNS44NTkzNzYgNS44NTkzNzYtNS44NTkzNzYgMTUuMzU1NDY5IDAgMjEuMjE0ODQ0bDE1LjAwMzkwNiAxNS4wMDM5MDYtNDIuODUxNTYzIDQyLjg1NTQ2OWMtNS44NTkzNzUgNS44NTU0NjktNS44NTkzNzUgMTUuMzU1NDY5IDAgMjEuMjEwOTM4IDIuOTI1NzgxIDIuOTI5Njg3IDYuNzY1NjI1IDQuMzk0NTMxIDEwLjYwNTQ2OSA0LjM5NDUzMXM3LjY3NTc4MS0xLjQ2NDg0NCAxMC42MDU0NjktNC4zOTQ1MzFsNDIuODU1NDY5LTQyLjg1NTQ2OSAxNS4wMDM5MDYgMTUuMDA3ODEyYzIuODEyNSAyLjgxMjUgNi42Mjg5MDYgNC4zOTQ1MzIgMTAuNjA1NDY4IDQuMzk0NTMyIDMuOTc2NTYzIDAgNy43OTI5NjktMS41ODIwMzIgMTAuNjA1NDY5LTQuMzk0NTMybDU3LjM2NzE4OC01Ny4zNjcxODdjOS4yMDcwMzEgMy43NSAxOS4xNDQ1MzEgNS43MjI2NTYgMjkuMzkwNjI1IDUuNzIyNjU2IDIwLjgxMjUgMCA0MC4zODI4MTItOC4xMDU0NjkgNTUuMTAxNTYyLTIyLjgyNDIxOWw4OS44MjAzMTMtODkuODI0MjE4aC4wMDM5MDZsMTAxLjc3NzM0NC0xMDEuNzczNDM4IDMzLjQyOTY4NyAzMy40Mjk2ODhjMi45Mjk2ODggMi45MjU3ODEgNi43Njk1MzIgNC4zOTA2MjUgMTAuNjA1NDY5IDQuMzkwNjI1IDMuODM5ODQ0IDAgNy42Nzk2ODctMS40NjA5MzggMTAuNjA1NDY5LTQuMzkwNjI1IDUuODU5Mzc1LTUuODU5Mzc1IDUuODU5Mzc1LTE1LjM1NTQ2OSAwLTIxLjIxNDg0NGwtNDQuMDMxMjUtNDQuMDMxMjVjMC0uMDAzOTA2IDAtLjAwMzkwNi0uMDAzOTA2LS4wMDM5MDYgMC0uMDAzOTA2LS4wMDM5MDctLjAwMzkwNi0uMDAzOTA3LS4wMDM5MDZsLTE0LjkyOTY4Ny0xNC45Mjk2ODh6bS02Ny41MzkwNjMtNjcuNTM5MDYyIDQ2LjMyNDIxOSA0Ni4zMjgxMjUtMjguODM5ODQ0IDI4LjgzOTg0My00Ni4zMjQyMTgtNDYuMzI4MTI0em0tMzAxLjA0Mjk2OSAzNzcuMzc4OTA2LTMwLjAwNzgxMi0zMC4wMTE3MTkgNDIuNDU3MDMxLTQyLjQ2MDkzN2MuMDY2NDA3LjA2NjQwNi4xMjUuMTMyODEyLjE5MTQwNy4xOTkyMThsMjkuNjI1IDI5LjYyNWMuMDYyNS4wNjY0MDcuMTMyODEyLjEyNS4xOTkyMTguMTg3NXptMjgzLjIwMzEyNi0yMTUuODA4NTk0LTQ4LjY5OTIxOS00OC43MDMxMjVjLTUuODU5Mzc1LTUuODU1NDY5LTE1LjM1NTQ2OS01Ljg1NTQ2OS0yMS4yMTQ4NDQgMC01Ljg1NTQ2OSA1Ljg1OTM3NS01Ljg1NTQ2OSAxNS4zNTU0NjkgMCAyMS4yMTQ4NDRsNDguNjk5MjE5IDQ4LjY5OTIxOS0zMC4zMDQ2ODggMzAuMzA4NTk0LTQ4LjcwMzEyNS00OC42OTkyMTljLTUuODU5Mzc1LTUuODU5Mzc1LTE1LjM1NTQ2OS01Ljg1OTM3NS0yMS4yMTA5MzcgMC01Ljg1OTM3NSA1Ljg1NTQ2OS01Ljg1OTM3NSAxNS4zNTU0NjkgMCAyMS4yMTA5MzdsNDguNjk5MjE4IDQ4LjcwMzEyNS0zMC4zMDg1OTMgMzAuMzA0Njg4LTQ4LjY5OTIxOS00OC42OTkyMTljLTUuODU1NDY5LTUuODU1NDY5LTE1LjM1NTQ2OS01Ljg1NTQ2OS0yMS4yMTQ4NDQgMC01Ljg1NTQ2OCA1Ljg1OTM3NS01Ljg1NTQ2OCAxNS4zNTU0NjkgMCAyMS4yMTQ4NDRsNDguNzAzMTI1IDQ4LjY5OTIxOC0yNy42OTkyMTkgMjcuNjk1MzEzYy05LjA1MDc4MSA5LjA1MDc4MS0yMS4wODU5MzcgMTQuMDM1MTU2LTMzLjg4NjcxOCAxNC4wMzUxNTYtMTIuODAwNzgyIDAtMjQuODMyMDMyLTQuOTg0Mzc1LTMzLjg4NjcxOS0xNC4wMzUxNTZsLTI5LjYyNS0yOS42MjVjLTkuMDUwNzgxLTkuMDUwNzgxLTE0LjAzNTE1Ni0yMS4wODU5MzctMTQuMDM1MTU2LTMzLjg4NjcxOSAwLTEyLjgwMDc4MSA0Ljk4NDM3NS0yNC44MzU5MzcgMTQuMDM1MTU2LTMzLjg4NjcxOGwxOTEuNjAxNTYzLTE5MS42MDU0NjkgMTQuOTI1NzgxIDE0LjkyOTY4N2guMDAzOTA2YzAgLjAwMzkwNi4wMDM5MDYuMDAzOTA2LjAwMzkwNi4wMDM5MDZsNjcuNTM1MTU3IDY3LjUzNTE1N3YuMDAzOTA2bDE0LjkyOTY4NyAxNC45Mjk2ODd6bTAgMCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojMDBBNkU0IiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCI+PC9wYXRoPjwvZz4gPC9zdmc+" />
                            <h4><a href="#">ازالة السموم من الجسم بدون ألم</a></h4>
                            <div class="border-center"></div>
                            <p>انسحاب المخدر من الجسم ليست بالعملية السهلة لأنها تترك آثار علي المدمن جسديه ونفسيه ونحن متخصصون في هذه العملية بشكل محترف</p>
                            <button type="submit" class="btn btn-theme margin-top-20" data-text="Send Message">اقرا المزيد</button>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="service-item text-center style-3">
                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgY2xhc3M9IiI+PGc+PGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDUxLjcyLDIzNy4yNmMtMTcuNDIyLTguNzEtNTAuMDg3LTguODExLTUxLjQ2OS04LjgxMWMtNC4xNDIsMC03LjUsMy4zNTgtNy41LDcuNWMwLDQuMTQyLDMuMzU4LDcuNSw3LjUsNy41ICAgIGM4LjQyOSwwLjAwMSwzMi45MDIsMS4yOTksNDQuNzYxLDcuMjI4YzEuMDc3LDAuNTM5LDIuMjIxLDAuNzkzLDMuMzQ4LDAuNzkzYzIuNzUxLDAsNS40LTEuNTIsNi43MTQtNC4xNDcgICAgQzQ1Ni45MjcsMjQzLjYxOCw0NTUuNDI1LDIzOS4xMTMsNDUxLjcyLDIzNy4yNnoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6IzAwQTZFNCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvcGF0aD4KCTwvZz4KPC9nPjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ4OS4xMTIsMzQ0LjA0MWwtMzAuOTc1LTguODVjLTEuMzM3LTAuMzgyLTIuMjcxLTEuNjItMi4yNzEtMy4wMTF2LTEwLjMzOWMyLjUyLTEuNzQ2LDQuOTI0LTMuNyw3LjE3MS01Ljg4MSAgICBjMTAuODktMTAuNTY4LDE2Ljg4Ny0yNC43NDMsMTYuODg3LTM5LjkxNXYtMTQuMjY3bDIuOTk1LTUuOTg5YzMuMjg3LTYuNTc1LDUuMDI0LTEzLjkzNiw1LjAyNC0yMS4yODZ2LTM4LjY1ICAgIGMwLTQuMTQyLTMuMzU4LTcuNS03LjUtNy41SDQwOC4yN2MtMjYuMjQ0LDAtNDcuNTk2LDIxLjM1Mi00Ny41OTYsNDcuNTk2djAuNDQ3YzAsNi4xMTIsMS40NDUsMTIuMjMzLDQuMTc4LDE3LjY5OWwzLjg0MSw3LjY4MiAgICB2MTIuMjVjMCwxOS40MTQsOS41NjcsMzYuODMzLDI0LjA1OCw0Ny4zMTVsMC4wMDIsMTAuODM2YzAsMS42NzEsMCwyLjM2My02LjE5Myw0LjEzM2wtMTUuMTE0LDQuMzE4bC00My43MjEtMTUuODk4ICAgIGMwLjE1Ny0yLjA2My0wLjUzOS00LjE2MS0yLjA0NC01Ljc0MmwtMTMuOTcxLTE0LjY3OHYtMjQuNjRjMS40NzctMS4yMTcsMi45MzMtMi40NjcsNC4zNDQtMy43ODkgICAgYzE3LjYyNS0xNi41MiwyNy43MzMtMzkuODQ0LDI3LjczMy02My45OTF2LTE5LjY3OGM1LjMyMi0xMS41ODEsOC4wMTktMjMuODM2LDguMDE5LTM2LjQ1N3YtODAuMTljMC00LjE0Mi0zLjM1OC03LjUtNy41LTcuNSAgICBIMjMyLjAzN2MtMzkuNTEsMC03MS42NTMsMzIuMTQ0LTcxLjY1Myw3MS42NTN2MTYuMDM5YzAsMTIuNjIxLDIuNjk3LDI0Ljg3Niw4LjAxOSwzNi40NTd2MTYuOTMxICAgIGMwLDI4LjAzNiwxMi40NjYsNTMuMjk0LDMyLjA3Nyw2OS45NDZ2MjUuMjJsLTEzLjk3MSwxNC42NzhjLTEuNTA1LDEuNTgxLTIuMjAxLDMuNjc5LTIuMDQ0LDUuNzQybC00Ni4xNDUsMTYuNzc5ICAgIGMtMy4zNDQsMS4yMTYtNi40NTEsMi44NjMtOS4yNzIsNC44NThsLTcuMjQ2LTMuNjIzYzIxLjU3LTkuMzg5LDI4LjQwMy0yMi41OTQsMjguNzMxLTIzLjI1YzEuMDU2LTIuMTExLDEuMDU2LTQuNTk3LDAtNi43MDggICAgYy01LjQwNy0xMC44MTQtNi4wNjItMzAuNjM1LTYuNTg4LTQ2LjU2MWMtMC4xNzUtNS4zMDItMC4zNDEtMTAuMzExLTAuNjU4LTE0Ljc3MWMtMi41NTctMzUuOTc0LTI5LjkwNS02My4xMDMtNjMuNjE1LTYzLjEwMyAgICBzLTYxLjA1OSwyNy4xMjgtNjMuNjE1LDYzLjEwM2MtMC4zMTcsNC40NjEtMC40ODMsOS40Ny0wLjY1OCwxNC43NzNjLTAuNTI2LDE1LjkyNS0xLjE4MiwzNS43NDQtNi41ODgsNDYuNTU4ICAgIGMtMS4wNTYsMi4xMTEtMS4wNTYsNC41OTcsMCw2LjcwOGMwLjMyOCwwLjY1Niw3LjE0NywxMy44MzQsMjguNzYsMjMuMjM0bC0yMC4xMjcsMTAuMDYzQzYuNjg0LDM1OC4xNzYsMCwzNjguOTkxLDAsMzgxLjAyICAgIHY1NS40MDljMCw0LjE0MiwzLjM1OCw3LjUsNy41LDcuNXM3LjUtMy4zNTgsNy41LTcuNVYzODEuMDJjMC02LjMxMiwzLjUwNy0xMS45ODcsOS4xNTItMTQuODFsMjUuMDYzLTEyLjUzMWw4LjcxOCw4LjI4NSAgICBjNi4wOTYsNS43OTMsMTMuOTE2LDguNjg4LDIxLjczOSw4LjY4OGM3LjgyMSwwLDE1LjY0NS0yLjg5NywyMS43MzktOC42ODhsOC43MTctOC4yODRsOC4xNzIsNC4wODYgICAgYy0zLjg0OCw2LjE1Ny02LjAzMiwxMy4zNzctNi4wMzIsMjAuOTR2NTcuNzI1YzAsNC4xNDIsMy4zNTgsNy41LDcuNSw3LjVjNC4xNDIsMCw3LjUtMy4zNTgsNy41LTcuNXYtNTcuNzI1ICAgIGMwLTEwLjI5Niw2LjUwMS0xOS41NzgsMTYuMTc4LTIzLjA5N2w0OC42NTItMTcuNjkxbDIwLjI1MywzMC4zODFjMi41ODksMy44ODQsNi43MzgsNi4zNzUsMTEuMzgzLDYuODM1ICAgIGMwLjUxOCwwLjA1MSwxLjAzMywwLjA3NiwxLjU0NywwLjA3NmM0LjA5OCwwLDguMDIzLTEuNjEzLDEwLjk1Ny00LjU0NmwxMi4zNTYtMTIuMzU2djc4LjEyNGMwLDQuMTQyLDMuMzU4LDcuNSw3LjUsNy41ICAgIGM0LjE0MiwwLDcuNS0zLjM1OCw3LjUtNy41di03OC4xMjRsMTIuMzU2LDEyLjM1NmMyLjkzMywyLjkzNCw2Ljg1OCw0LjU0NywxMC45NTcsNC41NDdjMC41MTMsMCwxLjAyOS0wLjAyNSwxLjU0Ni0wLjA3NiAgICBjNC42NDYtMC40Niw4Ljc5NS0yLjk1MSwxMS4zODQtNi44MzVsMjAuMjU0LTMwLjM4bDQ4LjY1MSwxNy42OTFjOS42NzYsMy41MTksMTYuMTc4LDEyLjgwMSwxNi4xNzgsMjMuMDk3djU3LjcyNSAgICBjMCw0LjE0MiwzLjM1OCw3LjUsNy41LDcuNWM0LjE0MiwwLDcuNS0zLjM1OCw3LjUtNy41di01Ny43MjVjMC0xMC40MjgtNC4xNDMtMjAuMjA4LTExLjA5My0yNy40NDFsMS44NTMtMC41MjkgICAgYzEuODY5LTAuNTM0LDQuNDE5LTEuMjY1LDYuOTc5LTIuNTJsMTkuMTQ5LDE5LjE0OXY2OS4wNjZjMCw0LjE0MiwzLjM1OCw3LjUsNy41LDcuNWM0LjE0MiwwLDcuNS0zLjM1OCw3LjUtNy41di02OS4wNjYgICAgbDE5LjAxNi0xOS4wMTZjMS4wMTEsMC41MTQsMi4wNzMsMC45NDgsMy4xOTEsMS4yNjdsMzAuOTc2LDguODVjNy4wNywyLjAyLDEyLjAwOSw4LjU2NywxMi4wMDksMTUuOTIxdjYyLjA0NCAgICBjMCw0LjE0MiwzLjM1OCw3LjUsNy41LDcuNWM0LjE0MiwwLDcuNS0zLjM1OCw3LjUtNy41di02Mi4wNDRDNTEyLDM2MC4zNzEsNTAyLjU4OCwzNDcuODkyLDQ4OS4xMTIsMzQ0LjA0MXogTTQ4LjExNSwzMzAuNzk0ICAgIGMtMTQuMDI5LTUuMDQ4LTIxLjA2Ni0xMS43NzgtMjQuMDctMTUuNDUzYzIuMDQ4LTUuMzU0LDMuMzc2LTExLjQ4Niw0LjI3NS0xNy45NTljNC4xMzYsOS45MTcsMTEuMDYzLDE4LjM4MywxOS43OTUsMjQuNDIzICAgIFYzMzAuNzk0eiBNOTEuMDgsMzUxLjA5MmMtNi4zOTcsNi4wNzgtMTYuNDE4LDYuMDc3LTIyLjgxMy0wLjAwMWwtNi45NzUtNi42MjhjMS4xNzctMi4yMDUsMS44MjQtNC43MDUsMS44MjQtNy4zMjR2LTcuOTk0ICAgIGM1LjIzMiwxLjYzNSwxMC43OTQsMi41MTcsMTYuNTU4LDIuNTE3YzUuNzU3LDAsMTEuMzE2LTAuODg2LDE2LjU1Ny0yLjUxMmwtMC4wMDEsNy45ODhjMCwyLjYyLDAuNjQ2LDUuMTIxLDEuODI0LDcuMzI3ICAgIEw5MS4wOCwzNTEuMDkyeiBNNzkuNjc2LDMxNi42NjJjLTIyLjM5NiwwLTQwLjYxNS0xOC4yMi00MC42MTUtNDAuNjE1YzAtNC4xNDItMy4zNTgtNy41LTcuNS03LjVjLTAuNDIsMC0wLjgzLDAuMDQzLTEuMjMxLDAuMTEgICAgYzAuMDIyLTAuNjQ1LDAuMDQzLTEuMjkxLDAuMDY1LTEuOTNjMC4xNjctNS4xNTcsMC4zMjgtMTAuMDI4LDAuNjI1LTE0LjIwNmMwLjk1OC0xMy40NzYsNi4zNDMtMjUuODk0LDE1LjE2My0zNC45NjggICAgYzguODk5LTkuMTU2LDIwLjc5My0xNC4xOTgsMzMuNDkxLTE0LjE5OHMyNC41OTEsNS4wNDIsMzMuNDkxLDE0LjE5OGM4LjgyLDkuMDc0LDE0LjIwNSwyMS40OTIsMTUuMTYzLDM0Ljk2OCAgICBjMC4yOTYsNC4xNzcsMC40NTgsOS4wNDcsMC42MjgsMTQuMjAzYzAuMDE1LDAuNDQzLDAuMDMsMC44OTIsMC4wNDUsMS4zMzhjLTguMTYtMTIuNTcyLTIwLjc2Mi0yMS44MzctMzcuMDQ1LTI3LjA2OSAgICBjLTE1LjA0My00LjgzMy0yNy45ODEtNC41MzQtMjguNTI3LTQuNTJjLTEuOTY0LDAuMDU1LTMuODI4LDAuODc3LTUuMTkxLDIuMjkxbC0xMy41MzIsMTQuMDM0ICAgIGMtMi44NzUsMi45ODItMi43ODksNy43MywwLjE5MywxMC42MDVzNy43MywyLjc4OCwxMC42MDUtMC4xOTNsMTEuMjYtMTEuNjc3YzkuNjk3LDAuNDc0LDQwLjg5NCw0LjEwMiw1My4wMjcsMzAuODE5ICAgIEMxMTYuNzM4LDMwMi4wNCw5OS44MTYsMzE2LjY2Miw3OS42NzYsMzE2LjY2MnogTTExMS4yMjksMzMwLjgxOWwwLjAwMS04Ljk0NWM4LjcyNS02LjAwNywxNS42NjItMTQuNDU3LDE5LjgwMS0yNC40NDkgICAgYzAuODk5LDYuNDU4LDIuMjI2LDEyLjU3Niw0LjI3LDE3LjkxOEMxMzIuMzE0LDMxOC45ODMsMTI1LjI0NCwzMjUuNzczLDExMS4yMjksMzMwLjgxOXogTTE4My40MDMsMjA5LjE0NXYtMTguNjA4ICAgIGMwLTEuMTI5LTAuMjU1LTIuMjQ0LTAuNzQ2LTMuMjYxYy00LjgyNi05Ljk5NC03LjI3My0yMC41OTgtNy4yNzMtMzEuNTE4VjEzOS43MmMwLTMxLjIzOSwyNS40MTUtNTYuNjUzLDU2LjY1My01Ni42NTNoMTA0Ljc2OSAgICB2NzIuNjkyYzAsMTAuOTItMi40NDcsMjEuNTI0LTcuMjczLDMxLjUxOGMtMC40OTEsMS4wMTctMC43NDYsMi4xMzItMC43NDYsMy4yNjF2MjEuMzU1YzAsMjAuMzExLTguMTY1LDM5LjE1LTIyLjk5MSw1My4wNDcgICAgYy0xLjg1MSwxLjczNC0zLjc3MiwzLjM2LTUuNzU4LDQuODc1Yy0wLjA0NCwwLjAzLTAuMDg2LDAuMDYzLTAuMTI5LDAuMDk0Yy0xMy44ODksMTAuNTQ1LTMwLjkwMSwxNS42Ny00OC42NjcsMTQuNTE5ICAgIEMyMTMuMjAxLDI4MS45NjUsMTgzLjQwMywyNDguODk3LDE4My40MDMsMjA5LjE0NXogTTIyNS42MzIsMzYwLjA1NmMtMC4wNTIsMC4wNTItMC4xNzMsMC4xNzUtMC40MTgsMC4xNDkgICAgYy0wLjI0NC0wLjAyNC0wLjM0LTAuMTY3LTAuMzgxLTAuMjI5bC0yMy4zMjUtMzQuOTg4bDcuNTA2LTcuODg3bDM1LjM4NSwyNC4xODdMMjI1LjYzMiwzNjAuMDU2eiBNMjU2LjA5NSwzMzEuMTEzICAgIGwtNDAuNjE1LTI3Ljc2MnYtMTRjMTAuNTA5LDUuNjgxLDIyLjI3Niw5LjIzNCwzNC43OTEsMTAuMDQ0YzEuOTc3LDAuMTI4LDMuOTQyLDAuMTkxLDUuOTAxLDAuMTkxICAgIGMxNC4zNDEsMCwyOC4xNDMtMy40MjgsNDAuNTM4LTkuOTM1djEzLjdMMjU2LjA5NSwzMzEuMTEzeiBNMjg3LjM1NywzNTkuOTc4Yy0wLjA0MSwwLjA2Mi0wLjEzNywwLjIwNS0wLjM4MSwwLjIyOSAgICBjLTAuMjQ1LDAuMDMxLTAuMzY1LTAuMDk4LTAuNDE4LTAuMTQ5bC0xOC43NjctMTguNzY3bDM1LjM4NS0yNC4xODhsNy41MDcsNy44ODdMMjg3LjM1NywzNTkuOTc4eiBNNDI0LjMwOCwzNTMuNjVsLTE3LjAyLTE3LjAxOSAgICBjMC4yOTctMS4zNDksMC40NjUtMi44MjYsMC40NjQtNC40NTVsLTAuMDAxLTMuMTY1YzQuNzIzLDEuNTUsOS43MDEsMi40NywxNC44NTIsMi42MjRjMC41NzgsMC4wMTgsMS4xNTEsMC4wMjYsMS43MjcsMC4wMjYgICAgYzUuNjkyLDAsMTEuMjQ4LTAuODYsMTYuNTM2LTIuNTAxdjMuMDJjMCwxLjQ5NiwwLjE4OCwyLjk2MiwwLjU0Miw0LjM3MUw0MjQuMzA4LDM1My42NXogTTQ1Mi41OTEsMzA1LjE5NiAgICBjLTcuOTQ5LDcuNzE0LTE4LjQ1LDExLjc4OC0yOS41MzcsMTEuNDQ2Yy0yMS43MDQtMC42NTEtMzkuMzYxLTE5Ljc2OC0zOS4zNjEtNDIuNjEzdi0xNC4wMjFjMC0xLjE2NS0wLjI3MS0yLjMxMy0wLjc5Mi0zLjM1NCAgICBsLTQuNjMzLTkuMjY2Yy0xLjY5Ny0zLjM5NS0yLjU5NC03LjE5NS0yLjU5NC0xMC45OTF2LTAuNDQ3YzAtMTcuOTc0LDE0LjYyMy0zMi41OTYsMzIuNTk2LTMyLjU5Nmg2NC42NzN2MzEuMTUgICAgYzAsNS4wMzQtMS4xOSwxMC4wNzUtMy40NDEsMTQuNTc4bC0zLjc4Niw3LjU3MmMtMC41MjEsMS4wNDItMC43OTIsMi4xODktMC43OTIsMy4zNTR2MTYuMDM4ICAgIEM0NjQuOTI0LDI4Ny4xMjYsNDYwLjU0NCwyOTcuNDc4LDQ1Mi41OTEsMzA1LjE5NnoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6IzAwQTZFNCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvcGF0aD4KCTwvZz4KPC9nPjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ3Mi40MjMsMzgwLjgxNGMtNC4xNDIsMC03LjUsMy4zNTgtNy41LDcuNXY0OC4xMTVjMCw0LjE0MiwzLjM1OCw3LjUsNy41LDcuNWM0LjE0MiwwLDcuNS0zLjM1OCw3LjUtNy41di00OC4xMTUgICAgQzQ3OS45MjMsMzg0LjE3Myw0NzYuNTY1LDM4MC44MTQsNDcyLjQyMywzODAuODE0eiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojMDBBNkU0IiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCI+PC9wYXRoPgoJPC9nPgo8L2c+PGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzkuNTc3LDM5MC43MjhjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjV2MzguMjAxYzAsNC4xNDIsMy4zNTgsNy41LDcuNSw3LjVjNC4xNDIsMCw3LjUtMy4zNTgsNy41LTcuNXYtMzguMjAxICAgIEM0Ny4wNzcsMzk0LjA4Nyw0My43MTksMzkwLjcyOCwzOS41NzcsMzkwLjcyOHoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6IzAwQTZFNCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvcGF0aD4KCTwvZz4KPC9nPjxnPgoJPGc+CgkJPHBhdGggZD0iTTMxNy41MzIsMTU4LjQ3NWMtMjguMzY2LTI4LjM2Ni04Ny43MTUtMjIuOTQzLTExMS45MTctMTkuMjk1Yy03LjYyMywxLjE0OS0xMy4xNTUsNy42LTEzLjE1NSwxNS4zMzl2MTcuMjc4ICAgIGMwLDQuMTQyLDMuMzU4LDcuNSw3LjUsNy41YzQuMTQyLDAsNy41LTMuMzU4LDcuNS03LjV2LTE3LjI3OWMwLTAuMjU1LDAuMTY4LTAuNDczLDAuMzkyLTAuNTA3ICAgIGM5LjY2Ny0xLjQ1NywyOC44NS0zLjcwNSw0OC43MjUtMi4zOGMyMy4zODgsMS41NTcsNDAuMzI4LDcuNDI4LDUwLjM0OSwxNy40NWMyLjkyOSwyLjkyOSw3LjY3OCwyLjkyOSwxMC42MDYsMCAgICBDMzIwLjQ2MSwxNjYuMTUyLDMyMC40NjEsMTYxLjQwMywzMTcuNTMyLDE1OC40NzV6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiMwMEE2RTQiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L3BhdGg+Cgk8L2c+CjwvZz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0xNjcuODg0LDM5Ni44NTNjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjV2MzIuMDc3YzAsNC4xNDIsMy4zNTgsNy41LDcuNSw3LjVjNC4xNDIsMCw3LjUtMy4zNTgsNy41LTcuNXYtMzIuMDc3ICAgIEMxNzUuMzg0LDQwMC4yMTIsMTcyLjAyNiwzOTYuODUzLDE2Ny44ODQsMzk2Ljg1M3oiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6IzAwQTZFNCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvcGF0aD4KCTwvZz4KPC9nPjxnPgoJPGc+CgkJPHBhdGggZD0iTTM0NC4zMDYsMzk2Ljg1M2MtNC4xNDIsMC03LjUsMy4zNTgtNy41LDcuNXYzMi4wNzdjMCw0LjE0MiwzLjM1OCw3LjUsNy41LDcuNWM0LjE0MiwwLDcuNS0zLjM1OCw3LjUtNy41di0zMi4wNzcgICAgQzM1MS44MDYsNDAwLjIxMiwzNDguNDQ4LDM5Ni44NTMsMzQ0LjMwNiwzOTYuODUzeiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojMDBBNkU0IiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCI+PC9wYXRoPgoJPC9nPgo8L2c+PC9nPiA8L3N2Zz4=" />                   
                            <h4><a href="#">برنامج الدعم الاسري</a></h4>
                            <div class="border-center"></div>
                            <p>إننا نقدم برنامجاً أسرياً فريداً من نوعه للإدمان، ينطوي على جلب عائلة المدمن إلى جلسات مع أحد أفرادها؛ فذلك يوفر فهماً أعمق بكثير من قبل العائلة حول ماهية مرض الإدمان وكيفية التعامل معه، والأهم من ذلك، كيفية دعم أحد أفرادها أثناء وبعد العلاج</p>
                            <button type="submit" class="btn btn-theme margin-top-20" data-text="Send Message">اقرا المزيد</button>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="service-item text-center style-3">
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIj48Zz48Zz4KCTxnPgoJCTxnPgoJCQk8cGF0aCBkPSJNNTAxLjMzMyw0MjYuNjY3SDY0VjM4NGg3NC42NjdjNS44OTYsMCwxMC42NjctNC43NzEsMTAuNjY3LTEwLjY2N1YzMjBIMjI0YzUuODk2LDAsMTAuNjY3LTQuNzcxLDEwLjY2Ny0xMC42NjdWMjU2ICAgICBoNzQuNjY3YzUuODk2LDAsMTAuNjY3LTQuNzcxLDEwLjY2Ny0xMC42NjdWMTkyaDc0LjY2N2M1Ljg5NiwwLDEwLjY2Ny00Ljc3MSwxMC42NjctMTAuNjY3VjEyOEg0ODAgICAgIGM1Ljg5NiwwLDEwLjY2Ny00Ljc3MSwxMC42NjctMTAuNjY3YzAtNS44OTYtNC43NzEtMTAuNjY3LTEwLjY2Ny0xMC42NjdoLTg1LjMzM2MtNS44OTYsMC0xMC42NjcsNC43NzEtMTAuNjY3LDEwLjY2N3Y1My4zMzMgICAgIGgtNzQuNjY3Yy01Ljg5NiwwLTEwLjY2Nyw0Ljc3MS0xMC42NjcsMTAuNjY3djUzLjMzM0gyMjRjLTUuODk2LDAtMTAuNjY3LDQuNzcxLTEwLjY2NywxMC42Njd2NTMuMzMzaC03NC42NjcgICAgIGMtNS44OTYsMC0xMC42NjcsNC43NzEtMTAuNjY3LDEwLjY2N3Y1My4zMzNINTMuMzMzYy01Ljg5NiwwLTEwLjY2Nyw0Ljc3MS0xMC42NjcsMTAuNjY3djUzLjMzM2gtMzIgICAgIEM0Ljc3MSw0MjYuNjY3LDAsNDMxLjQzOCwwLDQzNy4zMzNDMCw0NDMuMjI5LDQuNzcxLDQ0OCwxMC42NjcsNDQ4aDQ5MC42NjdjNS44OTYsMCwxMC42NjctNC43NzEsMTAuNjY3LTEwLjY2NyAgICAgQzUxMiw0MzEuNDM4LDUwNy4yMjksNDI2LjY2Nyw1MDEuMzMzLDQyNi42Njd6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiMwMEE2RTQiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L3BhdGg+CgkJCTxwYXRoIGQ9Ik03NC42NjcsMjM0LjYzOGMyLjUsMCw1LTAuODY1LDcuMDIxLTIuNjM1bDE0MS4wOTQtMTIzLjQ1N2wtOC45MDYsMjYuNzE3Yy0xLjg1NCw1LjU5NCwxLjE2NywxMS42MzUsNi43NSwxMy40OSAgICAgYzEuMTI1LDAuMzc1LDIuMjUsMC41NTIsMy4zNzUsMC41NTJjNC40NTgsMCw4LjYyNS0yLjgyMywxMC4xMjUtNy4yOTJsMjEuMzMzLTY0YzEuMTg4LTMuNTUyLDAuNDE3LTcuNDU4LTIuMDIxLTEwLjMwMiAgICAgYy0yLjQxNy0yLjg0NC02LjE4OC00LjEyNS05Ljg1NC0zLjU5NGwtNjQsMTAuNjY3Yy01LjgxMywwLjk2OS05Ljc1LDYuNDU4LTguNzcxLDEyLjI3MXM2LjYwNCw5LjgyMywxMi4yNzEsOC43NzFsMjYuOTcxLTQuNDkzICAgICBMNjcuNjQ2LDIxNS45NGMtNC40MzgsMy44ODUtNC44OTYsMTAuNjI1LTEsMTUuMDUyQzY4Ljc1LDIzMy40MDksNzEuNzA4LDIzNC42MzgsNzQuNjY3LDIzNC42Mzh6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiMwMEE2RTQiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L3BhdGg+CgkJPC9nPgoJPC9nPgo8L2c+PC9nPiA8L3N2Zz4=" />
                            <h4><a href="#">برنامج الـ 12 خطوة</a></h4>
                            <div class="border-center"></div>
                            <p>برنامج الـ12 خطوة، هو أسلوب للحياة مبني على مبادئ روحية مكتوبة ببساطة فى شكل مرقم من 1 إلى 12 بتسلسل بسيط</p>
                            <button type="submit" class="btn btn-theme margin-top-20" data-text="Send Message">اقر المزيد</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service end -->

    <!-- appointment start -->
    <section class=" animatedParent animateOnce">
        <div class="container padding-bottom-none">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <img class="animated fadeInLeftShort slow delay-500 booking-cantact-img" src="img\bg\c1.png" alt="">
                    </div>
                    <div class="col-md-6 bg-f8 padding-tb margin-bottom-80 animated fadeInRightShort slow delay-500">
                        <div class="booking-from">
                            <h2>حدد <span class="color-defult">موعد</span></h2>
                            <div class="border-style-2 margin-bottom-30"></div>
                            <p class="margin-bottom-30">القاهرة الجديدة - التجمع الاول بجوار أكاديمية الشرطة - القاهرة - مصر <br> على مدار ٢٤ ساعة</p>
                            <form method="post" action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="name" id="fname" class="form-control" placeholder="اسمك" >
                                         <p> <?php if (isset($err['name'])) { echo $err['name']; } ?></p>
                                                            
                                    </div>
                                    
                    
                                    <div class="col-md-6">
                                        <input type="text" name="phone" class="form-control" placeholder="رقمك" id="phone" >
                                          <p> <?php if (isset($err['phone'])) { echo $err['phone']; } ?></p>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-textarea">
                                            <textarea class="form-control" rows="6" placeholder="اكتب رساله" id="message" name="message" ></textarea>
                                            <button class="btn btn-theme" type="submit" value="Submit Form" name="submit" >ارسل رسالة</button>
                                        </div>
                                    </div>
                                    <div id="form-messages"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- appointment end -->

   <!-- divider start -->
    <section class="service-area over-layer-default">
        <div class="container padding-bottom-none padding-top-40">
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="service-item style-1 text-white border-right">
                            <div class="service-icon">
                                <i class="pe-7s-call"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#">تواصل معنا </a></h5>
                                <p>01030002121</p>
                                <p>01030002121</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="service-item style-1 text-white border-right">
                            <div class="">
                                <i class="pe-7s-mail-open"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#">ارسل لنا  </a></h5>
                                <p>Your_malil@gmail.com</p>
                                <p>Your_malil@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="service-item style-1 text-white border-right">
                            <div class="">
                                <i class="pe-7s-map-marker"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#">زور موقعنا </a></h5>
                                <p>القاهرة الجديدة - التجمع الاول بجوار أكاديمية الشرطة - القاهرة - مصر</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider end -->

   <!-- divider start -->
    <section class="divider divider-video over-layer-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="video_title">دار التعافي من الداخل</h1>
                    <a href="https://www.youtube.com/watch?v=NeVru1nl_Y4" data-fancybox-group="gallery" class="lightbox-image" title="دار التعافي من الداخل"><i class="icon icon-Play"></i></a>    
                </div> 
            </div> 
        </div> 
    </section>
    <!-- divider end -->

    <!-- department start -->    
    <!-- <section class="bg-f8">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="text-center">
                            <h2>OUR <span class="color-defult"> DEPARTMENTS</span></h2>
                            <div class="line-border-center bg-defult"></div>
                            <p>Consequatur alias incidunt cumque officiis, quas eius quaerat ut itaque laudantium corporis nobis ipsum, voluptates at, adipisci fugiat hic voluptate consequuntur porro.</p>
                        </div>
                    </div>
                </div> 
            </div>
            
            <div class="section-content">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="practice-item-1">
                            <div class="practice-img">
                                <a href="#">
                                    <img src="img\services\4.jpg" alt="">
                                    <span class="flaticon-heart-1"></span>
                                </a>
                            </div>
                            <div class="practice-content">
                                <h4><a href="#">Medical evacuation</a></h4>
                                <p>Personal Health Record makes it easy to join and stay on a wellness program - lose weight or manage a chronic condition easily.</p>
                                <a href="#" class="btn-theme hvr-bounce-to-top"> Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="practice-item-1">
                            <div class="practice-img">
                                <a href="#">
                                    <img src="img\services\5.jpg" alt="">
                                    <span class="flaticon-heart-1"></span>
                                </a>
                            </div>
                            <div class="practice-content">
                                <h4><a href="#"> Physical examination</a></h4>
                                <p>Personal Health Record makes it easy to join and stay on a wellness program - lose weight or manage a chronic condition easily.</p>
                                <a href="#" class="btn-theme hvr-bounce-to-top"> Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="practice-item-1">
                            <div class="practice-img">
                                <a href="#">
                                    <img src="img\services\6.jpg" alt="">
                                    <span class="flaticon-heart-1"></span>
                                </a>
                            </div>
                            <div class="practice-content">
                                <h4><a href="#"> Ultrasound Endoscopy</a></h4>
                                <p>Personal Health Record makes it easy to join and stay on a wellness program - lose weight or manage a chronic condition easily.</p>
                                <a href="#" class="btn-theme hvr-bounce-to-top"> Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="practice-item-1">
                            <div class="practice-img">
                                <a href="#">
                                    <img src="img\services\1.jpg" alt="">
                                    <span class="flaticon-heart-1"></span>
                                </a>
                            </div>
                            <div class="practice-content">
                                <h4><a href="#"> Radiology / X-Ray</a></h4>
                                <p>Personal Health Record makes it easy to join and stay on a wellness program - lose weight or manage a chronic condition easily.</p>
                                <a href="#" class="btn-theme hvr-bounce-to-top"> Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="practice-item-1">
                            <div class="practice-img">
                                <a href="#">
                                    <img src="img\services\8.jpg" alt="">
                                    <span class="flaticon-heart-1"></span>
                                </a>
                            </div>
                            <div class="practice-content">
                                <h4><a href="#"> CRITICAL CARE</a></h4>
                                <p>Personal Health Record makes it easy to join and stay on a wellness program - lose weight or manage a chronic condition easily.</p>
                                <a href="#" class="btn-theme hvr-bounce-to-top"> Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="practice-item-1">
                            <div class="practice-img">
                                <a href="#">
                                    <img src="img\services\3.jpg" alt="">
                                    <span class="flaticon-heart-1"></span>
                                </a>
                            </div>
                            <div class="practice-content">
                                <h4><a href="#"> Safe & Secure</a></h4>
                                <p>Personal Health Record makes it easy to join and stay on a wellness program - lose weight or manage a chronic condition easily.</p>
                                <a href="#" class="btn-theme hvr-bounce-to-top"> Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- department end -->

 

    <!-- Counter start -->
    <section class="funfact-field over-layer-default">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="counter-col text-center">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIiBjbGFzcz0iIj48Zz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0zMDkuMTI2LDE1OC43MjljLTQuNTA1LTMuMTk1LTEwLjc0Ny0yLjEzNy0xMy45NDMsMi4zNjhsLTAuMTk0LDAuMjczYy0zLjE5Niw0LjUwNC0yLjEzNiwxMC43NDYsMi4zNjgsMTMuOTQyICAgIGMxLjc1NywxLjI0NiwzLjc3NywxLjg0Niw1Ljc3OSwxLjg0NmMzLjEzMSwwLDYuMjE0LTEuNDY2LDguMTY0LTQuMjE0bDAuMTk0LTAuMjczICAgIEMzMTQuNjksMTY4LjE2NywzMTMuNjMsMTYxLjkyNSwzMDkuMTI2LDE1OC43Mjl6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIiBzdHlsZT0iZmlsbDojRkZGRkZGIj48L3BhdGg+Cgk8L2c+CjwvZz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yODYuMzQ0LDE4Ny4wNjljLTMuNTAyLTQuMjcxLTkuODAzLTQuODkyLTE0LjA3My0xLjM4OWMtMTMuODkzLDExLjM5Ni0yOS42OCwxOS41MDgtNDYuOTIzLDI0LjExMiAgICBjLTUuMzM2LDEuNDI1LTguNTA3LDYuOTA1LTcuMDgyLDEyLjI0MWMxLjE5NCw0LjQ3Miw1LjIzNiw3LjQyMyw5LjY1NSw3LjQyM2MwLjg1NCwwLDEuNzIyLTAuMTEsMi41ODYtMC4zNDIgICAgYzIwLjAxNy01LjM0NSwzOC4zMzUtMTQuNzU2LDU0LjQ0Ny0yNy45NzJDMjg5LjIyNSwxOTcuNjQsMjg5Ljg0NywxOTEuMzM4LDI4Ni4zNDQsMTg3LjA2OXoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiIHN0eWxlPSJmaWxsOiNGRkZGRkYiPjwvcGF0aD4KCTwvZz4KPC9nPjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ4MiwyMjYuNDdjLTE2LjU0MiwwLTMwLDEzLjQ1OC0zMCwyOS45OTl2NS4wMDFjMCw0MS45MzctMzAuNTM1LDc2Ljg1NC03MC41MzUsODMuNzQzICAgIGM1LjIyNC03LjcwNSw4LjI4LTE2Ljk5NCw4LjI4LTI2Ljk4NHYtNi45NDZjMC0yNi41OC0yMS42MjUtNDguMjA0LTQ4LjIwNS00OC4yMDRjLTI2LjU4LDAtNDguMjA0LDIxLjYyNC00OC4yMDQsNDguMjA0djYuOTQ2ICAgIGMwLDkuNzM2LDIuOTEsMTguOCw3Ljg5MywyNi4zODdjLTM4LjQyOS04LjE0Ni02Ny4zNTctNDIuMzI2LTY3LjM1Ny04My4xNDZ2LTUuMDAxYzAtMTYuNTQxLTEzLjQ1OC0yOS45OTktMzAtMjkuOTk5ICAgIHMtMzAsMTMuNDU4LTMwLDI5Ljk5OXY1LjAwMWMwLDIwLjI5Nyw0LjEzLDM5LjkyNiwxMi4wOTgsNTguMDYxaC02Ni4yMTdoLTEuODI2VjIxOC44MjNjMC00LjQ2NC0yLjk1OC04LjM4OC03LjI1LTkuNjE0ICAgIEM1Ny4yODgsMTkzLjk0LDIwLDE0NC41MDksMjAsODl2LTVjMC01LjUxNCw0LjQ4Ni0xMCwxMC0xMHMxMCw0LjQ4NiwxMCwxMHY1YzAsNTcuODk3LDQ3LjEwMywxMDUsMTA1LDEwNWg0OC4xMjcgICAgYzU3Ljg5NywwLDEwNS00Ny4xMDMsMTA1LTEwNXYtNWMwLTUuNTE0LDQuNDg2LTEwLDEwLTEwYzUuNTE0LDAsMTAsNC40ODYsMTAsMTB2NWMwLDE1LjM3MS0yLjc2OSwzMC4zODYtOC4yMzEsNDQuNjI1ICAgIGMtMS45NzgsNS4xNTYsMC41OTksMTAuOTQsNS43NTYsMTIuOTE4YzUuMTU0LDEuOTc5LDEwLjk0LTAuNiwxMi45MTgtNS43NTZjNi4zNDItMTYuNTM0LDkuNTU3LTMzLjk1OCw5LjU1Ny01MS43ODd2LTUgICAgYzAtMTYuNTQyLTEzLjQ1OC0zMC0zMC0zMHMtMzAsMTMuNDU4LTMwLDMwdjVjMCw0MS45MzYtMzAuNTM1LDc2Ljg1My03MC41MzQsODMuNzQzYzUuMjI0LTcuNzA1LDguMjc5LTE2Ljk5Myw4LjI3OS0yNi45ODIgICAgdi02Ljk0NmMwLTI2LjU4LTIxLjYyNS00OC4yMDUtNDguMjA1LTQ4LjIwNXMtNDguMjA0LDIxLjYyNS00OC4yMDQsNDguMjA1djYuOTQ2YzAsOS43MzUsMi45MSwxOC43OTksNy44OTMsMjYuMzg1ICAgIEM4OC45MjcsMTY0LDYwLDEyOS44Miw2MCw4OXYtNWMwLTE2LjU0Mi0xMy40NTgtMzAtMzAtMzBTMCw2Ny40NTgsMCw4NHY1YzAsMzIuMTA2LDEwLjMyMiw2Mi41NDgsMjkuODQ5LDg4LjAzMyAgICBjMTcuMzQ0LDIyLjYzNSw0MS4zMDksMzkuODc1LDY4LjA3OSw0OS4xMThWMzI5LjUzYzAsNS41MjIsNC40NzcsMTAsMTAsMTBoMS44MjZWNTAyYzAsNS41MjIsNC40NzcsMTAsMTAsMTAgICAgYzUuNTIzLDAsMTAtNC40NzgsMTAtMTBWMzM5LjUzaDY2Ljk2YzIuMTg2LDMuMzk5LDQuNTIxLDYuNzI2LDcuMDA4LDkuOTcyYzAuNjYyLDAuODY0LDEuMzUxLDEuNzA0LDIuMDMyLDIuNTUyVjUwMiAgICBjMCw1LjUyMiw0LjQ3NywxMCwxMCwxMGM1LjUyMywwLDEwLTQuNDc4LDEwLTEwVjM3Mi40OWMxMy42MjUsMTEuNDE5LDI5LjI4NiwyMC4zNDIsNDYuMDQ3LDI2LjEzVjUwMmMwLDUuNTIyLDQuNDc3LDEwLDEwLDEwICAgIHMxMC00LjQ3OCwxMC0xMFYzOTEuMjkyYzAtNC40NjQtMi45NTgtOC4zODgtNy4yNS05LjYxNGMtNTMuMzktMTUuMjY5LTkwLjY3OC02NC42OTktOTAuNjc4LTEyMC4yMDh2LTUuMDAxICAgIGMwLTUuNTE0LDQuNDg2LTkuOTk5LDEwLTkuOTk5YzUuNTE0LDAsMTAsNC40ODUsMTAsOS45OTl2NS4wMDFjMCw1Ny44OTcsNDcuMTAzLDEwNSwxMDUsMTA1SDM2N2M1Ny44OTcsMCwxMDUtNDcuMTAzLDEwNS0xMDUgICAgdi01LjAwMWMwLTUuNTE0LDQuNDg2LTkuOTk5LDEwLTkuOTk5YzUuNTE0LDAsMTAsNC40ODUsMTAsOS45OTl2NS4wMDFjMCw1Ni41MzQtMzguMTUyLDEwNi4yMDUtOTIuNzc4LDEyMC43OTEgICAgYy00LjM3NiwxLjE2OC03LjQyLDUuMTMyLTcuNDIsOS42NjF2NzIuNDExYzAsNS41MjIsNC40NzcsMTAsMTAsMTBzMTAtNC40NzgsMTAtMTBWMzk5LjM5ICAgIEM0NzEuMTc2LDM4MC4xMDEsNTEyLDMyNC40NTksNTEyLDI2MS40N3YtNS4wMDFDNTEyLDIzOS45MjgsNDk4LjU0MiwyMjYuNDcsNDgyLDIyNi40N3ogTTEzOS40NjMsMTM4LjgxNCAgICBjMC0xNS41NTMsMTIuNjUyLTI4LjIwNSwyOC4yMDQtMjguMjA1czI4LjIwNSwxMi42NTIsMjguMjA1LDI4LjIwNXY2Ljk0NmMwLDE1LjU1Mi0xMi42NTIsMjguMjA0LTI4LjIwNSwyOC4yMDQgICAgYy0xNS41NTIsMC0yOC4yMDQtMTIuNjUyLTI4LjIwNC0yOC4yMDRWMTM4LjgxNHogTTM2OS43NDUsMzE4LjIyOWMwLDE1LjU1Mi0xMi42NTIsMjguMjA0LTI4LjIwNSwyOC4yMDQgICAgYy0xNS41NTIsMC0yOC4yMDQtMTIuNjUyLTI4LjIwNC0yOC4yMDR2LTYuOTQ2YzAtMTUuNTUyLDEyLjY1Mi0yOC4yMDQsMjguMjA0LTI4LjIwNHMyOC4yMDUsMTIuNjUyLDI4LjIwNSwyOC4yMDRWMzE4LjIyOXoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiIHN0eWxlPSJmaWxsOiNGRkZGRkYiPjwvcGF0aD4KCTwvZz4KPC9nPjxnPgoJPGc+CgkJPHBhdGggZD0iTTQwOC44Nyw0OTQuOTNjLTEuODYtMS44NjEtNC40NC0yLjkzLTcuMDctMi45M3MtNS4yMSwxLjA2OS03LjA3LDIuOTNjLTEuODYsMS44Ni0yLjkzLDQuNDQtMi45Myw3LjA3ICAgIHMxLjA3LDUuMjEsMi45Myw3LjA2OWMxLjg2LDEuODYsNC40NCwyLjkzMSw3LjA3LDIuOTMxczUuMjEtMS4wNyw3LjA3LTIuOTMxYzEuODYtMS44NTksMi45My00LjQzOSwyLjkzLTcuMDY5ICAgIFM0MTAuNzMsNDk2Ljc5LDQwOC44Nyw0OTQuOTN6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIiBzdHlsZT0iZmlsbDojRkZGRkZGIj48L3BhdGg+Cgk8L2c+CjwvZz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0xNjcuNjY3LDM3NGMtNS41MjMsMC0xMCw0LjQ3OC0xMCwxMHYxMThjMCw1LjUyMiw0LjQ3NywxMCwxMCwxMGM1LjUyMywwLDEwLTQuNDc4LDEwLTEwVjM4NCAgICBDMTc3LjY2NywzNzguNDc4LDE3My4xOSwzNzQsMTY3LjY2NywzNzR6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIiBzdHlsZT0iZmlsbDojRkZGRkZGIj48L3BhdGg+Cgk8L2c+CjwvZz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00NjYsODJjLTUuNTIzLDAtMTAsNC40NzgtMTAsMTB2MTIuNDNjMCw1LjUyMiw0LjQ3NywxMCwxMCwxMHMxMC00LjQ3OCwxMC0xMFY5MkM0NzYsODYuNDc4LDQ3MS41MjMsODIsNDY2LDgyeiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCIgc3R5bGU9ImZpbGw6I0ZGRkZGRiI+PC9wYXRoPgoJPC9nPgo8L2c+PGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDY2LDE0MS41N2MtNS41MjMsMC0xMCw0LjQ3OC0xMCwxMFYxNjRjMCw1LjUyMiw0LjQ3NywxMCwxMCwxMHMxMC00LjQ3OCwxMC0xMHYtMTIuNDMgICAgQzQ3NiwxNDYuMDQ4LDQ3MS41MjMsMTQxLjU3LDQ2NiwxNDEuNTd6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIiBzdHlsZT0iZmlsbDojRkZGRkZGIj48L3BhdGg+Cgk8L2c+CjwvZz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik01MDIsMTE4aC0xMi40M2MtNS41MjMsMC0xMCw0LjQ3OC0xMCwxMGMwLDUuNTIyLDQuNDc3LDEwLDEwLDEwSDUwMmM1LjUyMywwLDEwLTQuNDc4LDEwLTEwICAgIEM1MTIsMTIyLjQ3OCw1MDcuNTIzLDExOCw1MDIsMTE4eiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCIgc3R5bGU9ImZpbGw6I0ZGRkZGRiI+PC9wYXRoPgoJPC9nPgo8L2c+PGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDQyLjQzLDExOEg0MzBjLTUuNTIzLDAtMTAsNC40NzgtMTAsMTBjMCw1LjUyMiw0LjQ3NywxMCwxMCwxMGgxMi40M2M1LjUyMywwLDEwLTQuNDc4LDEwLTEwICAgIEM0NTIuNDMsMTIyLjQ3OCw0NDcuOTUzLDExOCw0NDIuNDMsMTE4eiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCIgc3R5bGU9ImZpbGw6I0ZGRkZGRiI+PC9wYXRoPgoJPC9nPgo8L2c+PGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjE5Ljg3MywwYy01LjUyMywwLTEwLDQuNDc4LTEwLDEwdjEyLjQzYzAsNS41MjIsNC40NzcsMTAsMTAsMTBjNS41MjMsMCwxMC00LjQ3OCwxMC0xMFYxMCAgICBDMjI5Ljg3Myw0LjQ3OCwyMjUuMzk2LDAsMjE5Ljg3MywweiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCIgc3R5bGU9ImZpbGw6I0ZGRkZGRiI+PC9wYXRoPgoJPC9nPgo8L2c+PGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjE5Ljg3Myw1OS41N2MtNS41MjMsMC0xMCw0LjQ3OC0xMCwxMFY4MmMwLDUuNTIyLDQuNDc3LDEwLDEwLDEwYzUuNTIzLDAsMTAtNC40NzgsMTAtMTBWNjkuNTcgICAgQzIyOS44NzMsNjQuMDQ4LDIyNS4zOTYsNTkuNTcsMjE5Ljg3Myw1OS41N3oiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiIHN0eWxlPSJmaWxsOiNGRkZGRkYiPjwvcGF0aD4KCTwvZz4KPC9nPjxnPgoJPGc+CgkJPHBhdGggZD0iTTI1NS44NzMsMzZoLTEyLjQzYy01LjUyMywwLTEwLDQuNDc4LTEwLDEwczQuNDc3LDEwLDEwLDEwaDEyLjQzYzUuNTIzLDAsMTAtNC40NzgsMTAtMTBTMjYxLjM5NiwzNiwyNTUuODczLDM2eiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCIgc3R5bGU9ImZpbGw6I0ZGRkZGRiI+PC9wYXRoPgoJPC9nPgo8L2c+PGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMTk2LjMwMywzNmgtMTIuNDNjLTUuNTIzLDAtMTAsNC40NzgtMTAsMTBzNC40NzcsMTAsMTAsMTBoMTIuNDNjNS41MjMsMCwxMC00LjQ3OCwxMC0xMFMyMDEuODI2LDM2LDE5Ni4zMDMsMzZ6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIiBzdHlsZT0iZmlsbDojRkZGRkZGIj48L3BhdGg+Cgk8L2c+CjwvZz48L2c+IDwvc3ZnPg==" />                        <div class="count">
                            <div class="start-count">329</div>
                            <h4>متعافي</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="counter-col text-center">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNTggNTgiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDU4IDU4OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMiIgaGVpZ2h0PSI1MTIiIGNsYXNzPSIiPjxnPjxnPgoJPHBhdGggZD0iTTQyLjg5OSw0LjVjLTAuNDY1LTIuMjc5LTIuNDg0LTQtNC44OTktNGMtMC41NTMsMC0xLDAuNDQ3LTEsMXMwLjQ0NywxLDEsMWMxLjY1NCwwLDMsMS4zNDYsMywzcy0xLjM0NiwzLTMsMyAgIGMtMC41NTMsMC0xLDAuNDQ3LTEsMXMwLjQ0NywxLDEsMWMyLjQxNCwwLDQuNDM0LTEuNzIxLDQuODk5LTRINTZ2OUgydi05aDE0aDNjMC41NTMsMCwxLTAuNDQ3LDEtMXMtMC40NDctMS0xLTFoLTEuODE2ICAgYzAuNDE0LTEuMTYyLDEuNTE0LTIsMi44MTYtMmMxLjY1NCwwLDMsMS4zNDYsMywzcy0xLjM0NiwzLTMsM2MtMC41NTMsMC0xLDAuNDQ3LTEsMXMwLjQ0NywxLDEsMWMyLjc1NywwLDUtMi4yNDMsNS01ICAgcy0yLjI0My01LTUtNWMtMi40MTQsMC00LjQzNCwxLjcyMS00Ljg5OSw0SDB2MTN2NDBoNTh2LTQwdi0xM0g0Mi44OTl6IE01Niw1NS41SDJ2LTM4aDU0VjU1LjV6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGRkZGRkYiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L3BhdGg+Cgk8cGF0aCBkPSJNMjYsMi41YzEuNjU0LDAsMywxLjM0NiwzLDNzLTEuMzQ2LDMtMywzYy0wLjU1MywwLTEsMC40NDctMSwxczAuNDQ3LDEsMSwxYzIuNzU3LDAsNS0yLjI0Myw1LTVzLTIuMjQzLTUtNS01ICAgYy0wLjU1MywwLTEsMC40NDctMSwxUzI1LjQ0NywyLjUsMjYsMi41eiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojRkZGRkZGIiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCI+PC9wYXRoPgoJPHBhdGggZD0iTTMyLDIuNWMxLjY1NCwwLDMsMS4zNDYsMywzcy0xLjM0NiwzLTMsM2MtMC41NTMsMC0xLDAuNDQ3LTEsMXMwLjQ0NywxLDEsMWMyLjc1NywwLDUtMi4yNDMsNS01cy0yLjI0My01LTUtNSAgIGMtMC41NTMsMC0xLDAuNDQ3LTEsMVMzMS40NDcsMi41LDMyLDIuNXoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6I0ZGRkZGRiIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvcGF0aD4KCTxjaXJjbGUgY3g9IjIyIiBjeT0iMjQuNSIgcj0iMSIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojRkZGRkZGIiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCI+PC9jaXJjbGU+Cgk8Y2lyY2xlIGN4PSIyOSIgY3k9IjI0LjUiIHI9IjEiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6I0ZGRkZGRiIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvY2lyY2xlPgoJPGNpcmNsZSBjeD0iMzYiIGN5PSIyNC41IiByPSIxIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGRkZGRkYiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L2NpcmNsZT4KCTxjaXJjbGUgY3g9IjQzIiBjeT0iMjQuNSIgcj0iMSIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojRkZGRkZGIiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCI+PC9jaXJjbGU+Cgk8Y2lyY2xlIGN4PSI1MCIgY3k9IjI0LjUiIHI9IjEiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6I0ZGRkZGRiIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvY2lyY2xlPgoJPGNpcmNsZSBjeD0iOCIgY3k9IjMyLjUiIHI9IjEiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6I0ZGRkZGRiIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvY2lyY2xlPgoJPGNpcmNsZSBjeD0iMTUiIGN5PSIzMi41IiByPSIxIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGRkZGRkYiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L2NpcmNsZT4KCTxjaXJjbGUgY3g9IjIyIiBjeT0iMzIuNSIgcj0iMSIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojRkZGRkZGIiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCI+PC9jaXJjbGU+Cgk8Y2lyY2xlIGN4PSIyOSIgY3k9IjMyLjUiIHI9IjEiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6I0ZGRkZGRiIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvY2lyY2xlPgoJPGNpcmNsZSBjeD0iMzYiIGN5PSIzMi41IiByPSIxIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGRkZGRkYiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L2NpcmNsZT4KCTxjaXJjbGUgY3g9IjQzIiBjeT0iMzIuNSIgcj0iMSIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojRkZGRkZGIiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCI+PC9jaXJjbGU+Cgk8Y2lyY2xlIGN4PSI1MCIgY3k9IjMyLjUiIHI9IjEiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6I0ZGRkZGRiIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvY2lyY2xlPgoJPGNpcmNsZSBjeD0iOCIgY3k9IjM5LjUiIHI9IjEiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6I0ZGRkZGRiIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvY2lyY2xlPgoJPGNpcmNsZSBjeD0iMTUiIGN5PSIzOS41IiByPSIxIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGRkZGRkYiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L2NpcmNsZT4KCTxjaXJjbGUgY3g9IjIyIiBjeT0iMzkuNSIgcj0iMSIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojRkZGRkZGIiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCI+PC9jaXJjbGU+Cgk8Y2lyY2xlIGN4PSIyOSIgY3k9IjM5LjUiIHI9IjEiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6I0ZGRkZGRiIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvY2lyY2xlPgoJPGNpcmNsZSBjeD0iMzYiIGN5PSIzOS41IiByPSIxIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGRkZGRkYiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L2NpcmNsZT4KCTxjaXJjbGUgY3g9IjQzIiBjeT0iMzkuNSIgcj0iMSIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojRkZGRkZGIiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCI+PC9jaXJjbGU+Cgk8Y2lyY2xlIGN4PSI1MCIgY3k9IjM5LjUiIHI9IjEiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6I0ZGRkZGRiIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvY2lyY2xlPgoJPGNpcmNsZSBjeD0iOCIgY3k9IjQ3LjUiIHI9IjEiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6I0ZGRkZGRiIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvY2lyY2xlPgoJPGNpcmNsZSBjeD0iMTUiIGN5PSI0Ny41IiByPSIxIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGRkZGRkYiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L2NpcmNsZT4KCTxjaXJjbGUgY3g9IjIyIiBjeT0iNDcuNSIgcj0iMSIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojRkZGRkZGIiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCI+PC9jaXJjbGU+Cgk8Y2lyY2xlIGN4PSIyOSIgY3k9IjQ3LjUiIHI9IjEiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6I0ZGRkZGRiIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvY2lyY2xlPgoJPGNpcmNsZSBjeD0iMzYiIGN5PSI0Ny41IiByPSIxIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGRkZGRkYiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L2NpcmNsZT4KPC9nPjwvZz4gPC9zdmc+" />                        <div class="count">
                            <div class="start-count">4</div>
                            <h4>سنوات خبره</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="counter-col text-center">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIj48Zz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00ODIuNzI2LDQ4NS43ODNsLTIyLjY1LTEzMi42MDNjLTIuNDQxLTE0LjI4Ny0xMi41NzYtMjUuNzY0LTI2LjQ1My0yOS45NWwtNjEuMDkyLTE4LjQzMyAgICBjLTEuMjY1LTE0LjkzNC03LjM4OC0yOS4wMjMtMTcuNTc4LTQwLjE3NWMtOC4xNTEtOC45Mi0xOC40MDMtMTUuNDE1LTI5LjcwNC0xOC45OTljMS45MzQtMi4xNDYsMy43MjctNC4yODUsNS4zNzItNi4zNzcgICAgYzE0LjUyOC0xOC40NzcsMjIuMzA2LTM4LjgzMywyNC4yODYtNTIuNzI0aDQuNzEzYzEyLjI1OCwwLDIyLjIzMS05Ljk3MiwyMi4yMzEtMjIuMjMxdi0xMS4zOTYgICAgYzAtOC4xODEtNC42MDItMTUuNTk0LTExLjUyMy0xOS40NDFWMTA2LjA1YzAtNC4xNDEtMy4zNTctNy40OTgtNy40OTgtNy40OThzLTcuNDk3LDMuMzU2LTcuNDk3LDcuNDk4djMwLjc2NCAgICBjLTIuOTIsMC41MDctNi40MDQsMS4zODMtOS45NjgsMi44ODRjLTAuMzY1LDAuMTMzLTAuNzIsMC4yODctMS4wNTYsMC40NzJjLTAuODA1LDAuMzY3LTEuNjExLDAuNzU0LTIuNDE0LDEuMTlWODAuOTM4ICAgIGMwLTE2LjY5My0xMy41OC0zMC4yNzMtMzAuMjczLTMwLjI3M2gtMjAuNjk1Yy03LjEzOCwwLTE0LjExMSwyLjQ4Ny0xOS42MzcsNy4wMDVsLTIuMDMxLDEuNjZjLTMuNzMsMy4wNS04LjQzOCw0LjczLTEzLjI1Nyw0LjczICAgIGMtNC44MTksMC05LjUyOC0xLjY4LTEzLjI1OC00LjczbC0yLjAzLTEuNjZjLTUuNTI2LTQuNTE3LTEyLjQ5OS03LjAwNS0xOS42MzctNy4wMDVIMjAwLjM4ICAgIGMtMTYuNjkzLDAtMzAuMjczLDEzLjU4LTMwLjI3MywzMC4yNzN2NjAuNDIyYy0wLjgwMy0wLjQzNi0xLjYwOS0wLjgyMy0yLjQxNC0xLjE5Yy0wLjMzNi0wLjE4NS0wLjY5LTAuMzM5LTEuMDU1LTAuNDcyICAgIGMtMy41NjQtMS41MDEtNy4wNDktMi4zNzctOS45NjgtMi44ODRWNTkuMDI1YzAtMjQuMjc4LDE5Ljc1Mi00NC4wMyw0NC4wMy00NC4wM2gxMTAuNjAxYzI0LjI3OSwwLDQ0LjAzLDE5Ljc1Miw0NC4wMyw0NC4wMyAgICB2MTEuNzg2YzAsNC4xNDEsMy4zNTcsNy40OTgsNy40OTcsNy40OThzNy40OTgtMy4zNTYsNy40OTgtNy40OThWNTkuMDI1QzM3MC4zMjYsMjYuNDc5LDM0My44NDcsMCwzMTEuMzAxLDBIMjAwLjcgICAgYy0zMi41NDcsMC01OS4wMjUsMjYuNDc5LTU5LjAyNSw1OS4wMjV2NzQuNDNjLTYuOTIxLDMuODQ3LTExLjUyMywxMS4yNTktMTEuNTIzLDE5LjQ0MXYxMS4zOTYgICAgYzAsMTIuMjU5LDkuOTczLDIyLjIzMSwyMi4yMzEsMjIuMjMxaDQuNzEzYzEuOTc5LDEzLjg5MSw5Ljc1OCwzNC4yNDcsMjQuMjg2LDUyLjcyNGMxLjY0MywyLjA5LDMuNDM1LDQuMjI3LDUuMzY3LDYuMzcxICAgIGMtMjUuOTgsOC4yNTItNDQuOTI2LDMxLjYxLTQ3LjI3Nyw1OS4xNzlMNzguMzc4LDMyMy4yM2MtMTMuODc3LDQuMTg2LTI0LjAxMywxNS42NjMtMjYuNDUzLDI5Ljk1bC05LjE5OCw1My44NDkgICAgYy0wLjY5Nyw0LjA4MiwyLjA0Nyw3Ljk1NSw2LjEyOCw4LjY1MmM0LjA4LDAuNjk5LDcuOTU1LTIuMDQ2LDguNjUzLTYuMTI4bDkuMTk4LTUzLjg0OWMxLjQ3Ni04LjY0NCw3LjYwOC0xNS41ODYsMTYuMDAzLTE4LjExOCAgICBsNTYuNTA1LTE3LjA0OXYxNC44MzFjLTEyLjk1MiwyLjM4NC0yMy45NzMsMTEuMjgxLTI4LjUxMiwyMy42MDhjLTEuMjA1LDMuMjcyLTEuOTU0LDYuNjk4LTIuMjI2LDEwLjE4MmwtNS40NjEsNzAuMDk1ICAgIGMtMC40MTIsNS4yOCwxLjQxNSwxMC41MzgsNS4wMSwxNC40MjNjMy41OTUsMy44ODYsOC42OTQsNi4xMTYsMTMuOTg5LDYuMTE2aDkuMzQ4YzQuMTQxLDAsNy40OTgtMy4zNTYsNy40OTgtNy40OTggICAgYzAtNC4xNDItMy4zNTctNy40OTctNy40OTgtNy40OTdoLTkuMzQ4Yy0xLjEyOSwwLTIuMjE1LTAuNDc0LTIuOTgyLTEuMzA0Yy0wLjc2Ni0wLjgyOC0xLjE1NS0xLjk0OC0xLjA2Ny0zLjA3M2w1LjQ2MS03MC4wOTYgICAgYzAuMTY1LTIuMTExLDAuNjE4LTQuMTg2LDEuMzQ4LTYuMTY3YzMuMTU4LTguNTc1LDExLjY4Ni0xNC4zODIsMjEuMjIzLTE0LjQ0OWwxLjIzNS0wLjAwOWMwLjA1OC0wLjAwMSwwLjExNS0wLjAwMSwwLjE3Mi0wLjAwMSAgICBjOS4yNjksMCwxNy40NzQsNS4yNTYsMjAuOTM1LDEzLjQyN2MwLjk3MSwyLjI5MSwxLjU2MSw0LjcxMywxLjc1NSw3LjE5OWw1LjQ2Myw3MC4wOTdjMC4wODcsMS4xMjQtMC4zMDIsMi4yNDQtMS4wNjgsMy4wNzMgICAgYy0wLjc2NiwwLjgyOC0xLjg1MywxLjMwMy0yLjk4MiwxLjMwM2gtOS4zNDhjLTQuMTQxLDAtNy40OTgsMy4zNTYtNy40OTgsNy40OTdjMCw0LjE0MSwzLjM1Nyw3LjQ5OCw3LjQ5OCw3LjQ5OGg5LjM0OCAgICBjNS4yOTUsMCwxMC4zOTUtMi4yMjksMTMuOTg5LTYuMTE2YzMuNTk2LTMuODg3LDUuNDIzLTkuMTQ0LDUuMDExLTE0LjQyMmwtNS40NjMtNzAuMDk2Yy0wLjMyLTQuMTAyLTEuMjk1LTguMTAxLTIuODk4LTExLjg4NCAgICBjLTQuOTM5LTExLjY1Ny0xNS41LTE5Ljc2Mi0yNy45MzgtMjEuOTU1di0xOS4zMDZsMjUuNzc0LTcuNzc3YzIuMzQ1LDQuOTM5LDYuOTkyLDE1LjYxMiwxNi4xOTcsMzguNjE5ICAgIGM5LjI3NywyMy4yMTQsMjAuODA4LDUyLjk2OSwzMS44NjcsODEuODk1YzAuMDc5LDAuMjQzLDAuMTcsMC40OCwwLjI3MiwwLjcxMmM3LjM4LDE5LjMxMSwxNC41MzksMzguMjI1LDIwLjY2Miw1NC41NDEgICAgYzEuMDk4LDIuOTI2LDMuODk1LDQuODY0LDcuMDIsNC44NjRjMy4xMjUsMCw1LjkyMi0xLjkzOCw3LjAyLTQuODY0YzYuMTIyLTE2LjMxNiwxMy4yODEtMzUuMjMsMjAuNjYyLTU0LjU0MSAgICBjMC4xMDMtMC4yMzIsMC4xOTMtMC40NywwLjI3Mi0wLjcxMmMxMS4wNTEtMjguOTA5LDIyLjU3Ni01OC42NDUsMzEuODQ5LTgxLjg1MmM5LjIxNy0yMy4wMzcsMTMuODY4LTMzLjcxOSwxNi4yMTQtMzguNjYyICAgIGwyNS43NzQsNy43Nzd2NDQuMjg1Yy0xNy44NTgsMy40NjktMzEuMzg1LDE5LjIxOS0zMS4zODUsMzguMDc3YzAsMjEuMzkxLDE3LjQwMywzOC43OTUsMzguNzk1LDM4Ljc5NSAgICBjMjEuMzkyLDAsMzguNzk1LTE3LjQwMywzOC43OTUtMzguNzk1YzAtMTguNzk2LTEzLjQzOC0zNC41MDgtMzEuMjEtMzguMDQ1di0zOS43OTJsNTYuNTA2LDE3LjA0OSAgICBjOC4zOTUsMi41MzIsMTQuNTI2LDkuNDc0LDE2LjAwMywxOC4xMThsMjIuNjUsMTMyLjYwM2MwLjM3NiwyLjE5OS0wLjIwOSw0LjM0OS0xLjY0OCw2LjA1NGMtMS40MzgsMS43MDQtMy40NTksMi42NDQtNS42OSwyLjY0NCAgICBINTEuMzkzYy0yLjIzMSwwLTQuMjUxLTAuOTM5LTUuNjktMi42NDRjLTEuNDM4LTEuNzA1LTIuMDI0LTMuODU0LTEuNjQ4LTYuMDU0bDcuNDc1LTQzLjc2MmMwLjY5Ny00LjA4Mi0yLjA0Ny03Ljk1NS02LjEyOC04LjY1MiAgICBjLTQuMDgtMC43LTcuOTU1LDIuMDQ3LTguNjUzLDYuMTI4bC03LjQ3NSw0My43NjJjLTEuMTE1LDYuNTMyLDAuNjk2LDEzLjE4Myw0Ljk2OCwxOC4yNDhDMzguNTE2LDUwOS4wOTYsNDQuNzY3LDUxMiw1MS4zOTMsNTEyICAgIGg0MDkuMjE0YzYuNjI2LDAsMTIuODc4LTIuOTA0LDE3LjE1MS03Ljk2OUM0ODIuMDMsNDk4Ljk2Niw0ODMuODQxLDQ5Mi4zMTUsNDgyLjcyNiw0ODUuNzgzeiBNMzU1LjQyMSwxNTIuMDg5ICAgIGMzLjk5NS0wLjk5Niw3LjIwMi0wLjk3OCw3LjIzOC0wLjk3N2MxLjI5MiwwLjAxNywyLjU0OC0wLjI4NSwzLjY2NC0wLjg3YzAuMzM0LDAuODMxLDAuNTMxLDEuNzI0LDAuNTMxLDIuNjU0djExLjM5NiAgICBjMCwzLjk5LTMuMjQ2LDcuMjM2LTcuMjM2LDcuMjM2aC00LjE5N1YxNTIuMDg5eiBNMTU2LjU3OSwxNzEuNTI4TDE1Ni41NzksMTcxLjUyOGgtNC4xOTdjLTMuOTksMC03LjIzNi0zLjI0Ni03LjIzNi03LjIzNiAgICB2LTExLjM5NmMwLTAuOTMsMC4xOTgtMS44MjMsMC41MzEtMi42NTNjMS4xMTUsMC41ODUsMi4zNzEsMC44ODcsMy42NjQsMC44NjljMC4wNTcsMC4wMSwzLjI1NS0wLjAwOCw3LjIzOCwwLjk4MVYxNzEuNTI4eiAgICAgTTE3MS41NzQsMTc5LjkzNXYtMTkuNjk4YzIuMjcyLDAuNjgxLDQuNzU3LDAuNTg4LDcuMDUxLTAuMzY5YzMuOTM1LTEuNjQyLDYuNDc3LTUuNDU1LDYuNDc3LTkuNzE2VjgwLjkzOCAgICBjMC04LjQyNCw2Ljg1NC0xNS4yNzgsMTUuMjc4LTE1LjI3OGgyMC42OTVjMy42ODgsMCw3LjI5MSwxLjI4NSwxMC4xNDYsMy42MTlsMi4wMywxLjY2YzYuNDAxLDUuMjM0LDE0LjQ4LDguMTE1LDIyLjc0OSw4LjExNSAgICBjOC4yNjksMCwxNi4zNDgtMi44ODIsMjIuNzQ5LTguMTE1bDIuMDMtMS42NmMyLjg1NC0yLjMzNCw2LjQ1OC0zLjYxOSwxMC4xNDYtMy42MTloMjAuNjk1YzguNDI0LDAsMTUuMjc4LDYuODU0LDE1LjI3OCwxNS4yNzggICAgdjY5LjIxNWMwLDQuMjYsMi41NDIsOC4wNzQsNi40NzcsOS43MTZjMS4zMTQsMC41NDgsMi42OSwwLjgxNCw0LjA1NCwwLjgxNGMxLjAxNywwLDIuMDI2LTAuMTQ5LDIuOTk3LTAuNDM5djE5LjY5MSAgICBjMCwxMC45NDctNy41NjgsMzIuMjA1LTIxLjU5NCw1MC4wNDNjLTQuNjQ2LDUuOTA5LTEwLjYxOCwxMi4yNTctMTcuOTcxLDE3LjgwNWMtMC4yMzMsMC4xNTYtMC40NTYsMC4zMjUtMC42NjksMC41MDUgICAgYy0xMS4zOTEsOC40MjItMjYuMDM4LDE0Ljg3NC00NC4xOTIsMTQuODc0cy0zMi44MDEtNi40NTItNDQuMTkzLTE0Ljg3NWMtMC4yMTMtMC4xNzktMC40MzUtMC4zNDgtMC42NjctMC41MDMgICAgYy03LjM1My01LjU0OS0xMy4zMjUtMTEuODk3LTE3Ljk3Mi0xNy44MDZDMTc5LjE0MywyMTIuMTQxLDE3MS41NzQsMTkwLjg4MiwxNzEuNTc0LDE3OS45MzV6IE0zMDUuMTIsMzAxLjA3TDI1NiwzMzcuNzg0ICAgIGwtNDkuMTItMzYuNzE0YzQuODcxLTYuMTkxLDcuNi0xNC4xMzgsNy42LTIxLjIzdi0xMi4wODZjMTEuNTUxLDYuMjEyLDI1LjMzNCwxMC40MDQsNDEuNTIsMTAuNDA0czI5Ljk3LTQuMTkyLDQxLjUyLTEwLjQwNCAgICB2MTIuMDg2QzI5Ny41MiwyODYuOTMyLDMwMC4yNDksMjk0Ljg3OSwzMDUuMTIsMzAxLjA3eiBNMTk0LjM2NywyOTIuNzAxYy00LjAwNC0xLjUyNS04LjQ0My0xLjc3NS0xMi42NDItMC42MzYgICAgYy0wLjE4NCwwLjA0My0wLjM2NCwwLjA5Mi0wLjUzOSwwLjE0NGwtMjUuOTAzLDcuODE2YzQuMzgxLTIxLjU0MiwyMS44NzMtMzguNjg4LDQ0LjIwMi00Mi4wMDl2MjEuODI0ICAgIEMxOTkuNDg1LDI4NC41NDQsMTk3LjM4NSwyODkuNDA3LDE5NC4zNjcsMjkyLjcwMXogTTIxNC43MTYsMzUyLjg4OWMtMC4wMTQtMC4wMzUtMC4wMjgtMC4wNy0wLjA0MS0wLjEwNCAgICBjLTAuMzgtMC45NjEtMC43NTUtMS45MDktMS4xMjctMi44NDZjLTAuMDY3LTAuMTctMC4xMzQtMC4zMzktMC4yMDEtMC41MDdjLTAuMzY0LTAuOTE3LTAuNzI1LTEuODI3LTEuMDgxLTIuNzIyICAgIGMtMC4wMjUtMC4wNjMtMC4wNS0wLjEyNS0wLjA3NS0wLjE4OWMtMS4xMTEtMi43OTMtMi4xODItNS40NzItMy4yMTItOC4wMzljLTAuMDc1LTAuMTg2LTAuMTUtMC4zNzUtMC4yMjUtMC41NiAgICBjLTAuMjk2LTAuNzM2LTAuNTg3LTEuNDYxLTAuODc2LTIuMTc3Yy0wLjEwNi0wLjI2My0wLjIxMS0wLjUyMy0wLjMxNi0wLjc4M2MtMC4yOC0wLjY5NC0wLjU1OC0xLjM4NC0wLjgzMi0yLjA1OSAgICBjLTAuMDgyLTAuMjAyLTAuMTYyLTAuMzk4LTAuMjQzLTAuNTk5Yy0wLjQ5Ny0xLjIyNi0wLjk4My0yLjQyMS0xLjQ1Ny0zLjU4NmMtMC4xMjgtMC4zMTUtMC4yNTktMC42MzYtMC4zODYtMC45NDcgICAgYy0wLjE4Ni0wLjQ1NC0wLjM2Ny0wLjg5Ni0wLjU0OS0xLjM0MWMtMC4xOTYtMC40OC0wLjM5Mi0wLjk1Ni0wLjU4NC0xLjQyNGMtMC4wNzItMC4xNzUtMC4xNDctMC4zNi0wLjIxOS0wLjUzNCAgICBjLTAuMDU4LTAuMTQtMC4xMTEtMC4yNjktMC4xNjgtMC40MDhjLTAuODY2LTIuMTA0LTEuNjg5LTQuMDg3LTIuNDctNS45NTJjLTAuMDA2LTAuMDE1LTAuMDEzLTAuMDMtMC4wMTktMC4wNDUgICAgYy0wLjQxNi0wLjk5My0wLjgyMy0xLjk2My0xLjIxNC0yLjg4N2MtMC4yMDMtMC40NzktMC40MDMtMC45NS0wLjU5OS0xLjQxMmw0Mi4yNDUsMzEuNTc0bC0xNy42NTIsNy40OTkgICAgYy0wLjAzMSwwLjAxMy0wLjA2MywwLjAyNi0wLjA5NCwwLjA0bC03LjM3LDMuMTMxQzIxNS41MzMsMzU0Ljk1NSwyMTUuMTI0LDM1My45MTksMjE0LjcxNiwzNTIuODg5eiBNMjMyLjYwNiwzOTguNzk3ICAgIGMtMS40ODEtMy44NDMtMi45NzMtNy43MDgtNC40NjgtMTEuNTY5Yy0yLjMzOC02LjAzOS00LjU3MS0xMS43ODEtNi43MDgtMTcuMjUxbDIuNzk4LTEuMTg5bDExLjQzMiwxMy4yODlMMjMyLjYwNiwzOTguNzk3eiAgICAgTTI1Ni4xNDUsNDU5LjczNWMtMC4yMTUtMC40NDYtMC40NzEtMC44NjctMC43NjctMS4yNTljLTMuMzg4LTguOTU1LTcuNjg4LTIwLjI4Ni0xMi40NDctMzIuNzUzbDctMzguMzI1aDEyLjEzOGw3LDM4LjMyNSAgICBDMjY0LjA4Miw0MzguNzg0LDI1OS42MDMsNDUwLjU5NCwyNTYuMTQ1LDQ1OS43MzV6IE0yNjQuODgxLDM3Mi40MDRoLTE3Ljc2MmwtOC40MDUtOS43N0wyNTYsMzU1LjI5MWwxNy4yODYsNy4zNDMgICAgTDI2NC44ODEsMzcyLjQwNHogTTI4My44NjIsMzg3LjIyOGMtMS40OTUsMy44NjEtMi45ODcsNy43MjYtNC40NjgsMTEuNTY5bC0zLjA1NC0xNi43MjFsMTEuNDMyLTEzLjI4OWwyLjc5OCwxLjE4OSAgICBDMjg4LjQzMywzNzUuNDQ2LDI4Ni4yLDM4MS4xODksMjgzLjg2MiwzODcuMjI4eiBNMzEyLjU4LDMxNS4xOGMtMC4zNzEsMC44NzYtMC43NTcsMS43OTUtMS4xNSwyLjczMyAgICBjLTAuMDUxLDAuMTIyLTAuMTAzLDAuMjQ1LTAuMTU0LDAuMzY4Yy0wLjM4OSwwLjkzLTAuNzg1LDEuODgtMS4xOTUsMi44NjljLTAuMDI3LDAuMDY1LTAuMDU1LDAuMTM0LTAuMDgyLDAuMiAgICBjLTAuMzU0LDAuODUzLTAuNzE3LDEuNzMzLTEuMDg2LDIuNjNjLTAuMDY5LDAuMTY4LTAuMTM0LDAuMzIzLTAuMjAzLDAuNDkyYy0wLjA4MiwwLjIwMS0wLjE3LDAuNDE0LTAuMjUzLDAuNjE3ICAgIGMtMC4xNjQsMC40LTAuMzMxLDAuODA4LTAuNDk5LDEuMjE2Yy0wLjIwNiwwLjUwMy0wLjQxMSwxLjAwNC0wLjYyMiwxLjUxOWMtMC4wNjcsMC4xNjQtMC4xMzYsMC4zMzUtMC4yMDQsMC41ICAgIGMtMC41MjIsMS4yNzktMS4wNTgsMi41OTctMS42MDYsMy45NTFjLTAuMDg2LDAuMjEyLTAuMTcxLDAuNDItMC4yNTcsMC42MzVjLTAuMjcxLDAuNjY5LTAuNTQ3LDEuMzUyLTAuODI0LDIuMDM5ICAgIGMtMC4xMDgsMC4yNjktMC4yMTcsMC41MzctMC4zMjYsMC44MDljLTAuMjg2LDAuNzA5LTAuNTc1LDEuNDI3LTAuODY3LDIuMTU1Yy0wLjA4MiwwLjIwMy0wLjE2NSwwLjQxMS0wLjI0NywwLjYxNSAgICBjLTEuMDE3LDIuNTMyLTIuMDcyLDUuMTczLTMuMTY3LDcuOTI1Yy0wLjAzNiwwLjA5MS0wLjA3MiwwLjE4LTAuMTA4LDAuMjcyYy0wLjM1NCwwLjg4OS0wLjcxMiwxLjc5My0xLjA3NCwyLjcwNCAgICBjLTAuMDY3LDAuMTctMC4xMzUsMC4zNC0wLjIwMywwLjUxMWMtMC4zNzQsMC45NDItMC43NTEsMS44OTQtMS4xMzMsMi44NjFjLTAuMDA3LDAuMDE4LTAuMDE0LDAuMDM2LTAuMDIxLDAuMDUzICAgIGMtMC40MTIsMS4wNDItMC44MjYsMi4wOS0xLjI0OCwzLjE2bC03LjM3Ny0zLjEzNGMtMC4wMjYtMC4wMTEtMC4wNTItMC4wMjItMC4wNzctMC4wMzNsLTE3LjY2Mi03LjUwM2w0Mi4yNDUtMzEuNTc0ICAgIEMzMTIuOTgyLDMxNC4yMywzMTIuNzgyLDMxNC43LDMxMi41OCwzMTUuMTh6IE0zMzAuODE0LDI5Mi4yMWMtMC4wMDEsMC0wLjAwMy0wLjAwMS0wLjAwNC0wLjAwMSAgICBjLTAuMDA2LTAuMDAyLTAuMDEzLTAuMDAzLTAuMDE5LTAuMDA2Yy00LjM1LTEuMzA1LTguOTktMS4wODktMTMuMTU3LDAuNDk4Yy0zLjAxOS0zLjI5NC01LjExOC04LjE1Ny01LjExOC0xMi44NjF2LTIxLjgzNSAgICBjMjIuNDY5LDMuMzEyLDM5LjkwOCwyMC4yOTcsNDQuMjMyLDQyLjAyOUwzMzAuODE0LDI5Mi4yMXogTTM4OS4wMDEsMzk4LjM3NWMwLDEzLjEyNC0xMC42NzcsMjMuOC0yMy44LDIzLjggICAgcy0yMy44LTEwLjY3Ni0yMy44LTIzLjhjMC0xMy4xMjQsMTAuNjc3LTIzLjgsMjMuOC0yMy44UzM4OS4wMDEsMzg1LjI1MSwzODkuMDAxLDM5OC4zNzV6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGRkZGRkYiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L3BhdGg+Cgk8L2c+CjwvZz48L2c+IDwvc3ZnPg==" />                        <div class="count">
                            <div class="start-count">63</div>
                            <h4>طبيب</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="counter-col text-center">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDgwIDQ4MCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDgwIDQ4MDsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIiBjbGFzcz0iIj48Zz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00NzIsMjcyaC04di0yNGMtMC4wMjEtMTUuODg2LTkuNDQtMzAuMjU0LTI0LTM2LjYwOFY4OGMtMC4wMDItMy4xOC0xLjg4Ni02LjA1Ni00LjgtNy4zMjggICAgYzMuMTIxLTUuMDAyLDQuNzgzLTEwLjc3Niw0LjgtMTYuNjcyYzAtMTcuNjczLTE0LjMyNy0zMi0zMi0zMmMtMTcuNjczLDAtMzIsMTQuMzI3LTMyLDMyYzAuMDMzLDUuNjM0LDEuNTY5LDExLjE1Nyw0LjQ0OCwxNiAgICBIOTkuNTUyYzIuODc5LTQuODQzLDQuNDE1LTEwLjM2Niw0LjQ0OC0xNmMwLTE3LjY3My0xNC4zMjctMzItMzItMzJTNDAsNDYuMzI3LDQwLDY0YzAuMDE3LDUuODk2LDEuNjc5LDExLjY3LDQuOCwxNi42NzIgICAgQzQxLjg4Niw4MS45NDQsNDAuMDAyLDg0LjgyLDQwLDg4djEyMy4zOTJDMjUuNDQsMjE3Ljc0NiwxNi4wMjEsMjMyLjExNCwxNiwyNDh2MjRIOGMtNC40MTgsMC04LDMuNTgyLTgsOHYxMTIgICAgYzAsNC40MTgsMy41ODIsOCw4LDhoOHY0MGMwLDQuNDE4LDMuNTgyLDgsOCw4aDMyYzQuNDE4LDAsOC0zLjU4Miw4LTh2LTQwaDM1MnY0MGMwLDQuNDE4LDMuNTgyLDgsOCw4aDMyYzQuNDE4LDAsOC0zLjU4Miw4LTggICAgdi00MGg4YzQuNDE4LDAsOC0zLjU4Miw4LThWMjgwQzQ4MCwyNzUuNTgyLDQ3Ni40MTgsMjcyLDQ3MiwyNzJ6IE00MDgsNDhjOC44MzcsMCwxNiw3LjE2MywxNiwxNnMtNy4xNjMsMTYtMTYsMTYgICAgcy0xNi03LjE2My0xNi0xNlMzOTkuMTYzLDQ4LDQwOCw0OHogTTcyLDQ4YzguODM3LDAsMTYsNy4xNjMsMTYsMTZzLTcuMTYzLDE2LTE2LDE2cy0xNi03LjE2My0xNi0xNlM2My4xNjMsNDgsNzIsNDh6IE01Niw5NmgzNjggICAgdjExMmgtMzIuMjA4YzUuMjk0LTYuODgzLDguMTc5LTE1LjMxNiw4LjIwOC0yNHYtMTZjLTAuMDI2LTIyLjA4LTE3LjkyLTM5Ljk3NC00MC00MGgtNjRjLTIyLjA4LDAuMDI2LTM5Ljk3NCwxNy45Mi00MCw0MHYxNiAgICBjMC4wMjksOC42ODQsMi45MTQsMTcuMTE3LDguMjA4LDI0aC00OC40MTZjNS4yOTQtNi44ODMsOC4xNzktMTUuMzE2LDguMjA4LTI0di0xNmMtMC4wMjYtMjIuMDgtMTcuOTItMzkuOTc0LTQwLTQwaC02NCAgICBjLTIyLjA4LDAuMDI2LTM5Ljk3NCwxNy45Mi00MCw0MHYxNmMwLjAyOSw4LjY4NCwyLjkxNCwxNy4xMTcsOC4yMDgsMjRINTZWOTZ6IE0zODQsMTY4djE2YzAsMTMuMjU1LTEwLjc0NSwyNC0yNCwyNGgtNjQgICAgYy0xMy4yNTUsMC0yNC0xMC43NDUtMjQtMjR2LTE2YzAtMTMuMjU1LDEwLjc0NS0yNCwyNC0yNGg2NEMzNzMuMjU1LDE0NCwzODQsMTU0Ljc0NSwzODQsMTY4eiBNMjA4LDE2OHYxNiAgICBjMCwxMy4yNTUtMTAuNzQ1LDI0LTI0LDI0aC02NGMtMTMuMjU1LDAtMjQtMTAuNzQ1LTI0LTI0di0xNmMwLTEzLjI1NSwxMC43NDUtMjQsMjQtMjRoNjRDMTk3LjI1NSwxNDQsMjA4LDE1NC43NDUsMjA4LDE2OHogICAgIE0zMiwyNDhjMC0xMy4yNTUsMTAuNzQ1LTI0LDI0LTI0aDM2OGMxMy4yNTUsMCwyNCwxMC43NDUsMjQsMjR2MjRIMzJWMjQ4eiBNNDgsNDMySDMydi0zMmgxNlY0MzJ6IE00NDgsNDMyaC0xNnYtMzJoMTZWNDMyeiAgICAgTTQ2NCwzODRIMTZ2LTk2aDQ0OFYzODR6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIiBzdHlsZT0iZmlsbDojRkZGRkZGIj48L3BhdGg+Cgk8L2c+CjwvZz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik03MiwzNTJINDBjLTQuNDE4LDAtOCwzLjU4Mi04LDhzMy41ODIsOCw4LDhoMzJjNC40MTgsMCw4LTMuNTgyLDgtOFM3Ni40MTgsMzUyLDcyLDM1MnoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiIHN0eWxlPSJmaWxsOiNGRkZGRkYiPjwvcGF0aD4KCTwvZz4KPC9nPjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ0MCwzNTJIMTA0Yy00LjQxOCwwLTgsMy41ODItOCw4czMuNTgyLDgsOCw4aDMzNmM0LjQxOCwwLDgtMy41ODIsOC04UzQ0NC40MTgsMzUyLDQ0MCwzNTJ6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIiBzdHlsZT0iZmlsbDojRkZGRkZGIj48L3BhdGg+Cgk8L2c+CjwvZz48L2c+IDwvc3ZnPg==" />                        <div class="count">
                            <div class="start-count border-none">25</div>
                            <h4>سرير</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter end -->

    <!-- Testimonial start -->
    <section class="testimonial">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2>ما  <span class="color-defult"> يقوله </span> المتعافيين</h2>
                        <div class="line-border-center bg-defult"></div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="testimonial-carousel-one">
                            <div class="item">
                                <div class="testimonial-item text-center">
                                    <div class="testimonial-author">
                                        <div class="author-img">
                                            <img class="img-responsive" src="img\muser.png" alt="">
                                        </div>
                                        <h4>الاسم</h4>
                                        <h5>الوظيفة</h5>
                                    </div>
                                    <p>consectetur adipisicing elit. Nemo ex doloremque maiores quas, cumque commodi eaque molestiae in ratione nam obcaecati nihil provident illum eius sed ullam amet, expedita molestias iusto.</p> 
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-item text-center">
                                    <div class="testimonial-author">
                                        <div class="author-img">
                                            <img class="img-responsive" src="img\wuser.png" alt="">
                                        </div>
                                        <h4>الاسم</h4>
                                        <h5>الوظيفة</h5>
                                    </div>
                                    <p>consectetur adipisicing elit. Nemo ex doloremque maiores quas, cumque commodi eaque molestiae in ratione nam obcaecati nihil provident illum eius sed ullam amet, expedita molestias iusto.</p> 
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-item text-center">
                                    <div class="testimonial-author">
                                        <div class="author-img">
                                            <img class="img-responsive" src="img\muser.png" alt="">
                                        </div>
                                        <h4>الاسم</h4>
                                        <h5>الوظيفة</h5>
                                    </div>
                                    <p>consectetur adipisicing elit. Nemo ex doloremque maiores quas, cumque commodi eaque molestiae in ratione nam obcaecati nihil provident illum eius sed ullam amet, expedita molestias iusto.</p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial end -->
    
   <!-- blog start -->
    <section class="blog-area bg-f8">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2>اخر <span class="color-defult">المقالات</span></h2>
                        <div class="line-border-center bg-defult"></div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="blog-feature">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="blog-item style-1">
                                <div class="blog-date text-center">
                                    <i class="pe-7s-link"></i>
                                </div>
                                <div class="blog-img"><a href="#"><img src="img\blog\1.jpg" alt=""></a>
                                    <div class="blog-event-date">
                                        <h3>١٣ <small>يونيو</small></h3>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <a href="#"><h4>عنوان المقالة</h4></a>
                                    <p>بعض الكلمات الي تعبر عن المقالة او اختصار للمقالة.</p>
                                    <a href="#" class="btn btn-simple">اقرا المزيد</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="blog-item style-1">
                                <div class="blog-date text-center">
                                    <i class="pe-7s-link"></i>
                                </div>
                                <div class="blog-img"><a href="#"><img src="img\blog\2.jpg" alt=""></a>
                                    <div class="blog-event-date">
                                        <h3>١٣ <small>يونيو</small></h3>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <a href="#"><h4>عنوان المقالة</h4></a>
                                    <p>بعض الكلمات الي تعبر عن المقالة او اختصار للمقالة.</p>
                                    <a href="#" class="btn btn-simple">اقرا المزيد</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 center-block">
                            <div class="blog-item style-1">
                                <div class="blog-date text-center">
                                    <i class="pe-7s-link"></i>
                                </div>
                                <div class="blog-img"><a href="#"><img src="img\blog\3.jpg" alt=""></a>
                                    <div class="blog-event-date">
                                        <h3>١٣ <small>يونيو</small></h3>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <a href="#"><h4>عنوان المقالة</h4></a>
                                    <p>بعض الكلمات الي تعبر عن المقالة او اختصار للمقالة.</p>
                                    <a href="#" class="btn btn-simple">اقرا المزيد</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!-- blog end -->

   <?php   include_once 'footer.php';  ?>

  
    <a href="#" class="scrollup"><i class="pe-7s-up-arrow" aria-hidden="true"></i></a>
    <!-- jQuery -->
    <script type="text/javascript" src="js\jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="js\bootstrap.min.js"></script>
    <script src="https://cdn.rtlcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-B4D+9otHJ5PJZQbqWyDHJc6z6st5fX3r680CYa0Em9AUG6jqu5t473Y+1CTZQWZv" crossorigin="anonymous"></script>

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

