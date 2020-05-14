<?php 

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	function Email($email, $assunto, $mensagemSite) 
	{
		require 'vendor/autoload.php';

		$mail = new PHPMailer(true);

		try {
			//Server settings
			$mail->SMTPDebug = SMTP::DEBUG_SERVER;                  
			$mail->isSMTP();                                           
			$mail->Host       = 'smtp.gmail.com';               
			$mail->SMTPAuth   = true;                                  
			$mail->Username   = 'testebackenddd@gmail.com';                    
			$mail->Password   = '1234@1234';                               
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
			$mail->Port       = 587;                                    

			//Recipients
			$mail->setFrom($email);
			$mail->addAddress($email);          

			// Content
			$mail->isHTML(true);                              
			$mail->Subject = $assunto;
			$mail->Body    = $mensagemSite;
			
			$mail->send();

			return true;
		} 
		catch (Exception $e) 
		{
			return false;
		}

	}



?>