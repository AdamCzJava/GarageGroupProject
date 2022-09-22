<!-- PHP file for adding a new supplier 
	 records into the database (Supplier table)
     made by Adam Czaplewski
	 C00263447-->
<!DOCTYPE html>
<?php
/*It includes code from file database.php into that file which makes a connection to the database*/
include 'database.php';
/* Outpit the strings and collects data from the user input*/
echo "The details sent down are: <br>";
echo "First Name is :" . $_POST['name'] . "<br>";
echo "AddressLine1 :" . $_POST['addline1'] . "<br>";
echo "Street is :" . $_POST['street'] . "<br>";
echo "Town is :" . $_POST['town'] . "<br>";
echo "County is :" . $_POST['county'] . "<br>";
echo "Country is :" . $_POST['country'] . "<br>";
echo "Telephone number is:" . $_POST['phonenumber'] . "<br>";
echo "Website address is:" . $_POST['website'] . "<br>";
echo "Email address is:" . $_POST['email'] . "<br>";
//The sql query to get a Supplier ID from the Supplier table 
$sql = "Select SupplierID from Supplier";
/* If query was performed print output with the values which has been entered by the user otherwise */
if (!$result=mysqli_query($con,$sql))
	{/* Prints message and exit from the current php script */
		die ("An Error in the SQL Query: " . mysqli_error($con) );
	}/*We fetching one row of data from the result set and returns it as an array*/
while($row = mysqli_fetch_array($result))
	{/*Key variable storing the highest Supplier ID and casting to integer*/	
		$Key =(int) $row ['SupplierID'];
	}/*Key variable is incremented by one*/
$Key = $Key + 1;
//The sql query to insert Supplier record into the table
$sql = "Insert into Supplier (SupplierID,SupplierName,AddressLine1,AddressStreet,AddressTown,AddressCounty,AddressCountry,PhoneNumber,WebsiteAddress,EmailAddress)
VALUES ('$Key','$_POST[name]','$_POST[addline1]','$_POST[street]','$_POST[town]','$_POST[county]','$_POST[country]','$_POST[phonenumber]' ,'$_POST[website]','$_POST[email]')";
/* If query was performed print output with the values which has been entered by the user otherwise */
if (!mysqli_query($con,$sql))
	{/* Prints message and exit from the current php script */
		die ("An Error in the SQL Query: " . mysqli_error($con) );
	}
echo "<br>A record has been added for " . $_POST['name'] . " " . $_POST['addline1'] . " " . $_POST['street'] . " " . $_POST['town'] . " " . $_POST['county'] . " " . $_POST['country'] . " " . $_POST['phonenumber'] . " " . $_POST['website'] . " " . $_POST['email'] . ".";
/*  It closes a previously opened database connection.*/
mysqli_close($con);
?>
<form action = "addsupplier.html" method = "POST" >
<br>
		<input type="submit" value = "Return to Insert Page"/>
</form>		