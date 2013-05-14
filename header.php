<?php
/**
 * @package WordPress
 * @subpackage Adapt Theme
 */
$options = get_option( 'adapt_theme_settings' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<!-- Mobile Specific
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<!-- Title Tag
================================================== -->
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>
    
<?php if(!empty($options['favicon'])) { ?>
<!-- Favicon
================================================== -->
<link rel="icon" type="image/png" href="<?php echo $options['favicon']; ?>" />
<?php } ?>

<!-- Main CSS
================================================== -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />


<!-- Load HTML5 dependancies for IE
================================================== -->
<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lte IE 7]>
	<script src="js/IE8.js" type="text/javascript"></script><![endif]-->
<!--[if lt IE 7]>
	<link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/>
<![endif]-->


<!-- WP Head
================================================== -->
<?php if ( is_single() || is_page() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<div id="wrap" class="clearfix">

    <header id="masterhead" class="clearfix" role="banner">
        <div class="container-fluid">
            <div id="logo" class="brand">
                <a href="<?php bloginfo( 'url' ); ?>/" title="Retour à la page d'accueil">
                    <img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" />
                </a>
            </div>
            <!-- END logo -->
            
            <nav id="masternav" class="clearfix" role="navigation">
                <ul>
                    <li><a href="<?php bloginfo( 'url' ); ?>">Accueil</a></li>
                    <li><a href="<?php bloginfo( 'url' ); ?>/articles"<?php if(is_category() || is_single()){echo ' class="current"';} ?>>Articles</a></li>
                    <li><a href="<?php bloginfo( 'url' ); ?>/portfolio" <?php if(is_page('Portfolio') || is_singular('portfolio')){echo ' class="current"';} ?>>Portfolio</a></li>
                    <li><a href="<?php bloginfo( 'url' ); ?>/contact" <?php if(is_page('Contact')){echo ' class="current"';} ?>>Contact</a></li>
                </ul>
            </nav>
            <!-- /masternav -->
        </div>      
    </header><!-- /masterhead -->
    
<div id="main" class="container-fluid clearfix" role="main">