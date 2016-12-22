<?php
define('tips_recipient_email','tfpet@odense.dk');


if(isset($_POST['pdfdata']) && isset($_POST['email']) && isset($_POST['navn']))
{
    $path = getcwd();
   
    //echo "post Data found!" . "<br/>";
    $fp = fopen($path."/html/".$_POST['email'].".html", "w+");
    if($fp == null)
    {
        //echo "Failed to create file<br/>";
    }
    if(!fwrite($fp, json_decode($_POST['pdfdata'])))
    {
         //echo "Failed to write file<br/>";
    }
    fclose(fp);
    
    $cmd = "./libraries/wkhtmltox/bin/wkhtmltopdf ". $path."/html/".$_POST['email'].".html ".$path."/pdfs/".$_POST['email'].".pdf";
    //echo "Executing " .$cmd . "<br/>";
    exec($cmd);
    SendTipsEmail($_POST['navn'],$_POST['email'],$path."/pdfs/".$_POST['email'].".pdf");
}
function SendTipsEmail($Name,$From,$file_path)
{
    require_once 'libraries/phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->setFrom($From,$Name);
    $mail->addAddress(tips_recipient_email);
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->CharSet = 'UTF-8';
    $mail->Subject = 'Tip en 13\'er fra: ' . $Name;
    $mail->Body    = $Name.' har udfyldt en tips kupon<br/></br>Email: '. $From;
    
    $mail->addAttachment($file_path);
    
    if(!$mail->send()) {
     //echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        //echo 'Message has been sent';
    }
}
