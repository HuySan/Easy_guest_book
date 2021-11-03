<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Guest book with bd</title>
</head>
<body>
	<h1>Easy guest book</h1>
	<form action="" method = "post">
		<p>
		<input type="text" name="name" placeholder="Name...">
		</p>
		<p>
		<textarea placeholder="Message..." name="message"></textarea>
		</p>
		<p>
			<input type="submit" value ="Go" name = "btn">
		</p>
	</form>
</body>
</html>
<?php
//This magicd
require_once("func.php");

$connect = @mysqli_connect('localhost','root','','nice_gb') or die("server connection fail");
mysqli_set_charset($connect,"utf8");
if(isset($_POST['btn']) && !empty($_POST['name']) && !empty($_POST['message'])){
//подключить заголовки
	insert_value();
	header("location: {$_SERVER[PHP_SELF]}");
	die;
}

foreach(select_value() as $item){
	echo htmlspecialchars($item['name']) . "<br>" . htmlspecialchars($item['message']) . "<br>" . "|" . $item["date"] . "|" . "<hr>";
}
?>