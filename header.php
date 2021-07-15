<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php ?>

<?php ?>

<?php wp_head(); ?>

</head>

<body 
	<?php body_class(); ?>
>

<header>
    <nav>
      <a href="<?php echo get_bloginfo('url') ?>"><img id="logo" src="<?php echo get_bloginfo('template_url') ?>/assets/pictures/full-logo.png" alt="logo"/></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) );?>
    </nav>
  </header>
