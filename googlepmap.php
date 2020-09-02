<?php
/**
 * Plugin Name: Digital 6s Google Map Lite
 * Plugin URI: https://github.com/digital6s/Googlemap-wp
 * Description: The very first plugin that I have ever created - a very lite google maps plugin to add styled google map, no admin on purpose. Make map customisations in code, Code initially taken from Googles Styled Maps - Night Mode https://developers.google.com/maps/documentation/javascript/examples/style-array#maps_style_array-html and converting it to a plugin for a wordpress site.
 * Version: 1.0
/** Author: Vanessa 




function d6s_map() { 

      /*  Registers the google maps Java Script API and loads into the <head> as the last arg is set to true */
      /* ----> ACTION REQUIRED: Need to update with own API replacing YOURAPIKEY */

       wp_register_script('d6sgooglemaps', 'https://maps.googleapis.com/maps/api/js?v=3.40&key=YOURAPIKEY&callback=initMap', '', '', true);
 
      /*  Registers some code from pollyfill.io - not sure what this does it was in the Night Mode HTML code */
  
      wp_register_script('d6spolyfill', 'https://polyfill.io/v3/polyfill.min.js?features=default', '', '', true);
 
      /*  Registers the scripts.js file that includes the styling and locatiopn information about the google map. */
    
      wp_register_script( 'd6sscript',  plugin_dir_url( __FILE__ ) . 'js/scripts.js' );
    
    
    /* Enques the above scripts that have been registered otherwise they wont actually load */
    wp_enqueue_script('d6sgooglemaps');
    wp_enqueue_script('d6spolyfill');
    wp_enqueue_script('d6sscript');
  
}

add_action('wp_enqueue_scripts', 'd6s_map');
