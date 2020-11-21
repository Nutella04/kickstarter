<?php 
$con = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
$zapros = "SELECT * FROM projects WHERE id = '{$_GET["id"]}'";
$query = mysqli_query($con, $zapros);
$stroka = $query->fetch_assoc();
$zaprosTitle = "UPDATE projects SET title = '{$_GET["title"]}' WHERE id = '{$_GET["id"]}'";
$zaprosDesc = "UPDATE projects SET description = '{$_GET["description"]}' WHERE id = '{$_GET["id"]}'";
$zaprosGoal = "UPDATE projects SET goal = '{$_GET["goal"]}' WHERE id = '{$_GET["id"]}'";
$zaprosIMG = "UPDATE projects SET img = '{$_GET["img"]}' WHERE id = '{$_GET["id"]}'";
$queryTitle = mysqli_query($con, $zaprosTitle);
$queryDesc = mysqli_query($con, $zaprosDesc);
$queryGoal = mysqli_query($con, $zaprosGoal);
$queryIMG = mysqli_query($con, $zaprosIMG);
header("Location: akk.php?user=".$stroka["user"]."");

?>