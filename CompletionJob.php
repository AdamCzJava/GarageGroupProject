<!-- PHP file Completion.php 
	 made by Adam Czaplewski
	 C00263447. This website 
	 complete the job and stock
     items to the table-->
<!DOCTYPE HTML >
<!--Language tag for html -->
<html lang="en">
<?php session_start();
?>
<head>
<meta charset="UTF-8">
<!--title of the page-->	
<title>Completion of job</title>
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
<!--The dropdown navigation bar for Home, Booking menu, Jobs menu, Stock Control menu
    Supplier accounts, File Maintenance Menu, Reports Menu, and Quit Option-->	
<nav class="dropdownnavmenu">
   <a href="index.html">Home</a>
  <div class="dropdown">
	<!--Set up buttons and divs for menus with dropdown content -->
	<!--Button for Bookings Menu -->
    <button class="dropbtn">Bookings Menu
    </button>
		<div class="dropdown-content">
		  <a href="bookingmenu.html">Make a Booking</a>
		  <a href="cancelbooking.html">Cancel a Booking</a>
		</div>
	</div>
	<div class="dropdown">
	<!--Button for Jobs Menu -->
    <button class="dropbtn">Jobs Menu  
    </button>
		<div class="dropdown-content">
		  <a href="jobcommence.html">Commencement of Job</a>
		  <a href="jobcompletion.html">Completion of Job</a>
		</div>
	</div>
	<div class="dropdown">
	<!--Button for Stock Control Menu -->
    <button class="dropbtn">Stock Control Menu  
    </button>
		<div class="dropdown-content">
		  <a href="reorderstock.html">Reorder Stock</a>
		  <a href="receivedelivery.html">Receive Deliveries</a>
		</div>
	</div>
	<div class="dropdown">
	<!--Button for Supplier Accounts -->	
    <button class="dropbtn">Supplier Accounts 
    </button>
		<div class="dropdown-content">
		  <a href="reorderstock.html">New Invoices from Supplier</a>
		  <a href="receivedelivery.html">Payment to Suppliers</a>
		</div>
	</div>
	<div class="dropdown">
	<!--Button for File Maintenance Menu -->
    <button class="dropbtn">File Maintenance  
    </button>
		<div class="dropdown-content">
		  <a href="addemployee.php">Add a New Employee</a>
		  <a href="deleteemployee.php">Delete an employee</a>
		  <a href="amendemployee.php">Amend/View an employee</a>
		  <a href="addecustomer.html">Add a New Customer</a>
		  <a href="deletecustomer.html">Delete an Customer</a>
		  <a href="amendcustomer.html">Amend/View an Customer</a>
		  <a href="addsupplier.html">Add a New Supplier</a>
		  <a href="deletesupplier.html">Delete an Supplier</a>
		  <a href="amendsupplier2.php">Amend/View an Supplier</a>
		  <a href="addstock.html">Add a New Stock Item</a>
		  <a href="deletestock.html">Delete an Stock Item</a>
		  <a href="amendstock.html">Amend/View an Stock Item</a>
		</div>
	</div>
	<div class="dropdown">
	<!--Button for Reports Menu -->
    <button class="dropbtn">Reports Menu  
    </button>
		<div class="dropdown-content">
		  <a href="stockreport.html">Stock Status Report</a>
		  <a href="jobsreport.html">Jobs Report</a>
		  <a href="unpaidinvoicereport.html">Unpaid Invoice Report</a>
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
	</ul>
	<!--Remove page breaks as content is added -->
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
</div>
<div class="content">
<div class="formcontainer">
<!--When form is filled and the submit button was clicked, 
    the form data is sent for processing to the amendBooking.php.php-->
<form method="POST">
<!--It sets up the content at the top of the form-->	
<h1><br><div class="title"><img src="Images/completionjob.png" height= "150" width= "150" alt="Italian Trulli" class="supa"><span style="color:gold" >Completion of Job</span><img src="Images/completionjob.png" height= "150" width= "150" alt="Italian Trulli" class="supb"></div></h1>
 <fieldset>
<!--the top part of the form-->		 
  <legend>The booking table</legend>
<!--The booking table section where today's jobs records are displayed -->   
  <div class="inputbox"><br><br><br><br><br>
		  <div class="header"> <label for="name">TODAY'S JOBES</label></div>
  <?php include 'FilleJobTable.php'; ?>
		  <br>
  </div>
  </fieldset>
  <br>
  <fieldset>
<!--Details about the job section with with an input boxes:
    Total time, Work done, Spare parts, also stock number
    and quantity for the parts.-->	  
  <legend>Details about the job</legend>
	    <div class="inputbox">
  <label for="totaltime" class="label">Total time</label>
  <input type="text" id="totaltime" name="totaltime"  disabled rows="10" pattern="[A-za-z]+" cols="10"></div>	  
<br>
	  <div class="inputbox">
  <label class="worklabel2" for="fname">Work done:</label>
 <textarea class="block2" type="text" id="instructions" name="instructions"  title="Mechanic notes" placeholder="Mechanic notes" pattern="[a-zA-Z\s]+" rows="7" cols="7"></textarea><br>	  
  </div><br>
	  <legend>Spare parts</legend>
	    <div class="inputbox">   
  <label for="jobid">Job id:</label>
  <input type="text" id="jobid" name="jobid" readonly pattern="[0-9]*"  required><br>  
  </div> 
	    <div class="formsections">
  <div class="inputbox">   
  <label for="number">Stock number:</label>
  <input type="text" id="number" name="number" disabled pattern="[0-9]*"><br>	  
  </div> 
 <div class="inputbox">
  <label for="quantity">Quantity:</label>
  <input type="text" id="quantity" name="quantity" pattern="[0-9]*" disabled><br>	  
  </div>  
  </div>
	  <table class="comtable" id="jobtable"><tr><th>Stock ID</th><th>Quantity</th>
	</table>
  </fieldset>
  <br>
  <br>
		<div class="mybutton">
			<!--Confirm changes and Add a item buttons-->
			<input type ="submit" class ="button"  value= "Confirm changes" formaction="addItemsToTable.php" onclick="return confirmcheck()">
			<input type ="button" class ="button" id="amendbutton" value= "Add a item " onclick= "additem()">
			<input type ="hidden" class ="text" name="query" id="query">
			<br>
			<br>
			<br>
		</div
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
			<a Href="CompletionJob.php" style="text-align:center">Back to Top</a>
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
	//Array variable num to store number of items
	var num= new Array();
	//function add item. It addes an item into the table and inserts the query into the hidden field query
	function additem()
	{   //W=Getting the value from the hidden field query and putting the value into variable query
		var query = document.getElementById("query").value;
		var length = num.length;//Get the length of the array num
		var jobid = document.getElementById("jobid").value;//Gets the value of the jobId
		var stockid = document.getElementById("number").value;//Gets the value of the stockid
		var quantity = document.getElementById("quantity").value;//Gets the value of the quantity	
		num[length] = document.getElementById("number").value;//adding item into the array	
		//Clear the quantity and the stock id query
		document.getElementById("quantity").value="";
		document.getElementById("number").value="";
	    if(num.length == 1)
		{   //The first time it runs it creates the first part of the quary and for adding item to the jobPart table
			query += "INSERT into JobPart (JobID,StockID,Quantity) values ("+jobid+","+stockid+","+quantity+")";
	    }
		else
		{
	 		query += ",("+jobid+","+stockid+","+quantity+")";
		}//It sets the value into the hidden value
		document.getElementById("query").value=query;
		//Depends how many items you wants to add into the table it will add that many rows
		var x=document.getElementById('jobtable').insertRow(num.length);
		var y = x.insertCell(0);//calling x awhich is the refence of that row and inserting cell at column 0
		var z = x.insertCell(1);//calling x awhich is the refence of that row and inserting cell at column 1
		y.innerHTML=stockid;//Setting the value of that cell to be a stock id
		z.innerHTML=quantity;//Setting the value of that cell to be a squantity
	}	
	function togglelock()//It will enable and disable the fields when buttun is clicked
	{
				document.getElementById("totaltime").disabled = true;
		        document.getElementById("workdone").disabled = true;
		        document.getElementById("number").disabled = true;
			    document.getElementById("quantity").disabled = true;
	}//Confirm changes made by the user
	function confirmcheck()
	{	
		var response;
		response = confirm('Do you want to confirm the order in the record?');
		 
		if(response)
		{	
				document.getElementById("totaltime").disabled = false;
		        document.getElementById("workdone").disabled = false;
		        document.getElementById("number").disabled = false;
			    document.getElementById("quantity").disabled = false;
			    return true;
		}
		else
		{
			togglelock();
			return false;
		}
	}//When the table is clicked then input boxes are enabled and job id is stored in text field with id Jobid
	function index(x){
	var table=document.getElementById("book");
	var rowIndex=x.rowIndex;
			
		var id = table.rows[rowIndex].cells[0].innerHTML;
		        document.getElementById("jobid").value = id;
				document.getElementById("totaltime").disabled = false;
		        document.getElementById("workdone").disabled = false;
		        document.getElementById("number").disabled = false;
			    document.getElementById("quantity").disabled = false;
	}
	
</script>
</div>
</body>
</html>