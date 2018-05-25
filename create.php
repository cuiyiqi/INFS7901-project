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
		echo "You entered: ", $_POST["create"], "<br><br>";
	*/

	// SQL query to run
	$sql = "
CREATE TABLE Servers (
	id  	INT             NOT NULL,
	city	VARCHAR(100)	NOT NULL,
	region	VARCHAR(100)	NOT NULL,
	PRIMARY KEY (id)
);
INSERT INTO Servers VALUES (1, 'Chicago', 'North America');
INSERT INTO Servers VALUES (2, 'New York',  'North America');
INSERT INTO Servers VALUES (3, 'Sydney', 'Oceania');
INSERT INTO Servers VALUES (4, 'Melbourne', 'Oceania');
INSERT INTO Servers VALUES (5, 'Canberra', 'Oceania');


CREATE TABLE Accounts (
	gameName	VARCHAR(50)	NOT NULL,
	password	VARCHAR(50)	NOT NULL,
	balanceBlue	INT 		DEFAULT 0,
	balanceRiot	INT 		DEFAULT 0,
	seasonRank	INT,
	serverID	INT 		NOT NULL,
	PRIMARY KEY (gameName),
	FOREIGN KEY (serverID) REFERENCES Servers(id) ON DELETE CASCADE
);
INSERT INTO Accounts VALUES ('Puffy Snowflakes', 'puffy', 1200, 900, 27, 4);
INSERT INTO Accounts VALUES ('Pancake Bunny', 'pancake', 1100, 3100, 9, 2);
INSERT INTO Accounts VALUES ('Will of the Son', 'iwillsurvive', 1800, 1000, 20, 3);
INSERT INTO Accounts VALUES ('Mattress World', 'alwaysaforeignkey', 900, 4200, 14, 3);
INSERT INTO Accounts VALUES ('Key Key', 'AlwaysAFK', 2000, 9999999, 1, 3);
INSERT INTO Accounts VALUES ('Long Kai Li Sin', 'pinkflyingunicorns', 300, 1700, 21, 1);
INSERT INTO Accounts VALUES ('Very Ticklish Foot', 'fancytoes', 1600, 2100, 22, 2);
INSERT INTO Accounts VALUES ('Harvester of Souls', 'ThisProject', 500, 5500, 23, 4);
INSERT INTO Accounts VALUES ('Book of Eli', 'godblessw3schools', 100, 0, 24, 2);
INSERT INTO Accounts VALUES ('Shade of Noxius', 'IntoThatGentleNight', 0, 300, 26, 1);
INSERT INTO Accounts VALUES ('Stale Peanut Thrower', 'stillstale', 1400, 1200, 21, 2);
INSERT INTO Accounts VALUES ('Notorious Pie Eater', 'onlymeatpies', 1000, 800, 22, 3);
INSERT INTO Accounts VALUES ('Spicy Bubble Tea', 'myfavorite', 400, 1900, 23, 4);
INSERT INTO Accounts VALUES ('Dancing Blades of IU', 'IUismygoddess', 6666, 6666, 24, 1);
INSERT INTO Accounts VALUES ('Master Yi Fay', 'beachlife', 800, 7300, 13, 5);
INSERT INTO Accounts VALUES ('Sun Moon and Skye', 'ieatchickenfeet', 1500, 1200, 10, 1);
INSERT INTO Accounts VALUES ('Kol Kutters Klub', 'tookool4U', 600, 5200, 3, 2);
INSERT INTO Accounts VALUES ('League of Darren', 'draven', 700, 1500, 6, 1);
INSERT INTO Accounts VALUES ('M Lily Petals', 'flowerpower', 800, 2200, 22, 2);
INSERT INTO Accounts VALUES ('007 - Roy Bond', 'coolmotorcycle', 200, 3600, 1, 3);
INSERT INTO Accounts VALUES ('Art of Boiling Stew', 'DeathAndTaxes', 700, 2500, 16, 3);
INSERT INTO Accounts VALUES ('Michaelis Crucible', 'mentenkinetics', 1200, 3600, 17, 3);
INSERT INTO Accounts VALUES ('BotTom Lane Master', 'ih8shudderwock', 900, 5700, 17, 3);
INSERT INTO Accounts VALUES ('VickTorious Kimchi', 'gdragonbemine', 1700, 1900, 17, 3);


CREATE TABLE Products (
	id   	INT   		NOT NULL,
	price	INT 		NOT NULL,
	PRIMARY KEY (id)
);
INSERT INTO products VALUES (1, 260);
INSERT INTO products VALUES (2, 260);
INSERT INTO products VALUES (3, 880);
INSERT INTO products VALUES (4, 880);
INSERT INTO products VALUES (5, 880);
INSERT INTO products VALUES (6, 975);
INSERT INTO products VALUES (7, 750);
INSERT INTO products VALUES (8, 1820);
INSERT INTO products VALUES (9, 1350);
INSERT INTO products VALUES (10, 1350);
INSERT INTO products VALUES (11, 1350);
INSERT INTO products VALUES (12, 0);
INSERT INTO products VALUES (13, 0);
INSERT INTO products VALUES (14, 0);
INSERT INTO products VALUES (15, 0);
INSERT INTO products VALUES (16, 0);
INSERT INTO products VALUES (17, 0);
INSERT INTO Products VALUES (18, 520);
INSERT INTO Products VALUES (19, 1350);
INSERT INTO Products VALUES (20, 1350);
INSERT INTO Products VALUES (21, 1350);
INSERT INTO Products VALUES (22, 1820);


CREATE TABLE Owns (
	gameName    		VARCHAR(50)		NOT NULL,
	productID   		INT        		NOT NULL,
	purchaseDate 		TIMESTAMP 		NOT NULL,
	PRIMARY KEY (gameName, productID),
	FOREIGN KEY (gameName) REFERENCES Accounts(gameName)  ON DELETE CASCADE,
	FOREIGN KEY (productID) REFERENCES Products(id)  ON DELETE CASCADE
);
INSERT INTO Owns VALUES ('Puffy Snowflakes', 1, TIMESTAMP '2018-03-24 18:35:46');
INSERT INTO Owns VALUES ('Puffy Snowflakes', 2, TIMESTAMP '2018-03-24 18:35:46');
INSERT INTO Owns VALUES ('Puffy Snowflakes', 3, TIMESTAMP '2018-03-24 18:35:46');
INSERT INTO Owns VALUES ('Puffy Snowflakes', 4, TIMESTAMP '2018-03-24 18:35:46');
INSERT INTO Owns VALUES ('Puffy Snowflakes', 5, TIMESTAMP '2018-03-24 18:35:46');
INSERT INTO Owns VALUES ('Pancake Bunny', 1, TIMESTAMP '2018-03-21 22:46:26');
INSERT INTO Owns VALUES ('Pancake Bunny', 2, TIMESTAMP '2018-03-21 22:46:26');
INSERT INTO Owns VALUES ('Pancake Bunny', 3, TIMESTAMP '2018-03-21 22:46:26');
INSERT INTO Owns VALUES ('Pancake Bunny', 4, TIMESTAMP '2018-03-21 22:46:26');
INSERT INTO Owns VALUES ('Will of the Son', 1, TIMESTAMP '2018-03-22 19:24:37');
INSERT INTO Owns VALUES ('Will of the Son', 3, TIMESTAMP '2018-03-22 19:24:37');
INSERT INTO Owns VALUES ('Will of the Son', 5, TIMESTAMP '2018-03-22 21:24:37');
INSERT INTO Owns VALUES ('Mattress World', 1, TIMESTAMP '2018-03-20 23:48:32');
INSERT INTO Owns VALUES ('Mattress World', 4, TIMESTAMP '2018-03-20 23:48:32');
INSERT INTO Owns VALUES ('Key Key', 1, TIMESTAMP '2018-03-24 11:27:32');
INSERT INTO Owns VALUES ('Key Key', 2, TIMESTAMP '2018-03-24 11:27:32');
INSERT INTO Owns VALUES ('Key Key', 3, TIMESTAMP '2018-03-24 11:27:32');
INSERT INTO Owns VALUES ('Key Key', 4, TIMESTAMP '2018-03-24 11:27:32');
INSERT INTO Owns VALUES ('Key Key', 5, TIMESTAMP '2018-03-24 11:27:32');
INSERT INTO Owns VALUES ('Key Key', 6, TIMESTAMP '2018-03-24 11:27:32');

INSERT INTO Owns VALUES ('Puffy Snowflakes', 7, TIMESTAMP '2018-03-24 18:35:46');
INSERT INTO Owns VALUES ('Puffy Snowflakes', 8, TIMESTAMP '2018-03-24 18:35:46');
INSERT INTO Owns VALUES ('Puffy Snowflakes', 9, TIMESTAMP '2018-03-24 18:35:46');
INSERT INTO Owns VALUES ('Puffy Snowflakes', 10, TIMESTAMP '2018-03-24 18:35:46');
INSERT INTO Owns VALUES ('Pancake Bunny', 7, TIMESTAMP '2018-03-21 22:46:26');
INSERT INTO Owns VALUES ('Pancake Bunny', 8, TIMESTAMP '2018-03-21 22:46:26');
INSERT INTO Owns VALUES ('Pancake Bunny', 9, TIMESTAMP '2018-03-21 22:46:26');
INSERT INTO Owns VALUES ('Pancake Bunny', 10, TIMESTAMP '2018-03-21 22:46:26');
INSERT INTO Owns VALUES ('Will of the Son', 7, TIMESTAMP '2018-03-22 19:24:37');
INSERT INTO Owns VALUES ('Will of the Son', 9, TIMESTAMP '2018-03-22 19:24:37');
INSERT INTO Owns VALUES ('Will of the Son', 11, TIMESTAMP '2018-03-22 19:24:37');
INSERT INTO Owns VALUES ('Will of the Son', 12, TIMESTAMP '2018-03-22 19:24:37');
INSERT INTO Owns VALUES ('Mattress World', 7, TIMESTAMP '2018-03-20 23:48:32');
INSERT INTO Owns VALUES ('Mattress World', 10, TIMESTAMP '2018-03-20 23:48:32');
INSERT INTO Owns VALUES ('Mattress World', 11, TIMESTAMP '2018-03-20 23:48:32');
INSERT INTO Owns VALUES ('Key Key', 7, TIMESTAMP '2018-03-24 11:27:32');
INSERT INTO Owns VALUES ('Key Key', 8, TIMESTAMP '2018-03-24 11:27:32');
INSERT INTO Owns VALUES ('Key Key', 9, TIMESTAMP '2018-03-24 11:27:32');
INSERT INTO Owns VALUES ('Key Key', 10, TIMESTAMP '2018-03-24 11:27:32');
INSERT INTO Owns VALUES ('Key Key', 11, TIMESTAMP '2018-03-24 11:27:32');
INSERT INTO Owns VALUES ('Key Key', 12, TIMESTAMP '2018-03-24 11:27:32');


CREATE TABLE Heroes (
    name    		VARCHAR(50) 		NOT NULL,
    class   		VARCHAR(50) 		NOT NULL,
    productID 		INT 	        	NOT NULL,
    PRIMARY KEY (name),
    FOREIGN KEY (productID) REFERENCES Products(id) ON DELETE CASCADE
);
INSERT INTO Heroes VALUES ('Amumu', 'Tank', 1);
INSERT INTO Heroes VALUES ('Ashe', 'Marksman', 2);
INSERT INTO Heroes VALUES ('Vladimir', 'Mage', 3);
INSERT INTO Heroes VALUES ('Fizz', 'Assassin', 4);
INSERT INTO Heroes VALUES ('Fiora', 'Skirmisher', 5);
INSERT INTO Heroes VALUES ('Rakan', 'Support', 6);


CREATE TABLE Skins (
    theme    			VARCHAR(50)	  	DEFAULT 'Classic',
    heroName  		 	VARCHAR(50)		NOT NULL,
    productID 			INT 			NOT NULL,
    rarity 		    	VARCHAR(20)		NOT NULL,
    PRIMARY KEY (theme, heroName),
    FOREIGN KEY (productID) REFERENCES Products(id) ON DELETE CASCADE,
    FOREIGN KEY (heroName) REFERENCES Heroes(name) ON DELETE CASCADE
);
INSERT INTO Skins VALUES ('Little Knight', 'Amumu', 7, 'Superior');
INSERT INTO Skins VALUES ('Project', 'Ashe', 8, 'Legendary');
INSERT INTO Skins VALUES ('Soulstealer', 'Vladimir', 9, 'Epic');
INSERT INTO Skins VALUES ('Super Galaxy', 'Fizz', 10, 'Epic');
INSERT INTO Skins VALUES ('Project', 'Fiora', 11, 'Legendary');
INSERT INTO Skins VALUES ('Classic', 'Amumu', 12, 'Classic');
INSERT INTO Skins VALUES ('Classic', 'Ashe', 13, 'Classic');
INSERT INTO Skins VALUES ('Classic', 'Vladimir', 14, 'Classic');
INSERT INTO Skins VALUES ('Classic', 'Fizz', 15, 'Classic');
INSERT INTO Skins VALUES ('Classic', 'Fiora', 16, 'Classic');
INSERT INTO Skins VALUES ('Classic', 'Rakan', 17, 'Classic');
INSERT INTO Skins VALUES ('Royal Guard', 'Fiora', 18, 'Superior');
INSERT INTO Skins VALUES ('Pool Party', 'Fiora', 19, 'Epic');
INSERT INTO Skins VALUES ('Soaring Sword', 'Fiora', 20, 'Epic');
INSERT INTO Skins VALUES ('Academy', 'Vladimir', 21, 'Epic');
INSERT INTO Skins VALUES ('Blood Lord', 'Vladimir', 22, 'Legendary');


CREATE TABLE MatchHistory (
    gameName                VARCHAR(50) NOT NULL,
    startTimestamp          TIMESTAMP   NOT NULL,
    endTimestamp            TIMESTAMP   NOT NULL,
    result                  VARCHAR(5)  NOT NULL,
    partySize               INT         DEFAULT 1,
    position                VARCHAR(50) NOT NULL,
    heroName                VARCHAR(50) NOT NULL,
    skinTheme               VARCHAR(50) DEFAULT 'Classic',
    /* CONSTRAINT checkSize CHECK (0 < partySize AND partySize <= 5), */
    PRIMARY KEY (gameName, startTimestamp),
    FOREIGN KEY (gameName) REFERENCES Accounts(gameName) ON DELETE CASCADE,
    FOREIGN KEY (heroName) REFERENCES Heroes(name) ON DELETE CASCADE,
    FOREIGN KEY (skinTheme, heroName) REFERENCES Skins(theme, heroName) ON DELETE CASCADE
);
INSERT INTO MatchHistory VALUES ('Will of the Son', TIMESTAMP '2018-03-22 20:00:00', TIMESTAMP '2018-03-22 22:40:00', 
    'Win', 1, 'Top', 'Vladimir', 'Classic');
INSERT INTO MatchHistory VALUES ('Will of the Son', TIMESTAMP '2018-03-22 21:00:00', TIMESTAMP '2018-03-22 21:40:00', 
    'Win', 1, 'Top', 'Vladimir', 'Classic');
INSERT INTO MatchHistory VALUES ('Will of the Son', TIMESTAMP '2018-03-22 22:00:00', TIMESTAMP '2018-03-22 22:40:00', 
    'Win', 1, 'Top', 'Vladimir', 'Soulstealer');
INSERT INTO MatchHistory VALUES ('Will of the Son', TIMESTAMP '2018-03-23 12:00:00', TIMESTAMP '2018-03-22 12:40:00', 
    'Loss', 1, 'Marksman', 'Ashe', 'Project');
INSERT INTO MatchHistory VALUES ('Mattress World', TIMESTAMP '2018-03-23 13:00:00', TIMESTAMP '2018-03-22 13:30:00', 
    'Loss', 1, 'Jungle', 'Amumu', 'Classic');
INSERT INTO MatchHistory VALUES ('Mattress World', TIMESTAMP '2018-03-24 17:00:00', TIMESTAMP '2018-03-22 17:40:00', 
    'Win', 1, 'Middle', 'Fizz', 'Super Galaxy');
INSERT INTO MatchHistory VALUES ('Key Key', TIMESTAMP '2018-03-25 03:00:00', TIMESTAMP '2018-03-22 03:30:00', 
    'Loss', 2, 'Support', 'Rakan', 'Classic');
";

	################################################################################
	# Execute the SQL query                                                        #
	################################################################################

	/*
		// split entire SQL into individual queries
		$arr = explode(";", $sql);
		foreach ($arr as $query) {
			// print each query
			echo $query, ";<br>";
		}
		echo "<br>";
	*/

	// print errors for debugging
	if ($conn->multi_query($sql) === TRUE) {
	    echo "<div class='error'>All tables successfully created</div>";
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