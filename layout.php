<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>INDIEGA | <?= $title ?></title>
    <meta name="description" content="<?= $description ?>">
    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/fonts/stylesheets/font-awesome.min.css" />
    <link rel="stylesheet" href="./assets/stylesheets/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/stylesheets/style.css" />
    <link rel="stylesheet" href="./assets/stylesheets/responsive.css" />
    <link rel="stylesheet" href="./assets/plugins/animate.css-master/animate.min.css">
    <link href="./assets/plugins/lightbox2-master/dist/css/lightbox.css" rel="stylesheet">
    <link href="./assets/stylesheets/video-js.css" rel="stylesheet">
    <link href="./assets/plugins/jquery-date-range-picker-master/dist/daterangepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/plugins/slick-1.8.0/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./assets/plugins/slick-1.8.0/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="./assets/plugins/slider/css/normalize.min.css" media="screen, print" />
    <link rel="stylesheet" type="text/css" href="./assets/plugins/slider/css/smartslider.min.css" media="screen, print" />
    <link rel="stylesheet" type="text/css" href="./assets/stylesheets/style.css" />
    <link rel="stylesheet" type="text/css" href="./assets/stylesheets/slider.css" />
    
    <!-- JS -->
    <script type="text/javascript" src="./assets/javascripts/wp.js"></script>
    <script type="text/javascript" src="./assets/plugins/slider/js/n2-j.min.js"></script>
    <script type="text/javascript" src="./assets/plugins/slider/js/nextend-gsap.min.js"></script>
    <script type="text/javascript" src="./assets/plugins/slider/js/nextend-frontend.min.js"></script>
    <script type="text/javascript" src="./assets/plugins/slider/js/smartslider-frontend.min.js"></script>
    <script type="text/javascript" src="./assets/plugins/slider/js/smartslider-simple-type-frontend.min.js"></script>
    <script type="text/javascript" src="./assets/plugins/slider/js/nextend-webfontloader.min.js"></script>
    <script type="text/javascript" src="./assets/javascripts/fonts.js"></script>
</head>

<body>

    <!-- HEADER START -->
    <div class="header-line-wrapper">
        <header class="header-wrapper fixed-top plr100">
            <div class="table height-100p">
                <div class="table-row">
                    <div class="table-cell valign-middle text-left">
                        <a href="index.php" class="logo">
                            <img src="./assets/images/logo.png" alt="" class="img-responsive inline-block">
                        </a>
                    </div>
                    <div class="table-cell valign-top text-center vm-sm">
                        <div class="main-menu">
                            <span class="toggle_menu">
                                <span></span>
                            </span>
                            <ul class="menu clearfix">
                                <li class="inline-block <?= $active === 'home' ? 'active' : '' ?>">
                                    <a href="index.php">
                                        Indiega Game
                                    </a>
                                </li>
                                <li class="inline-block <?= $active === 'games' ? 'active' : '' ?>">
                                    <a href="games.php">
                                        Games
                                    </a>
                                </li>
                                <li class="inline-block <?= $active === 'blog' ? 'active' : '' ?>">
                                    <a href="blog.php">
                                        Blog
                                    </a>
                                </li>
                                <li class="inline-block <?= $active === 'contacts' ? 'active' : '' ?>">
                                    <a href="contacts.php">
                                        Contacts
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- HEADER END -->

    <?= $yield ?>

    <!-- FOOTER START -->
    <footer class="footer">
        <div class="container">
            <div class="row mb110">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="index.html">
                        <img src="./assets/images/logo.png" alt="">
                    </a>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-right">
                    <ul class="footer-menu">
                        <li class="active">
                            <a href="index.html">
                                Homepage
                            </a>
                        </li>
                        <li>
                            <a href="blog-right.html">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="contacts.html">
                                Contacts
                            </a>
                        </li>
                    </ul>
                    <div class="mt60">
                        Andouille landjaeger flank boudin. Jerky cupim alcatra sirloin porchetta,
                        <br /> turkey short ribs leberkas doner bacon pancetta buffalo.
                    </div>
                    <div class="social-content mt30">
                        <div class="social-list">
                            <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="social-list">
                            <a href="#">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="social-list">
                            <a href="#">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="social-list">
                            <a href="#">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="copyright ptb30 col-lg-12">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        © Copyright 2018
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">
                        All Rights Reserved
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER END -->
    <a href="#" id="toTop" class="color-white">
        <i class="fa fa-angle-up fsize-14" aria-hidden="true"></i>
	  </a>
    <!-- Scripts -->
    <script src="./assets/javascripts/slider.js"></script>
    <script src="./assets/javascripts/jquery-3.3.1.min.js"></script>
    <script src="./assets/javascripts/bootstrap.min.js"></script>

    <script src="./assets/plugins/slick-1.8.0/slick/slick.min.js"></script>
    <script src="./assets/plugins/flex-menu/flexmenu.min.js"></script>
    <script src="./assets/plugins/jquery-match-height-master/dist/jquery.matchHeight.js"></script>
    <script src="./assets/plugins/muuri-master/muuri.js"></script>
    <script src="./assets/plugins/vide-0.5.1/dist/jquery.vide.min.js"></script>
    <script src="./assets/plugins/paroller.js-master/dist/jquery.paroller.min.js"></script>

    <script src="./assets/javascripts/video.js"></script>
    <script src="./assets/javascripts/jquery.inview.min.js"></script>
    <script src="./assets/javascripts/progressbar.min.js"></script>

    <script src="./assets/plugins/lightbox2-master/dist/js/lightbox.js"></script>

    <script src="./assets/javascripts/moment.min.js"></script>
    <script src="./assets/plugins/jquery-date-range-picker-master/dist/jquery.daterangepicker.min.js"></script>
    <script src="./assets/plugins/wow-master/dist/wow.min.js"></script>

    <script src="./assets/javascripts/script.js"></script>
</body>

</html>