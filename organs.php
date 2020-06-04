<!DOCTYPE html>
<html>
<head>
	<?php include('Shared/head.php'); ?>	

	<title>Instituições Colaboradoras - Amigos da Paz</title>
</head>
<body>
	<?php include('OrganRepository.php'); ?>
	<?php include('shared/header.php'); ?>
	<?php 
		if(!isset($_SESSION['UserLogged']) && !isset($_SESSION['OrganLogged']) && !isset($_SESSION['ManagerLogged']))
		{
			header('Location: index.php');
			exit();
		}
	?>
	<div class="container">
		<div class="card p-5 mt-4 shadow-lg mb-5">
			<h3>Organizações:</h3>
			<p>Nossas instituições e orgões cadastrados em nosso sistema, todos esses estão disponiveis para doação, tanto de produtos ou de quantias em dinheiro, <br>Escolha qual melhor te agrada ...</p>

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
								<?php 

									if(empty($data["profileImage"]))
									{
								?>
									<img style="height: 270px; width: 240px;" src="assets/images/profile.jpg" class="rounded">

								<?php  
									} else if(!empty($data["profileImage"])) {
								?>
									<img style="height: 270px; width: 240px;" src="images/<?php echo $data["profileImage"] ?>" class="rounded">
								<?php  
									}
								?>
								
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
<?php include('Shared/footer.php'); ?>	
</body>
</html>