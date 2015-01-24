<?php
/*
  Plugin Name: Run PHP code in Post & Page
  Plugin URI: http://code.tutsplus.com
  Description: Run PHP code in WordPress
  Author: Agbonghama Collins
  Version: 1.0
  Author URI: http://tech4sky.com/
 */
 
  function php_include( $attr ) {
    $file = $attr['file'];
    $upload_dir = wp_upload_dir();
    $folder = $upload_dir['basedir'] . '/php-content'. "/$file.php";
    ob_start();
    include ( $folder );
    return ob_get_clean();
}
add_shortcode( 'phpcode', 'php_include' );
?>
