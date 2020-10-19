<?php
session_start();
include('dome_hotels - PHP.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dome Hotels</title>
</head>
<link rel="stylesheet" type="text/css" href="dome_hotels - style.css">
<body>
	<nav>
		<table class = "nav-table">
			<tr>
				<th><a id = "home" href = "dome_hotels - home.php">Dome Hotels</a></th>
				<th class = "nav-table-cell"><a class = "nav-links" href = "dome_hotels - activities.php">Activities</a></th>
				<th class = "nav-table-cell"><a class = "nav-links" href = "dome_hotels - local.php">Local</a></th>
				<th class = "nav-table-cell"><a class = "nav-links" href = "dome_hotels - services.php">Services</a></th>
			</tr>
		</table>
	</nav>
	<table class = "activity-table">
		<tr>
			<th>YOUR ORDER SUBMITTED</th>
		</tr>
		<tr>
			<td>rest easy and enjoy</td>
		</tr>
	</table>
</body>
</html>