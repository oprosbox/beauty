<?php


add_action( 'wp_enqueue_scripts', 'jquery_method' );
function jquery_method(){
	wp_enqueue_script( 'jquery' );
	//wp_enqueue_script( 'newscript', get_stylesheet_directory_uri(). '/mscript.js');
}

function copyright_data( $data_start ){
	$data_end= date("Y");
	$strRet=' ';
	if($data_start!=$data_end){$strRet=$data_start.' - '.$data_end;}
			else{$strRet=$data_start;}
return $strRet;			
}

add_shortcode('home_url', 'home_url' );

function mylogo()
{ $str_ret2=home_url();
   $str_ret= "<div class=\"mylogo\"><img src=\"".$str_ret2."/wp-content/themes/vivalavita/images/final_v3.jpg\"></div>" ;
return $str_ret;
}

function load_bootstrap(){
//wp_enqueue_script('bootstrap.min-js', get_stylesheet_directory_uri().'/bootstrap/js/bootstrap.min.js');
wp_enqueue_style('bootstrap.min-css', get_stylesheet_directory_uri().'/bootstrap/css/bootstrap.min.css');
}
add_action('wp_enqueue_scripts', 'load_bootstrap');