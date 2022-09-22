<!-- HTML file CommencementJob.html.php 
	 made by Adam Czaplewski C00263447.
     This website displays today's job 
     records and allows the user to add
     some job details and prints Job Card-->
<!DOCTYPE HTML >
<!--Language tag for html -->
<html lang="en">
<head>
<meta charset="UTF-8">
<!--title of the page-->	
<title>Commencement of job</title>
<!--link to external style sheets addsupplier.css-->	
<link rel="stylesheet" href="addsupplier.css">
<!--link to the Google fonts-->	
<link href="https://fonts.googleapis.com/css?family=Merriweather%7CMontserrat&display=swap" rel="stylesheet">
</head>
<body>
<!--The main wraper div tag for the website controlling width and dimensions-->	
<div id="wrapper">
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
		  <a href="r../stub.html">Receive Deliveries</a>
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
		  <a href="../Daniel/amendcustomer.html">Amend/View an Customer</a>
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
	  <li><a href="CompletionJob.php" >Completion of Job</a></li> 
	</ul>
	<!--Remove page breaks as content is added -->
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
</div>
<div class="content">
<div class="formcontainer">
<!--When form is filled and the submit button was clicked, 
    the form data is sent for processing to the amendBooking.php.php-->
<form method="POST" action= "amendBooking.php">
<!--It sets up the content at the top of the form-->	
<h1><br><div class="title"><img src="Images/commencementjob.png" height= "150" width= "150" alt="Italian Trulli" class="supa"><span style="color:gold" >Commencement of Job</span><img src="Images/commencementjob.png" height= "150" width= "150" alt="Italian Trulli" class="supb"></div></h1>
<fieldset>
<!--the top part of the form-->	 
<legend>The booking table</legend>
<!--The booking table section where today's jobs records are displayed -->   
  <div class="inputbox"><br><br><br><br><br>
		  <div class="header"> <label for="name">TODAY'S JOBES</label></div>
  <?php include 'FilleBookingTable.php'; ?>
  <br>
  </div>	
  </fieldset>
  <br>
  <fieldset>
<!--Details about the job section with with an input boxes:
    Model of the car, Registration number, Current mileage,
    Work instructions and  validation for each of the input 
    boxes with text displays as a helper for the user what kind
    of text should be entered in. Booking ID field can not be changed-->	  
  <legend>Details about the job</legend>
  <div class="inputbox">
  <label for="fname">Booking ID:</label>
  <input type="text" id="bookingid" name="bookingid" disabled  title="Booking ID" placeholder="Booking ID" pattern="[0-9]+" required><br>	 
  </div>
  <div class="formsections">
  <div class="inputbox">
  <label for="fname">Model of the car:</label>
  <input type="text" id="model" name="model" disabled  title="Model of the car" placeholder="Model of the car" pattern="[a-zA-Z\s]+" required>   <br>	  
  </div>
  <div class="inputbox">
  <label for="street">Registration number:</label>
  <input type="text" id="reg" name="reg" disabled title="Registration number" placeholder="Registration number" pattern="[0-9]{2-3}-[a-zA-Z]{2-3}-[0-9]{2-3}" required><br>
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
  </fieldset>
  <br>
  <br>
		<div class="mybutton">
			<!--Print Job card and Back to Job Menu buttons
                -->
			<input type ="submit" class ="button"  value= "Print Job Card" onclick="return confirmcheck()">
			<input type ="button" class ="button" id="amendbutton" value= "Back to Job Menu" onclick="togglelock()">
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
		<div id ="footerleft">
			<h3>Contact Info</h3>
			<p>12 Merriweather Business Park, Abbeyfield,<br>Carlow, Co.Carlow, R34WT76.<br><br>(045) 4332211<br><br>info@autorepairreland.ie</p>
		</div>
		<!--Div for middle column -->
		<div id = "footermiddle">
			<a Href="CommencementJob.html.php" style="text-align:center">Back to Top</a>
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
	</div>
</div>
<script>
/*Script section for function togglelock() 
	                 function confirmcheck()
					 function index() */
//Function toggleLock() is used to disable texboxes	
	function togglelock()
	{
		document.getElementById("bookingid").disabled = true;
		document.getElementById("model").disabled = true;
		document.getElementById("reg").disabled = true;
		document.getElementById("mileage").disabled = true;
		document.getElementById("instructions").disabled = true;
	}
	//Function confirmcheck() is used to confirm changes which was made by the user
	function confirmcheck()
	{	//Request confirmation from the user and save its response in a variable response.
		var response;
		response = confirm('Do you want to confirm the changes in the record?');
		//If the user response was ok it will enable textboxes, submit the values and return true  
		if(response)
	{	
		document.getElementById("bookingid").disabled = false;
		document.getElementById("model").disabled = false;
		document.getElementById("reg").disabled = false;
		document.getElementById("mileage").disabled = false;
		document.getElementById("instructions").disabled = false;
		return true;
	}
	else //If false, call the togglelock function.
	{
		togglelock();
		return false;
		}
	}
	//Function index() is used to
	function index(x){
	var table=document.getElementById("book");
	var rowIndex=x.rowIndex;
		
	var id = table.rows[rowIndex].cells[0].innerHTML;
		document.getElementById("bookingid").value = id;
		document.getElementById("model").disabled = false;
		document.getElementById("reg").disabled = false;
		document.getElementById("mileage").disabled = false;
		document.getElementById("instructions").disabled = false;
	}

</script>
</div>
</body>
</html>