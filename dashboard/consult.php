<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	
	<?php
	session_start();
	if(!isset($_SESSION['ManegerLoged']))
	{
		header('Location: index.php');
		exit();
	}

	

	?>	

	<div class="container">
		<div class="card m-5 p-5 shadow-lg">
			
				<form class="form-group" action="" method="POST">
					<h3>Consultar</h3>
					<hr>
					<div class="row">
						<div class="col-md-6">
							<input class="form-control" type="text" name="name" placeholder="Informe o nome do usuário ou instituição ...">
						</div>		
						<div class="col-md-6">
							<button class="btn btn-primary" id="consult" type="submit">Consultar</button>
						</div>				
					</div>

				</form>
			
				<hr>
				<h4 class="mt-2">Resultado:</h4>
				<table class="table mt-2">
				    <thead>
				    	<tr>
				      	<th scope="col">Nome</th>
				      	<th scope="col">Email</th>
				      	<th scope="col">Telefone</th>
				      	<th scope="col">CNPJ/CPF</th>
				      	<th scope="col">Tipo Usuário</th>
				      	<th scope="col">Data de Criação</th>
				      	<th scope="col"><center><b>X</b></center></th>
				    </tr>
				  	</thead>
				  	<?php 
				  		include('../UserRepository.php');

					  	$result =  $_POST['name'];

					  	$data = consultUserByName($result);
					?>

				  	<tbody>
					  	<?php 
					  	while($datas = mysqli_fetch_array($data))
					  	{
					  	?>
						    <tr>
						    <td><?php echo $datas["name"]; ?></td>
						    <td><?php echo $datas["email"]; ?></td>
						   	<td><?php echo $datas["fone"]; ?></td>
						   	<td><?php echo $datas["cnpjAndCpf"]; ?></td>
						   	<td><?php echo $datas["typeUser"]; ?></td>
						   	<td><?php echo $datas["createdAt"]; ?></td>
						    <td>
						    	<center>
								    <form action="OrganController.php" method="GET">
								    	<input type="hidden" name="productIdRemove" value=<?php echo $datas["id"]; ?> >
								    	<input type="hidden" value="FULL" name="tableProduct">
								    	<button type="submit" class="btn btn-danger">Excluir</button>
								    </form>
							    </center>
						  	</td>
						    </tr>
					    <?php 
						}
					    ?>
				  	</tbody>
				  
				</table>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="assets/js/autoCompleteCEP.js"></script>
	<script type="text/javascript" src="assets/js/passwordPower.js"></script>

	<script type="text/javascript">
	    $('#consult').submit(function(event) {
	      	event.preventDefault();
	    });

	</script>

</body>
</html>

