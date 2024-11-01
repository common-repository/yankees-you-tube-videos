<?php
/*
Plugin Name: Yankees Videos 
Plugin URI: http://advertisablearena.com
Description: Yankees Videos
Version: 1.0
Author: abhijit Gaikwad
Author URI: http://advertisablearena.com
*/

function sampleyankees() 
{
  echo '<iframe src ="http://advertisablearena.com/youtube/cricket/yankees.html" width="180" height="200" frameBorder="0"> <p>Your browser does not support iframes.</p></iframe>';

}

function widget_yankees($args) {
  extract($args);
  echo $before_widget;
  echo $before_title;?>Yankees Videos<?php echo $after_title;
  sampleyankees();
  echo $after_widget;
}

function myyankees_init()
{
  register_sidebar_widget(__('Yankees Videos'), 'widget_yankees');     
}
add_action("plugins_loaded", "myyankees_init");


 
?>