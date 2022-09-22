<!-- PHP file database.php 
     made by Adam Czaplewski
	 C00263447. It makes a 
     connection to the database-->
<?php
//The variables represent hostname, username, password and database name
$hostname = "localhost";
$username = "garage";
$password = "project";
$dbname = "mechanic_";
//Creating a connection object
$con = mysqli_connect($hostname, $username, $password, $dbname);
//If there is no connection, terminate the program and print an error message. 
if(!$con)
{
	die ("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>