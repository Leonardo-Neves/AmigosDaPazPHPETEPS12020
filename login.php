<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<?php include('shared/header.php'); ?>
	<div class="container-lg">
		<div class="card m-5 p-5" style="width: 500px;">
			<h3>Login</h3>
			<hr>
			<form class="form-group" action="UserController.php" method="POST">
				<?php include('ValidationMessages.php'); ?>
				<div class="row">
					<div class="col-md-12">
						<label>Email:</label>
						<input type="text" class="form-control" name="email">
					</div>	
				</div>
				<div class="row">
					<div class="col-md-12">
						<label>Senha:</label>
						<input type="text" class="form-control" name="password">
					</div>	
				</div>

				<input type="hidden" value="FULL" name="login">
				<div class="row">
					<div class="col-md-6">
						<button type="submit" class="btn btn-primary mt-2">Entrar</button>
					</div>
					<div class="col-md-6 mt-3">
						<span><a href="forgot_password.php">Esqueceu sua senha ?</a></span>
					</div>
				</div>

			</form>
		</div>
	</div>
</body>	
</html>