<!DOCTYPE html>
<html>
<head>
	<?php include('Shared/head.php'); ?>
	<title>Recuperação de Senha - Amigos da Paz</title>
</head>
<body>
	<?php include('Shared/header.php'); ?>
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
<?php include('Shared/footer.php'); ?>	
</body>
</html>