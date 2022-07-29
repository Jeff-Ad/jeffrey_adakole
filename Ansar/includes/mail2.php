<?php 

require_once('PHPMailer/PHPMailerAutoload.php');

class m extends PHPMailer{
function sendmail($reciever=array(),$content,$head){
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$this->isSMTP();                                      // Set mailer to use SMTP
$this->Host = 'server223.web-hosting.com';  // Specify main and backup SMTP servers
$this->SMTPAuth = true;                               // Enable SMTP authentication
$this->Username = 'ihatemej';                 // SMTP username
$this->Password = 'ZbZyIWVwDoSm';                           // SMTP password
$this->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$this->Port =  26;                                     // TCP port to connect to

$this->setFrom("alansaracademy2020@gmail.com", 'Al-Ansar');
//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
foreach($reciever as $rec){
$this->addAddress($rec); 	
}              // Name is optional

$this->isHTML(true);                                  // Set email format to HTML

$this->Subject = $head;
$this->Body    = $content;
$this->AltBody = strip_tags($content);

if(!$this->send()) {
    return false;
} else {
    $this->clearAddresses();
	return true;
	
}
}}
$mail=new m;
//$mail->sendmail("masterabdul46@gmail.com","hello","head");
?>