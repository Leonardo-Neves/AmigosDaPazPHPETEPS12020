<!DOCTYPE html>
<html>
<head>
	<title>Perfil - Amigos da Paz</title>

	<?php include('Shared/head.php'); ?>

</head>
<body>
	<?php include('Shared/header.php'); ?>
	
	<?php

	if(!isset($_SESSION['UserLogged']) && !isset($_SESSION['OrganLogged']) && !isset($_SESSION['ManagerLogged']))
	{
		header('Location: index.php');
		exit();
	}

	

	?>	

	<div class="container">
		<div class="card m-5 p-5 shadow-lg">
			<h3>Perfil</h3>
			<?php include('ValidationMessages.php'); ?>
			<hr>
			<div class="row">
				<div class="col-md-4">
					<?php 

						if(empty($data["profileImage"]))
						{
					?>
						<img style="height: 280px; width: 280px;" src="assets/images/profile.jpg" class="rounded">

					<?php  
						} else if(!empty($data["profileImage"])) {
					?>
						<img style="height: 280px; width: 280px;" src="images/<?php echo $data["profileImage"] ?>" class="rounded">
					<?php  
						}
					?>
					<div class="row m-1">
						<form action="file.php" method="POST" enctype="multipart/form-data">
							<input type="file" name="file">
							<input type="submit" class="btn btn-danger mt-1" name="sendFile">
						</form>
					</div>
					<div class="row">
						<form name="delete" action="UserController.php" method="GET">
							<input type="hidden" value="FULL" name="remove">
							<div class="col-md-12 mt-2">
								<button type="submit" id="actFormDelete" style="width: 200px;" class="btn btn-danger ml-5">Remover Conta</button>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-8">
					<form class="form-group" action="UserController.php" method="POST">
						<br>
						<h4>Dados Pessoais</h4>
						<hr>
						<div class="row">
							<div class="col-md-6">
								<label>Nome:</label>
								<input class="form-control" type="text" name="name" value="<?php echo $data["name"] ?>" >
							</div>
							<div class="col-md-6">
								<label>Telefone:</label>
								<input class="form-control" type="text" name="fone" value="<?php echo $data["fone"]; ?>" >
							</div>
						</div>
						<br>
						<h4>Dados de Acesso:</h4>
						<hr>
						<div class="row">
							<div class="col-md-6">
								<label>Email:</label>
								<input class="form-control" type="text" name="email" value="<?php echo $data["email"]; ?>" >
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label>Senha:</label>
								<input class="form-control" type="password" id="senha" name="password">
								
							    <div id="senhaBarra" class="progress mt-3" style="display: none;">
							        <div id="senhaForca" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
							        </div>
							    </div>
							</div>
						</div>
						<br>
						<h4>Endereço</h4>
						<hr>
						<div class="row">
							<div class="col-md-4">
								<label>CEP:</label>
								<input class="form-control" type="text" id="cep" name="cep" value="<?php echo $data["cep"]; ?>" >
							</div>
							<div class="col-md-4">
								<label>Rua:</label>
								<input class="form-control" type="text" id="rua" name="street" value="<?php echo $data["street"] ?>" >
							</div>
							<div class="col-md-4">
								<label>Bairro:</label>
								<input class="form-control" type="text" id="bairro" name="neighborhood" value="<?php echo $data["neighborhood"]; ?>" >
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<label>Cidade:</label>
								<input class="form-control" type="text" id="cidade" name="city" value="<?php echo $data["city"]; ?>" >
							</div>
							<div class="col-md-4">
								<label>UF:</label>
								<input class="form-control" type="text" id="uf" name="uf" value="<?php echo $data["uf"]; ?>" >
							</div>
							<div class="col-md-4">
								<label>IBGE:</label>
								<input class="form-control" type="text" id="ibge" name="ibge" value="<?php echo $data["ibge"]; ?>" >
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-12">
								<label>Descrição:</label>
								<textarea class="form-control" name="description" value="<?php echo $data["description"]; ?>" ></textarea>
							</div>
						</div>

						<input type="hidden" value="FULL" name="alter">

						<div class="row">
							<div class="col-md-12 mt-2">
								<button type="submit" class="btn btn-primary">Alterar</button>
							</div>
						</div>
					</form>
				</div>
				
			</div>

			<?php 
			if(isset($_SESSION['OrganLogged']))
			{
			?>
				<hr>
				<h3 class="mt-2">Ajudas:</h3>
				<table class="table mt-2">
				  <thead>
				    <tr>
				      <th scope="col">Titulo</th>
				      <th scope="col">Descrição</th>
				      <th scope="col"><center><b>X</b></center></th>
				    </tr>
				  </thead>
				  <?php 
					  include('OrganRepository.php');

					  $dataOrgan = $_SESSION['OrganData'];

					  $data = consultAllProductById($dataOrgan["id"]);

					  if(!$data)
					  {
				  ?>
					  <tbody>
					    <tr>
					    <td><center>Nenhum</center></td>
					    <td><center>Nenhum</center></td>
					    <td><center>Nenhum</center></td>
					    </tr>
					  </tbody>
				  <?php  
					} 
					else
					{
				  ?>
					  <tbody>
					  	<?php 
					  	while($datas = mysqli_fetch_array($data))
					  	{
					  	?>
						    <tr>
						    <td><?php echo $datas["title"]; ?></td>
						    <td><?php echo $datas["description"]; ?></td>
						    <td>
						    	<center>
								    <form action="OrganController.php" name="delete" method="GET">
								    	<input type="hidden" name="productIdRemove" value=<?php echo $datas["id"]; ?> >
								    	<input type="hidden" value="FULL" name="tableProduct">
								    	<button type="submit" id="actFormDelete" class="btn btn-danger">Excluir</button>
								    </form>
							    </center>
						  	</td>
						    </tr>
					    <?php 
						}
					    ?>
					  </tbody>
				  <?php 
					}
				  ?>
				</table>
			<?php
			} 
			?>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="assets/js/autoCompleteCEP.js"></script>
	<script type="text/javascript" src="assets/js/passwordPower.js"></script>
<?php include('Shared/footer.php'); ?>	
<script>       
$(function() {
  $(this).on("click", "#actFormDelete", function(event) {
    event.preventDefault();
    if (!confirm("Deseja realmente excluir esta ajuda?")) return false;
    $('form[name="delete"]').submit()
   
  });
});
</script>
</body>
</html>