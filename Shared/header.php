<?php

$url = $_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
$home = "nav-link btn text-white";
$profile = "nav-link btn text-white";
$organ = "nav-link btn text-white";
$product = "nav-link btn text-white";
$login = "nav-link btn text-white";
$register = "nav-link btn text-white";
if ($url == "localhost/index.php")
$home = "nav-link btn text-white active";
else if ($url == "localhost/profile.php")
$profile = "nav-link btn text-white active";
else if ($url == "localhost/organs.php" || $url == "localhost/donate.php")
$organ = "nav-link btn text-white active";
else if ($url == "localhost/product.php")
$product = "nav-link btn text-white active";
else if ($url == "localhost/login.php")
$login = "nav-link btn text-white active";
else if ($url == "localhost/register.php")
$register = "nav-link btn text-white active";

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
<style>
    a:link, li
	{
	list-style: none !important;
	text-decoration:none !important;
	}
	.nav-link.btn-primary:hover{
		background: #ff1428 !important;
		-webkit-filter: drop-shadow(10px 5px 2.5px rgba(0,0,0,.3));
    	filter: drop-shadow(10px 5px 2.5px rgba(0,0,0,.3));
	}
	.active{
       color: yellow !important;

	}
	</style>	
	<!-- Header -->	
    <div class="container" style="background-color: #343a40!important; min-width: 100%">
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
	
		  	
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  	</button>

		  	<?php 
		  		session_start();

		  		$data = "";

		  		if(isset($_SESSION['UserLogged']))
		  		{
		  			$data = $_SESSION['UserData'];
		  		}

		  		if(isset($_SESSION['OrganLogged']))
		  		{
		  			$data = $_SESSION['OrganData'];
		  		}

		  		if(isset($_SESSION['ManagerLogged']))
		  		{
		  			$data = $_SESSION['ManagerData'];
		  		} 

		  		if(isset($_SESSION['UserLogged']) || isset($_SESSION['OrganLogged']) || isset($_SESSION['ManagerLogged']))
		  		{
		  	?>

			  	<div class="collapse navbar-collapse container" id="navbarNav">
			    	<ul class="navbar-nav">
			      		<li class="nav-item">
			        		<a class="<?= $home ?>" href="index"><i class="fas fa-home"></i> Home - Amigos da Paz </a>
			      		</li>
			    	</ul>
			    	<ul class="navbar-nav">
			      		<li class="nav-item">
			        		<a class="<?= $profile ?>" href="profile"><i class="fas fa-user-edit"></i> Perfil </a>
			      		</li>
			    	</ul>

			    	<ul class="navbar-nav">
			      		<li class="nav-item">
			        		<a class="<?= $organ ?>"  href="organs"> <i class="fas fa-hand-holding-usd"></i> Organização e Doação </a>
			      		</li>
		    		</ul>
			    	
			    	<?php 
			    	if(isset($_SESSION['OrganLogged']))
			    	{
			    	?>
				    	<ul class="navbar-nav">
				      		<li class="nav-item">
				        		<a class="<?= $product ?>" href="product"> <i class="fas fa-hands-helping"></i> Produtos e Voluntariado </a>
				      		</li>
				      	</ul>

				      	
				      	
			    	<?php 
			    	}
			    	?>

			    	<?php 
			    	if(isset($_SESSION['ManagerLogged']))
			    	{
			    	?>
				    	<ul class="navbar-nav">
				      		<li class="nav-item">
				        		<a class="nav-link btn text-white" href="admin/dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard </a>
				      		</li>
				    	</ul>
			    	
			    	
			    	 <?php 
			    	}
			    	?>
                    
			    	<ul class="navbar-nav">
			      		<li class="nav-item" style="color: #bd8aff"><i class="fas fa-user"></i> <?php echo $data["name"]; ?> </li>
			    	</ul>
			    	<ul class="navbar-nav">
			    	<li class="nav-item">
			        		<a class="nav-link btn btn-primary btn btn-outline-dark" id="actFormLogoutSubmit" style="color: white" href="logout">Sair</a>
			      	</li>
			        </ul>

			  	</div>
       
			<?php 
				} 
				else
				{
			?>
				<div class="collapse navbar-collapse container" id="navbarNav">
					<ul class="navbar-nav">
			      		<li class="nav-item">
			        		<a class="<?= $home ?>" href="index"><i class="fas fa-home"></i> Home - Amigos da Paz </a>
			      		</li>
			    	</ul>
			    	<ul class="navbar-nav">
			    		<li class="nav-item">
				        	<a class="<?= $login ?>" href="login"><i class="fas fa-sign-in-alt"></i> Login </a>
				      	</li>
				      </ul>
				      <ul class="navbar-nav">
				      	<li class="nav-item">
				        	<a class="<?= $register ?>" href="register"><i class="fas fa-user-plus"></i> Cadastrar </a>
				      	</li>
			      	</ul>
			  	</div>

			<?php 
				}
			?>
		</nav>
        </div>
<script>       
$(function() {
  $(this).on("click", "#actFormLogoutSubmit", function(event) {
    event.preventDefault();
    if (!confirm("Deseja realmente sair?")) return false;

    location.href="../logout";
  });
});
</script>