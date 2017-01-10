<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
    
    <link href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?php wp_head(); ?>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigate" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="javascript:void(0)">Wojtek Wernicki</a>
            </div>
            <div class="collapse navbar-collapse" id="navigate">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#top">Siema!</a></li>
                    <li><a href="#o-mnie">O mnie</a></li>
                    <li><a href="#wspolpraca">Współpraca</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#skill">Umiejętności</a></li>
                    <li><a href="#kontakt">Kontakt</a></li>
                    <li><a href="blog-front.html">BLOG</a></li>
                </ul>
            </div>
        </div>
    </nav>