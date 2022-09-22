<?php

//It includes code from file database.php into that file which makes a connection to the database
include 'database.php';
//The sql query to update a Booking table by setting JobCommenced to one
$sql = "Update Job set TotalTime = '$_POST[totaltime]',WorkDone = '$_POST[workdone]', JobCompleted = '1' where JobID ='$_POST[jobid]' ";

/* If query was performed print output with the values which has been entered by the user otherwise */
if (!$result=mysqli_query($con,$sql))
	{/* Prints message and exit from the current php script */
		die ("An Error in the SQL Query: " . mysqli_error($con) );
	}
//The sql query to select a JobID from Job table

$sql=$_POST[query];

//If sql query can not be performed display an error message and exit from the current php script
if(!mysqli_query($con, $sql))
	{	
		die('Error in querying database' . mysqli_error($con));
	}
/*It closes a previously opened database connection.*/
mysqli_close($con);
/*It prints confirmation that  job has been completed and parts have been added to the table */
echo "<br>The job was completed and job id " .  $_POST['jobid'] . " has been marked as complete and parts have been added to the table";
/*  It closes a previously opened database connection.*/
mysqli_close($con);
?>
<form action = "CompletionJob.php" method = "POST" >
<br>
		<input type="submit" value = "Return to Completion Job Page"/>
</form>	

?> 