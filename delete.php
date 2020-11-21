<?php 
	$con = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
	$zapros = "SELECT * FROM projects WHERE id = '{$_GET["id"]}'";
	$query = mysqli_query($con, $zapros);
	$stroka = $query->fetch_assoc();
	$text_zaprosa = "DELETE FROM projects WHERE id = '".$_GET["id"]."'";
	$zapros_vstavit = mysqli_query($con, $text_zaprosa);
	header("Location: akk.php?user=".$stroka["user"]."");
 ?>