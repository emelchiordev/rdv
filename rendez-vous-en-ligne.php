<?php
/*
Description: Test
Plugin Name: Rendez vous en ligne
Author: Emmanuel
*/


//define('DIR_PATH',plugin_dir_path( __FILE__ ));
define('DIR_PATH','/wp-content/plugins/rendez-vous-en-ligne/');


class CalendarPlug 
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this,'loadScript']);
        add_action('wp_enqueue_style',[$this,'loadStyle']);
        add_shortcode('display_calendar',[$this,'displayCalendar']);

    }

    public function loadScript()
    {
        wp_enqueue_script('my-js', DIR_PATH . "public/calendrier.js");
    }

    public function loadStyle()
    {
        wp_enqueue_script('my-css', DIR_PATH . "public/calendrier.css");
    }

    public function displayCalendar(){
        require_once(DIR_PATH . "public/calendrier.php");
    }

}

new CalendarPlug();