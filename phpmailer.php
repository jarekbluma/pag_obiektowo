<?php
use PHPMailer\PHPMailer\PHPMailer;
				require 'vendor/autoload.php';
				require 'phpmailerAuth.php';

if(isset($_POST['message']))
	{
				$text = $_POST['message'];

				$mail = new PHPMailer;

				$mail->isSMTP();
				$mail->SMTPOptions = array(
				    'ssl' => array(
				        'verify_peer' => false,
				        'verify_peer_name' => false,
				        'allow_self_signed' => true
				    )
				);

				$mail->SMTPDebug = 0;

				$mail->Host = 'smtp.gmail.com';

				$mail->Port = 465;

				$mail->SMTPSecure = 'ssl';

				$mail->SMTPAuth = true;

				$mail->Username = $login;

				$mail->Password = $pass;

				$mail->setFrom($login, 'First Last');

				$mail->addReplyTo($login, 'First Last');

				$mail->addAddress($myemail, 'John Doe');

				$mail->Subject = 'PHPMailer GMail SMTP test';


				$mail->msgHTML($text);


				$mail->AltBody = 'This is a plain-text message body';

				if (!$mail->send()) 
				{
				    echo "Mailer Error: " . $mail->ErrorInfo;
				} 
				else 
				{
				    echo "Dziękuję za przesłanie maila!";
				    unset($text);
				    unset($_POST['message']);
				    
				}
	}
	else
	{
		echo "wyślij email";
	}	

				