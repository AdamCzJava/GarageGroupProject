<!-- PHP file amendBooking.php 
     made by Adam Czaplewski
	 C00263447.Script to mark
     booking as commence as it
     is inserting booking table-->
<?php
//We want to save a booking id into the session variable
session_start();
$_SESSION['bookingid']=$_POST['bookingid'];
//It includes code from file database.php into that file which makes a connection to the database
include 'database.php';
//The sql query to update a Booking table by setting JobCommenced to one
$sql = "Update Booking set JobCommenced = '1' where BookingID = '$_POST[bookingid]' ";
/* If query was performed print output with the values which has been entered by the user otherwise */
if (!$result=mysqli_query($con,$sql))
	{/* Prints message and exit from the current php script */
		die ("An Error in the SQL Query: " . mysqli_error($con) );
	}
//The sql query to select a JobID from Job table
$sql = "Select JobID from Job";
/* If query was performed print output with the values which has been entered by the user otherwise */
if (!$result=mysqli_query($con,$sql))
	{/* Prints message and exit from the current php script */
		die ("An Error in the SQL Query: " . mysqli_error($con) );
	}/*We fetching one row of data from the result set and returns it as an array*/
while($row = mysqli_fetch_array($result))
	{/*Key variable storing the highest Job ID and casting to integer*/	
		$Key =(int) $row['JobID'];
	}/*Key variable is incremented by one*/
$Key = $Key + 1;
//The sql query to insert into Job table values from the form
$sql = "Insert into Job (JobID,BookingID,CarModel,RegNumber,CurrentMileage,Instructions,Deleted) 
VALUES ('$Key','$_POST[bookingid]','$_POST[model]','$_POST[reg]','$_POST[mileage]','$_POST[instructions]', 0)";
//If sql query can not be performed display an error message and exit from the current php script
if(!mysqli_query($con, $sql))
	{	
		die('Error in querying database' . mysqli_error($con));
	}
/*It closes a previously opened database connection.*/
mysqli_close($con);

header ( 'Location: jobscard.php');

?> 
	
	
