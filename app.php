<?php
register_shutdown_function("fatal_handler");

function fatal_handler() {
  $errfile = "unknown file";
  $errstr = "shutdown";
  $errno = E_CORE_ERROR;
  $errline = 0;

  $error = error_get_last();

  if ($error !== NULL) {
    $errno = $error["type"];
    $errfile = $error["file"];
    $errline = $error["line"];
    $errstr = $error["message"];

    $headers = "From: no-reply@fynbib.dk";

    $message = format_error($errno, $errstr, $errfile, $errline);
    mail('it-udvikling@fynbib.dk', $errfile, $message, $headers);
  }
}

function format_error($errno, $errstr, $errfile, $errline) {
  $trace = print_r(debug_backtrace(false), true);

  $content = "
  <table>
  <thead><th>Item</th><th>Description</th></thead>
  <tbody>
  <tr>
    <th>Error</th>
    <td><pre>$errstr</pre></td>
  </tr>
  <tr>
    <th>Errno</th>
    <td><pre>$errno</pre></td>
  </tr>
  <tr>
    <th>File</th>
    <td>$errfile</td>
  </tr>
  <tr>
    <th>Line</th>
    <td>$errline</td>
  </tr>
  <tr>
    <th>Trace</th>
    <td><pre>$trace</pre></td>
  </tr>
  </tbody>
  </table>";

  return $content;
}

define('tips_recipient_email','lejo@odense.dk');


if(isset($_POST['pdfdata']) && isset($_POST['email']) && isset($_POST['navn']))
{
    $path = getcwd();
    //echo "post Data found!" . "<br/>";
    $fp = fopen($path."/html/".$_POST['email'].".html", "w+");
    if($fp == null)
    {
        echo "Failed to create file<br/>";
    }
    if(!fwrite($fp, json_decode($_POST['pdfdata'])))
    {
         echo "Failed to write file<br/>";
    }
    fclose($fp);
    $cmd = "./libraries/wkhtmltox/bin/wkhtmltopdf ". $path."/html/".$_POST['email'].".html ".$path."/pdfs/".$_POST['email'].".pdf";
    //echo "Executing " .$cmd . "<br/>";
    exec($cmd);
    SendTipsEmail($_POST['navn'],$_POST['afdeling'],$_POST['email'],$path."/pdfs/".$_POST['email'].".pdf");
}
function SendTipsEmail($Name,$Afdeling,$From,$file_path)
{
    require_once 'libraries/phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
$mail->CharSet = "UTF-8";
    $mail->isSMTP();

$mail->Host = 'exchange.fynbib.dk';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'it-udvikling@fynbib.dk';                 // SMTP username
$mail->Password = 'K0de0rd';
$mail->Port = 25;

    $mail->setFrom($From,$Name);
    $mail->addAddress(tips_recipient_email);
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Tip en 13\'er fra: ' . $Name;
    $mail->Body    = $Name.' har udfyldt en tips kupon<br/></br>Afdeling: '. $Afdeling .'<br/></br>Email: '. $From;

    $mail->addAttachment($file_path);

    if(!$mail->send()) {
     //echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        //echo 'Message has been sent';
    }
}
