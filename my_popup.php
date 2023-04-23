<?php
/*
 * Plugin Name:       My Popup Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the Popup with this plugin.
 * Version:           1.0.0
 * Author:            Avinash Jha
 * Text Domain:       my-popup-plugin
 * Domain Path:       /languages
 */

 if( !defined('ABSPATH')){
    die();
 }

 /**
  * Enqueue Scripts
  */

  function popup_scripts(){
    $src_js = plugin_dir_url( __FILE__ ). 'assets/pop-up.js';
    $src_css = plugin_dir_url( __FILE__ ). 'assets/pop-up.css';

    wp_enqueue_script( 'popup-js', $src_js, array('jquery'), '1.0', true );
    wp_enqueue_style( 'popup-style', $src_css, '', '1.0' );
  }
  add_action( 'wp_enqueue_scripts', 'popup_scripts' );


  function popup_menu_page(){
    include 'admin-page.php';
  }
  function popup_menu(){
    add_submenu_page('options-general.php', 'Pop-up', 'Pop-up', 'manage_options', 'pop-up-menu', 'popup_menu_page');
  }
  add_action( 'admin_menu', 'popup_menu' );

/**
 *  show the popup on front-page
 */
function show_popup(){
    $account_no = '';
    $IFSC_CODE='';
    ?>
    <div class="popup-wrapper">
        <i class="close">&times;</i>
        <img src="<?php echo plugin_dir_url( __FILE__ ). 'assets/img/'.get_option('pop-up-image', 'ipl').'-popup.jpg'; ?>" alt="popup"/>
    </div>
    <?php
}
add_action( 'wp_head', 'show_popup' );