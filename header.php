<?php
/**
 * The Header 
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Flexbox
 * @since Flexbox 0.0.1
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>    
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>