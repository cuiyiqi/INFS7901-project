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
		padding-top: 70px;
	}
	/* HORIZONTAL ROWS */
	.clearfix::before, .clearfix::after {
		content: "";
		clear: both;
		display: table;
	}
	.row {
		position: relative;
		display: block;
		margin-top: -2.5%;
		width: 100%;
		clear: both;
	}
	.row-top {
		border-top: 8px solid #c3a568;
    	border-image: linear-gradient(to right,#836323 0,#c3a568 51%,#836323 100%);
	    border-image-slice: 1;
	}
	.float-left {
		position: relative;
		width: 50%;
		float: left;
	}
	.float-right {
		position: relative;
		width: 50%;
		float: right;
	}
	/* IMAGES */
	.image {
		margin-top: -0.06%;   /* fix whitespace issue from border-image in row-top class */
	}
	/* QUERY IN FIRST ROW WITH DROPDOWN MENU */
	.query-select {
		position: absolute;
		top: 200px;
		left: 10%;
		width: 80%;
		z-index: 100;
	}
	.query-text {
		position: absolute;
		font-weight: 700;
		font-size: 20px;
	}
	.dropdown-function {
		position: absolute;
		font-size: 20px;
		top: -10px;
		left: 275px;
		width: 180px;
	}
	.dropdown-function:hover > .dropdown-content {
		display: block;
	}
	.dropdown-content {
		background-color: #121212;
		display: none;
		position: absolute;
		min-width: 180px;
		font: inherit;
		border-top: 2px solid #262626;
	}
	.dropdown-content a {
		color: #c8aa6e;
	    padding-top: 10px;
	    padding-bottom: 10px;
	    padding-right: 10px;
	    padding-left: 25px;
	    text-decoration: none;
	    display: block;
	}
	.dropdown-content a:hover {
	    color: #f1e6d0;
	    background-color: #333;
	}
	.dropdown-content a:active {
		color: #fff;
	}
	/* QUERIES IN SECOND, THIRD, AND FOURTH ROWS */
	input {
		color: #9b9b9b;
		font-size: 20px;
	}
	.query {
		position: absolute;
		left: 75px;
		top: 30px;
		font-weight: 700;
		width: 400px;
		font-size: 20px;
		z-index: 100;
	}
	.query-1 {
		position: absolute;
		top: 0;
	}
	.query-2 {
		position: absolute;
		top: 30px;
	}
	.query-3 {
		position: absolute;
		top: 80px;
	}
	.query-4 {
		position: absolute;
		top: 110px;
	}
	.query-5 {
		position: absolute;
		top: 160px;
	}
	.query-6 {
		position: absolute;
		top: 190px;
	}
	.query-7 {
		position: absolute;
		top: 240px;
	}
	/* DATABASE TABLES */
	.tables-region {
		width: 100%;
		padding-top: 20px;
		padding-left: 30px;
		clear: both;
	}
	.table-title {
		color: #222;
		font-weight: 700;
	}
</style>
</head>
<body>
<!-- TOP COVER -->
<div class='title'>
	<h3 class='header'>INFS 7901 Project</h3>
	<h2 class='subheader'>Database Principles</h2>
</div>
<img class='poster' src='elder-drake.png'>
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
<!-- INTERACTIVE AREA -->
<div class='webpage-body'>
<!-- ROW 1 -->
<div class='row clearfix'>
	<div class='float-left'>
		<div class='query-select'>
			<div class='query-text'>Select Which Query To Run</div>
			<div class='dropdown-function'>
				<button class='button'>Query Number</button>
				<div class='dropdown-content'>
					<a href='query.php?link=1'>Query 1</a>
					<a href='query.php?link=2' name='query2'>Query 2</a>
					<a href='query.php?link=3' name='query3'>Query 3</a>
					<a href='query.php?link=4' name='query4'>Query 4</a>
					<a href='query.php?link=5' name='query5'>Query 5</a>
					<a href='query.php?link=6' name='query6'>Query 6</a>
					<a href='query.php?link=7' name='query7'>Query 7</a>
					<a href='query.php?link=8' name='query8'>Query 8</a>
					<a href='query.php?link=9' name='query9'>Query 9</a>
					<a href='query.php?link=10' name='query10'>Query 10</a>
				</div>
			</div>
		</div>
		<!-- NEW FEATURES ADDED SO NO LONGER NEEDED -->
		<form action="query.php" method="post" class='hidden'>
			Query number (8 is avg nested aggregate, 9 is min, 10 is division):&nbsp;<input name="query" type="text"><input value="Query" type="submit">
		</form>
	</div>
	<img class='image float-right' src='star-guardian.png'>
</div>
<!-- ROW 2 -->
<div class='row clearfix row-top'>
	<div class='float-right'>
		<form class='query' action="query.php" method="post" autocomplete="off">
			<div class='query-1'>Purchase With Account Name</div>
			<input class='query-2' name="account" type="text" tabindex="1">
			<div class='query-3'>Skin Theme</div>
			<input class='query-4' name="theme" type="text" tabindex="2">
			<div class='query-5'>Hero Name</div>
			<input class='query-6' name="hero" type="text" tabindex="3">
			<input class='query-7 button' value="Purchase" type="submit" tabindex="4">
		</form>
	</div>
	<img class='image float-left' src='project-katarina.png'>
</div>
<!-- ROW 3 -->
<div class='row clearfix row-top'>
	<div class='float-left'>
		<form class='query' action='query.php' method='post' autocomplete="off">
			<div class='query-1'>Add Points</div>
			<input class='query-2' name="amount" type="text" tabindex="5">
			<div class='query-3'>Account Name</div>
			<input class='query-4' name="gameName" type="text" tabindex="6">
			<input class='query-5 button' value="Add Points" type="submit" tabindex="7">
		</form>
	</div>
	<img class='image float-right' src='victorious-sivir.png'>
</div>
<!-- ROW 4 -->
<div class='row clearfix row-top'>
	<img class='image float-left' src='cyberpop-zoe.png'>
	<div class='float-right'>
		<form class='query' action='query.php' method='post' autocomplete="off">
			<div class='query-1'>Delete Which Account</div>
			<input class='query-2' name="delete" type="text" tabindex="8">
			<input class='query-3 button' value="Delete Account" type="submit" tabindex="9">
		</form>
	</div>
</div>
<!-- STATIC TABLES -->
<div class='tables-region row-top'>
<?php
	################################################################################
	# Connect to database                                                          #
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
	# Display all tables                                                           #
	################################################################################

	$result = $conn->query("SELECT * FROM Servers;");

	// Table header
	echo "<span class='table-title'>Servers</span>";
	echo "<table>\n\t
		<tr>
			<th>ID</th>   <th>City</th>
			<th>Region</th>
		</tr>
	\n";

	// Table body
	while($row = mysqli_fetch_assoc($result)) {
		echo "\t
		<tr>
			<td>{$row["id"]}</td>   <td>{$row["city"]}</td>
			<td>{$row["region"]}</td>
		</tr>\n
		";
	}
	echo "</table><br>\n";

	################################################################################

	$result = $conn->query("SELECT * FROM Accounts ORDER BY gameName;");

	// Table header
	echo "<span class='table-title'>Accounts</span>";
	echo "<table>\n\t
		<tr>
			<th>Game Name</th>   <th>Password</th>   <th>Blue Essence Balance</th>
			<th>Riot Point Balance</th>   <th>Rank</th>   <th>Server Id</th>
		</tr>
	\n";

	// Table body
	while($row = mysqli_fetch_assoc($result)) {
		echo "\t
		<tr>
			<td>{$row["gameName"]}</td>   <td>{$row["password"]}</td>
			<td>{$row["balanceBlue"]}</td>   <td>{$row["balanceRiot"]}</td>
			<td>{$row["seasonRank"]}</td>   <td>{$row["serverID"]}</td>
		</tr>\n
		";
	}
	echo "</table><br>\n";

	################################################################################

	$result = $conn->query("SELECT * FROM Products;");

	// Table header
	echo "<span class='table-title'>Products</span>";
	echo "<table>\n\t
		<tr>
			<th>ID</th>   <th>Price</th>
		</tr>
	\n";

	// Table body
	while($row = mysqli_fetch_assoc($result)) {
		echo "\t
		<tr>
			<td>{$row["id"]}</td>   <td>{$row["price"]}</td>
		</tr>\n
		";
	}
	echo "</table><br>\n";

	################################################################################

	$result = $conn->query("SELECT * FROM Owns ORDER BY gameName, productID;");

	// Table header
	echo "<span class='table-title'>Owns</span>";
	echo "<table>\n\t
		<tr>
			<th>Game Name</th>   <th>Product ID</th>
			<th>Purchase Date</th>
		</tr>
	\n";

	// Table body
	while($row = mysqli_fetch_assoc($result)) {
		echo "\t
		<tr>
			<td>{$row["gameName"]}</td>   <td>{$row["productID"]}</td>
			<td>{$row["purchaseDate"]}</td>
		</tr>\n
		";
	}
	echo "</table><br>\n";

	################################################################################

	$result = $conn->query("SELECT * FROM Heroes ORDER BY class, name;");

	// Table header
	echo "<span class='table-title'>Heroes</span>";
	echo "<table>\n\t
		<tr>
			<th>Hero Name</th>   <th>Class</th>
			<th>Product ID</th>
		</tr>
	\n";

	// Table body
	while($row = mysqli_fetch_assoc($result)) {
		echo "\t
		<tr>
			<td>{$row["name"]}</td>   <td>{$row["class"]}</td>
			<td>{$row["productID"]}</td>
		</tr>\n
		";
	}
	echo "</table><br>\n";

	################################################################################

	$result = $conn->query("SELECT * FROM Skins ORDER BY heroName, theme, rarity;");

	// Table header
	echo "<span class='table-title'>Skins</span>";
	echo "<table>\n\t
		<tr>
			<th>Product ID</th>   <th>Hero Name</th>
			<th>Skin Theme</th>   <th>Rarity</th>
		</tr>
	\n";

	// Table body
	while($row = mysqli_fetch_assoc($result)) {
		echo "\t
		<tr>
			<td>{$row["productID"]}</td>   <td>{$row["heroName"]}</td>
			<td>{$row["theme"]}</td>   <td>{$row["rarity"]}</td>
		</tr>\n
		";
	}
	echo "</table><br>\n";

	################################################################################

	$result = $conn->query("SELECT * FROM MatchHistory ORDER BY gameName, heroName;");

	// Table header
	echo "<span class='table-title'>Match History</span>";
	echo "<table>\n\t
		<tr>
			<th>Game Name</th>   <th>Start Time</th>
			<th>End Time</th>   <th>Result</th>
			<th>Party Size</th>   <th>Position</th>
			<th>Hero Name</th>   <th>Skin Theme</th>
		</tr>
	\n";

	// Table body
	while($row = mysqli_fetch_assoc($result)) {
		echo "\t
		<tr>
			<td>{$row["gameName"]}</td>   <td>{$row["startTimestamp"]}</td>
			<td>{$row["endTimestamp"]}</td>   <td>{$row["result"]}</td>
			<td>{$row["partySize"]}</td>   <td>{$row["position"]}</td>
			<td>{$row["heroName"]}</td>   <td>{$row["skinTheme"]}</td>
		</tr>\n
		";
	}
	echo "</table><br>\n";

	################################################################################
	/*
	// define a constant
	define("GREETING", "A global constant, like Pi or the speed of light<br><br>");
	echo GREETING;

	// supports object oriented programming
	class Message {
		// constructor method
		function Message() {
			$this->text = "Text that this message object contains<br><br>";
		}
	}
	// instantiate an object
	$message = null;
	$message = new Message();
	// print object field
	echo $message->text;

	// variables
	$text = "Hello world! ";
	$declare = "This is my webpage!</br>";

	// print and string concatentation
	echo $text . $declare;
	echo $text, $declare, "<br>";

	// math
	echo "Simple maths: ", "1 + 1 = ", 1+1, "<br>Just as 2**5 = ", 2**5, "<br><br>";

	// basic string functions
	$length = strlen($text);
	$words = str_word_count($text);
	$position = strpos($text, "world");
	$string = "String properties: $length $words $position";
	echo "Regular string: ", $string, "<br>";
	echo "Reversed string: ", strrev($string), "<br>";
	echo "Replaced string: ", str_replace("world", "planet Earth", $text), "<br><br>";

	// array and for each loop
	$arr = array("This ", "is ", "an ", "array");
	echo "This is a for each loop<br>";
	foreach ($arr as $word) {
		echo $word;
	}
	echo "<br><br>";

	// for loop
	echo "This is a for loop<br>";
	for ($i=0; $i<5; $i++) {
		echo "i equals $i<br>";
	}
	echo "<br>";

	// while loop
	$i = 0;
	echo "This is a while loop<br>";
	while ($i < 5) {
		echo "i equals $i<br>";
		$i++;
	}
	echo "<br>";

	// if statement and logical operators syntax from multiple languages
	if (1 != 0 || 5 == 5 and True or !False xor False && True) {
		echo "This if statement is True<br>";
	} elseif (True) {
		echo "This elseif statement is True<br>";
	} else {
		echo "This else statement is True<br>";
	}
	*/
	################################################################################
?>
</div> <!-- TABLES END -->
</div> <!-- WEBPAGE END -->

</body>
</html>