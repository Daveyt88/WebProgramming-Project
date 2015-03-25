<!DOCTYPE html>

<html>
<head>
<title>Submit Time</title>
</head>
<body>
<?php
$name = $_POST["name"];
$time = $_POST["time"];
$errors = $_POST["wrongs"];
$query = "INSERT INTO score " . "( name, time, wrong ) " . "VALUES ( '$name', '$time', '$errors' )";
if (!($database = mysql_connect("localhost", "iw3htp", "password")))
	//"root", "" ) ) )
	die("Could not connect to database </body></html>");

if (!mysql_select_db("leaderboard", $database))
	die("Could not open leaderboard database </body></html>");

if (!($result = mysql_query($query, $database))) {
	print("<p>Could not execute query!</p>");
	die(mysql_error());
}// end if

mysql_close($database);

print("<p>$name has been added to the leaderboard with $time seconds and $errors wrongs.</p>
                  <p class = 'head'>The following information has been 
                     saved in our database:</p>
                  <p><a href = 'leaderboard.php'>Click here to view 
                     entire database.</a></p>
                  </body></html>");
die();
