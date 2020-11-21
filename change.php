<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php 
	$con = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
	$zapros = "SELECT * FROM projects WHERE id ='{$_GET["id"]}'";
	$query = mysqli_query($con, $zapros);
	$stroka = $query->fetch_assoc();
?>
<h1 class="text-center">Редактировать</h1>
<div class="col-6 mx-auto">
	<form method="GET" action="redact.php" class="col-5 mx-auto text-center">
		<input type="" name="id" class="col-12" value='<?php echo $_GET["id"] ?>' style='display: none;'>
		<input type="" name="title" placeholder="заголовок" class="col-12" value='<?php echo $stroka["title"] ?>'>
		<input type="" name="description" placeholder="описание" class="col-12 mt-2" value='<?php echo $stroka["description"] ?>'>
		<input type="" name="goal" placeholder="необходимая сумма" class="col-12 mt-2" value='<?php echo $stroka["goal"] ?>'>
		<input type="" name="img" placeholder="обложка" class="col-12 mt-2" value='<?php echo $stroka["img"] ?>'>
		<button class="btn btn-success mt-2 col-12">Редактировать</button>
	</form>
</div>
</body>
</html>