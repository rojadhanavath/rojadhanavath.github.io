<?php
if(!empty($_POST)){


    $email = $_POST['input-email'];
    $subject = $_POST['input-subject'];
    $msg = $_POST['input-message'];
    $name=$_POST['input-name'];
   require 'PHPMailer-master/PHPMailerAutoload.php';
   require 'PHPMailer-master/class.phpmailer.php';
  try {

   $mail = new PHPMailer();
   /*$mail ->IsSmtp();
   $mail ->SMTPDebug = 4;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 587; // or 587
   
   $mail ->Username = "roja.d293@gmail.com";
   $mail ->Password = "Sinceroja77";*/

   $mail ->SetFrom("roja.d293@gmail.com");
   $mail ->Subject = $subject;
   $mail ->Body = $msg;
   //$mail ->SetTo("roja.d293@gmail.com");
   $mail ->AddAddress($email);
   $mail ->AddCC("roja.d293@gmail.com");
  // $mail ->AddCC("khajamohiddin.476@gmail.com");	//khaja also getting mails which are not required
  //you are getting subject, message and name also.

 	$mail->isHTML(true);           // Set email format to HTML
    

    $mail->send();
    echo 'Message has been sent';
	}catch (Exception $e) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	}
}



   

