<?php 
function mytheme_enqueue_scripts() {
  // register AngularJS
  wp_register_script('angular-core', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular.js', array(), null, false);
 
  // enqueue all scripts
  wp_enqueue_script('angular-core');
    
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');
?>