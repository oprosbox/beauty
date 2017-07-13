<?php

include_once (__DIR__."/functions_parrent.php");

function create_footer_str($dateCreate){
	$str=' ';
	$date= date("Y");
	if($dateCreate==$date){
		$str="@copyright $dateCreate";
	}else{
	$str="@copyright" .($date-$dateCreate);	
	}	
	return $str;
}
