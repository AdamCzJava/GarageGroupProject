<!-- PHP file fillSupplierList.php 
	 made by Adam Czaplewski
	 C00263447. This website 
	 filles the supplier names
     listbox-->
<?php
/*It includes code from file database.php into that file which makes a connection to the database*/
include 'database.php';
//The sql query to get all deatails about suppliers from the Supplier table
$sql = "SELECT * from Supplier where Deleted = 0";
/* If query was performed print output with the values which has been entered by the user otherwise */
if(!$result = mysqli_query($con, $sql))
	{/* Prints message and exit from the current php script */
		die('Error in querying database' . mysqli_error($con));
	}
//Return the list box element to amendsupplier2.php and use the onclick event to run the populate() function to modify the contents of the input boxes based on the specified index.
echo "<select name ='name' class='list' id ='name' onclick='populate()'>";
//Fill in the list box with the results of the query and get supplier information.
while($row = mysqli_fetch_array($result))
	{	
		$supplierid = $row['SupplierID'];                           
		$name = $row['SupplierName'];
		$addline1 = $row['AddressLine1'];
		$street = $row['AddressStreet'];
		$town = $row['AddressTown'];
		$county = $row['AddressCounty'];
		$country = $row['AddressCountry'];
		$phone = $row['PhoneNumber'];
		$website = $row['WebsiteAddress'];
		$email = $row['EmailAddress'];
		//Put all of the supplier's information in a string and use commas to separate them.
		$alldetails = "$supplierid,$name,$addline1,$street,$town,$county,$country,$phone,$website,$email";
		echo "<option value='$alldetails'>$name</option>";
	}
echo "</select>";
/*It closes a previously opened database connection.*/
mysqli_close($con);
?>