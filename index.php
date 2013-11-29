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
        <link rel="apple-touch-icon" sizes="76x76"   href="images/core/touch-icon-ipad.png">
        <link rel="apple-touch-icon" sizes="120x120" href="images/core/touch-icon-iphone-retina.png">
        <link rel="apple-touch-icon" sizes="152x152" href="images/core/touch-icon-ipad-retina.png">

        <meta name="apple-mobile-web-app-status-bar-style" content="" />        <!-- TOOLBAR         : default | black | black-translucent -->
        <meta name="apple-mobile-web-app-capable" content="" />        <!-- FULL SCREEN?    : yes | no -->
 		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

        <!-- HTML5 SHIV -->
        <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        
        <!-- CSS FILES -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="css/animate.css"/>
        <link rel="stylesheet" type="text/css" href="css/shame.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>

        <!-- FONT AWESOME -->
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
        <!--[if IE 7]><link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome-ie7.min.css"><![endif]-->
 
        <!-- LATEST JQUERY + MODERNIZR -->
        <script type="text/javascript" charset="utf-8" src="js/jquery.1.9.0.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/modernizr.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/core.custom.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/core.general.js"></script>
        
        <!-- MOSTLY DELETE THESE -->
        <script type="text/javascript" charset="utf-8" src="js/jpanelmenu.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/pretify.js"></script>
    
    </head>
    
    <body>

        <section class="container_12 newsfeed tiles">
            <? for($i=1;$i<=8;$i++):?>
            <div class="item grid_3 mobile_6">
                <div class="image"><a href="#"><img src="http://placehold.it/220x125"/></a></div>
                <div class="content">
                    <h3><a href="#">Mostly a long title of newsmessage numero <?=$i;?></a></h3>
                    <p>Sed molestie nisl ac massa lobortis, nec ultrices nunc fringilla. Duis fermentum tempor purus, ut posuere justo placerat et.</p>
                </div>
                <div class="more">
                    <a href="#" class="read-more"><span class="plus">+</span> to the newsroom</a>
                </div>
            </div>
            <? endfor;?>
        </section>

        <section class="container_12 newsfeed list">
            <? for($i=1;$i<=4;$i++):?>
            <div class="item grid_3 mobile_6">
                <div class="image"><a href="#"><img src="http://placehold.it/220x125"/></a></div>
                <div class="content">
                    <h3><a href="#">Mostly a long title of newsmessage numero <?=$i;?></a></h3>
                    <p>Sed molestie nisl ac massa lobortis, nec ultrices nunc fringilla. Duis fermentum tempor purus, ut posuere justo placerat et.</p>
                </div>
                <div class="more">
                    <a href="#" class="read-more"><span class="plus">+</span> to the newsroom</a>
                </div>
            </div>
            <? endfor;?>
        </section>
		
    </body>
 
</html>
