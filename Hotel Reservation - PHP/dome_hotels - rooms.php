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
	<form>
		<input type = "hidden" name = "check-in" value = <?php $_SESSION['check-in'] ?>>
		<input type = "hidden" name = "check-out" value = <?php $_SESSION['check-out'] ?>>
		<input type = "hidden" name = "rooms" value = <?php $_SESSION['rooms'] ?>>
		<input type = "hidden" name = "adults" value = <?php $_SESSION['adults'] ?>>
		<input type = "hidden" name = "check-in" value = <?php $_SESSION['kids'] ?>>
		<table class = "room-table">
		<tr>
			<th id = "room-table-header" colspan = "9">ROOMS</th>
		</tr>
		<tr>
			<th>ROOM</th>
			<th>NAME</th>
			<th>SOFA BED</th>
			<th>QUEEN BED</th>
			<th>KING BED</th>
			<th>POOL VIEW</th>
			<th>BALCONY</th>
			<th>PRICE</th>
		</tr>
		<?php
			$i = 0;
			while ($row = mysqli_fetch_array($select_query)){
				$i++;
				echo "<tr><td>" . "<img class = 'room-pics' src = 'data:image/jpeg;base64," .base64_encode($row['room']) . "'>" . "</td><td>" . $row['name'] . "</td><td>" . $row['sofa_bed'] . "</td><td>" . $row['queen_bed'] . "</td><td>" . $row['king_bed'] . "</td><td>" . $row['pool_view'] . "</td><td>" . $row['balcony'] . "</td><td>" . $row['price'] . "</td><td><form action = 'dome_hotels - rooms.php'><input type = 'submit' name = 'room-" . $i . "' value = 'SUBMIT'></form></td></tr>";
			}
			$i = 0;
			echo "<tr><th>AVAILABILITY:</th><th>" . $_SESSION['room_count'] . "</th><th>TOTAL:</th><th colspan = '4'>$" . $_SESSION['bill'] . "</th><th><input class = 'button' name = 'cart-cancel' type = 'submit' value = 'CLEAR' action = 'dome_hotels - form.php'></th></th><th><input class = 'button' name = 'submit-cart' type = 'submit' value = 'BUY' action = 'dome_hotels - form.php'></th></tr>";
		?>
		</table>
	</form>
	
</body>
</html>