<?php require_once 'include/php/config.php'?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="pt-br"> <!--<![endif]-->
    <head>
        <!-- Meta Tags -->
        <meta http-equiv="Content-Language" content="pt-br">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Elder Xavier</title>   
        <!-- Favicons -->
        <link rel="shortcut icon" href="include/img/favicon.ico"> 
        <meta name="description" content="PROGRAMADOR / WEB DEVELOPER - Desenvolviento de aplicações e sistemas para desktops, web e mobille" /> 
        <!-- Mobile Specifics -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="HandheldFriendly" content="true"/>
        <meta name="MobileOptimized" content="320"/>   
        <!-- Mobile Internet Explorer ClearType Technology -->
        <!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->
        <!-- Bootstrap -->
        <link href="include/css/bootstrap.min.css" rel="stylesheet">
        <!-- Main Style -->
        <link href="include/css/main.css" rel="stylesheet">
        <!-- Supersized -->
        <link href="include/css/supersized.css" rel="stylesheet">
        <link href="include/css/supersized.shutter.css" rel="stylesheet">
        <!-- FancyBox -->
        <link href="include/css/fancybox/jquery.fancybox.css" rel="stylesheet">
        <!-- Font Icons -->
        <link href="include/css/fonts.css" rel="stylesheet">
        <!-- Shortcodes -->
        <link href="include/css/shortcodes.css" rel="stylesheet">
        <!-- Responsive -->
        <link href="include/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="include/css/responsive.css" rel="stylesheet">
        <!-- Supersized -->
        <link href="include/css/supersized.css" rel="stylesheet">
        <link href="include/css/supersized.shutter.css" rel="stylesheet">
        <!-- Google Font -->
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>
        <!-- Fav Icon -->
        <link rel="shortcut icon" href="#">
        <link rel="apple-touch-icon" href="#">
        <link rel="apple-touch-icon" sizes="114x114" href="#">
        <link rel="apple-touch-icon" sizes="72x72" href="#">
        <link rel="apple-touch-icon" sizes="144x144" href="#">
        <!-- Modernizr -->
        <script src="include/js/modernizr.js"></script>
        <!-- Analytics -->
        <script type="text/javascript">
        </script>
        <!-- End Analytics -->
    </head>
    <body>
        <!-- This section is for Splash Screen -->
        <div class="ole">
            <section id="jSplash">
                <div id="circle"></div>
            </section>
        </div>
        <!-- End of Splash Screen -->
        <!-- Homepage Slider -->
        <div id="home-slider">	
            <div class="overlay"></div>
            <div class="slider-text">
                <div id="slidecaption"></div>
            </div>   
            <div class="control-nav">
                <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
                <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
                <ul id="slide-list"></ul>
                <a id="nextsection" href="#work"><i class="font-icon-arrow-simple-down"></i></a>
            </div>
        </div>
        <!-- End Homepage Slider -->
        <!-- Header -->
        <header>
            <div class="sticky-nav">
                <a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
                <div id="logo">
                    <a id="goUp" href="#home-slider" title="Logo Elder Xavier">
                        <img id="img-logo" src="include/img/logo-ex.png" alt="Logo Elder Sergio Xavier">
                    </a>
                </div>
                <nav id="menu">
                    <ul id="menu-nav">
                        <li class="current"><a href="#home-slider">Home</a></li>
                        <li><a href="#work">Utimos Projetos</a></li>
                        <li><a href="#about">Especialidades</a></li>
                        <li><a href="#contact">Contato</a></li>
                        <!--<li><a href="blog/blog.html" class="external" target="_blank">Blog</a></li>-->
                    </ul>
                </nav>
            </div>
        </header>        
        <?php include 'include/php/partial/portifolio.php'?>        
        <?php include 'include/php/partial/especialidades.php'?>                
        <?php include 'include/php/partial/contato.php'?>        
        <!-- Github feed -->
        <div id="github-feed" class="page-alternate">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="follow">
                            <a href="https://github.com/elderxavier" title="Veja os meus repositorios no Github" target="_blank"><div id="img-github"></div></a>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
        <!-- End Github feed -->
        <!-- Socialize -->
        <div id="social-area" class="page">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <nav id="social">
                            <ul>
                                <li><a href="javascript:void(0)" title="Siga-me no Twitter" target="_blank"><span class="font-icon-social-twitter"></span></a></li>
                                <li><a href="javascript:void(0)" title="Siga-me no Dribbble" target="_blank"><span class="font-icon-social-dribbble"></span></a></li>
                                <li><a href="javascript:void(0)" title="Siga-me no Forrst" target="_blank"><span class="font-icon-social-forrst"></span></a></li>
                                <li><a href="javascript:void(0)" title="Siga-me no Behance" target="_blank"><span class="font-icon-social-behance"></span></a></li>
                                <li><a href="javascript:void(0)" title="Siga-me no Facebook" target="_blank"><span class="font-icon-social-facebook"></span></a></li>
                                <li><a href="javascript:void(0)" title="Siga-me no Google Plus" target="_blank"><span class="font-icon-social-google-plus"></span></a></li>
                                <li><a href="javascript:void(0)" title="Siga-me no LinkedIn" target="_blank"><span class="font-icon-social-linkedin"></span></a></li>
                                <li><a href="javascript:void(0)" title="Siga-me no ThemeForest" target="_blank"><span class="font-icon-social-envato"></span></a></li>
                                <li><a href="javascript:void(0)" title="Siga-me no Zerply" target="_blank"><span class="font-icon-social-zerply"></span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Socialize -->
        <!-- Footer -->
        <footer>
            <p class="credits">&copy;2015 Elde Xavier <a href="https://github.com/elderxavier" title="Github Elde Xavier">Github</a></p>
        </footer>
        <!-- End Footer -->
        <!-- Back To Top -->
        <a id="back-to-top" href="#">
            <i class="font-icon-arrow-simple-up"></i>
        </a>
        <!-- End Back to Top -->
        <div id="mascara"></div>
        <div id="msg-box">
            <div id="msg-box-inner">
            </div>
            <span id="msg-box-p">
                <a id="msg-box-a" class="submit" href="javascript:void(0)">OK</a>
            </span>
        </div>
        <div id="image-progess"></div>
        <!-- Js -->
        <script src="include/js/jquery.min.js"></script> <!-- jQuery Core -->
        <script src="include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
        <script src="include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
        <script src="include/js/waypoints.js"></script> <!-- WayPoints -->
        <script src="include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
        <script src="include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
        <script src="include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
        <script src="include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
        <script src="include/js/jquery.tweet.js"></script> <!-- Tweet -->
        <script src="include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
        <script src="include/js/main.js"></script> <!-- Default JS -->
        <script src="include/js/ajaxmail-1.0.0.js"></script>
        <!-- End Js --> 
        <span class="skype-button bubble" data-contact-id="live:eldersxavier" data-theme="dark"></span>    
        <script src="https://swc.cdn.skype.com/sdk/v1/sdk.min.js"></script>
</body>
</html>