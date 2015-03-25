<!DOCTYPE html>
<html>
	<head>
		<title>List of Top Players!</title>
	</head>
	<body bgcolor=lightblue>
		<?php
		$query = "SELECT name,time,wrong FROM score ORDER BY time, wrong ASC";

		if (!($database = mysql_connect("localhost", "iw3htp", "password")))
			//"root", "" ) ) )
			die("Could not connect to database </body></html>");

		if (!mysql_select_db("leaderboard", $database))
			die("Could not open leaderboard database </body></html>");

		if (!($result = mysql_query($query, $database))) {
			print("<p>Could not execute query!</p>");
			die(mysql_error() . "</body></html>");
		}
		mysql_close($database);
		?>
		<table align="center" BORDER="15" CELLPADDING="6" CELLSPACING="2" BORDERCOLOR="gold">
			<caption>
				<h1 style="font-family:verdana">Leaderboard</h2>
			</caption>
			<thead>
				<tr>
					<th>Player</th><th>Time (seconds)</th><th>Incorrect</th>
				</tr>
			</thead>
			<?php
			$i=1;
			while ($row = mysql_fetch_row($result)) {
				//while ($i < 10) { not effective in cutting off list to display only top 10 players score
				print("<tr>");

				foreach ($row as $value){
					print("<td>$value</td>");
					$i++;
				}

				print("</tr>");
			}
				
			//}
			?>
		</table>
		<div id="return" align="center">
			<a href="teamproject.html">Return to Game</a>
		</div>

	</body>
</html>