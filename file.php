<?php 
	include('UserRepository.php');
	include('Validation.php');



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

	

	if(isset($_POST['sendFile']))
	{
		$AllowedFormat = array("png", "jpeg", "jpg");

		$Extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

		if(in_array($Extension, $AllowedFormat))
		{
			$paste = "images/";
			$temporary = $_FILES['file']['tmp_name'];
			$newFileName = uniqid().".$Extension";

			if(move_uploaded_file($temporary, $paste.$newFileName))
			{

				$id = $data["id"];

				if(registerUserProfileImage($newFileName, $id))
				{
					// Success
					RegisterFileSuccess();
					header('Location: profile.php');
					exit();
				}
				else
				{
					// Error
					RegisterFileError();
					header('Location: profile.php');
					exit();
				}				
			}
			else
			{
				// Error
				RegisterFileError();
				header('Location: profile.php');
				exit();
			}
		}
		else
		{
			// Error
			// Invalid Format
			RegisterFileError();
			header('Location: profile.php');
			exit();
		}
	}


?>