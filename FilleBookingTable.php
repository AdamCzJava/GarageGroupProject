<!-- PHP file FillBookingTable.php 
	 made by Adam Czaplewski
	 C00263447. This website 
	 filles the booking table-->
<?php	
/*It includes code from file database.php into that file which makes a connection to the database*/
include 'database.php';
/*All date/time functions in the script use this timezone as their default.*/
date_default_timezone_set ('UTC');
/*Creates data object*/
$myDate= date("Y-m-d");
//The sql query to get some deatails to fill out the booking table about customer and booking from the Supplier and Booking tables
	$sql = "SELECT Booking.CustomerID, Booking.BookingID, Customer.Surname, Customer.FirstName, Customer.AddressLine1, Customer.AddressStreet, Customer.AddressTown FROM Booking inner join Customer on Customer.CustomerID= Booking.CustomerID where Booking.Date = '$myDate' AND  JobCommenced = '0' ";
/* If query was performed print output with the values which has been entered by the user otherwise */
if(!$result = mysqli_query($con, $sql))
	{   /* Prints message and exit from the current php script */
		die('Error in querying database' . mysqli_error($con));
	}
//Returns the number of affected rows from the previous query
$row_count = mysqli_affected_rows($con);
//If number of the rows is equal to zero then it prints table with the message that there is no outstending jobs today
if($row_count==0)
	{
		echo "<table class='comtable'>
			  <tr><th>Todays bookings</th></tr>";
		echo "<tr><td>The are no outstending jobs today</td></tr></table>";
	}
else
	{//Else it will display the record of the jobs booked for the current day in the table
		echo "<table id= book class='comtable'>
			  <tr><th class = id>Booking id</th><th>Customer name</th><th>Customer address</th></tr>";
	    /*We fetching one row of data from the result set and returns it as an array*/
		while ($row=mysqli_fetch_array($result))	
		{   //When query is performed it will prints output with the values which has been entered by the user
			echo "<tr onclick= index(this) ><td class = id>".$row['BookingID']."</td><td>".$row['FirstName']. " ". $row['Surname']."</td>
				  <td>".$row['AddressLine1']." ". $row['AddressStreet'].", ". $row['AddressTown']."</td>
			      </tr>";
		}
		echo "</table>";
}/*It closes a previously opened database connection.*/
 mysqli_close($con);
?>