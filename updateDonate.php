<?php 
	header('Location: index.php');
	$con = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
	$zapros = "SELECT * FROM projects WHERE id = '{$_GET["id"]}'";
	$query = mysqli_query($con, $zapros);
	$stroka = $query->fetch_assoc();
	$k = $stroka["donated"] + 10;
	$zapros2 = "UPDATE projects SET donated = '$k' WHERE id = '{$_GET["id"]}'";
	$query2 = mysqli_query($con, $zapros2);
 ?>