<?php
    error_reporting(0);
 		 ob_start();
  
 
 	header("Content-Type: text/html;charset=UTF-8");
		 

				 DEFINE ('DB_USER', 'joganireinfo');
				 DEFINE ('DB_PASSWORD', 'loveyoudad9820102993');
				 DEFINE ('DB_HOST', 'localhost'); //host name depends on server
				 DEFINE ('DB_NAME', 'joganireinfo');
		 

	
	$mysqli =mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

	if ($mysqli->connect_errno) 
	{
    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	mysqli_query($mysqli,"SET NAMES 'utf8'");	 
 
  
?> 
	 
 