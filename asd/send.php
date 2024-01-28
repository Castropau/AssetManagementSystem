<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'jeffreycabaelo02@gmail.com';
    $mail->Password = 'jmmjezikllyczxzk';
    $mail->SMTPSecure = 'ssl';  
    $mail->Port = 465;

    $mail->setFrom('jeffreycabaelo02@gmail.com');

    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    try {
        $mail->send();
        echo "
            <script>
            alert('Mail sent successfully');
            document.location.href = 'index.php';
            </script>
        ";
    } catch (Exception $e) {
        echo "
            <script>
            alert('Mailer Error: {$mail->ErrorInfo}');
            </script>
        ";
    }
}
?>
