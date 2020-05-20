<?php 
	
	include('ManagerRepository.php');
	include('UserRepository.php');
	include('Validation.php');
	include('connection.php');
	//include('Libraries/Email.php');

	// This parte of file is responsable for receive the request variable

	$name = "";
	$fone = "";
	$email = "";
	$password = "";
	$cep = "";
	$street = "";
	$neighborhood = "";
	$city = "";
	$uf = "";
	$ibge = "";
	$cnpjAndCpf = "";
	$description = "";
	$type = "";

	$register = "";
	$consult = "";
	

	if(isset($_POST['name']))
	{
		$name = mysqli_real_escape_string($connectionUser, $_POST['name']);
	}

	if(isset($_POST['fone']))
	{
		$fone = mysqli_real_escape_string($connectionUser, $_POST['fone']);
	}

	if(isset($_POST['email']))
	{
		$email = mysqli_real_escape_string($connectionUser, $_POST['email']);
	}

	if(isset($_POST['password']))
	{
		$password = mysqli_real_escape_string($connectionUser, $_POST['password']);
	}

	if(isset($_POST['cep']))
	{
		$cep = mysqli_real_escape_string($connectionUser, $_POST['cep']);
	}

	if(isset($_POST['street']))
	{
		$street = mysqli_real_escape_string($connectionUser, $_POST['street']);
	}

	if(isset($_POST['neighborhood']))
	{
		$neighborhood = mysqli_real_escape_string($connectionUser, $_POST['neighborhood']);	
	}

	if(isset($_POST['city']))
	{
		$city = mysqli_real_escape_string($connectionUser, $_POST['city']);	
	}
	
	if(isset($_POST['uf']))
	{
		$uf = mysqli_real_escape_string($connectionUser, $_POST['uf']);
	}

	if(isset($_POST['ibge']))
	{
		$ibge = mysqli_real_escape_string($connectionUser, $_POST['ibge']);
	}

	if(isset($_POST['cnpjAndCpf']))
	{
		$cnpjAndCpf = mysqli_real_escape_string($connectionUser, $_POST['cnpjAndCpf']);
	}

	if(isset($_POST['description']))
	{
		$description = mysqli_real_escape_string($connectionUser, $_POST['description']);
	}

	if(isset($_POST['search']))
	{
		$search = mysqli_real_escape_string($connectionUser, $_POST['search']);
	}	
	
	if(isset($_POST['type']))
	{
		$type = $_POST['type'];
	}


	// Those variables are about where the request came:

	if(isset($_POST['register']))
	{
		$register = $_POST['register'];
	}

	if(isset($_POST['consult']))
	{
		$consult = $_POST['consult'];
	}

	if(isset($_POST['remove']))
	{
		$remove = $_POST['remove'];
	}

	if(!empty($register))
	{
		// This area is responsable for register a user

		if($type === 'O' && TypeValidator($type))
		{
			// Validating Data

			if(CNPJValidatorExist($cnpjAndCpf) && CNPJValidator($cnpjAndCpf) && NameValidator($name) && FoneValidator($fone) && EmailValidator($email) && PasswordValidator($password) && StreetValidator($street) && NeighborhoodValidator($neighborhood) && CityValidator($city) && UFValidator($uf) && IBGEValidator($ibge) && DescriptionValidator($description))
			{
				// Crypting a Password
				$cryptedPasssoword = EncryptPasswordValidatorMD5($password);

				// Registing a Data
				if(registerManager($name, $fone, $email, $cryptedPasssoword, $cep, $street, $neighborhood, $city, $uf, $ibge, $description, $cnpjAndCpf, $type))
				{
					// Sucess Register 
					RegisterSuccess();
					header('Location: dashboard/register.php');
					exit();
				}
				else
				{
					// Error Register
					RegisterError();
					header('Location: dashboard/register.php');
					exit();
				}
			}
			else if(CNPJValidator($cnpjAndCpf) == false)
			{
				// Error Register
				header('Location: dashboard/register.php');
				exit();
			}
			else
			{
				// Error Register
				header('Location: dashboard/register.php');
				exit();
			}
		}
		else if($type === 'U' && TypeValidator($type))
		{
			// Validating Data
			if(CPFValidatorExist($cnpjAndCpf) && CPFValidator($cnpjAndCpf) && NameValidator($name) && FoneValidator($fone) && EmailValidator($email) && PasswordValidator($password) && PasswordValidator($password) && StreetValidator($street) && NeighborhoodValidator($neighborhood) && CityValidator($city) && UFValidator($uf) && IBGEValidator($ibge) && DescriptionValidator($description))
			{
				// Crypting Data
				$cryptedPasssoword = EncryptPasswordValidatorMD5($password);

				// Registing a Data
				if(registerManager($name, $fone, $email, $cryptedPasssoword, $cep, $street, $neighborhood, $city, $uf, $ibge, $description, $cnpjAndCpf, $type))
				{
					// Success Register
					RegisterSuccess();
					header('Location: dashboard/register.php');
					exit();
				}
				else
				{
					// Error Register
					RegisterError();
					header('Location: dashboard/register.php');
					exit();
				}
			}
			else
			{
				// Error Register
				header('Location: dashboard/register.php');
				exit();
			}
		}
		else if($type === 'G' && TypeValidator($type))
		{
			// Validating Data
			if(CPFValidatorExist($cnpjAndCpf) && CPFValidator($cnpjAndCpf) && NameValidator($name) && FoneValidator($fone) && EmailValidator($email) && PasswordValidator($password) && PasswordValidator($password) && StreetValidator($street) && NeighborhoodValidator($neighborhood) && CityValidator($city) && UFValidator($uf) && IBGEValidator($ibge) && DescriptionValidator($description))
			{
				// Crypting Data
				$cryptedPasssoword = EncryptPasswordValidatorMD5($password);

				// Registing a Data
				if(registerManager($name, $fone, $email, $cryptedPasssoword, $cep, $street, $neighborhood, $city, $uf, $ibge, $description, $cnpjAndCpf, $type))
				{
					// Success Register
					RegisterSuccess();
					header('Location: dashboard/register.php');
					exit();
				}
				else
				{
					// Error Register
					RegisterError();
					header('Location: dashboard/register.php');
					exit();
				}
			}
			else
			{
				// Error Register
				header('Location: dashboard/register.php');
				exit();
			}
		}
		else
		{
			// Error Register
			TypeValidatorNotSelect();
			header('Location: dashboard/register.php');
			exit();
		}
	}

	if(!empty($remove))
	{

		if(CPFValidatorManager($cnpjAndCpf))
		{
			if(removeUserByCPFManager($cnpjAndCpf))
			{
				RemoveSuccess();
				header('Location: dashboard/consult.php');
				exit();
			}
			else
			{
				RemoveError();
				header('Location: dashboard/consult.php');
				exit();
			}
		}
		else if(CNPJValidatorManager($cnpjAndCpf))
		{
			if(removeUserByCPFManager($cnpjAndCpf))
			{
				RemoveSuccess();
				header('Location: dashboard/consult.php');
				exit();
			}
			else
			{
				RemoveError();
				header('Location: dashboard/consult.php');
				exit();
			}
		}
		else
		{
			RemoveError();
			header('Location: dashboard/consult.php');
			exit();
		}
	}

?>