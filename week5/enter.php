<!DOCTYPE html> 
<html>

<head>
	<title>VoteCaster | Submit</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />
	<link rel="stylesheet" href="style.css" />
	<link rel="apple-touch-icon" href="appicon.png" />
	<link rel="apple-touch-startup-image" href="startup.png">
	
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>

</head> 
<body> 

<div data-role="page">

	<div data-role="header">
		<h1>My Title</h1>
		<a href="#" data-icon="check" id="logout" class="ui-btn-right">Logout</a>

	</div><!-- /header -->

	<div data-role="content">
				<?php
		include("config.php");
			$query = "select * from users where Username = '".$_POST["Username"]"'";
			// Take in parameters
			$Username = $_POST["Username"];
			$Password = $_POST["Password"];
			$t = time();
			
			// Insert into orders
			// but oops query is not defined... yet
			
			
			
			$result = mysql_query($query);
			
			if ($result) {

				localStorage.setItem('Username', '<?=$_POST["Username"]?>');
			</script>
			<?php
			echo "<p>Thank you, <strong>".$_POST["Username"]."</strong>. You are now logged in.</p>";
		} else {
			echo "<p>There seems to have been an error.</p>";
		}
			

		?>
	</div><!-- /content -->

	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
		<ul>
			<li><a href="index.php" id="home" data-icon="custom">Home</a></li>
			<li><a href="login.php" id="key" data-icon="custom" class="ui-btn-active">Login</a></li>
			<li><a href="filter.php" id="beer" data-icon="custom">Filter</a></li>
			<li><a href="#" id="skull" data-icon="custom">Settings</a></li>
		</ul>
		</div>
	</div>
	
	<script type="text/javascript">
		$("#logout").click(function() {
			localStorage.removeItem('username');
			$("#form").show();
			$("#logout").hide();
		});
	</script>
</div><!-- /page -->

</body>
</html>