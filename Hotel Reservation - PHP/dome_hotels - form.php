<?php
session_start();
$_SESSION['first-name'] = "";
$_SESSION['last-name'] = "";
$_SESSION['address'] = "";
$_SESSION['city'] = "";
$_SESSION['state'] = "";
$_SESSION['phone'] = "";
$_SESSION['email'] = "";
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
	<form action = "dome_hotels - complete.php">
		<input type = "hidden" name = "check-in" value = <?php $_SESSION['check-in'] ?>>
		<input type = "hidden" name = "check-out" value = <?php $_SESSION['check-out'] ?>>
		<input type = "hidden" name = "rooms" value = <?php $_SESSION['rooms'] ?>>
		<input type = "hidden" name = "adults" value = <?php $_SESSION['adults'] ?>>
		<input type = "hidden" name = "check-in" value = <?php $_SESSION['kids'] ?>>
		<table class = "activity-table">
			<tr>
				<th>CUSTOMER FORM</th>
			</tr>
			<tr>
				<td>
					<input type = "text" name = "first-name" placeholder = "first name" pattern = "^[A-Z]{1}[a-z]*$">
				</td>
			</tr>
			<tr>
				<td>
					<input type = "text" name = "last-name" placeholder = "last name" pattern = "^[A-Z]{1}[a-z]*$">
				</td>
			</tr>
			<tr>
				<td>
					<input type = "text" name = "address" placeholder = "address" pattern = "^\d{1,4}\s(\d{1,3}(st|nd|rd|th)|[A-Z]{1}[a-z]*)\s(Ave|Avenue|St|Street|Rd|Road|Plz|Plaza)$">
				</td>
			</tr>
			<tr>
				<td>
					<input type = "text" name = "city" placeholder = "city" pattern = "^[A-Z]{1}[a-z]*(\s[A-Z]{1}[a-z]*)?">
				</td>
			</tr>
			<tr>
				<td><input type = "text" name = "state" placeholder = "state" pattern = "^[A-Z]{2}$"></td>
			</tr>
			<tr>
				<td><input type = "tel" name = "phone" placeholder = "phone number" pattern = "^\d{3}-\d{3}-\d{4}$"></td>
			</tr>
			<tr>
				<td><input type = "email" name = "email" placeholder = "e-mail"></td>
			</tr>
			<tr>
				<td><input class = "button" name = "submit-form" type = "submit" value = "SUBMIT"></td>
			</tr>
		</table>
	</form>
	
</body>
</html>