<?php
require_once("connection.php");
	// This file is the place to store all basic functions

	function clean_text($string) {

		$string = trim($string);
		$string = stripslashes($string);
		$string = htmlspecialchars($string);
		return $string;
	
	}
	
	
	
	function mysql_prep( $value ) {
		global $mysqli;
		$magic_quotes_active = get_magic_quotes_gpc();
		$new_enough_php = function_exists( "mysqli_real_escape_string" ); // i.e. PHP >= v4.3.0
		if( $new_enough_php ) { // PHP v4.3.0 or higher
			// undo any magic quote effects so mysql_real_escape_string can do the work
			if( $magic_quotes_active ) { $value = stripslashes( $value ); }
			$value = $mysqli->real_escape_string( $value );
		} else { // before PHP v4.3.0
			// if magic quotes aren't already on then add slashes manually
			if( !$magic_quotes_active ) { $value = addslashes( $value ); }
			// if magic quotes are active, then the slashes already exist
		}
		return $value;
	}
	function url($string){
		$url=preg_replace('/[^a-z0-9-]+/','-',strtolower($string));
		return $url;
		}

	function redirect_to( $location ) {
		if ($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}
	function redirect_back() {
		$location= $_SERVER['HTTP_REFERER'];
		redirect_to($location);	
		
	}
	function ago($time){
		$now=strtotime("now");
		$diff=$now-$time;
		$day=60*60*24;
		$d1=$diff/$day;
		if($d1<=1){$n="Today";}
		else{
			$n=round($d1)." days ago";
			}
		return($n);
		}
	
?>