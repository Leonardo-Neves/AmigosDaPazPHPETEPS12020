<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title></title>
</head>
<body>
	<?php include('OrganRepository.php'); ?>
	<?php include('shared/header.php'); ?>
	<?php 
		if(!isset($_SESSION['UserLoged']) && !isset($_SESSION['OrganLoged']) && !isset($_SESSION['ManegerLoged']))
		{
			header('Location: index.php');
			exit();
		}
	?>
	<div class="container">
		<div class="card p-5 mt-4 shadow-lg mb-5">
			<h3>Organizações:</h3>
			<p>Nossa instituições e orgões cadastrados e nosso sistema, todos esses estão disponiveis para doação, tanto de produtos ou de quantias em dinheiro, <br>Escolha qual melhor te agrada ...</p>

			<hr>

			<?php
				$datas = consultAllOrgans();

				while($data = mysqli_fetch_array($datas))
				{
			?>
				
				<form action="OrganController.php" method="GET">
					<div class="card p-3 mt-3 shadow-lg">
						<div class="row">
							<div class="col-md-3">
								<img style="height: 270px; width: 240px;" src="assets/images/profile.jpg" class="rounded">
							</div>
							<div class="col-md-7 mt-3">
								<h5><?php echo $data["name"]; ?></h5>
								<p>Email: <?php echo $data["email"]; ?></p>
								<p>Endereço: <?php echo $data["street"]; ?>, <?php echo $data["cep"]; ?> - <?php echo $data["neighborhood"]; ?></p>
								<p>Descrição: <?php echo $data["description"]; ?></p>
							</div>
							<div class="col-md-2">
								<button type="submit" style="height: 60px; width: 100px;" class="btn btn-success mr-3 mt-5">Ver</button>
							</div>
						</div>
					</div>
					<input type="hidden" name="id" value=<?php echo $data["id"]; ?> >
					<input type="hidden" value="FULL" name="selectOrgan">
				</form>
				
			<?php 	
				}
			?>
		</div>
		
	</div>
</body>
</html>