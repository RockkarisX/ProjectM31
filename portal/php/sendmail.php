<?php

    $to = 'office@nexocreative.com';
		
use PHPMailer\PHPMailer\PHPMailer;

require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'src/Exception.php';

    //Apply some basic validation and filtering to the name
    if (array_key_exists('name', $_POST)) {
        //Limit length and strip HTML tags
        $name = substr(strip_tags($_POST['name']), 0, 255);
    } else {
        $name = '';
    }
	
	$phone = $_POST['phone'];
	$message =  nl2br($_POST['message']);
		
    //Make sure the address they provided is valid before trying to use it
    if (array_key_exists('email', $_POST) and PHPMailer::validateAddress($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $msg .= "Error: invalid email address provided";
        $err = true;
    }
    if (!$err) {
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'localhost';
        $mail->Port = 25;
        $mail->CharSet = 'utf-8';
        //It's important not to use the submitter's address as the from address as it's forgery,
        //which will cause your messages to fail SPF checks.
        //Use an address in your own domain as the from address, put the submitter's address in a reply-to
        $mail->setFrom($email, (empty($name) ? 'Contact form' : $name));
        $mail->addAddress($to);
        $mail->addReplyTo($email, $name);
        $mail->Subject = 'Contact form: ' . $email;
        $mail->Body = '<html><body>
						<table width="100%" cellspacing="4" cellpadding="12" border="0"  style="max-width:900px; color: 4d4d4d; font-size:16px; font-family: Arial;">
						<tr bgcolor ="#0b84ff" style="color: #fff;">
						<td width="50%"  colspan="2" style="text-align: center;">Message from '.$name.'</td>
						</tr>
						<tr bgcolor ="#f3f3f3">
						<td width="50%"  align="right"><strong>Name:</strong></td>
						<td width="50%">'.$name.'</td>
						</tr>
						<tr bgcolor ="#f3f3f3">
						<td width="50%"  align="right"><strong>Email:</strong></td>
						<td width="50%">'.$email.'</td>
						</tr>
						<tr bgcolor ="#f3f3f3">
						<td width="50%"  align="right"><strong>Phone Number:</strong></td>
						<td width="50%">'.$phone.'</td>
						</tr>
						<tr bgcolor ="#f3f3f3">
						<td width="100%" align="center" colspan="2"><strong>Message:</strong></td>
						</tr>
						<tr bgcolor ="#f3f3f3">
						<td width="100%" colspan="2">'.$message.'</td>
						</tr>
						</table>
					</body></html>';
		$mail->AltBody = "Name: ".$name."\r\nEmail: ".$email."\r\nPhone Number: ".$phone."\r\nMessage : ".$message;
		if(!$mail->send()) 
		{
			//If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
			$output = json_encode(array('type'=>'error', 'text' => '<h2>Could not send mail!</h2><p>Please check your PHP mail configuration.</p>'));
			die($output);
		}else{
			$output = json_encode(array('type'=>'message', 'text' => '<h2>THANK YOU!</h2><p>Thank You, we will be in contact with you<br>as soon as possible.</p>'));
			die($output);
		}
    }
?>