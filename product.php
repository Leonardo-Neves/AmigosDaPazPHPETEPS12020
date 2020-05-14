<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title></title>
</head>
<body>
	<?php include('shared/header.php'); ?>

	<?php 
		if(!isset($_SESSION['OrganLoged']))
		{
			header('Location: index.php');
			exit();
		}
	?>
	
	<div class="container">
	
		<div class="card mt-5 p-5 shadow-lg mb-5">
			
			<h3>Produtos e Voluntáriado</h3>
			<br>
			<p>      Informe se sua instituição precisa produtos (ex. fraudas, produtos de higiene, alimentos) para o funcionamento de sua instituição, caso sua instituição precise de voluntário, escreva sobre isso também. Escreva detalhadamente sobre eles.</p>
			<p>Após o cadastrado dessas informações, elas estão disponiveis para visualizar e exclusão no seu perfil.</p>
			<hr>
			<?php include('ValidationMessages.php'); ?>
			<form class="form-group" action="OrganController.php" method="POST">
				<div class="row">
					<div class="col-md-8">
						<h4>Produto:</h4>
						<p>Nesse espaço você pode escreve o nome do produto, tamanho, quantidade, marca entre outros. Defina bem o produto para que fique melhor definido.</p>
						<label>Nome do produto:</label>
						<input type="text" class="form-control" name="title">
					</div>
					<div class="col-md-8">
						<label>Detalhes do produto ...</label>
						<textarea class="form-control" name="description" style="height: 200px;"></textarea>
					</div>
				</div>
				<input type="hidden" value="P" name="typeHelp">
				<input type="hidden" value="FULL" name="registerProduct">
				<div class="row mt-2">
					<div class="col-md-12">
						<button type="submit" class="btn btn-success">Enviar</button>
					</div>
				</div>
			</form>
			<hr>
			<form class="form-group" action="OrganController.php" method="POST">
				<div class="row">
					<div class="col-md-8">
						<h4>Voluntário:</h4>
						<p>Nesse espaço você pode escrever para o que será o voluntário, defina detalhadamente para que ler entenda bem para o que é a oportunidade de voluntário.</p>
						<label>No que será a ajuda:</label>
						<input type="text" class="form-control" name="title">
					</div>
					<div class="col-md-8">
						<label>Detalhes sobre a ...</label>
						<textarea class="form-control" name="description" style="height: 200px;"></textarea>
					</div>
				</div>
				<input type="hidden" value="V" name="typeHelp">
				<input type="hidden" value="FULL" name="registerVoluntier">
				<div class="row mt-2">
					<div class="col-md-12">
						<button type="submit" class="btn btn-success">Enviar</button>
					</div>
				</div>
			</form>
		</div>
		
	</div>
	

</body>
</html>