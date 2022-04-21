<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <?php wp_head(); ?>
    <title>HelloFresh</title>
    <!--
    <link rel="stylesheet" href="../../../../../Desktop/meinTheme%202/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../../Desktop/meinTheme%202/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../../../../../Desktop/meinTheme%202/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../../../../../Desktop/meinTheme%202/assets/css/styles.min.css">
    -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
</head>

<body style="font-family: Agrandir;">
<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>
<nav class="navbar navbar-light navbar-expand-md fixed-top bg-white">
    <div class="container-fluid"><a class="navbar-brand" href="<?php echo get_option('home') ?>"><img class="logo" src="<?php echo esc_url( $logo[0] )?>"></a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <?php
            wp_nav_menu(array(
                "theme_location" => "header-menu",
                'container' => 'ul',
                'menu_class'=> 'nav navbar-nav',
            ));
            ?>
            </div>
            <button onclick="window.location.href = '<?php the_field('login-link', 'option'); ?>'" class="btn d-md-flex d-lg-flex justify-content-md-center button-header" type="button">Login</button>
        </div>
    </nav>
<div class="spacer-content"></div>

