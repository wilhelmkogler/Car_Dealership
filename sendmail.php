<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['submitContact'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    
    $mail = new PHPMailer(true);

    try {
        
        $mail->isSMTP();                                            
        $mail->SMTPAuth = true;                                      
        $mail->Host = 'smtp.gmail.com';                               
        $mail->Username = 'koglererikwilhelm754@gmail.com';           
        $mail->Password = 'mgyjovwyyfyvtdjb';                        
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;           
        $mail->Port = 587;                                           

        
        $mail->setFrom('question@kwheels.hu', 'KWheels');
        $mail->addAddress('koglererikwilhelm754@gmail.com', 'Wilhelm');  

        
        $mail->isHTML(true);                                  

        $subject = 'KWheels - Új kérdés érkezett';
        $mail->Subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';

        $bodyContent = '<div>Név: '.$fullname.'</div>  
            <div>Email: '.$email.'</div>
            <div>Kérdés: '.$message.'</div>
        ';

        $mail->Body = $bodyContent;

        if($mail->send()) {
            $_SESSION['status'] = " ";
            header("Location: {$_SERVER['HTTP_REFERER']}");
            exit(0);
        } else {
            $_SESSION['status'] = "A kérdés nem lett elküldve. Mailer Error: {$mail->ErrorInfo}";
            header("Location: {$_SERVER['HTTP_REFERER']}");
            exit(0);
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    header('Location: index.php');
    exit(0);
}
?>
