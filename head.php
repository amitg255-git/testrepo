<?php
include "conn.php";

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Career Samadhan</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Full Calender CSS -->
    <link href="css/fullcalendar.css" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <!-- Bx-Slider StyleSheet CSS -->
    <link href="css/jquery.bxslider.css" rel="stylesheet">
    <!-- Font Awesome StyleSheet CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- DL Menu CSS -->
    <link href="js/dl-menu/component.css" rel="stylesheet">
    <link href="svg/style.css" rel="stylesheet">
    <!-- Widget CSS -->
    <link href="css/widget.css" rel="stylesheet">
    <!-- Typography CSS -->
    <link href="css/typography.css" rel="stylesheet">
    <!-- Shortcodes CSS -->
    <link href="css/shortcodes.css" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="style.css" rel="stylesheet">
    <!-- Color CSS -->
    <link href="css/color.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- SELECT MENU -->
    <link href="css/selectric.css" rel="stylesheet">
    <!-- SIDE MENU -->
    <link rel="stylesheet" href="css/jquery.sidr.dark.css">
</head>
<style>
    .calls{
        animation: glow 1s infinite;
    }
  @keyframes glow {
    0% {
    transform: scale(1);
    box-shadow: 0 0 0 0 #c90404;
}

70% {
    transform: scale(1);
    box-shadow: 0 0 0 10px #0000;
}
100% {
    transform: scale(1);
    box-shadow: 0 0 #0000;
}
  }
    .btn {
  padding: 15px 30px;
  border: none;
  cursor: pointer;

  font-size: 16px;
  border-radius: var(--border-radius);
  transition: transform var(--transition-speed), box-shadow var(--transition-speed), background var(--transition-speed);
  position: relative;
  overflow: hidden;
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* 4. 3D Press */
.btn-3d {
    width: 180px;
    border-top-left-radius: 15px;
 
  /* box-shadow: 0 10px #f9c800; */
  /* transition: transform var(--transition-speed), box-shadow var(--transition-speed); */
}

.btn-3d:active {
  box-shadow: 0 4px #1b5e20;
  transform: translateY(6px);
}

</style>
<style>
    .dropdown .dropdown-menu {
        display: none;
    }

    .dropdown:hover>.dropdown-menu,
    .dropend:hover>.dropdown-menu {
        display: block;
        margin-top: 0.125em;
        margin-left: 0.125em;
    }

    @media screen and (min-width: 769px) {
        .dropend:hover>.dropdown-menu {
            position: absolute;
            top: 53;
            left:-5px;
        }

        .dropend .dropdown-toggle {
            margin-left: 0.5em;
        }
    }

    /* ???????????????????? dropdown end*/
    .logo_header {
        display: flex;
    }

    /* fixed social*/
    #fixed-social {
        position: fixed;
        top: 320px;
        z-index: 99;
        right: 5px;
    }

    #fixed-social a {
        color: #fff;
        display: block;
        height: 40px;
        position: relative;
        text-align: center;
        line-height: 40px;
        width: 40px;
        margin-bottom: 1px;
        z-index: 2;
    }

    #fixed-social a:hover>span {
        visibility: visible;
        right: 41px;
        opacity: 1;
    }

    #fixed-social a span {
        line-height: 40px;
        right: 60px;
        position: absolute;
        text-align: center;
        width: 120px;
        visibility: hidden;
        transition-duration: 0.5s;
        z-index: 1;
        opacity: 0;
    }

    .fixed-facebook {
        background-color: #fff;
    }

    .fixed-facebook span {
        background-color: #00AAE5;
    }

    .fixed-twitter {
        background-color: #fff;

    }

    .fixed-twitter span {
        background-color: #7D3895;
    }

    .fixed-gplus {
        background-color: #fff;

    }

    .fixed-gplus span {
        background-color: #00AF54;
    }

    .fixed-linkedin {
        background-color: #FFC41E;

    }

    .fixed-linkedin span {
        background-color: #FFC41E;
    }

    .fixed-instagrem {
        background-color: #ED2B29;

    }

    .fixed-instagrem span {
        background-color: #ED2B29;
    }

    .fixed-tumblr {
        background-color: #EB1471;

    }

    .fixed-tumblr span {
        background-color: #EB1471;
    }

    /*end fixed social*/
    /* ????????????????? */
    .flag_btn_left,
    .flag_btn_right {
        border: 0;
        padding: 0;
        margin: 0;
        border-radius: 50px;
        position: absolute;
        left: -15px;
        top: 58px;
        filter: drop-shadow(0px 4px 12px rgba(0, 0, 0, 0.25));
        background: #085B93;
        transition: 0.3s;
    }

    .flag_btn_left:hover,
    .flag_btn_right:hover {
        background: #c90404;
        transition: 0.3s;
    }

    .flag_btn_right {
        left: unset;
        right: -15px;
    }

    .flag_wrapper {
        scroll-behavior: smooth;
    }

    /* Update this color    */

    /* #c90404; */
    @media only screen and (max-width : 768px) {
        #fixed-social {

            top: 370px;

        }

        .flag_btn_left {
            top: -8px;
            left: unset;
            right: 50px;
            border: 3px solid #fff;
            filter: unset !important;
        }

        .flag_btn_right {
            top: -8px;
            left: unset;
            right: 15px;
            border: 3px solid #fff;
            filter: unset !important;
        }

        .logo_header {
            display: block;
        }
    }
</style>
<div id="fixed-social">
    <div>
        <a href="#" class="fixed-facebook" target="_blank"><img src="images/xxx.png" style="width: 30px;" alt=""> <span>Twitter</span></a>
    </div>
    <div>
        <a href="#" class="fixed-twitter" target="_blank"><img src="images/linkedin.png" style="width: 30px;" alt=""> <span>linkedin</span></a>
    </div>
    <div>
        <a href="#" class="fixed-gplus" target="_blank"><img src="images/fb.png" style="width: 30px;" alt=""> <span>Facebook</span></a>
    </div>
    <div>
        <a href="#" class="fixed-gplus" target="_blank"><img src="images/utube.webp" style="width: 30px;" alt=""> <span>Youtube</span></a>
    </div>


</div>

<body>
    <!--KF KODE WRAPPER WRAP START-->
    <div class="kode_wrapper">
        <!-- register Modal -->
        <div class="modal fade" id="reg-box" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-content">
                    <!--SIGNIN AS USER START-->
                    <div class="user-box">
                        <h2>Sign up as a User</h2>
                        <!--FORM FIELD START-->
                        <div class="form">
                            <div class="input-container">
                                <input type="text" placeholder="Name">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="input-container">
                                <input type="text" placeholder="E-mail">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="input-container">
                                <input type="password" placeholder="Password">
                                <i class="fa fa-unlock"></i>
                            </div>
                            <div class="input-container">
                                <label>
                                    <span class="radio">
                                        <input type="checkbox" name="foo" value="1" checked>
                                        <span class="radio-value" aria-hidden="true"></span>
                                    </span>
                                    <span>Remember me</span>
                                </label>
                            </div>
                            <div class="input-container">
                                <button class="btn-style">Sign Up</button>
                            </div>
                        </div>
                        <!--FORM FIELD END-->
                        <!--OPTION START-->
                        <div class="option">
                            <h5>Or Using</h5>
                        </div>
                        <!--OPTION END-->
                        <!--OPTION START-->
                        <div class="social-login">
                            <a href="#" class="google"><i class="fa fa-google-plus"></i>Google Account</a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i>Facebook Account</a>
                        </div>
                        <!--OPTION END-->
                    </div>
                    <!--SIGNIN AS USER END-->
                    <div class="user-box-footer">
                        Already have an account? <a href="#">Sign In</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- register Modal end-->

        <!-- SIGNIN MODEL START -->
        <div class="modal fade" id="signin-box" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-content">
                    <div class="user-box">
                        <h2>Sign In</h2>
                        <!--FORM FIELD START-->
                        <div class="form">
                            <div class="input-container">
                                <input type="text" placeholder="E-mail">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="input-container">
                                <input type="password" placeholder="Password">
                                <i class="fa fa-unlock"></i>
                            </div>
                            <div class="input-container">
                                <label>
                                    <span class="radio">
                                        <input type="checkbox" name="foo" value="1" checked>
                                        <span class="radio-value" aria-hidden="true"></span>
                                    </span>
                                    <span>Remember me</span>
                                </label>
                            </div>
                            <div class="input-container">
                                <button class="btn-style">Sign In</button>
                            </div>
                        </div>
                        <!--FORM FIELD END-->
                        <!--OPTION START-->
                        <div class="option">
                            <h5>Or Using</h5>
                        </div>
                        <!--OPTION END-->
                        <!--OPTION START-->
                        <div class="social-login">
                            <a href="#" class="google"><i class="fa fa-google-plus"></i>Google Account</a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i>Facebook Account</a>
                        </div>
                        <!--OPTION END-->

                    </div>
                    <div class="user-box-footer">
                        <p>Don't have an account?<br><a href="#">Sign up as a User</a></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- SIGNIN MODEL END -->


        <!--HEADER START-->
        <header id="header_2">
            <!--kode top bar start-->
            <div class="top_bar_2" style="background:linear-gradient(135deg, rgb(0 108 67) 70%, #f9c800 30%)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="pull-left">
                                <em class="contct_2"><i class="fa fa-phone"></i> Call Us on +91 9507769410</em>
                            </div>
                        </div>
                        <div class="col-md-7">

                            <ul class="login_wrap">
                                <!-- <li><a href="#" data-toggle="modal" data-target="#reg-box"><i class="fa fa-user"></i>Register</a></li> -->
                                <li><a href="#" ><i class="fa fa-envelope"></i>info@careersamadhan.com</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <!--kode top bar end-->

            <!--kode navigation start-->
            <div class="kode_navigation">
                <div id="mobile-header">
                    <a id="responsive-menu-button" href="#sidr-main"><i class="fa fa-bars"></i></a>
                </div>
                <div class="container">
                    <div class="row " >
                    <div class="col-md-2">
                            <div class="logo_wrap">
                                <a href="index.php"><img src="images/career/logo.png" width="90px" alt=""></a>

                            </div>

                        </div>

                        <div class="col-md-10">
                            <!--kode nav_2 start-->
                            <div class="nav_2" id="navigation">
                                <ul>
                          
                                    <li> <a  href="tel:7280936524" class="btn btn-3d calls" style="color:#34af23;border:2px solid #34af23">Call Now</a></li>
                                    <li> <a href="https://api.whatsapp.com/send?phone=9507769410" class="btn btn-3d" style="color:red;border:2px solid red">Whatsap</a></li>
                                    <li> <a class="btn btn-3d Click-here"style="color:green;border:2px solid green">Enquiry Now</a></li>
                                    <li> <a href="contact.php" class="btn btn-3d Click-here" style="color:blue;border:2px solid blue">Apply Online</a></li>
                                    <li> <a href="contact.php" class="btn btn-3d Click-here" style=" background: #006c43;color:white">Counselling  Online</a></li>
                           
                                    <!-- <li><a id="simple-menu" href="#sidr"><i class="fa fa-bars"></i></a></li> -->
                                </ul>
                                <!--DL Menu Start-->
                                <div id="kode-responsive-navigation" class="dl-menuwrapper">
                                    <button class="dl-trigger">Open Menu</button>
                                    <ul class="dl-menu">
                                        <li><a href="index.php">home</a></li>
                                        <li><a href="about.php">about us</a></li>
                                        <!-- <li><a href="about.php">College</a></li> -->
                                   
                                       
                                        <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        College
                                        </a>
                                        <ul class="dropdown-menu ">
                                                <?php
$i = '1';
$query = "SELECT * FROM add_category ";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
?>
                                                   
                                                    <li><a class="dropdown-item" href="cdetail.php?cat_id=<?php echo $row['cat_id']; ?>"> <?php echo $row['cat_name']; ?></a></li>
                                                    <?php
}
?>
                                               
                                            
                                                 

                                                </ul>
                                    </li>
                               
                               
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Study In India
                                        </a>
                                        <ul class="dropdown-menu">
                                         
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Andhra Pradesh</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Arunachal Pradesh</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Assam</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Bihar</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Chhattisgarh</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Goa</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Gujarat</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Haryana</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Himachal Pradesh</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Jharkhand</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Karnataka</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Kerala</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Madhya Pradesh</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Maharashtra</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Manipur</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Meghalaya</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Mizoram</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Nagaland</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Odisha</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Punjab</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Rajasthan</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Sikkim</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Tamil Nadu</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Telangana</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Tripura</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Uttar Pradesh</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Uttarakhand</a></li>
                                         <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in West Bengal</a></li>
                                      

                                      </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                       MBBS Abroad
                                        </a>
                                        <ul class="dropdown-menu"  >
                                         
                                        <li><a class="dropdown-item" href="study_in_abroad.php">MBBS in India</a></li>
                                                   <li><a class="dropdown-item" href="study_in_abroad.php">MBBS in Nepal</a></li>
                                                   <li><a class="dropdown-item" href="study_in_abroad.php">MBBS in China</a></li>
                                                   <li><a class="dropdown-item" href="study_in_abroad.php">MBBS in Bangladesh</a></li>
                                                   <li><a class="dropdown-item" href="study_in_abroad.php">MBBS in Russia</a></li>
                                                   <li><a class="dropdown-item" href="study_in_abroad.php">MBBS in Ukraine</a></li>
                                                   <li><a class="dropdown-item" href="study_in_abroad.php">MBBS in Egypt</a></li>
                                                   <li><a class="dropdown-item" href="study_in_abroad.php">MBBS in Kazakhstan</a></li>
                                      

                                      </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Exam
                                        </a>
                                        <ul class="dropdown-menu"  >
                                         
                                        <li><a class="dropdown-item" href="">JEE MAIN 2023</a></li>
                                         <li><a class="dropdown-item" href="">NEET 2023</a></li>
                                         <li><a class="dropdown-item" href="">CLAT 2023</a></li>
                                         <li><a class="dropdown-item" href="">AILET 2023</a></li>
                                         <li><a class="dropdown-item" href="">NDA 2023</a></li>
                                      

                                      </ul>
                                    </li>
                                 
                                    <!-- <li><a href="about.php">Article</a></li> -->
                                        <li><a href="career.php">Career</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>

                                    </ul>
                                </div>
                                <!--DL Menu END-->
                            </div>
                            <!--kode nav_2 end-->
                        </div>
                    </div>
                 
                    
                </div>
                <div class="container" >
         
                    <div class="row "  >
                        <!-- <div class="col-md-2">
                            <div class="logo_wrap">
                                <a href="index.php"><img src="images/career/logo.png" width="90px" alt=""></a>

                            </div>

                        </div> -->

                        <div class="col-md-10">
                            <!--kode nav_2 start-->
                            <div class="nav_2" id="navigation" style="padding:0px">
                            <ul class="dl-menu">
                                        <li><a href="index.php" style="border:1px solid #ccc;">home</a></li>
                                        <li><a href="about.php"style="border:1px solid #ccc;width:120px">about us</a></li>
                                        <!-- <li><a href="about.php"style="border:1px solid #ccc;width:120px">College</a></li> -->

                                        <li class="nav-item dropend">
                                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="border:1px solid #ccc;width:120px">
                                                College
                                                </a>
                                                <ul class="dropdown-menu mega" style="display: grid;grid-template-columns:auto auto auto;background:#00a65a;">
                                                <?php
$i = '1';
$query = "SELECT * FROM add_category ";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
?>
                                                   
                                                    <li><a class="dropdown-item" href="cdetail.php?cat_id=<?php echo $row['cat_id']; ?>"> <?php echo $row['cat_name']; ?></a></li>
                                                    <?php
}
?>
                                               
                                            
                                                 

                                                </ul>
                                            </li>
                                      
                                    <li class="nav-item dropend">
                                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="border:1px solid #ccc;width:120px">
                                                Study In India
                                                </a>
                                                <ul class="dropdown-menu mega" style="display: grid;grid-template-columns:auto auto auto;;background:#00a65a;" >
                                                <?php
                                        $i = '1';
                                        $query = "SELECT * FROM add_state Where type=1 order by cat_id asc";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php?id=<?php echo $row['cat_id']; ?>"> <?php echo $row['cat_name']; ?></a></li>

                                        <?php }?>
                                    
                                                   <!-- <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Arunachal Pradesh</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Assam</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Bihar</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Chhattisgarh</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Goa</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Gujarat</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Haryana</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Himachal Pradesh</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Jharkhand</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Karnataka</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Kerala</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Madhya Pradesh</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Maharashtra</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Manipur</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Meghalaya</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Mizoram</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Nagaland</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Odisha</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Punjab</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Rajasthan</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Sikkim</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Tamil Nadu</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Telangana</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Tripura</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Uttar Pradesh</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in Uttarakhand</a></li>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php">MBBS in West Bengal</a></li>
                                                 -->

                                                </ul>
                                            </li>
                                            <li class="nav-item dropend">
                                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="border:1px solid #ccc;width:120px">
                                                MBBS Abroad 
                                                </a>
                                                <ul class="dropdown-menu mega" style="display: grid;grid-template-columns:auto auto auto;;background:#00a65a;" >
                                         
                                                   <!-- <li><a class="dropdown-item" href="study_in_abroad.php">MBBS in India</a></li> -->
                                                   <?php
                                        $i = '1';
                                        $query = "SELECT * FROM add_state Where type=2 order by cat_id asc";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                                   <li><a class="dropdown-item" href="study_in_india_detail.php?id=<?php echo $row['cat_id']; ?>"> <?php echo $row['cat_name']; ?></a></li>

                                        <?php }?>
                                                   <!-- <li><a class="dropdown-item" href="study_in_abroad.php">MBBS in Nepal</a></li>
                                                   <li><a class="dropdown-item" href="study_in_abroad.php">MBBS in China</a></li>
                                                   <li><a class="dropdown-item" href="study_in_abroad.php">MBBS in Bangladesh</a></li>
                                                   <li><a class="dropdown-item" href="study_in_abroad.php">MBBS in Russia</a></li>
                                                   <li><a class="dropdown-item" href="study_in_abroad.php">MBBS in Ukraine</a></li>
                                                   <li><a class="dropdown-item" href="study_in_abroad.php">MBBS in Egypt</a></li>
                                                   <li><a class="dropdown-item" href="study_in_abroad.php">MBBS in Kazakhstan</a></li>
                                            
                                         -->
                                                

                                                </ul>
                                            </li>
                                            <li class="nav-item dropend">
                                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="border:1px solid #ccc;width:120px">
                                                Exam
                                                </a>
                                                <ul class="dropdown-menu mini" style="display: grid;grid-template-columns:auto;;background:#00a65a;" >
                                         
                                         <li><a class="dropdown-item" href="">JEE MAIN 2023</a></li>
                                         <li><a class="dropdown-item" href="">NEET 2023</a></li>
                                         <li><a class="dropdown-item" href="">CLAT 2023</a></li>
                                         <li><a class="dropdown-item" href="">AILET 2023</a></li>
                                         <li><a class="dropdown-item" href="">NDA 2023</a></li>
                               
                     
                                      

                                      </ul>
                                            </li>
                                    <!-- <li><a href="about.php"style="border:1px solid #ccc;width:120px">Article</a></li> -->
                                        <li><a href="career.php"style="border:1px solid #ccc;">Career</a></li>
                                        <li><a href="contact.php"style="border:1px solid #ccc;width:120px">Contact Us</a></li>

                                    </ul>
                                <!--DL Menu Start-->
                                <div id="kode-responsive-navigation" class="dl-menuwrapper">
                                    <!-- <button class="dl-trigger">Open Menu</button> -->
                                    <ul class="dl-menu">
                                        <li><a href="index.php">home</a></li>
                                        <li><a href="about.php">about us</a></li>

                                       
                                        <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Courses
                                        </a>
                                        <ul class="dropdown-menu">
                                        <li class="nav-item dropend">
                                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Paramedical
                                                </a>
                                                <ul class="dropdown-menu">
                                                <?php
$i = '1';
$query = "SELECT * FROM add_category ";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
?>
                                                   
                                                    <li><a class="dropdown-item" href="cdetail.php?cat_id=<?php echo $row['cat_id']; ?>"> <?php echo $row['cat_name']; ?></a></li>
                                                    <?php
}
?>
                                               
                                            
                                                 

                                                </ul>
                                            </li>
                                            <li class="nav-item dropend">
                                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Law
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">BALLB</a></li>
                                                    <li><a class="dropdown-item" href="#">BBALLB</a></li>
                                                    <li><a class="dropdown-item" href="#">LLB</a></li>
                                                    <li><a class="dropdown-item" href="#">LLM</a></li>
                                                 

                                                </ul>
                                            </li>
                                       
                                            <li class="nav-item dropend">
                                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Hotel Management
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">DHM</a></li>
                                                    <li><a class="dropdown-item" href="#">BHM</a></li>
                                                 

                                                </ul>
                                            </li>
                                            <li class="nav-item dropend">
                                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Nursing
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">BSC NURSING</a></li>
                                                    <li><a class="dropdown-item" href="#">ANM</a></li>
                                                    <li><a class="dropdown-item" href="#">GNM</a></li>
                                                    <li><a class="dropdown-item" href="#">POST NURSING</a></li>
                                                 

                                                </ul>
                                            </li>
                                            <li class="nav-item dropend">
                                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Pharmacy
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">DPHARMA</a></li>
                                                    <li><a class="dropdown-item" href="#">BPHARMA</a></li>
                                                    <li><a class="dropdown-item" href="#">MPHARMA</a></li>
                                                 

                                                </ul>
                                            </li>
                                  
                                         
                                           
                                        </ul>
                                    </li>
                                        <li><a href="career.php">Career</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>

                                    </ul>
                                </div>
                                <!--DL Menu END-->
                            </div>
                            <!--kode nav_2 end-->
                        </div>
                    </div>
                    
                </div>
            </div>
            <!--kode navigation end-->
        </header>
        <!--HEADER END-->