# MySQL Database Project
Master Ticket

Note: change server, username, and password in dbConnect() function in db_functions.php to your own username and password  

```
function dbConnect() {  
	// Change "localhost", "root", and "" to own database specifications
	$con = mysqli_connect("localhost","root","","cpsc471");
		
	// Handle Connection Errors:
	if( mysqli_connect_errno($con) ) {
		echo "<script type='text/javascript'>alert('Failed to Connect to the Database');</script>";
		header('//history(-1)');
		exit;
	}
		
	return $con;
}
```
