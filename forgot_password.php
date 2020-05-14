<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<?php include('shared/header.php'); ?>
	<div class="container">
		<div class="card m-5 p-5">
			<?php include('ValidationMessages.php'); ?>
			<h4>Esqueceu sua senha</h4>
			<hr>
			<p>Insira seu email para receber uma nova senha em seu email.</p>
			<form class="form-group" action="UserController.php" method="POST">
				<div class="row">
					<div class="col-md-12">
						<label>Email:</label>
						<input type="text" class="form-control" name="forgotPassword">
						<input type="hidden" value="FULL" name="forgot">
					</div>
					<div class="col-md-12 mt-2">
						<button type="submit" class="btn btn-primary">Enviar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>