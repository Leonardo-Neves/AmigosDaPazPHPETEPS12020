<?php 

	function organProductRegister($user_id, $title, $description, $typeHelp)
	{
		include('connection.php');

		$registerQuery = "insert into product (title, description, user_id, typeHelp) VALUES ('$title', '$description', '$user_id', '$typeHelp')";

		try
		{
			// Registering a Product
			if ($connectionProduct->query($registerQuery) === TRUE) 
		    {
		    	$_SESSION['ProductRegisterSuccess'] = "Cadastro feito com sucesso!";
		      	return true;
		    } 
		    else 
		    {
		    	$_SESSION['ProductRegisterError'] = "Erro no cadastro!";
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

	function productRemoveById($id)
	{
		include('connection.php');

		$removeQuery = "delete from product where id = '$id'";

		try
		{
			if($connectionProduct->query($removeQuery))
			{
				$_SESSION['ProductRemoveSuccess'] = "Removido com sucesso!";
				return true;
			}
			else
			{
				$_SESSION['ProductRemoveError'] = "Não foi removido!";
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

	function consultAllProductById($id)
	{
		include('connection.php');

		$consultQuery = "select * from product where user_id = '$id'";

		try
		{
			$data = $connectionProduct->query($consultQuery);

			if(!empty($data))
			{
				return $data;
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

	function consultAllOrgans()
	{

		include('connection.php');

		$organ = "O";

		$consultQuery = "select id, name, email, street, cep, neighborhood, description from user where typeUser = '$organ'";

		try
		{
			$data = $connectionUser->query($consultQuery);

			if(!empty($data))
			{
				return $data;
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

	function consultOrganById($id)
	{
		session_start();

		include('connection.php');

		$organ = "O";

		$consultQuery = "select * from user where typeUser = '$organ' and id = '$id'";

		try
		{
			$data = mysqli_fetch_array($connectionUser->query($consultQuery));

			if(!empty($data))
			{
				return $data;
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