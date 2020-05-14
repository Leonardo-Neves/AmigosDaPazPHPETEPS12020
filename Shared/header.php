
<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
		  	<a class="navbar-brand" href="index.php">Amigos da Paz</a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  	</button>

		  	<?php 
		  		session_start();

		  		$data = "";

		  		if(isset($_SESSION['UserLoged']))
		  		{
		  			$data = $_SESSION['UserData'];
		  		}

		  		if(isset($_SESSION['OrganLoged']))
		  		{
		  			$data = $_SESSION['OrganData'];
		  		}

		  		if(isset($_SESSION['ManegerLoged']))
		  		{
		  			$data = $_SESSION['ManegerData'];
		  		} 

		  		if(isset($_SESSION['UserLoged']) || isset($_SESSION['OrganLoged']) || isset($_SESSION['ManegerLoged']))
		  		{
		  	?>

			  	<div class="collapse navbar-collapse" id="navbarNav">
			    	<ul class="navbar-nav">
			      		<li class="nav-item active">
			        		<a class="nav-link" href="index.php">Home</a>
			      		</li>
			    	</ul>
			    	<ul class="navbar-nav">
			      		<li class="nav-item active">
			        		<a class="nav-link" href="profile.php">Perfil</a>
			      		</li>
			    	</ul>
			    	<?php 
			    	if(isset($_SESSION['OrganLoged']))
			    	{
			    	?>
				    	<ul class="navbar-nav">
				      		<li class="nav-item active">
				        		<a class="nav-link" href="product.php">Produtos e Voluntáriado</a>
				      		</li>
				    	</ul>
			    	<?php 
			    	}
			    	?>
			    	<ul class="navbar-nav">
			      		<li class="nav-item active">
			        		<a class="nav-link" href="organs.php">Organização e Doação</a>
			      		</li>
			    	</ul>

			    	<ul class="navbar-nav ml-2">
			      		<li class="nav-item active"><?php echo $data["name"]; ?></li>
			    	</ul>

			    	<ul class="navbar-nav ml-2">
			      		<li class="nav-item active">
			        		<a class="nav-link btn btn-primary" href="logout.php">Sair</a>
			      		</li>
			    	</ul>
			  	</div>

			<?php 
				} 
				else
				{
			?>
				<div class="collapse navbar-collapse" id="navbarNav">
			    	<ul class="navbar-nav">
			      		<li class="nav-item active">
			        		<a class="nav-link" href="index.php">Home</a>
			      		</li>
				      	<li class="nav-item active">
				        	<a class="nav-link" href="login.php">Login</a>
				      	</li>
				      	<li class="nav-item active">
				        	<a class="nav-link" href="register.php">Cadastrar</a>
				      	</li>
			    	</ul>
			  	</div>

			<?php 
				}
			?>

	  	</div>
	</nav>
</header>