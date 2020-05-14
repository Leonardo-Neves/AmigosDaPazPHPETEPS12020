
<?php 
	
	include('OrganRepository.php');
	include('Validation.php');
	include('connection.php');

	$page = "";
	$title = "";
	$description = "";
	$typeHelp = "";
	$productIdRemove = "";

	$selectOrgan = "";
	$registerProduct = "";
	$voluntier = "";
	$tableProduct = "";

	if(isset($_GET['id']))
	{
		$page = $_GET['id']; 
	}

	if(isset($_POST['title']))
	{
		$title = mysqli_real_escape_string($connectionProduct, $_POST['title']);
	}

	if(isset($_POST['description']))
	{
		$description = mysqli_real_escape_string($connectionProduct, $_POST['description']);
	}

	if(isset($_POST['typeHelp']))
	{
		$typeHelp = mysqli_real_escape_string($connectionProduct, $_POST['typeHelp']);
	}

	if(isset($_GET['productIdRemove']))
	{
		$productIdRemove = mysqli_real_escape_string($connectionProduct, $_GET['productIdRemove']);
	}

	// Those variable is about where came the request

	if(isset($_GET['selectOrgan']))
	{
		$selectOrgan = $_GET['selectOrgan'];
	}

	if(isset($_POST['registerProduct']))
	{
		$registerProduct = $_POST['registerProduct'];
	}

	if(isset($_POST['registerVoluntier']))
	{
		$registerVoluntier = $_POST['registerVoluntier'];
	}

	if(isset($_GET['tableProduct']))
	{
		$tableProduct = $_GET['tableProduct'];
	}

	if(!empty($selectOrgan))
	{
		
		$data = consultOrganById($page);

		session_start();

		$_SESSION['DataOrganSelect'] = $data;

		header('Location: donate.php');
		exit();
	}

	if(!empty($registerProduct))
	{
		$data = "";

		session_start();

  		$data = $_SESSION['OrganData'];

  		$user_id = $data["id"];

		if(TitleValidator($title) && DescriptionValidator($description))
		{
			// Registering a Product
			if(organProductRegister($user_id, $title, $description, $typeHelp))
			{
				header('Location: product.php');
				exit();
			}
			else
			{
				header('Location: product.php');
				exit();
			}
		}
		else
		{
			header('Location: product.php');
			exit();
		}
	}

	if(!empty($registerVoluntier))
	{
		$data = "";

		session_start();

  		$data = $_SESSION['OrganData'];

  		$user_id = $data["id"];

		if(TitleValidator($title) && DescriptionValidator($description))
		{
			// Registering a Product
			if(organProductRegister($user_id, $title, $description, $typeHelp))
			{
				header('Location: product.php');
				exit();
			}
			else
			{
				header('Location: product.php');
				exit();
			}
		}
		else
		{
			header('Location: product.php');
			exit();
		}
	}

	if(!empty($tableProduct))
	{
		if(productRemoveById($productIdRemove))
		{
			header('Location: profile.php');
			exit();
		}
		else
		{
			header('Location: profile.php');
			exit();	
		}
	}
	
?>