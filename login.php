<!DOCTYPE html>
<html>
<head>
<?php include('Shared/head.php'); ?>
<title>Acesso - Amigos da Paz</title>
</head>
<body>
	<?php include('Shared/header.php'); ?>
	<div class="card bg-dark container-fluid" style="background-image: url(images/adult-affection-baby-child-302083.jpg);">
	<div class="container-lg d-flex justify-content-center">
		<div class="card m-5 p-5" style="width: 500px;">
			<h3>Login</h3>
			<hr>
			<form class="form-group" action="UserController" method="POST">
					<?php include('ValidationMessages.php'); ?>
					<div class="row">
						<div class="col-md-12">
							<label>Email:</label>
							<input type="text" class="form-control" name="email" required>
						</div>	
					</div>
					<div class="row">
						<div class="col-md-12">
							<label>Senha:</label>
							<input type="password" class="form-control" name="password" required>
						</div>	
					</div>
					<input type="hidden" value="FULL" name="login">
					<div class="row">
						<div class="col-md-6">
							<button type="submit" class="btn btn-primary mt-2">Entrar</button>
						</div>
						<div class="col-md-6 mt-3">
							<span><a href="forgot_password">Esqueceu sua senha ?</a></span>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php include('Shared/footer.php'); ?>	
</body>	
</html>