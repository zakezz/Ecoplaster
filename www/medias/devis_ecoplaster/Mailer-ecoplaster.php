



<?php

/*======================================*/
/*Envoi d'un message MAIL avec PHPMailer*/
/*======================================*/

error_reporting(E_ALL);
date_default_timezone_set('Europe/Paris');

require_once("PHPMailer/class.phpmailer.php");
require_once("PHPMailer/class.smtp.php");

/*==========================*/
/* Utilisation de PHPMailer */
/*==========================*/

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->SetLanguage('fr');


//affiche le détail client/serveur 
//$mail->SMTPDebug     = 2;
$mail->SMTPKeepAlive = true;

/*=============================*/
/* Caractéristiques du serveur */
/*=============================*/

$mail->Host          = "smtp.gmail.com";
$mail->Port          = 587;
$mail->SMTPSecure    = "tls";

/*==================*/
/* Authentification */
/*==================*/

$mail->SMTPAuth      = true;
$mail->Username      = "ecoplasterfr@gmail.com";
$mail->Password      = "ecoplasterfrecoplasterfr";

/*=============================*/
/* Caractéristiques du message */
/*=============================*/

$mail->IsHTML(true);
$mail->CharSet       = "ISO-8859-1";
$mail->ContentType   = "text/html";
$mail->Encoding      = "8bit";

/*===========================*/
/* Expéditeur & Destinataire */
/*===========================*/

$from = "ecoplasterfr@gmail.com";
$to   = "ecoplasterfr@gmail.com";
$cc = $_POST['email'];

$mail->SetFrom($from, "Adela KISTAS Ecoplaster Sarl");
$mail->AddAddress($to,"ak");
$mail->AddAddress($cc, $nom);

/*=================================*/
/* le sujet et le corps du message */
/*=================================*/

$body = "Bonjour $status $nom,<br \><br \>
Vous trouverez ci-joint votre pr&eacute;-devis. Nous restons a votre disposition pour toutes questions.
<br \>
Continuez &agrave; visiter notre site internet &agrave; l'adresse : <br \>
http://www.ecoplaster.fr/
<br \><br \>
Cordialement.

<br \><br \><br \><br \>";
$body .= file_get_contents("coordonnee-ak.html");
$body = preg_replace('/\\\\/','', $body);

$date = date('d/m/Y');
$mail->Subject = "ECOPLASTER - Devis - ".$date;
$mail->MsgHtml($body);
// si ne lit pas les balise html
$mail->AltBody = "Bonjour, vous trouverez en pièce jointe votre pré-devis. \n cordialement l'équipe Ecoplaster \n";
$mail->AddAttachment("devis_clients/".$numclient."_devis_ecoplaster.pdf");
$mail->AddAttachment("devis_clients/condition.pdf");

/*==========================*/
/* Envoi et test du message */
/*==========================*/

//echo "Envoi d'un message vers l'adresse E-MAIL : ".$to."<br /><br />";

if (!$mail->Send()) $mess = "PHPMailer : <span>" . $mail->ErrorInfo .  "</span>";
else                $mess = "PHPMailer : <span>Le Message a été envoyé !</span>";

$mail->SmtpClose();
unset($mail);
?>

<?php //echo $mess; ?>



