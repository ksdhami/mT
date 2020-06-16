# Master Ticket
Database Project.

An online ticket system where event creators can create and sell tickets while event attendees can buy as well as re-sell tickets.

## Deployment 

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


# Built With

* [MySQL](https://www.mysql.com) - Relational Database Management System
* [phpMyAdmin](https://www.phpmyadmin.net) - Administration of MySQL
* [Apache](https://httpd.apache.org) - Web Server
