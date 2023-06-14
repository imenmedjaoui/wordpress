<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<div id="branding">   
<a href="http://localhost:81/Planty/wordpress/"><img id="logo" src="http://localhost:81/Planty/wordpress/wp-content/uploads/2023/05/Logo.png" alt="acceuil"></a>
<?php
if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; }

if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; }
?>
</div>

<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
</nav>
</div>
</header>
<div id="container">
<main id="content" role="main">