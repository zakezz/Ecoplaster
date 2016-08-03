

<!DOCTYPE html>
<html lang="fr">
<head>
<!-- ============ -->
<!-- balises Meta -->
<!-- ============ -->

<meta charset="ISO-8859-1" />
<title>Test PHPMailer() !</title>

<!-- ====================== -->
<!-- Cascading Style Sheets -->
<!-- ====================== -->

<link rel="stylesheet" type="text/css" href="Styles.css" />
</head>

<body>
<div id="bloc">

<!-- ====================================== -->
<!-- Envoi d'un message MAIL avec PHPMailer -->
<!-- ====================================== -->

<?php
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

$mail->SMTPDebug     = 2;
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
$cc ="zakaria_zz1@hotmail.com";

$mail->SetFrom($from, "ef");
$mail->AddAddress($to,"sh");
$mail->AddAddress($cc,"zz");

/*=================================*/
/* le sujet et le corps du message */
/*=================================*/

//$body = file_get_contents("message/content.html");
$body = "salut la compagnie \n";
$body = preg_replace('/\\\\/','', $body);

$mail->Subject = "Test mail";
$mail->MsgHtml($body);
// si ne lit pas les balise html
$mail->AltBody = "Bonjour, vous trouverez en pièce jointe votre pré-devis. \n cordialement l'équipe Ecoplaster \n";
$mail->AddAttachment("devis_clients/24_devis_ecoplaster.pdf");

/*==========================*/
/* Envoi et test du message */
/*==========================*/

echo "Envoi d'un message vers l'adresse E-MAIL : ".$to."<br /><br />";

if (!$mail->Send()) $mess = "PHPMailer : <span>" . $mail->ErrorInfo .  "</span>";
else                $mess = "PHPMailer : <span>Le Message a été envoyé !</span>";

$mail->SmtpClose();
unset($mail);
?>

<br /><?php echo $mess ?>

</div>
<div id="footer">Ne pas Oublier de lancer "openssl" dans WampServer !</div>
</body>
</html>
