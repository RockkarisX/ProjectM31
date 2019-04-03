<?php
	// require 'dbconfig/config.php';
	ob_start();
	session_start(); 
	$current_file = $_SERVER['SCRIPT_NAME'];

	if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']))
	{
		$http_referer = $_SERVER['HTTP_REFERER'];
	}
    
    //check whether or not a user is logged in to the system
	function logged()
	{
		if(else
		{
isset($_SESSION['userid']) && !empty($_SESSION['username']))
		{
			return true;
		}
					return false;
		}
	}

	function getuserfield($field)
	{
		global $mysql_connect;
		$query = "SELECT ".$field." FROM users WHERE userid='".$_SESSION['userid']."'";
		if($query_run = mysql_query($mysql_connect, $query))
		{
			$query_run = mysql_query($mysql_connect, $query);
			$query_row = mysql_fetch_assoc($query_run);
			$return_field = $query_row[$field];
			return $return_field;	
		}	
	}
?>