<?php 
	//get password to database
	$file = fopen("password.txt", "r") or die ("Cannot access to password text");
	$passRead = fread($file,filesize("password.txt"));
	fclose($file);
	
    // These variables define the connection information for your MySQL database 
    $username = "vnguyen42"; 
    $password = $passRead; 
    $host = "mysql.eecs.ku.edu"; 
    $dbname = "vnguyen42"; 
    
        // Opens a connection to your database
        $conn = new mysqli("$host", "$username", "$password", "$dbname"); 
    
    if($conn->connect_error) { 
        die("Failed to connect to the database: " . $conn->connect_error);
    } 
    
    
    session_start(); 

    