<?php 
	session_start();

	function RegisterFileSuccess()
	{
		$_SESSION['RegisterFileSuccess'] = "Imagem registrada com sucesso, relogue para atualizar a imagem!";
	}

	function RegisterFileError()
	{
		$_SESSION['RegisterFileError'] = "Erro ao registrar a imagem, tente novamente!";
	}

	function RegisterSuccess()
	{
		$_SESSION['RegisterSuccess'] = "Dados registrados com sucesso!";
	}

	function RegisterError()
	{
		$_SESSION['RegisterError'] = "Erro ao registrar, tente novamente!";
	}

	function RemoveSuccess()
	{
		$_SESSION['RemoveSuccess'] = "Dados removidos com sucesso!";
	}

	function RemoveError()
	{
		$_SESSION['RemoveError'] = "Os dados não foram removidos, tente novamente!";
	}

	function AlterSuccess()
	{
		$_SESSION['AlterSuccess'] = "Dados alterados com sucesso!";
	}

	function AlterError()
	{
		$_SESSION['AlterError'] = "Os dados não foram alterados, tente novamente!";
	}

	function TypeValidatorNotSelect()
	{
		$_SESSION['TypeErrorNotSelect'] = "Tipo não selectionado!";
	}

	function UserNotFound()
	{
		$_SESSION['UserNotFound'] = "Nenhum usuário encontrado, ou dados errados!";
	}

	// Validation Product
	
	function TitleValidator($title)
	{
		if(strlen($title) === 0 || strlen($title) < 0)
		{
			$_SESSION['TitleErrorZero'] = "Informe um titulo maior que 0 caracteres!";
			return false;
		}
		else if(empty($title) || is_null($title))
		{
			$_SESSION['TitleErrorNull'] = "Informe um titulo!";
			return false;
		}
		else if(strlen($title) > 70)
		{
			$_SESSION['TitleErrorMaxLength'] = "Informe um titulo menor que 70 carecters!";
			return false;
		}
		else
		{
			return true;
		}
	}

	// Validation User

	function ForgotPassowordValidator($email)
	{
		include('connection.php');

		$consultQuery = "select email from user where email = '$email'";

		$data = mysqli_fetch_array($connectionUser->query($consultQuery));

		if(strlen($email) === 0 || strlen($email) < 0)
		{
			$_SESSION['EmailErrorZero'] = "Informe um email maior que 0!";
			return false;
		}
		else if(empty($email) || is_null($email))
		{
			$_SESSION['EmailErrorNull'] = "Informe um email!";
			return false;
		}
		else if(strlen($email) > 30)
		{
			$_SESSION['EmailErrorMaxLength'] = "Informe um IBGE menor que 30 carecters!";
			return false;
		}
		else if(empty($data))
		{
			$_SESSION['EmailErrorExist'] = "Email não existe cadastrado!";
			return false;
		}
		else
		{
			return true;
		}
	}

	function TypeValidator($type)
	{
		if(empty($type) || is_null($type))
		{
			$_SESSION['TypeErrorNull'] = "Informe um tipo!";
			return false;
		}
		else if($type === "O" || $type === "U" || $type == "G")
		{
			return true;
		}
		else
		{
			return true;
		}

	}

	function DescriptionValidator($description)
	{
		if(strlen($description) === 0 || strlen($description) < 0)
		{
			$_SESSION['DescriptionErrorZero'] = "Informe uma descrição maior que 0!";
			return false;
		}
		else if(empty($description) || is_null($description))
		{
			$_SESSION['DescriptionErrorNull'] = "Informe uma descrição!";
			return false;
		}
		else
		{
			return true;
		}
	}

	function IBGEValidator($ibge)
	{
		if(strlen($ibge) === 0 || strlen($ibge) < 0)
		{
			$_SESSION['IBGEErrorZero'] = "Informe um IBGE maior que 0!";
			return false;
		}
		else if(empty($ibge) || is_null($ibge))
		{
			$_SESSION['IBGEErrorNull'] = "Informe um IBGE!";
			return false;
		}
		else if(strlen($ibge) > 7)
		{
			$_SESSION['IBGEErrorMaxLength'] = "Informe um IBGE menor que 7 carecters!";
			return false;
		}
		else
		{
			return true;
		}
	}
	
	function UFValidator($uf)
	{
		if(strlen($uf) === 0 || strlen($uf) < 0)
		{
			$_SESSION['UFErrorZero'] = "Informe um UF maior que 0!";
			return false;
		}
		else if(empty($uf) || is_null($uf))
		{
			$_SESSION['UFErrorNull'] = "Informe um UF!";
			return false;
		}
		else if(strlen($uf) > 2)
		{
			$_SESSION['UFErrorMaxLength'] = "Informe um UF igual a 2 carecters!";
			return false;
		}
		else
		{
			return true;
		}
	}

	function CityValidator($city)
	{
		if(strlen($city) === 0 || strlen($city) < 0)
		{
			$_SESSION['CityErrorZero'] = "Informe uma cidade maior que 0!";
			return false;
		}
		else if(empty($city) || is_null($city))
		{
			$_SESSION['CityErrorNull'] = "Informe uma cidade!";
			return false;
		}
		else if(strlen($city) > 70)
		{
			$_SESSION['CityErrorMaxLength'] = "Informe uma cidade menor que 70 carecters!";
			return false;
		}
		else
		{
			return true;
		}
	}

	function NeighborhoodValidator($neighborhood)
	{
		if(strlen($neighborhood) === 0 || strlen($neighborhood) < 0)
		{
			$_SESSION['NeighborhoodErrorZero'] = "Informe um bairro maior que 0!";
			return false;
		}
		else if(empty($neighborhood) || is_null($neighborhood))
		{
			$_SESSION['NeighborhoodErrorNull'] = "Informe um bairro!";
			return false;
		}
		else if(strlen($neighborhood) > 70)
		{
			$_SESSION['NeighborhoodErrorMaxLength'] = "Informe um bairro menor que 70 carecters!";
			return false;
		}
		else
		{
			return true;
		}
	}

	function StreetValidator($street)
	{
		if(strlen($street) === 0 || strlen($street) < 0)
		{
			$_SESSION['StreetErrorZero'] = "Informe uma rua maior que 0!";
			return false;
		}
		else if(empty($street) || is_null($street))
		{
			$_SESSION['StreetErrorNull'] = "Informe um rua!";
			return false;
		}
		else if(strlen($street) > 30)
		{
			$_SESSION['StreetErrorMaxLength'] = "Informe uma rua menor que 30 carecters!";
			return false;
		}
		else
		{
			return true;
		}
	}
	
	function PasswordValidator($password)
	{
		if(strlen($password) === 0 || strlen($password) < 0)
		{
			$_SESSION['PasswordErrorZero'] = "Informe um senha maior que 0!";
			return false;
		}
		else if(empty($password) || is_null($password))
		{
			$_SESSION['PasswordErrorNull'] = "Informe um senha!";
			return false;
		}
		else if(strlen($password) > 32)
		{
			$_SESSION['PasswordErrorMaxLength'] = "Informe uma senha menor que 32 carecters!";
			return false;
		}
		else if(strlen($password) < 6)
		{
			$_SESSION['PasswordErrorMinLength'] = "Informe uma senha maior que 6 caracteres!";
			return false;
		}
		else
		{
			return true;
		}
	}

	function EmailValidator($email)
	{

		include('connection.php');

		$consultQuery = "select email from user where email = '$email'";

		$data = mysqli_fetch_array($connectionUser->query($consultQuery));

		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$_SESSION['EmailErrorInvalid'] = "Email Inválido!";
			return false;
		}
		else if(strlen($email) === 0 || strlen($email) < 0)
		{
			$_SESSION['EmailErrorZero'] = "Informe um email maior que 0!";
			return false;
		}
		else if(empty($email) || is_null($email))
		{
			$_SESSION['EmailErrorNull'] = "Informe um email!";
			return false;
		}
		else if(strlen($email) > 40)
		{
			$_SESSION['EmailErrorMaxLength'] = "Informe um email menor que 40 carecters!";
			return false;
		}
		else if(!empty($data))
		{
			$_SESSION['EmailErrorExist'] = "Email já cadastrado!";
			return false;
		}
		else
		{
			return true;
		}
	}
	function FoneValidator($fone)
	{
		if(strlen($fone) === 0 || strlen($fone) < 0)
		{
			$_SESSION['FoneErrorZero'] = "Informe um telefone maior que 0!";
			return false;
		}
		else if(empty($fone) || is_null($fone))
		{
			$_SESSION['FoneErrorNull'] = "Informe um telefone!";
			return false;
		}
		else if(strlen($fone) > 11)
		{
			$_SESSION['FoneErrorMaxLength'] = "Informe um telefone menor que 11 carecters!";
			return false;
		}
		else
		{
			return true;
		}
	}

	function NameValidator($name)
	{
		if(strlen($name) === 0 || strlen($name) < 0)
		{
			$_SESSION['NameErrorZero'] = "Informe um nome maior que 0 caracteres!";
			return false;
		}
		else if(empty($name) || is_null($name))
		{
			$_SESSION['NameErrorNull'] = "Informe um nome!";
			return false;
		}
		else if(strlen($name) > 70)
		{
			$_SESSION['NameErrorMaxLength'] = "Informe um nome menor que 70 carecters!";
			return false;
		}
		else if(strlen($name) < 3)
		{
			$_SESSION['NameErrorMinLength'] = "Informe um nome maior que 3 carecters!";
			return false;
		}
		else
		{
			return true;
		}
	}

	function CNPJValidatorExist($cnpj)
	{
		include('connection.php');

		try
		{
			$consultQuery = "select cnpjAndCpf from user where cnpjAndCpf = '$cnpj'";

			$data = mysqli_fetch_array($connectionUser->query($consultQuery));

			if(!empty($data))
			{
				$_SESSION['CNPJErrorExist'] = "CNPJ já cadastrado!";
				return false;
			}
			else if(empty($data))
			{
				return true;
			}
		}
		catch(Exception $e)
		{
			$_SESSION['DatabaseError'] = $e;
			return false;
		}	
		finally
		{
			$connectionUser->close();
		}
	}

	function CPFValidatorExist($cpf)
	{
		include('connection.php');

		$consultQuery = "select cnpjAndCpf from user where cnpjAndCpf = '$cpf'";

		$data = mysqli_fetch_array($connectionUser->query($consultQuery));

		if(!empty($data))
		{
			$_SESSION['CPFErrorExist'] = "CPF já cadastrado!";
			return false;
		}
		else
		{
			return true;
		}
	}

	function CPFValidator($cpf)
	{
	    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
	     
	    if (strlen($cpf) != 11) {
	    	$_SESSION['CPFErrorInvalid'] = "CPF Inválido!";
	        return false;
	    }

	    if (preg_match('/(\d)\1{10}/', $cpf)) {
	    	$_SESSION['CPFErrorInvalid'] = "CPF Inválido!";
	        return false;
	    }

	    for ($t = 9; $t < 11; $t++) {
	        for ($d = 0, $c = 0; $c < $t; $c++) {
	            $d += $cpf{$c} * (($t + 1) - $c);
	        }
	        $d = ((10 * $d) % 11) % 10;
	        if ($cpf{$c} != $d) {
	        	$_SESSION['CPFErrorInvalid'] = "CPF Inválido!";
	            return false;
	        }
	    }
	    return true;
	}

	function CNPJValidator($cnpj)
	{
			if (strlen($cnpj) <> 14)
			{
				$_SESSION['CNPJErrorInvalid'] = "CNPJ Inválido!";
	         	return false; 
			}

	      $soma = 0;
	      
	      $soma += ($cnpj[0] * 5);
	      $soma += ($cnpj[1] * 4);
	      $soma += ($cnpj[2] * 3);
	      $soma += ($cnpj[3] * 2);
	      $soma += ($cnpj[4] * 9); 
	      $soma += ($cnpj[5] * 8);
	      $soma += ($cnpj[6] * 7);
	      $soma += ($cnpj[7] * 6);
	      $soma += ($cnpj[8] * 5);
	      $soma += ($cnpj[9] * 4);
	      $soma += ($cnpj[10] * 3);
	      $soma += ($cnpj[11] * 2); 

	      $d1 = $soma % 11; 
	      $d1 = $d1 < 2 ? 0 : 11 - $d1; 

	      $soma = 0;
	      $soma += ($cnpj[0] * 6); 
	      $soma += ($cnpj[1] * 5);
	      $soma += ($cnpj[2] * 4);
	      $soma += ($cnpj[3] * 3);
	      $soma += ($cnpj[4] * 2);
	      $soma += ($cnpj[5] * 9);
	      $soma += ($cnpj[6] * 8);
	      $soma += ($cnpj[7] * 7);
	      $soma += ($cnpj[8] * 6);
	      $soma += ($cnpj[9] * 5);
	      $soma += ($cnpj[10] * 4);
	      $soma += ($cnpj[11] * 3);
	      $soma += ($cnpj[12] * 2); 
	      
	      
	      $d2 = $soma % 11; 
	      $d2 = $d2 < 2 ? 0 : 11 - $d2; 
	      
		    if ($cnpj[12] == $d1 && $cnpj[13] == $d2) 
		    {
		        return true;
		    }
		    else 
		    {
		    	$_SESSION['CNPJErrorInvalid'] = "CNPJ Inválido!";
		        return false;
		    }
	}	

	function CPFValidatorManager($cpf)
	{
	    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
	     
	    if (strlen($cpf) != 11) {
	    	
	        return false;
	    }

	    if (preg_match('/(\d)\1{10}/', $cpf)) {
	    	
	        return false;
	    }

	    for ($t = 9; $t < 11; $t++) {
	        for ($d = 0, $c = 0; $c < $t; $c++) {
	            $d += $cpf{$c} * (($t + 1) - $c);
	        }
	        $d = ((10 * $d) % 11) % 10;
	        if ($cpf{$c} != $d) {
	        	
	            return false;
	        }
	    }
	    return true;
	}

	function CNPJValidatorManager($cnpj)
	{
			if (strlen($cnpj) <> 14)
			{
				
	         	return false; 
			}

	      $soma = 0;
	      
	      $soma += ($cnpj[0] * 5);
	      $soma += ($cnpj[1] * 4);
	      $soma += ($cnpj[2] * 3);
	      $soma += ($cnpj[3] * 2);
	      $soma += ($cnpj[4] * 9); 
	      $soma += ($cnpj[5] * 8);
	      $soma += ($cnpj[6] * 7);
	      $soma += ($cnpj[7] * 6);
	      $soma += ($cnpj[8] * 5);
	      $soma += ($cnpj[9] * 4);
	      $soma += ($cnpj[10] * 3);
	      $soma += ($cnpj[11] * 2); 

	      $d1 = $soma % 11; 
	      $d1 = $d1 < 2 ? 0 : 11 - $d1; 

	      $soma = 0;
	      $soma += ($cnpj[0] * 6); 
	      $soma += ($cnpj[1] * 5);
	      $soma += ($cnpj[2] * 4);
	      $soma += ($cnpj[3] * 3);
	      $soma += ($cnpj[4] * 2);
	      $soma += ($cnpj[5] * 9);
	      $soma += ($cnpj[6] * 8);
	      $soma += ($cnpj[7] * 7);
	      $soma += ($cnpj[8] * 6);
	      $soma += ($cnpj[9] * 5);
	      $soma += ($cnpj[10] * 4);
	      $soma += ($cnpj[11] * 3);
	      $soma += ($cnpj[12] * 2); 
	      
	      
	      $d2 = $soma % 11; 
	      $d2 = $d2 < 2 ? 0 : 11 - $d2; 
	      
		    if ($cnpj[12] == $d1 && $cnpj[13] == $d2) 
		    {
		        return true;
		    }
		    else 
		    {
		    	
		        return false;
		    }
	}

	function mouthValidator($data)
	{
		// That function validate if the user have to change her passoword after some mouths, in this case 6 mouths.

		$mouth = date('n');

		$mouthString = (string) $month;

		$mouthAccountCreated = $data["createdAt"];

		$mouthAccountCreatedString = (string) $$mouthAccountCreated;

		$arrayMouthAccountCreated = explode('-', $mouthAccountCreatedString); 	

		$arrayMouthAccountCreatedWithoutZero = explode('', $arrayMouthAccountCreated);	

		$mouthAccountCreatedInt = (int) $arrayMouthAccountCreatedWithoutZero[1];
		//$mouth = date('d-m-Y', strtotime('+6 month')); 

		$nextPassowordChange = $mouthAccountCreatedInt + 6;

		$_SESSION['Test'] = $month;

		if($mouthString == $nextPassowordChange)
		{
			return true;
		}
		else 
		{
			return false;
		}

	}
	
	function EncryptPasswordValidatorMD5($senha)
	{
		return md5($senha);
	}

	function DecryptPasswordValidatorMD5($senha)
	{
		return md5($senha);
	}

	function EncryptPasswordValidatorSHA1($senha)
	{
		return sha1($senha);
	}

	function DecryptPasswordValidatorSHA1($senha)
	{
		return sha1($senha);
	}

	function EncryptPasswordValidatorBase64($senha)
	{
		return base64_encode($senha);
	}

	function DecryptPasswordValidatorBase64($senha)
	{
		return base64_decode($senha);
	}


?>