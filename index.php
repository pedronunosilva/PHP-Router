<?php
	
	$url = explode( '/', $_SERVER['PATH_INFO'] );
	
	array_shift( $url );
	
	$page = (empty($url[0])) ? 'index.php' : strtolower($url[0]).'.php';
	
	if ( file_exists("pages/" .$page) ) {
           
           require_once("pages/" .$page);
    
    } else {
          
          require_once("pages/404.php");
         	
      }