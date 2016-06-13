<?php 

//Writing all information to contents.txt file

$name=$_POST['name'];
$street=$_POST['street'];
$pobox=$_POST['pobox'];
$city=$_POST['city'];
$area=$_POST['area'];
$emirate=$_POST['emirate'];
$phone=$_POST['phone'];
$skype=$_POST['skype'];
$email=$_POST['email'];
$visa=$_POST['visa'];
$occupation=$_POST['occupation'];
$married=$_POST['marriage'];
$nationality=$_POST['nationality'];
$hourspd=$_POST['hourspd'];



$myfile = fopen("contents.txt", "w") or die("Unable to open file!");
$txt = "Name: \t ".$name."\n";
fwrite($myfile, $txt);
$txt = "Street: \t ".$street."\n";
fwrite($myfile, $txt);

$txt = "POBox Number: \t ".$pobox."\n";
fwrite($myfile, $txt);

$txt = "City: \t ".$city."\n";
fwrite($myfile, $txt);

$txt = "Area: \t ".$area."\n";
fwrite($myfile, $txt);

$txt = "Emirate: \t ".$emirate."\n";
fwrite($myfile, $txt);

$txt = "Contact: \t ".$phone."\n";
fwrite($myfile, $txt);

$txt = "Skype ID: \t ".$skype."\n";
fwrite($myfile, $txt);

$txt = "Email ID: \t ".$email."\n";
fwrite($myfile, $txt);

$txt = "Current Visa Status: \t ".$visa."\n";
fwrite($myfile, $txt);

$txt = "Current Occupation: \t ".$occupation."\n";
fwrite($myfile, $txt);

$txt = "Marriage Status: \t ".$married."\n";
fwrite($myfile, $txt);

$txt = "Nationality: \t ".$nationality."\n";
fwrite($myfile, $txt);
fclose($myfile);


require_once './PHPMailer/PHPMailerAutoload.php';


$results_messages = array();
 
$mail = new PHPMailer(true);
$mail->CharSet = 'utf-8';
ini_set('default_charset', 'UTF-8');

class phpmailerAppException extends phpmailerException {}
 
try {
$to = 'xxxxxxxxxxxxxxx@gmail.com';
if(!PHPMailer::validateAddress($to)) {
  throw new phpmailerAppException("Email address " . $to . " is invalid -- aborting!");
}
$mail->isSMTP();
$mail->SMTPDebug  = 0;
$mail->Host       = "smtp.gmail.com";
$mail->Port       = "587";
$mail->SMTPSecure = "tls";
$mail->SMTPAuth   = true;
$mail->Username   = "xxxxxxxxxx@gmail.com";  //email id
$mail->Password   = "xxxxxxxxxxxxx";					//email password
$mail->addReplyTo("xxxxxxxxxxx@gmail.com", "Triall"); 
$mail->setFrom("xxxxxxxxxxxxxxx@gmail.com", "Sonia");
$mail->addAddress("xxxxxxxxxxxxxxx@gmail.com", "Sonia");
$mail->addCC($email); 
$mail->Subject  = "Application for Reseller position";
$body =  file_get_contents('contents.txt');
$mail->WordWrap = 78;
$mail->msgHTML($body); //Create message bodies and embed images
 
try {
  $mail->send();
  $results_messages[] = "Message has been sent using SMTP";
}
catch (phpmailerException $e) {
  throw new phpmailerAppException('Unable to send to: ' . $to. ': '.$e->getMessage());
}
}
catch (phpmailerAppException $e) {
  $results_messages[] = $e->errorMessage();
}




 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Company Name</title>
 
    <link rel="stylesheet" href="./css/main.css">

 </head>
<body>

<div id="center">
 	<br> <br>
 	<div id="center" style="height:1000px;">
<p> Thank you for completing the application form ! You will be contacted very soon to go to the next step</p>

<?php 

 
if (count($results_messages) > 0) {
foreach ($results_messages as $result) {
  echo "<li>$result</li>\n";
}
echo "</ul>\n";
}
 ?>

 	</div>
 	</div>

</body>
 </html>
