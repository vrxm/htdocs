<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package plainbootstrapbybrenton
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<script src="https://use.typekit.net/qay1abw.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
  
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'plainbootstrapbybrenton' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar navbar-default navbar-custom">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
 		    </div>
            
        <!-- responsive header image -->    
        <div class="container-60 push sw-logo">
        </div>
            
            
		    <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="container-80 push">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			     <ul class="nav navbar-nav">
					<?php wp_nav_menu ( array( 'theme_location' => 'header-menu', 'container' => '', 'items_wrap' => '%3$s' ) ); ?>
  				</ul>
              
                 <ul class="nav navbar-nav navbar-right">              
                <li><form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<div><input type="text" size="put_a_size_here" name="s" id="s" value="Search Seattle Weekly" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
<!-- this make a button <input type="submit" id="searchsubmit" value="Search" class="btn" /> -->
</div>
</form>
</li>
                </ul>
  			</div>
          </div>
		    
		  </div><!-- /.container-fluid -->
		</nav>
	</header><!-- #masthead -->
  <div class="wrapper">
	<div id="content container" class="site-content">
		<div id="row">
