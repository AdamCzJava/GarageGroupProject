<!-- PHP file amendsupplier.php 
     made by Adam Czaplewski
	 C00263447. It will amend
     the supplier record and
     upload that into
     the database (Supplier table)-->
<?php
//It includes code from file database.php into that file which makes a connection to the database
include 'database.php';
//The sql query to update records in the supplier table
$sql = "Update Supplier set SupplierName = '$_POST[supplier]',AddressLine1='$_POST[addline1]', AddressStreet='$_POST[street]', AddressTown='$_POST[town]',   AddressCounty='$_POST[county]', AddressCountry='$_POST[country]',PhoneNumber='$_POST[phonenumber]',  WebsiteAddress='$_POST[website]', EmailAddress='$_POST[email]' Where SupplierID = '$_POST[supplierid]'";
echo "SQL:  " . $sql ;
//If query was performed print output with the values which has been entered by the user otherwise  */
if(!mysqli_query($con, $sql))
	{	//prints error message and exit from the current php script
		die('Error in querying database' . mysqli_error($con));
	}
echo "A record has been amended with values " . $_POST['name'] . " " . $_POST['addline1'] . " " . $_POST['street'] . " " . $_POST['town'] . " " . $_POST['county'] . " " . $_POST['country'] . " " . $_POST['phonenumber'] . " " . $_POST['website'] . " " . $_POST['email'] . ".";
//It closes a previously opened database connection.
mysqli_close($con);
?> 
<form action = "amendsupplier2.php" method = "POST" >
<br>
		<input type="submit" value = "Return to Main Page"/>

</form>		
