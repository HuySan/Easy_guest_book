<?php
function insert_value(){
	global $connect;
	$name = mysqli_real_escape_string($connect,$_POST['name']);
	$message = mysqli_real_escape_string($connect,$_POST['message']);
	$query = "INSERT INTO `nice_gb` (name,message) VALUES('$name','$message')";
	mysqli_query($connect,$query) or die("Cooбщение не отправлено");
}

function select_value(){
	global $connect;
	$query = "SELECT name,message,date FROM `nice_gb` ORDER BY id DESC";
	$res = mysqli_query($connect,$query);
	$res = mysqli_fetch_all($res,MYSQLI_ASSOC);
	return($res);
}
?>