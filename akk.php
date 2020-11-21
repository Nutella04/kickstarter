<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="col-12">
	<div class="row">
		<div class="col-2 pt-3">
			<a href="" class="text-dark ml-3">Explore</a>
			<a href="" class="text-dark ml-3">Start a project</a>
		</div>
		<div class="col-8 text-center">
			<img src="logo.png" class="w-25">
			<p>#BlackLivesMatter</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="" > <i class="fa fa-search"></i> Search</a>
			<a href="auto.php"><img src="lk.png" class="rounded-circle" ></a>
		</div>
	</div>
	<form method="GET" action="insert.php" class="col-5 mx-auto text-center">
		<input type="" name="title" placeholder="заголовок" class="col-12">
		<textarea type="" name="description" placeholder="описание" class="col-12 mt-2"></textarea>
		<input type="" name="goal" placeholder="необходимая сумма" class="col-12 mt-2">
		<input type="" name="img" placeholder="обложка" class="col-12 mt-2">
		<input type="" name="place" placeholder="город" class="col-12 mt-2">
		<input type="" name="user" placeholder="user" class="col-12 mt-2" value='<?php echo $_GET["user"]?>'>
		<button class="btn btn-success mt-2 col-12">Добавить</button>
	</form>
</div>
<?php 
	$con = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
	$zapros = "SELECT * FROM projects WHERE user ='{$_GET["user"]}'";
	$query = mysqli_query($con, $zapros);
	$tabl = mysqli_query($con, $zapros);
?>
<div class="col-10 mx-auto">
	<h3 class="">My projects <span class="text-success font-weight-bold"><?php echo  $tabl->num_rows;?></span></h3>
	<p></p>	
	<?php 
		for ($i=0; $i < $tabl->num_rows; $i++) { 
			$stroka = $query->fetch_assoc();
	 ?>
		<div class="col-8 mb-4 mt-4 mx-auto text-center">
			<h3><?php echo $stroka["title"]; ?></h3>
			<p><?php echo $stroka["description"]; ?></p>
	 		<div class="row">
	 			<div class="col-9" style="background-image: url(<?php echo $stroka['img']; ?>); height: 400px; background-size: 100% 100%"></div>
	 			<div class="col-3">
	 				<p class="text-success">Собрано</p>
	 				<h3 class="text-success"><?php echo $stroka["donated"]; ?></h3>
	 				<p class="text-muted">Необходимая сумма</p>
	 				<h2 class="text-muted"><?php echo $stroka["goal"]; ?></h2>
	 				<form method="GET" action="change.php">
	 					<input value='<?php echo $stroka["id"]?>' type="" name="id" style="display: none;">
						<button class="btn btn-success">Редактировать</button>
	 				</form>
	 				<form method="GET" action="delete.php" class="mt-2">
	 					<input value='<?php echo $stroka["id"]?>' type="" name="id" style="display: none;">
						<button class="btn btn-danger">Удалить проект</button>
	 				</form>
	 			</div>
	 		</div>
	 	</div>
	<?php 
		}
	 ?>

	 	
</div>

</body>
</html>