<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<?php include('shared/header.php'); ?>
	<?php  
		if(!isset($_SESSION['UserLoged']) && !isset($_SESSION['OrganLoged']) && !isset($_SESSION['ManegerLoged']))
		{
			header('Location: index.php');
			exit();
		}
	?>
	<div class="container pb-6 mb-5">
		<div class="card p-5 mt-5 shadow-lg">
			<?php 
			$data = "";

			if(isset($_SESSION['DataOrganSelect']))
			{
				$data = $_SESSION['DataOrganSelect'];
			}
			?>

			<h2><?php echo $data["name"]; ?></h2>
			<hr>
			<div class="row">
				<div class="col-md-6">
					<h4>Dados de Contatos</h4>
					<p><b>Email:</b> <?php echo $data["email"]; ?></p>
					<p><b>Telefone:</b> <?php echo $data["fone"]; ?></p>
				</div>
				<div class="col-md-6">
					<h4>Endereço da Instituição</h4>
					<p><b>CEP:</b> <?php echo $data["cep"]; ?></p>
					<p><b>Rua:</b> <?php echo $data["street"]; ?></p>
					<p><b>Bairro:</b> <?php echo $data["neighborhood"]; ?></p>
					<p><b>Cidade:</b> <?php echo $data["city"]; ?></p>
					<p><b>UF:</b> <?php echo $data["uf"]; ?></p>
					<p><b>CNPJ:</b> <?php echo $data["cnpjAndCpf"]; ?></p>
				</div>
			</div>
			<hr>
			<h4>Sobre nós ...</h4>
			<p>     <?php echo $data["description"]; ?></p>
			<br>
			<br>

			<h4>Produtos e voluntários que precisamos ...</h4>
			<?php 
			include('OrganRepository.php');

			$dataProduct = consultAllProductById($data["id"]);

			while($datas = mysqli_fetch_array($dataProduct))
			{
			?>
				<div class="card mt-2 shadow">
					<div class="row p-3">
						<div class="col-md-12 ml-3">
							<h5>Titulo do Pedido: <?php echo $datas["title"]; ?></h5>
						</div>
						<div class="col-md-12 ml-3">
							<p><b>Detalhes:</b> <?php echo$datas["description"]; ?></p>	
						</div>
					</div>
				</div>
			<?php  
			}
			?>
			<br>
			<br>
			<hr>
			<h4>Nos ajuda também com quantias em dinheiro:</h4>
			<br>
			<div class="row">
				<div class="col-md-4">
					<div class="card p-3 shadow-lg">
						<h4><b>Preço:</b></h4>
						<center><h3 class="mt-3"><b>R$ 10,00</b></h3></center>
						<br>
						<center><p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven</p></center>
						<br>
						<br>
						<center><button style="width: 120px;" class="btn btn-success rounded">Ajudar</button></center>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card p-3 shadow-lg ">
						<h4><b>Preço:</b></h4>
						<center><h3 class="mt-3"><b>R$ 20,00</b></h3></center>
						<br>
						<center><p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven</p></center>
						<br>
						<br>
						<center><button style="width: 120px;" class="btn btn-success rounded">Ajudar</button></center>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card p-3 shadow-lg">
						<h4><b>Preço:</b></h4>
						<center><h3 class="mt-3"><b>R$ 30,00</b></h3></center>
						<br>
						<center><p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven</p></center>
						<br>
						<br>
						<center><button style="width: 120px;" class="btn btn-success rounded">Ajudar</button></center>
					</div>
				</div>
				
			</div>
			<br>
			


		</div>
	</div>

</body>
</html>