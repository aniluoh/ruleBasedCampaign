<?php
	require 'phpmailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host='smtp.gmail.com';
	$mail->Port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';


	$mail->Username='achaurasiya59@gmail.com';
	$mail->Password='*******';

	$mail->setFrom('achaurasiya59@gmail.com','anil');
	$mail->addAddress('chaurasiya.anil@zohomail.com');
	$mail->addReplyTo('chaurasiya.anil@zohomail.com');

	$mail->isHTML(true);
	$mail->Subject='Regarding Campaign';
	$mail->Body='<h1> Hii Dear,</h1> <p1><br/> We have achieved today\'s target. <br />Please look into it.</p>';
	if($mail->send()){
		echo "Congratulation! Message has been sent to your email address";
	}
	else{
		echo "Failed ";
	}
?>