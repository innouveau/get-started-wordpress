<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    
    <?php include('php/favicon.php'); ?>

    <?php include('php/fonts.php'); ?>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

    
    
	<?php wp_head(); ?>
</head>

<body <?php body_class();?>>
    <div id="header">
        <div class="pagewrap">
            <div id="identity">
                <a href="<?php echo get_bloginfo('home'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
                </a>
            </div>
            
            <?php include('php/menu.php'); ?>
        </div>
    </div>