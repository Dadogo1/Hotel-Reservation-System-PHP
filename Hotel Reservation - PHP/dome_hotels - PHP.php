<?php
$_SESSION['connection'] = new mysqli('localhost', 'dariandominguez', 'dariandominguezpass', 'dariandominguezdatabase');
if($_SESSION['connection']->connect_error){
	die("Connection failed: " . $_SESSION['connection']->connect_error);
}

$select_query = mysqli_query($_SESSION['connection'], "SELECT * FROM hotel_rooms");

if(isset($_REQUEST['submit-date'])){
	$_SESSION['check-in-data'] = date_create($_REQUEST['check-in']);
	$_SESSION['check-out-data'] = date_create($_REQUEST['check-out']);
	$_SESSION['check-in'] = $_REQUEST['check-in'];
	$_SESSION['check-out'] = $_REQUEST['check-out'];
	$_SESSION['rooms'] = $_REQUEST['rooms'];
	$_SESSION['room_count'] = $_REQUEST['rooms'];
	$_SESSION['adults'] = $_REQUEST['adults'];
	$_SESSION['kids'] =  $_REQUEST['kids'];
	
	$_SESSION['date-interval'] = date_diff($_SESSION['check-in-data'],$_SESSION['check-out-data']);
	$_SESSION['date-diff'] = $_SESSION['date-interval']->format("%R%a");
	
	if((int)$_SESSION['date-diff'] <= 0){
		header('Location:dome_hotels - home.php');
	}
	
	$_SESSION['bill'] = ((int)$_SESSION['adults'] * 20) + ((int)$_SESSION['kids']  * 10);
}

if(isset($_REQUEST['cart-cancel'])){
	$_SESSION['bill'] = ((int)$_SESSION['adults'] * 20) + ((int)$_SESSION['kids']  * 10);
	$_SESSION['room_count'] = $_SESSION['rooms'];
	$_SESSION['room_cost'] = 0;	
}

if(isset($_REQUEST['submit-cart'])){
	if($_SESSION['room_count'] == 0){
		header('Location:dome_hotels - form.php');
	}
}

if(isset($_REQUEST['submit-form'])){
	$_SESSION['first-name'] = $_REQUEST['first-name'];
	$_SESSION['last-name'] = $_REQUEST['last-name'];
	$_SESSION['address'] = $_REQUEST['address'];
	$_SESSION['city'] = $_REQUEST['city'];
	$_SESSION['state'] = $_REQUEST['state'];
	$_SESSION['phone'] = $_REQUEST['phone'];
	$_SESSION['email'] = $_REQUEST['phone'];
	
	$insert_query = mysqli_query($_SESSION['connection'], "INSERT INTO hotel_customers (first_name,last_name,address,city,state,phone_number,email_address,check_in,check_out,rooms,adults,kids,bill)
     VALUES ('" . $_SESSION['first-name'] . "','" . $_SESSION['last-name'] . "','" . $_SESSION['address'] . "','" . $_SESSION['city'] . "','" . $_SESSION['state'] . "','" . $_SESSION['phone'] . "','" . $_SESSION['email'] . "','" . $_SESSION['check-in'] . "','" .$_SESSION['check-out'] . "','" . $_SESSION['rooms'] . "','" . $_SESSION['adults'] . "','" . $_SESSION['kids'] . "','" . $_SESSION['bill'] . "')");
}

if(isset($_REQUEST['room-1'])){
	if($_SESSION['room_count'] > 0){
		$_SESSION['room_count'] -= 1;
		$_SESSION['room_cost'] += 100;
	}	
}

if(isset($_REQUEST['room-2'])){
	if($_SESSION['room_count'] > 0){
		$_SESSION['room_count'] -= 1;
		$_SESSION['room_cost'] += 150;
	}	
}

if(isset($_REQUEST['room-3'])){
	if($_SESSION['room_count'] > 0){
		$_SESSION['room_count'] -= 1;
		$_SESSION['room_cost'] += 200;
	}	
}

if(isset($_REQUEST['room-4'])){
	if($_SESSION['room_count'] > 0){
		$_SESSION['room_count'] -= 1;
		$_SESSION['room_cost'] += 250;
	}	
}

if(isset($_REQUEST['room-5'])){
	if($_SESSION['room_count'] > 0){
		$_SESSION['room_count'] -= 1;
		$_SESSION['room_cost'] += 300;
	}	
}

if(isset($_REQUEST['room-6'])){
	if($_SESSION['room_count'] > 0){
		$_SESSION['room_count'] -= 1;
		$_SESSION['room_cost'] += 350;
	}	
}

if(isset($_REQUEST['room-7'])){
	if($_SESSION['room_count'] > 0){
		$_SESSION['room_count'] -= 1;
		$_SESSION['room_cost'] += 400;
	}	
}

if(isset($_REQUEST['room-8'])){
	if($_SESSION['room_count'] > 0){
		$_SESSION['room_count'] -= 1;
		$_SESSION['room_cost'] += 450;
	}	
}

if(isset($_REQUEST['room-9'])){
	if($_SESSION['room_count'] > 0){
		$_SESSION['room_count'] -= 1;
		$_SESSION['room_cost'] += 500;
	}	
}

if(isset($_REQUEST['room-10'])){
	if($_SESSION['room_count'] > 0){
		$_SESSION['room_count'] -= 1;
		$_SESSION['room_cost'] += 550;
	}	
}

if($_SESSION['room_count'] == 0){
	$_SESSION['bill'] = ((int)$_SESSION['date-diff'] * $_SESSION['room_cost']) + ((int)$_SESSION['adults'] * 20) + ((int)$_SESSION['kids']  * 10);
}

?>