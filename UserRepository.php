<?php 
	
	
	function registerUser($name, $fone, $email, $password, $cep, $street, $neighborhood, $city, $uf, $ibge, $description, $cnpjAndCpf, $typeUser)
	{
		session_start();
		include('connection.php');

		// This function is responsable for register of users

		$alteredPassword = "false";

		// Database Query
		$registerQuery = "insert into user (name, fone, email, password, cep, street, neighborhood, city, uf, ibge, cnpjAndCpf, description, typeUser, alteredPassword) VALUES ('$name', '$fone', '$email', '$password', '$cep', '$street', '$neighborhood', '$city', '$uf', '$ibge', '$cnpjAndCpf', '$description', '$typeUser', '$alteredPassword')";

		try
		{
			// Registering a User
			if ($connectionUser->query($registerQuery) === TRUE) 
		    {
		      	return true;
		    } 
		    else 
		    {
		      	return false;
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

	function forgotPasswordUser($forgotPassword, $cryptedPasssoword)
	{
		require 'connection.php';

		// This function is responsable for update of Password's User form a temporary one

		$alteredPassword =  "true";

		// Database Query
		$forgotQuery = "UPDATE user SET password = '$cryptedPasssoword', alteredPassword = '$alteredPassword' WHERE email = '$forgotPassword'";

		try
		{
			// Update Password on Database
			if(mysqli_query($connectionUser, $forgotQuery))
			{
				return true;			
			}
			else
			{
				return false;
			}
		}
		catch(Exception $e)
		{
			// Error Update
			$_SESSION['DatabaseError'] = $e;
			return false;
		}
		
	}

	function removeUser($id)
	{
		include('connection.php');

		$removeQuery = "delete from user where id = '$id'";

		try
		{
			if($connectionUser->query($removeQuery))
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		catch(Exception $e)
		{
			$_SESSION['DatabaseError'] = $e;
			return $e;
		}
		finally
		{
	    	$connectionUser->close();
		}
	}

	function alterPasswordUser($newPasswordAltered, $emailAlterPassword)
	{
		require 'connection.php';
		session_start();
		// This function is responsable for update of Password's User for a permanet one

		$alteredPassword =  "false";

		// Database Query
		$alterPasswordQuery = "UPDATE user SET password = '$newPasswordAltered', alteredPassword = '$alteredPassword' WHERE email = '$emailAlterPassword'";

		try
		{
			// Update Password on Database
			if(mysqli_query($connectionUser, $alterPasswordQuery))
			{
				$_SESSION['AlterPasswordSuccess'] = "Senha alterada com sucesso!";
				return true;			
			}
			else
			{
				return false;
			}
		}
		catch(Exception $e)
		{
			// Error Update
			$_SESSION['DatabaseError'] = $e;
			return false;
		}
	}

	function alterUser($id, $name, $fone, $email, $password, $cep, $street, $neighborhood, $city, $uf, $ibge, $description)
	{
		include('connection.php');

		// This functions is responsable for alter information's user

		// Database Query
		if($password)
		{
			$alterQuery = "UPDATE user SET name = '$name', fone = 'fone', email = '$email', password = '$password', cep = '$cep', street = '$street', neighborhood = '$neighborhood', city = '$city', uf = '$uf', ibge = '$ibge', description = '$description' where id = '$id'";
		}
		else
		{
			$alterQuery = "UPDATE user SET name = '$name', fone = 'fone', email = '$email', cep = '$cep', street = '$street', neighborhood = '$neighborhood', city = '$city', uf = '$uf', ibge = '$ibge', description = '$description' where id = '$id'";
		}

		try
		{
			// Altering datas
			if ($connectionUser->query($alterQuery) === TRUE) 
		    {
		      	return true;
		    } 
		    else 
		    {
		      	return false;
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

	function loginUser($email, $password)
	{
		include('connection.php');

		// This function is responsable search for information's user and login 

		// Database Query
		$loginQuery = "select * from user where email = '$email' and password = '$password' ";

		try
		{
			// Search for Login User
			$data = mysqli_fetch_array($connectionUser->query($loginQuery));

			if (!empty($data)) 
		    {
		      	return $data;
		    } 
		    else if(empty($data))
		    {
		      	return false;
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

	function consultUserByName($name)
	{
		include('connection.php');

		// This function is responsable search for information's user by name 

		// Database Query
		$consultQuery = "select * from user where name = '$name'";

		try
		{
			// Search for Login User
			$data = $connectionUser->query($consultQuery);

			if (!empty($data)) 
		    {
		      	return $data;
		    } 
		    else if(empty($data))
		    {
		      	return false;
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

	function consultUserByCnpjCpf($cnpjAndCpf)
	{
		include('connection.php');

		// This function is responsable search for information's user by name 

		// Database Query
		$consultQuery = "select * from user where cnpjAndCpf = '$cnpjAndCpf'";

		try
		{
			// Search for Login User
			$data = $connectionUser->query($consultQuery);

			if (!empty($data)) 
		    {
		      	return $data;
		    } 
		    else if(empty($data))
		    {
		      	return false;
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

	function registerUserProfileImage($file, $id)
	{
		session_start();
		include('connection.php');

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

		$oldImage = $data["profileImage"];


		// This function is responsable for register of users

		// Database Query
		$registerQuery = "UPDATE user SET profileImage = '$file' where id = '$id' ";

		try
		{
			// Registering a User
			if ($connectionUser->query($registerQuery) === TRUE) 
		    {
		    	if(!empty($oldImage))
		    	{
		    		$file = "images/$oldImage";

		    		unlink($file);

		    		return true;
		    	}
		    	else
		    	{
		      		return true;
		    	}
		    } 
		    else 
		    {
		      	return false;
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




?>