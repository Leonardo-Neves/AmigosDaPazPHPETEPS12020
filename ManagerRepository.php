<?php 
	

	function registerManager($name, $fone, $email, $password, $cep, $street, $neighborhood, $city, $uf, $ibge, $description, $cnpjAndCpf, $typeUser)
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

	function consultUserManager($name)
	{
		
		include('connection.php');

		// This function is responsable for consult of users

		// Database Query
		$consultQuery = "SELECT * FROM user WHERE name LIKE '%$name%' LIMIT 10";

		try
		{
			$data = $connectionUser->query($consultQuery);

			// Consulting a User
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

	function removeUserByCPFManager($cnpjAndCpf)
	{
		session_start();
		include('connection.php');

		// This function is responsable for remove of users

		// Database Query
		$removeQuery = "delete from user where cnpjAndCpf = '$cnpjAndCpf'";

		try
		{
			// Remove a User
			if ($connectionUser->query($removeQuery)) 
		    {
		      	return true;
		    } 
		    else if(!$data)
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

	function consultUserByCnpjManager($cnpjAndCpf)
	{
		
		include('connection.php');

		// This function is responsable for consult of users

		// Database Query
		$consultQuery = "SELECT * FROM user WHERE cnpjAndCpf = '$cnpjAndCpf'";

		try
		{
			$data = $connectionUser->query($consultQuery);

			// Consulting a User
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

?>