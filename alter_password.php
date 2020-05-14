<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title></title>

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
	<div class="container">
		<div class="card m-5 p-5">
			<h4> Nova Senha:</h4>
			<p>Por sua segurança, informe um nova senha de sua escolha, após essa alteração, a senha temporaria enviada no email não funcionará mais.</p>
			<form class="form-group" action="UserController.php" method="POST">
				<div class="row">
					<div class="col-md-12">
						<input type="text" class="form-control" name="newPasswordAltered" placeholder="Informe sua nova senha">
					</div>
					<input type="hidden" value="FULL" name="alterPassword">
					<div class="col-md-12 mt-2">
						<button type="submit" class="btn btn-primary">Trocar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>