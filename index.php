<?php
    require "less/lessc.inc.php";
    $less = new lessc;
    $less->checkedCompile("less/style.less", "css/style.css");
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en" xmlns:fb="https://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en" xmlns:fb="https://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en" xmlns:fb="https://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en" xmlns:fb="https://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#"><!--<![endif]-->

    <head>

        <meta http-equiv="Content-Type"    content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        <title>Title</title>

        <!-- SEO -->
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="language" content="">
        <meta name="author" content="">                     <!-- VOORAL BELANGRIJK BIJ BLOGS / COMMUNITIES : OVEREENSTEMMEN MET GOOGLE+ NAAM-->
        <meta name="google" content="">                     <!-- MAG DE SITE NIET VERTAALD WORDEN? notranslate TOEVOEGEN -->
        <meta name="google-site-verification" content="">   <!-- GOOGLE WEBMASTERTOOLS -->
        <meta name="robots" content="">                     <!-- index | follow | noindex | nofollow -->
        <meta name="revisit-after" content="7 days">

        <!-- BLOG: Een avatar koppelen in de Google resultaten op deze manier -->
        <link rel="author" href="https://plus.google.com/<google-id-auteur>/posts"/>

        <!-- OPEN GRAPH / SOCIAL MEDIA -->
        <meta property="fb:app_id"      content="" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <meta property="og:description" content="" />
        <meta property="og:site_name" content="" />
 
        <!-- STYLE -->
        <link rel="shortcut icon" type="image/x-icon" href="" />
 
        <!-- MOBILE -->
        <link rel="apple-touch-startup-image" href="" />           <!-- START IMAGE     : 320x460px - PNG -->
        <link rel="apple-touch-icon" sizes="76x76"   href="">
        <link rel="apple-touch-icon" sizes="120x120" href="">
        <link rel="apple-touch-icon" sizes="152x152" href="">

        <meta name="apple-mobile-web-app-status-bar-style"  content="" />        <!-- TOOLBAR         : default | black | black-translucent -->
        <meta name="apple-mobile-web-app-capable"           content="" />        <!-- FULL SCREEN?    : yes | no -->
        <meta name="HandheldFriendly"                       content="true" />

 		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

        <!-- HTML5 SHIV -->
        <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        
        <!-- CSS FILES -->
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/grid/grid-12-wide-responsive.css"/>
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.0/animate.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/flexslider.css"/>
        <link rel="stylesheet" type="text/css" href="css/shame.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>

        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
 
        <!-- LATEST JQUERY + MODERNIZR -->
        <script type="text/javascript" charset="utf-8" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
        <script type="text/javascript" charset="utf-8" src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>
        <script type="text/javascript" charset="utf-8" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" charset="utf-8" src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/core.custom.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/core.general.js"></script>
        
        <!-- JQUERY PLUGINGS -->
        <script type="text/javascript" charset="utf-8" src="//cdnjs.cloudflare.com/ajax/libs/jquery-placeholder/2.0.7/jquery.placeholder.min.js"></script>
        <script type="text/javascript" charset="utf-8" src="//cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
        <script type="text/javascript" charset="utf-8" src="//cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.2/jquery.flexslider-min.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/jpanelmenu.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/pretify.js"></script>
    
    </head>
    
    <body>

        <div class="site-wrapper">

            <header>

                <div class="container_12">
                    <div class="grid_12">
    
                        <a href="#" class="off-canvas-menu-trigger">Menu</a>
        
                        <nav class="main-navigation">
                            <ul>
                                <li><a href="#">Navigatie 1</a></li>
                                <li><a href="#">Navigatie 2</a></li>
                                <li><a href="#">Navigatie 3</a></li>
                                <li><a href="#">Navigatie 4</a></li>
                            </ul>
                        </nav>
    
                    </div>
                </div>
    
            </header>

        </div>

        <footer>
            <div class="container_12">
                <div class="grid_12">
                    Footer content
                </div>
            </div>
        </footer>
    
        <script>

            $(document).ready(function(){

                var jPM = $.jPanelMenu({
                    menu: '.main-navigation',
                    trigger: '.off-canvas-menu-trigger',
                    duration: 150,
                    direction: 'left'
                });

                jPM.on();

            });

        </script>
		
    </body>
 
</html>
