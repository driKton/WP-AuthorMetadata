<?php
/**
* Plugin Name: WP Author Metadata
* Plugin URI: https://github.com/driKton
* Description: Add new contact data to author profile in Wordpress
* Version: 1.0.0
* Author: Carlos Moreno
* Author URI: http://twitter.com/drikton
* Based on the work of Joost de Valk
* License: Apache License 2
*/

function author_metadata( $metadata ) {
// Add Twitter
$metadata['twitter'] = 'Twitter';
// Add Facebook
$metadata['facebook'] = 'Facebook';
// Add LinkedIn
$metadata['linkedin'] = 'LinkedIn';

 
return $metadata;
}
add_filter('user_contactmethods','author_metadata',10,1);
?>