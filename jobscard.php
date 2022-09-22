<!-- PHP file jobscard.php 
	 made by Adam Czaplewski C00263447.
     This website displays Job Card.
     The fields: job type, 
     model of the car, registration
     number, current mileage, work
     instruction ,and additional details
     has to be entered by the mechanic-->
<!DOCTYPE HTML >
<!--Language tag for html -->
<html lang="en">
<?php
/*Start the php session*/		
session_start();
/*It includes code from file database.php into that file which makes a connection to the database*/	
include 'database.php';
//The SQL query to get all details about the unfinished job along with booking id  from the Job and Booking tables
$sql = "SELECT Booking.BookingID, JobType, Job.CarModel, Job.RegNumber, Job.CurrentMileage, Job.Instructions from Booking inner join Job on Booking.BookingID=Job.BookingID where Booking.BookingID='$_SESSION[bookingid]'";
/* If query was performed print output otherwise */
if(!$result = mysqli_query($con, $sql))
	{/* prints message and exit from the current php script */
		die('Error in querying database' . mysqli_error($con));
	}
//Fill in the list box with the results of the query and get job information.
while($row = mysqli_fetch_array($result))
	{	
		$bookingid = $row['BookingID'];                           
		$jobtype = $row['JobType'];
	    $carmodel = $row['CarModel'];
		$regnumber = $row['RegNumber'];
		$currentmileage = $row['CurrentMileage'];
		$instructions = $row['Instructions'];
		//Put all of the information in a string and use commas to separate them.
		$alldetails = "$bookingid,$jobtype,$carmodel,$regnumber,$currentmileage,$instructions";
		echo "<input id='star' type='hidden' value='$alldetails'>";
	}   // Determine if a variable is declared and is different than null
if(ISSET($_SESSION['bookingid']))
	{   //It will destroy the session variable bookingid
		unset($_SESSION['bookingid']);
	}
/*It closes a previously opened database connection.*/
mysqli_close($con);   
?>
<head>
<!--Character encoding tag -->		
<meta charset="UTF-8">
<!--title of the page-->	
<title>Jobs card</title>
<!--link to external style sheets addsupplier-->	
<link rel="stylesheet" href="addsupplier.css">
<!--link to the Google fonts-->		
<link href="https://fonts.googleapis.com/css?family=Merriweather%7CMontserrat&display=swap" rel="stylesheet">
</head>
<!--After a page has been loaded, run a JavaScript-->	
<body onload="populate ()">
<!--The main wraper div tag for the website controlling width and dimensions-->	
<div id="wrapper">
<!--Set up flex div for header with three columns-->	
<header class="flexheader">
<!--The header of the page with The Garage logo, Auto Repair Ireland title ,and car image-->	
	<div class="headercolumn1">
		<div><img src="Images/logo.png" height="120" width="190" alt="Logo Image"></div>
	</div>
	<div class="headercolumn2">
		<div><h1 id="title"><u><span style="color: red">Auto</span><span style ="color : #0E59B4">Repair</span></u><br>&nbsp;&nbsp;&nbsp;&nbsp;Ireland</h1></div>
	</div>
	<div class="headercolumn3">
		<div><img src="Images/Car.png" height="120" width="200" alt="Car Image" ></div>
	</div>
</header>
<!--Outline HTML and CSS code for hoverable dropdown menu from W3Schools link: https://www.w3schools.com/howto/howto_css_dropdown.asp -->
<!--Divs for dropdown nav bar -->
<nav class="dropdownnavmenu">
   <a href="../index.html">Home</a>
  <div class="dropdown">
	<!--Set up buttons and divs for menus with dropdown content -->
	<!--Button for Bookings Menu -->
    <button class="dropbtn">Bookings Menu
    </button>
		<div class="dropdown-content">
		  <a href="../Daniel/booking.php">Make a Booking</a>
		  <a href="../Daniel/cancelbooking.php">Cancel a Booking</a>
		</div>
	</div>
	<div class="dropdown">
	<!--Button for Jobs Menu -->
    <button class="dropbtn">Jobs Menu  
    </button>
		<div class="dropdown-content">
		  <a href="CommencementJob.html.php">Commencement of Job</a>
		  <a href="CompletionJob.php">Completion of Job</a>
		</div>
	</div>
	<div class="dropdown">
	<!--Button for Stock Control Menu -->
    <button class="dropbtn">Stock Control Menu  
    </button>
		<div class="dropdown-content">
		  <a href="../stub.html">Reorder Stock</a>
		  <a href="../stub.html">Receive Deliveries</a>
		</div>
	</div>
	<div class="dropdown">
	<!--Button for Supplier Accounts -->	
    <button class="dropbtn">Supplier Accounts 
    </button>
		<div class="dropdown-content">
		  <a href="../Eduardo/newinvoice.html">New Invoices from Supplier</a>
		  <a href="../Eduardo/receivedelivery.html">Payment to Suppliers</a>
		</div>
	</div>
	<div class="dropdown">
	<!--Button for File Maintenance Menu -->
    <button class="dropbtn">File Maintenance  
    </button>
		<div class="dropdown-content">
		  <a href="../Shane/addemployee.php">Add a New Employee</a>
		  <a href="../Shane/deleteemployee.php">Delete an employee</a>
		  <a href="../Shane/amendemployee.php">Amend/View an employee</a>
		  <a href="../Daniel/addCustomer.html">Add a New Customer</a>
		  <a href="../deletecustomer.html">Delete an Customer</a>
		  <a href="../Daniel/amendCustomer.html.php">Amend/View an Customer</a>
		  <a href="addsupplier.html">Add a New Supplier</a>
		  <a href="../stub.html">Delete an Supplier</a>
		  <a href="amendsupplier2.php">Amend/View an Supplier</a>
		  <a href="../Eduardo/AddItem.html">Add a New Stock Item</a>
		  <a href="../stub.html">Delete an Stock Item</a>
		  <a href="../Eduardo/Amenditem.php">Amend/View an Stock Item</a>
		</div>
	</div>
	<div class="dropdown">
	<!--Button for Reports Menu -->
    <button class="dropbtn">Reports Menu  
    </button>
		<div class="dropdown-content">
		  <a href="../stub.html">Stock Status Report</a>
		  <a href="../stub.html">Jobs Report</a>
		  <a href="../stub.html">Unpaid Invoice Report</a>
		</div>
	</div>
	<!--Link for Quit Option -->
	<a href="../Shane/login.php">Quit</a>
</nav>
<div class="flexcontainer">
<div class="flexsidemenu">
	<div>
	<h3>Supplier/Job menu</h3>
	<ul class="navmenu">
	  <li><a href="addsupplier.html" >Add Supplier</a></li>
	  <li><a href="amendsupplier2.php" >Amend/View Supplier</a></li>
	  <li><a href="CommencementJob.html.php" >Commencement of Job</a></li> 
	  <li><a href="CompletionJob.php" >Completion of Job</a></li> 
	</ul>
	<!--Remove page breaks as content is added -->
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
</div>
<div class="content">
<div class="formcontainer">
<!--When form is filled and the submit button was clicked, 
    the form data is sent for processing to the amendBooking.php-->
<form method="POST" action= "amendBooking.php">
<!--It sets up the content at the top of the form-->	
<h1><br><div class="title"><img src="Images/jobcard.png" height= "150" width= "150" alt="Italian Trulli" class="supa"><span style="color:gold" >Job Card</span><img src="Images/jobcard.png" height="150 "width="150" alt="Italian Trulli" class="supb">
</div></h1>
<!--the top part of the form-->	 
<br>
<fieldset>
<!--Details about the job section with an input box for the Job type,
model of the car, reg number, and current mileage are displayed.
Work details and additional information has to be key in by the
mechanic. Booking Id is automatically displayed from the previous page
-->	
 <legend>Details about the job</legend>
<div class="formsections">
  <div class="inputbox">
   <label for="fname">Booking ID:</label>
   <input type="text" id="bookingid" name="bookingid" disabled  title="Booking ID" placeholder="Booking ID" pattern="[0-9]+" required><br>	  
  </div>		  
  <div class="inputbox">
   <label for="fname">Job type:</label>
   <input type="text" id="jobtype" name="jobtype" disabled  title="JobType" placeholder="Job type" pattern="[0-9]+" required><br>	  
  </div>
</div>
<div class="formsections">
  <div class="inputbox">
  <label for="fname">Model of the car:</label>
  <input type="text" id="model" name="model" disabled  title="Model of the car" placeholder="Model of the car" pattern="[a-zA-Z\s]+" required>   <br>	  
  </div>
  <div class="inputbox">
  <label for="street">Registration number:</label>
  <input type="text" id="reg" name="reg" disabled title="Registration number" placeholder="Registration number" pattern="[a-zA-Z0-9\s]+" required><br>
  </div>
</div>
 <div class="formsections">
  <div class="inputbox">
  <label for="street">Current mileage</label>
  <input type="text" id="mileage" name="mileage" disabled  title="Current mileage" placeholder="Current mileage" pattern="[a-zA-Z0-9\s]+" required><br>
  </div>
  </div>
  <div class="inputbox">
  <label class="additionaldetailslabel" for="instructions">Work instructions</label>
   <textarea class="block" type="text" id="instructions" name="instructions"  title="Mechanic notes" placeholder="Mechanic notes" pattern="[a-zA-Z\s]+" rows="7" cols="7"></textarea><br>
  </div>  
</fieldset><br>
<fieldset>
  <legend>Additional Details</legend>
  <div class="inputbox">
  <label class="mechanic" for="fname">Mechanic notes:</label>
  <textarea class="additionaldetails" type="text" id="workdone" name="workdone"  title="Mechanic notes" placeholder="Mechanic notes" pattern="[a-zA-Z\s]+" rows="10" cols="10"></textarea><br>	  
  </div> 
  </fieldset>
  <br>
  <div class="mybutton"><!--Back to Job Menu button will transfer the user into the Commencement job page using onclick event-->
  <input type ="button" onclick="location.href='CommencementJob.html.php';" class ="button" id="amendbutton" value= "Back to Job Menu">
		<br>
		<br>
		<br>
		</div>
	    <br><br>
        <br><br>
        <br>
        </form>
</div>	
</div>
</div>
<footer>	
<!--Footer with flex container and three columns -->	
	<div class="flexfooterbox">
		<!--Div for left column -->
		<div id ="footerleft">
			<h3>Contact Info</h3>
			<p>12 Merriweather Business Park, Abbeyfield,<br>Carlow, Co.Carlow, R34WT76.<br><br>(045) 4332211<br><br>info@autorepairreland.ie</p>
		</div>
		<!--Div for middle column -->
		<div id = "footermiddle">
			<a Href="jobscard.php" style="text-align:center">Back to Top</a>
		</div>
		<!--Div for right column -->
		<div id = "footerright">
			<h3>Opening Hours</h3>
			<!--Right column, seperating into two flex columns -->
			<div class="flexbox">
				<div class = "flexcolumn">
					<p style="text-align:left"> Monday<br> Tuesday  <br>Wednesday  <br>	Thursday <br>Friday <br>Sat/Sun </p>
				</div>
				<div class = "flexcolumn">
					<p style="text-align:left ; color : #0556a8"> 09:00AM - 05:00PM <br> 09:00AM - 05:00PM  <br>09:00AM - 05:00PM  <br>	09:00AM - 05:00PM <br>09:00AM - 05:00PM <br>Closed </p>
				</div>
			</div>
		</div>
	</div>
</footer>
<script>
//The populate () function takes value of input id "star", separates it using as a delimiter, and fills text box values.
	function populate()
	{
		//Creating the variable sel which is a reference to the hidden input star
		var sel = document.getElementById("star");
		//Creating the variable result
		var result;
		//Store value of hidden input star in variable result
		result = sel.value;
		//Using the comma sign to divide values
		var jobDetails = result.split(',');
		//It will fill the textboxes with the values
		document.getElementById("bookingid").value = jobDetails[0];
		document.getElementById("jobtype").value = jobDetails[1];
		document.getElementById("reg").value = jobDetails[3];
		document.getElementById("model").value = jobDetails[2];
		document.getElementById("mileage").value = jobDetails[4];
		document.getElementById("instructions").value = jobDetails[5];
	}
	
</script>
</div>
</body>
</html>