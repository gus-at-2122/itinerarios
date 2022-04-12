<?php

/*Coger el user id*/

$user_id = 2;

/*Crear un itinerario nuevo*/
$post_data = array(
	'post_title'    => 'Nuevo itineruio',
	'post_type'     => 'my_iti',

);
wp_insert_post( $post_data, $error_obj );

/*Vincular pasos con ineraior*/

/*Vincular usuario con itinierario*/
