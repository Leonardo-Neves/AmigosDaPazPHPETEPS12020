<?php 
	
	include('UserRepository.php');
	include('Validation.php');
	include('connection.php');
	include('Libraries/Email.php');

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
	$forgotPassword = "";

	$register = "";
	$login = "";
	$forgot = "";
	$alter = "";
	$remove = "";

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

	if(isset($_POST['forgotPassword']))
	{
		$forgotPassword = mysqli_real_escape_string($connectionUser, $_POST['forgotPassword']);
	}

	if(isset($_POST['newPasswordAltered']))
	{
		$newPasswordAltered = mysqli_real_escape_string($connectionUser, $_POST['newPasswordAltered']);
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

	if(isset($_POST['login']))
	{
		$login = $_POST['login'];
	}

	if(isset($_POST['forgot']))
	{
		$forgot = $_POST['forgot'];
	}

	if(isset($_POST['alter']))
	{
		$alter = $_POST['alter'];
	}

	if(isset($_POST['alterPassword']))
	{
		$alterPassword = $_POST['alterPassword'];
	}

	if(isset($_GET['remove']))
	{
		$remove = $_GET['remove'];
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
				if(registerUser($name, $fone, $email, $cryptedPasssoword, $cep, $street, $neighborhood, $city, $uf, $ibge, $description, $cnpjAndCpf, $type))
				{
					// Sucess Register 
					header('Location: index');
					exit();
				}
				else
				{
					// Error Register
					header('Location: register');
					exit();
				}
			}
			else if(CNPJValidator($cnpjAndCpf) == false)
			{
				// Error Register
				header('Location: register');
				exit();
			}
			else
			{
				// Error Register
				header('Location: register');
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
				if(registerUser($name, $fone, $email, $cryptedPasssoword, $cep, $street, $neighborhood, $city, $uf, $ibge, $description, $cnpjAndCpf, $type))
				{
					// Success Register
					header('Location: index');
					exit();
				}
				else
				{
					// Error Register
					header('Location: register');
					exit();
				}
			}
			else
			{
				// Error Register
				header('Location: register');
				exit();
			}
		}
	}

	if(!empty($login))
	{
		// This area is responsable for login's user

		session_start();

		// Crypting password to verify on Database	
		$decryptedPassword = DecryptPasswordValidatorMD5($password);

		// Check if User Exist
		$data = loginUser($email, $decryptedPassword);

		if(!$data)
		{
			// Error User not Exist
			UserNotFound();
			header('Location: login');
			exit();
		}
		else
		{	
			if($data["typeUser"] === 'U')
			{
				// User Logged
				$_SESSION['UserLogged'] = true;

				// Putting information user into of a session
				$_SESSION['UserData'] = $data;

				if($data["alteredPassword"] === "true")
				{
					// Redirect User to change his passoword after receive a user on email
					header('Location: alter_password');
					exit();
				}
				else
				{
					header('Location: index');
					exit();	
				}

				
			}
			else if($data["typeUser"] === 'O')
			{
				// Organ Logged
				$_SESSION['OrganLogged'] = true;

				// Putting information user into of a session
				$_SESSION['OrganData'] = $data;

				if($data["alteredPassword"] === "true")
				{
					// Redirect User to change his passoword after receive a user on email
					header('Location: alter_password');
					exit();
				}
				else
				{
					if(mouthValidator($data))
					{
						header('Location: register');
						exit();
					}	
					else
					{
						header('Location: index');
						exit();	
					}
					
				}

			}
			else if($data["typeUser"] === 'G')
			{
				// Manager Logged
				$_SESSION['ManagerLogged'] = true;	

				// Putting information user into of a session
				$_SESSION['ManagerData'] = $data;

				if($data["alteredPassword"] === "true")
				{
					// Redirect User to change his passoword after receive a user on email
					header('Location: alter_password');
					exit();
				}
				else
				{
					header('Location: admin/dashboard');
					exit();	
				}
			}
			else
			{
				// Error 
				$_SESSION['UserNotAutheticated'] = true;

				header('Location: login');
				exit();	
			}
		}
	}

	if(!empty($remove))
	{
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

		if(removeuser($data["id"]))
		{
			session_destroy();
			header('Location: index');
			exit();

		}
		else
		{
			header('Location: profile');
			exit();
		}
	}

	if(!empty($forgot))
	{
		// This ares is responsable for forgot password

		// Getting information's user from the session, those information came from login, after the loged 

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
		
		// Validating email
		if(ForgotPassowordValidator($forgotPassword))
		{
			// Create a new password
			$newpassoword = rand(0, getrandmax());

			// Crypting a password
			$cryptedPasssoword = EncryptPasswordValidatorMD5($newpassoword);

			// Sending and Changing the User's Password
			if(forgotPasswordUser($forgotPassword, $cryptedPasssoword))
			{
				$assunto = "Alteracao de Senha";
				$mensagemSite = "Sua nova senha: $newpassoword";

				// Sending Email
				if(Email($forgotPassword, $assunto, $mensagemSite))
				{
					header('Location: login');
					exit();
				}
				else
				{
					// Error Send Email Passoword from function Email
					AlterError();
					header('Location: forgot_password');
					exit();
				}
				
			}
			else
			{
				// Error Update Passoword from Database
				AlterError();
				header('Location: forgot_password');
				exit();
			}
		}
		else
		{
			// Error Validation Email from function ForgotPasswordValidator
			header('Location: forgot_password');
			exit();
		}
		
	}

	if(!empty($alterPassword))
	{
		// This area is responsable to alter password's user for a new one

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

  		$emailAlterPassword = $data["email"];

  		// Crypting a password
		$cryptedPasssoword = EncryptPasswordValidatorMD5($newPasswordAltered);

		if(alterPasswordUser($cryptedPasssoword, $emailAlterPassword))
		{
			header('Location: index');
			exit();
		}
		else
		{
			session_destroy();
			header('Location: login');
			exit();
		}
	}

	if(!empty($alter))
	{
		// This area is responsable for alter information's user

		// Getting information's user from the session, those information came from login, after the loged 

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

  		$id = $data["id"];

  		if(NameValidator($name) && FoneValidator($fone) && EmailValidator($email) && StreetValidator($street) && NeighborhoodValidator($neighborhood) && CityValidator($city) && UFValidator($uf) && IBGEValidator($ibge) && DescriptionValidator($description))
		{
	  		if(alterUser($id, $name, $fone, $email, $password, $cep, $street, $neighborhood, $city, $uf, $ibge, $description))
	  		{
	  			// Success Alter Information's User from Database
	  			AlterSuccess();
	  			header('Location: profile');
	  			exit();
	  		}
	  		else
	  		{
	  			// Error Alter Information's User from Database
	  			AlterError();
	  			header('Location: profile');
	  			exit();
	  		}
  		}
  		else
  		{
  			header('Location: profile');
	  		exit();
  		}
	}


?>