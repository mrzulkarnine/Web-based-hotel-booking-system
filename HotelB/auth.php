<?php
$username = "unleashe_hotel";
$password = "unleashe_hotel";
$hostname = "localhost"; 

//connection to the database
$mysqli = mysqli_connect('localhost', 'root', '', 'unleashe_hotel');

if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
// $dbhandle = mysqli_connect($hostname, $username, $password) 
//  or die(mysql_error());

// //select a database to work 
// $db = "unleashe_hotel";
// $selected = mysql_select_db($db,$dbhandle) 
//   or die(mysql_error());


?>