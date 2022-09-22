<!-- PHP file for amend supplier 
	 made by Adam Czaplewski
	 C00263447. This website 
	 allow the user to amend 
     and view any supplier record
     from the database (Supplier table) -->
<!DOCTYPE HTML >
<!--Language tag for html -->
<html lang="en">
<head>
<!--Character encoding tag -->	
<meta charset="UTF-8">
<!--title of the page-->	
<title>Amend/View a supplier</title>
<!--link to external style sheets addsupplier-->	
<link rel="stylesheet" href="addsupplier.css">
<!--link to the Google fonts-->	
<link href="https://fonts.googleapis.com/css?family=Merriweather%7CMontserrat&display=swap" rel="stylesheet">
</head>
<body>
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
    the form data is sent for processing to the amendsupplier.php-->
<form method="POST" action= "amendsupplier.php">
<!--It sets up the content at the top of the form-->	
<h1><br><div class="title"><img src="Images/amendsupplier.png" height= "150" width= "150" alt="amend supplier" class="supa"><span style="color:gold" >Change a supplier record</span><img src="Images/amendsupplier.png" height= "150" width= "150" alt="Italian Trulli" class="supb"></div></h1>
<fieldset>
<!--the top part of the form-->	
<legend>Choose a Supplier to Amend</legend>
<!--Choose a Supplier to Amend section with an drop down 
list of the supplier names, supplier id input text box for the name.
A validation and placeholder was set only for the name field.-->   
  <div class="inputbox">
  <label for="fname">Supplier ID:</label>
  <input type="text" id="SupplierID" name="supplierid" disabled required><br>
  </div>
  <div class="inputbox">
  <label for="name">Supplier Name:</label>
  <!--The list box with supplier's names loaded from fillSupplierList.php file-->
  <?php include 'fillSupplierList.php'; ?>
  <br>
  </div>
  <div class="inputbox">
  <label for="fname">Name:</label>
  <input type="text" id="supplier" name="supplier" disabled  title="The input should be the name" placeholder="Enter a name" pattern="[a-zA-Z\s]+" required><br>
  </div>
  </fieldset>
  <br>
  <fieldset>
<!--Supplier address section with an amend/view fields: street number,
street name, town, county, country, and  validation for
each of the input boxes with text displays as a helper for the user
what kind of text should be entered in-->	  
  <legend>Supplier address</legend>
  <div class="formsections">
  <div class="fields">
  <div class="inputbox">
  <label for="street">Street number:</label>
  <input type="text" id="addline1" name="addline1" disabled title="The input should be a street number" placeholder="Enter a street number" pattern="[0-9\s]+" required><br>
  </div>
  </div>
  <div class="fields">
  <div class="inputbox">
  <label for="street">Street name:</label>
  <input type="text" id="street" name="street" disabled  title="The input should be a street" placeholder="Enter the street name" pattern="[A-Za-z\s]+" required><br>
  </div>
  </div>
  </div>
  <div class="formsections">
  <div class="fields">
  <div class="inputbox">
  <label for="town">Town:</label>
  <input type="text" id="town" name="town"  disabled  title="The input should be your town" placeholder="Enter the town" pattern="[A-Za-z\s]+" required><br>
  </div>
  </div>
  <div class="fields">
  <div class="inputbox">
  <label for="county">County:</label>
  <input type="text" id="county" name="county" disabled title="The input should be your county" placeholder="Enter county" pattern="[A-Za-z\s]+" required><br>
  </div>
   </div>
  </div>
  <div class="inputbox">
  <label for="county">Country:</label>
  <input type="text" id="country" name="country" disabled  title="The input should be your country" placeholder="Enter country" pattern="[A-Za-z\s]+"><br>
  </div>
  </fieldset>
  <br>
<!--Supplier contact details section with an amend/view fields: phone number,
the website address, email address, and  validation for
each of the fields and with text displays as a helper for the user
what kind of text should be entered in-->	
  <fieldset>
  <legend>Supplier contact details</legend>
  <div class="inputbox">
  <label for="phone number">Phone number:</label>
  <input type="text" id="phonenumber" name="phonenumber" disabled  title="The input should be XXX-XXX-XXX" placeholder="123456789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required><br>
  </div>
  <div class="inputbox">
  <label for="website">Website address:</label>
  <input type="url" id="website" name="website" disabled  title="The input should be your website" placeholder="Enter website" ><br>
  </div>
    <div class="inputbox">
  <label for="email">Email address:</label>
  <input type="email" id="email" name="email" disabled  title="The input should be your email" placeholder="Enter an email"><br>
  </div><br>
  </fieldset>
 <br>
		<div class="mybutton">
			<!--Confirm changes and Amend Supplier buttons
                When Amend Supplier is clicked we can change the 
                values in the fields togglelock() function.
				When Confirm changes button is clicked we call
                confirmcheck() function which allows us to
                press ok or cancel to perform or discard
                amend operation for the selected record-->
			<input type ="submit" class ="button"  value= "Confirm changes" onclick="return confirmcheck()">
			<input type ="button" class ="button" id="amendbutton" value= "Amend Supplier" onclick="togglelock()">
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
			<a Href="amendsupplier2.php" style="text-align:center">Back to Top</a>
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
	
</div>
<script>
/*Script section for function togglelock() 
	                 function confirmcheck()
					 function populate()*/
    //Function toggleLock() is used to enable and disable texboxes	
	function togglelock()
	    {//When the value of the amend button is equal Amend Supplier it will enable all textboxes 
		if(document.getElementById("amendbutton").value == "Amend Supplier")
		{
			document.getElementById("supplier").disabled = false;
			document.getElementById("addline1").disabled = false;
			document.getElementById("street").disabled = false;
			document.getElementById("town").disabled = false;
			document.getElementById("county").disabled = false;
			document.getElementById("country").disabled = false;
			document.getElementById("phonenumber").disabled = false;
			document.getElementById("website").disabled = false;
			document.getElementById("email").disabled = false;
			document.getElementById("amendbutton").value = "View Supplier";
		}
		else//Else it will disable all textboxes
		{	
			document.getElementById("supplier").disabled = true;
			document.getElementById("addline1").disabled = true;
			document.getElementById("street").disabled = true;
			document.getElementById("town").disabled = true;
			document.getElementById("county").disabled = true;
			document.getElementById("country").disabled = true;
			document.getElementById("phonenumber").disabled = true;
			document.getElementById("website").disabled = true;
			document.getElementById("email").disabled = true;
			document.getElementById("amendbutton").value = "Amend Supplier";
		}
	}//Function confirmcheck() is used to confirm changes which was made by the user
	function confirmcheck()
	{	//Request confirmation from the user and save its response in a variable response.
		var response;
		response = confirm('Do you want to confirm the changes to suppliers record?'); 
		//If the user response was ok it will enable textboxes, submit the values and return true 
		if(response)
		{
			document.getElementById("SupplierID").disabled = false;
			document.getElementById("name").disabled = false;
			document.getElementById("addline1").disabled = false;
			document.getElementById("street").disabled = false;
			document.getElementById("town").disabled = false;
			document.getElementById("county").disabled = false;
			document.getElementById("country").disabled = false;
			document.getElementById("phonenumber").disabled = false;
			document.getElementById("website").disabled = false;
			document.getElementById("email").disabled = false;
			return true;
		}
		else//If false, call the populate and togglelock functions.
		{
			populate();
			togglelock();
			return false;
		}
	}
    //The populate () function takes the result returned by fillSupplierList.php to the Listbox value, separates it using as a delimiter, and       fills text box values.
	function populate()
	{
		//Creating the variable sel which stores list of the supplier names
		var sel = document.getElementById("name");
		//Creating the variable result and setting it to the value of the sel index that was selected.
		var result;
		result = sel.options[sel.selectedIndex].value;
		//Using the comma sign to divide values
		var supplierDetails = result.split(',');
		//It will fill the textboxes with the values
		document.getElementById("SupplierID").value = supplierDetails[0];
		document.getElementById("supplier").value = supplierDetails[1];
		document.getElementById("addline1").value = supplierDetails[2];
		document.getElementById("street").value = supplierDetails[3];
		document.getElementById("town").value = supplierDetails[4];
		document.getElementById("county").value = supplierDetails[5];
		document.getElementById("country").value = supplierDetails[6];
		document.getElementById("phonenumber").value = supplierDetails[7];
		document.getElementById("website").value = supplierDetails[8];
		document.getElementById("email").value = supplierDetails[9];
	}
	

</script>
</div>
</body>
</html>