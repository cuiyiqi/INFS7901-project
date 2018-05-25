<!DOCTYPE html>
<html>
<head>
<title>Project - Home</title>
<style>
	/* RESET BOX MODEL */
	html {
		box-sizing: border-box;
	}
	*, *:before, *:after {
		box-sizing: inherit;
	}
	/* DEFAULTS FOR BODY */
	body {
		font-family: Helvetica, Arial, sans-serif;
		width: 100%;
		height: 100%;
		line-height: 1.42857143;
		font-size: 18px;
		margin: 0;
		padding: 0;
		background-color: #f1f1f1;
		color: #333;
	}
	/* STYLING FOR ALL TABLES SHARED ACROSS ALL PAGES */
	table {
	    border-collapse: collapse;
	    vertical-align: bottom;
	}
	th {
		background-color: #0d9072;
		color: #fff;
		padding-right: 20px;
		text-align: left;
		white-space: nowrap;
	}
	tr:nth-child(even) {
		background-color: #1f2325;
	}
	tr:nth-child(odd) {
		background-color: #191d20;
	}
	td {
		color: #e0e0e0;
		padding-right: 20px;
	}
	/* AREA ABOVE NAVIGATION BAR */
	.poster {
		display: block;
		top: 0;
		width: 100%;
	}
	.title {
		position: absolute;
		top: 25%;
		width: 40%;
		left: 55%;
		display: block;
	}
	.header {
		color: #f0e6d2;
		font-size: 40px;
		text-transform: uppercase;
		text-align: center;
		line-height: 0;
		z-index: 100;
	}
	.subheader {
		color: #c8aa6e;
		font-size: 24px;
		text-transform: uppercase;
		text-align: center;
		line-height: 0;
	}
	/* NAVIGATION BAR */
	.navbar {
		background-color: #121212;
		border-bottom: 2px solid #262626;
		border-top: 4px solid #836323;
		font-size: 20px;
		font-family: inherit;
		height: 60px;
		line-height: normal;
		position: absolute;
		margin-top: -0.6%;
		text-align: left;
		width: 100%;
		z-index: 1000;
		overflow: hidden;
	}
	.navbar-element {
		display: inline-block;
		float: left;
		padding-top: 15px;
		padding-left: 50px;
		padding-right: 50px;
		height: 100%;
	}
	.navbar-element:hover {
		background-color: #333;
	}
	a {
		color: #c9aa71;
		text-decoration: none;
	}
	a:hover {
		color: #f1e6d0;
	}
	a:active {
		color: #fff;
	}
	/* STYLING SHARED ACROSS ALL BUTTONS */
	.button {
		color: #c8aa6e;
		background-color: #121212;
		border: none;
		font: inherit;
		height: 50px;
		width: 180px;
	}
	.button:hover {
		color: #f1e6d0;
		background-color: #333;
		cursor: pointer;
	}
	.button:active {
		color: #fff;
	}
	/* HIDE DEBUGGING MESSAGES OR REDUNDANT FEATURES */
	.hidden {
		display: none;
	}
	/* ^^^ SHARED AMONG ALL WEBPAGES ^^^ */
	/* AREA UNDER NAVBAR */
	.webpage-body {
		position: absolute;
		display: block;
		width: 100%;
		height: 1000px;   /* because webpage is too short otherwise */
		padding-top: 70px;
	}
	.error {
		margin-left: 50px;
	}
	.query {
		margin-left: 50px;
	}
</style>
</head>
<body>
<!-- TOP COVER -->
<div class='title'>
	<h3 class='header'>INFS 7901 Project</h3>
	<h2 class='subheader'>Database Principles</h2>
</div>
<img class='poster' src="elder-drake.png">
<!-- NAVBAR -->
<div class='navbar'>
	<a href='index.php' title='Return to index.php'>
		<div class='navbar-element'>Home</div>
	</a>
	<a href='create.php' title='Instantiate all relations'>
		<div class='navbar-element'>Create</div>
	</a>
	<a href='drop.php' title='Drop all tables in database'>
		<div class='navbar-element'>Drop</div>
	</a>
	<a href='diagram.php' title='Display ER Diagram'>
		<div class='navbar-element'>Diagram</div>
	</a>
</div>
<!-- WEBPAGE AREA -->
<div class='webpage-body'>
	<!-- NEW FEATURES ADDED SO NO LONGER NEEDED -->
	<a href="index.php" class='hidden'><button>Return to index.php</button></a>
<?php
	################################################################################

	// Database information
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    exit("Connection failed: " . $conn->connect_error);
	}

	################################################################################

	/* NEW FEATURES ADDED SO NO LONGER NEEDED
		// display user entered text
		echo "You entered: ", $_POST["drop"], "<br><br>";
	*/

	// Drop tables to reset database
	$sql = "
DROP TABLE IF EXISTS `MatchHistory`, `Accounts`, `Heroes`, `Owns`,`Products`,
	`Servers`, `Skins` CASCADE;
";
	################################################################################
	# Execute the SQL query                                                        #
	################################################################################

	/* NEW FEATURES ADDED SO NO LONGER NEEDED
		// split entire SQL into individual queries
		$arr = explode(";", $sql);
		foreach ($arr as $query) {
			// print each query
			echo $query, ";<br>";
		}
		echo "<br>";
	*/

	// for debugging
	if ($conn->multi_query($sql) === TRUE) {
	    echo "<div class='error'>All tables successfully dropped</div>";
	} else {
	    echo "<div class='error'>Error: " . $conn->error . "</div>";
	}

	// print SQL used in query
	echo "<pre class='query'>" . $sql . "</pre>";

	// Close connection
	$conn->close();

	################################################################################
?>
</div>
</body>
</html>