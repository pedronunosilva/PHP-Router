<?php
	
	// Pages file type
	
	$type = '.php';
	
	// Get page from url
	
	$url = explode( '/', $_SERVER['PATH_INFO'] );
	
	array_shift( $url );
	
	$page = (empty($url[0])) ? 'index'.$type : strtolower($url[0]).$type;
	
	// Get static page
	
	if ( file_exists("pages/" .$page) ) {
           
           require_once("pages/" .$page);
    
    	} else {
          
          require_once("pages/404.php");
         	
      	}
