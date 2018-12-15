<?php
	// Start Session
  session_start();
  If(!isset($_SESSION['userType'])||!isset($_SESSION['userID'])){
    $_SESSION['userType'] = 'guest';
		$_SESSION['userID'] = NULL;
  }
	
	if( isset($_GET['logout']) && $_GET['logout'] == 'true' )
	{
		$_SESSION['userType'] = 'guest';
		$_SESSION['userID'] = NULL;
	}
?>
<!DOCTYPE html>
<html>

<head>
  <title>MasterTicket</title>
  <meta name="description" content="Getting Grades in 471 Final Projects" />
  <meta name="keywords" content="CPSC471 Project" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">Master<span class="logo_colour">Ticket</span></a></h1>
		  <!-- Make sure you put the proper page name here -->
		  <h2>Welcome!</h2>
        </div>
      </div>
      <?php include 'menu.php'; ?>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        <?php include 'upcoming_events.php'; ?>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Welcome to Master Ticket!</h1>
        <p>This site is for finding Tickets to Events! Please create an account and get started!</p>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; Popcorn
    </div>
  </div>
</body>
</html>
