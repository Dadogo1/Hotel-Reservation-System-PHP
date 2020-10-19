<?php
session_start();
$_SESSION['check-in'] = '';
$_SESSION['check-out'] = '';
$_SESSION['rooms'] = 0;
$_SESSION['adults'] = 0;
$_SESSION['kids'] =  0;
$_SESSION['bill'] = 0;
$_SESSION['date-interval'] = 0;
$_SESSION['date-diff'] = 0;
$_SESSION['room_cost'] = 0;
$_SESSION['room_count'] = 0;
$_SESSION['error'] = "";

include 'dome_hotels - PHP.php';
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
	<h2 id = "welcome-sign-a">Welcome to the</h2>
	<h1 id = "welcome-sign-b"> World of Luxury!</h1>
	<form action = "dome_hotels - rooms.php" method = "GET" name = "booking">
		<table class = "booking-table">
			<tr>
				<th>CHECK-IN</th>
				<th>CHECK-OUT</th>
				<th>ROOMS</th>
				<th>ADULTS</th>
				<th>KIDS</th>
			</tr>
			<tr>
				<td><input type = "date" name = "check-in"></td>
				<td><input type = "date" name = "check-out"></td>
				<td>
					<select name = "rooms">
						<option value = "1">1</option>
						<option value = "2">2</option>
						<option value = "3">3</option>
						<option value = "4">4</option>
						<option value = "5">5</option>
						<option value = "6">2</option>
						<option value = "7">3</option>
						<option value = "8">4</option>
						<option value = "9">9</option>
						<option value = "10">10</option>
					</select>
				</td>
				<td>
					<select name = "adults">
						<option value = "1">1</option>
						<option value = "2">2</option>
						<option value = "3">3</option>
						<option value = "4">4</option>
						<option value = "5">5</option>
						<option value = "6">2</option>
						<option value = "7">3</option>
						<option value = "8">4</option>
						<option value = "9">9</option>
						<option value = "10">10</option>
					</select>
				</td>
				<td>
					<select name = "kids">
						<option value = "0">0</option>
						<option value = "1">1</option>
						<option value = "2">2</option>
						<option value = "3">3</option>
						<option value = "4">4</option>
						<option value = "5">5</option>
						<option value = "6">2</option>
						<option value = "7">3</option>
						<option value = "8">4</option>
						<option value = "9">9</option>
						<option value = "10">10</option>
					</select>
				</td>
			</tr>
			<tr>
				<td id = "submit-cell" colspan = "5"><input class = "button" name = "submit-date" type = "submit" value = "SUBMIT"></td>
			</tr>
		</table>
	</form>
<p id = "address">8701 World Center Drive, Orlando, FL 32821<br>(407)-250-2595<br><a id = "direction-link" href = "https://www.marriott.com/hotels/maps/travel/mcowc-orlando-world-center-marriott/?maps">Directions</a></p>
</body>
</html>