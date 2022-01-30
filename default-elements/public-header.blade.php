<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<!DOCTYPE html>
<html lang="zxx">
    <!--<![endif]-->
    <head>
        <!-- Meta Tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?php
                $filename = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
                $filenameexp = explode('.', $filename);
                echo $filenameexp[0];
            ?>
        </title>

        <!-- ALL CSS FILE LINKS -->
        <!-- BOOTSTRAP 5 -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- JQUERY UI -->
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css">

        <!-- FONT AWESOME 5 -->
        <link rel="stylesheet" href="assets/css/all.min.css">
        <!-- FLAT ICON -->
        <link rel="stylesheet" href="assets/css/uicons-regular-straight.css">
        <!-- ACE RESPONSIVE MENU -->
        <link rel="stylesheet" href="assets/css/ace-responsive-menu.css">
        <!-- SELECT OPTION WITH SEARCH BOX -->
        <link rel="stylesheet" href="assets/css/hierarchy-select.min.css">
        <!-- CUSTOM SELECT OPTION UI -->
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <!-- MAGNIFIC POPUP -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!-- OWL CAROUSEL -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!-- ANIMATION CSS -->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!-- SOME DEFAULT CSS WRITTEN BY ME -->
        <link rel="stylesheet" href="assets/css/default.css">
        <!-- ALL MY WRITTEN CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
          
          

        <!-- FAV & Touch Icons -->
        <link rel="shortcut icon" href="assets/images/favicon.png">
        <link rel="apple-touch-icon" href="assets/images/favicon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon-72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon-114.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon-144.png">

        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600;700;900&display=swap" rel="stylesheet"> 

        <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script>window.blade.php5 || document.write('<script src="assets/js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body class="min-vh-100 overflow-hidden">
        
        <!-- ALL HTML CODES STARTS HERE -->
        <!-- HEADER TOP SECTION STARTS -->
        <div class="preloaderwrapper">
            <span class="firstloader"></span>
            <span class="secondloader"></span>
        </div> <!-- preloaderwrapper -->
        <header class="headertop w-100 overflow-hidden darkbg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7 col-xs-12 ps-0 pe-0">
                        <ul class="headerprofiledetails list-unstyled w-100 text-center position-relative py-3">
                            <li><i class="fas fa-phone-alt"></i> <a href="tel:+12345678910">(+12) 345 6789 1011</a></li>
                            <li><i class="fas fa-envelope-open"></i> <a href="mailto:youremail@address.com">youremail@address.com</a></li>
                            <li><i class="fas fa-map-marker-alt"></i><a href="#">123/1 West Newyork</a></li>
                        </ul>
                    </div> <!-- col-md-7 col-xs-12 -->
                    <div class="col-md-5 col-xs-12 ps-0 pe-0">
                        <div class="headersocialmedia w-100 h-100 overflow-visible position-relative">
                            <div class="w-100 h-100 overflow-hidden d-flex align-items-center">
                                <ul class="list-unstyled w-100 text-center">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div> <!-- headersocialmedia -->
                    </div> <!-- col-md-7 col-xs-12 -->
                </div> <!-- row -->
            </div> <!-- container -->
        </header> <!-- headertop -->
        <!-- HEADER TOP SECTION ENDS -->

        <!-- MENU SECTION STARTS -->
        <div class="menusectionfullwrapper w-100 position-relative d-flex darkbg">
            <!-- Full Menu -->
            <nav class="mainmenufullwrapper d-flex justify-content-between position-absolute top-0">
                <div class="menulogo">
                    <a href="index.blade.php">
                        <img src="assets/images/logo-white.png" alt="logo">
                    </a>
                </div> <!-- menulogo -->
                <div class="align-self-center">
                    <div class="peopleprofile dropdown float-start align-self-center">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/images/people/people-8.jpg" alt="people">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li class="text-center">
                                <h4>md. sajid hasan</h4>
                                <p>yourdomailn@address.com</p>
                            </li>
                            <li><a class="dropdown-item" href="#">my profile</a></li>
                            <li><a class="dropdown-item" href="#">messages <span class="notificationcounter">2</span></a></li>
                            <li><a class="dropdown-item" href="#">purchase history</a></li>
                            <li><a class="dropdown-item" href="index.blade.php">logout</a></li>
                        </ul> <!-- dropdown-menu -->
                    </div> <!-- peopleprofile dropdown -->
                    <a href="dashboard.blade.php" class="btn-2 ms-2">add listing</a>
                    <a href="login.blade.php" class="btn-3 ms-2">Login / Register</a>
                </div>
            </nav> <!-- mainmenufullwrapper -->
        </div> <!-- herosectionfullwrapper -->
        <!-- MENU SECTION ENDS -->