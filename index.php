<!DOCTYPE html>
<html>
<head>
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
</div>
	<?php 
		$con = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
		$zapros = "SELECT * FROM projects";
		$query = mysqli_query($con, $zapros);
		$tabl = mysqli_query($con, $zapros);
?>
<div class="col-10 mx-auto">
	<h4 class="">Explore <span class="text-success font-weight-bold"><?php echo  $tabl->num_rows;?></span></h4>
	<p></p>
	
	<div class="row mt-5">
		<?php 
		for ($i=0; $i < $tabl->num_rows; $i++) { 
			$stroka = $query->fetch_assoc();
		
	 	?>
		<div class="col-4">
			<img src='<?php echo $stroka["img"]; ?>' class='w-100'>
			<h3><?php echo $stroka["title"]; ?></h3>
			<p><?php echo $stroka["description"]; ?></p>
			<h1> </h1>
			<p><?php echo $stroka["goal"]; ?>$ goal</p>
			<p class="text-success"><?php echo $stroka["donated"]; ?>$ pledget</p>
			<form method="GET" action="updateDonate.php">
				<input value='<?php echo $stroka["id"] ?>' type="" name="id" style="display: none;">
				<button class="btn btn-success">Back this project</button>
			</form>
		</div>
		<?php 
		}
	 ?>
	</div>
	
</div>
</body>
</html>