<?php
	function sendMailTrabalhe($de,$para,$mensagem,$arquivo,$assunto)
	{
		require_once('phpmailer/class.phpmailer.php');
		$mail = new PHPMailer(true);

		$mail->IsSMTP();
		try
		{
			$mail->SMTPAuth   = true;                 
			$mail->Host       = 'xxxx.xxxxx.xxx.xx';
			$mail->Username   = 'xxxx@frevo.com.br'; 
			$mail->Password   = 'xxxx';
			$mail->AddAddress($para);
			$mail->AddReplyTo($de);
			$mail->SetFrom($de);
			$mail->Subject = $assunto;
			$mail->MsgHTML($mensagem);
			$mail->AddAttachment($arquivo['tmp_name'], $arquivo['name'] );
			$mail->Send();
			$envio = true;
		}
		catch(phpmailerException $e)
		{
		  $envio = false;
		}
		catch(Exception $e)
		{
		  $envio = false;
		}
		return $envio;
	}
?>