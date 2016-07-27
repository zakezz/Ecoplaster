<?php
	if(isset($_POST['lastname'])){
			$Sujet = "Nouveau message de ".$_POST['lastname']."";
			$mmail = $_POST['email'];
			$From  = "From:$mmail\n";
			$From .= "MIME-version: 1.0\n";
			$From .= "Content-type: text/html; charset= iso-8859-1\n";
			$Message = "Nouveau Message:<br /><br /><br />"
						."Nom: <b>".$_POST['lastname']."</b><br />"
						."Pr&eacute;nom: <b>".$_POST['firstname']."</b><br />"
						."Email: <b>".$_POST['email']."</b><br />"
						."Phone: <b>".$_POST['phone']."</b><br />"
						."Message:<br /><blockquote>".$_POST['message']."</blockquote>";
			mail("contact@ecoplaster.fr",$Sujet,$Message,$From);
			// mail("ctzwayna@gmail.com",$Sujet,$Message,$From);

			$msg_final = 'Votre message a été envoyé avec succès.<br />Nous vous répondrons dans les plus bref délais.';
	}else $msg_final = '';



	$head ='<link href="includes/css/form.css" media="all" rel="stylesheet" type="text/css">';
	$windex = '
	<div class="content-wrapper">
		<div class="content">
			<div class="teaser2-box" style="text-align:center;overflow:auto">
				<img src="'.NDD.'images/logo_ecoplaster.png" alt="Ecoplaster" style="margin-top:20px;" />
				<div class="float_l ">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2621.3435689086814!2d2.4768469999999994!3d48.9278976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6135a365069af%3A0xa752e896506869af!2s9+Avenue+de+Qu%C3%A9bec%2C+93150+Le+Blanc-Mesnil!5e0!3m2!1sfr!2sfr!4v1431873631902" width="400" height="300" frameborder="0" style="border:0"></iframe>
				</div>
				<div class="float_l" style="margin:10px;text-align:left">
					<strong>Ecoplaster</strong> SARL<br>
					9 Avenue de Quebéc<br>
					93150 Le Blanc Mesnil<br>
					<br>
						
					Téléphone: <strong></strong><br>
					Fax : <strong></strong>
				</div>
				<div class="float_l" style="width:100%;text-align:left">
					<form id="contactForm" method="POST">
						<div style="width:100%;text-align:center">'.$msg_final.'</div>
						<fieldset>
							<h3>Contactez-nous</h3>
							<ol>
								<li>
									<label for="clastname">Prénom: <span class="text_red">*</span></label>
									<input id="clastname" name="lastname" required />
								</li>
								<li>
									<label for="cfirstname">Nom: <span class="text_red">*</span></label>
									<input id="cfirstname" name="firstname" required />
								</li>
								<li>
									<label for="cemail">Adresse e-mail: <span class="text_red">*</span></label>
									<input id="cemail" name="email"   required />
								</li>
								<li>
									<label for="cphone">Téléphone: <span class="text_red">*</span></label>
									<input id="cphone" name="phone"  required />
								</li>
								<li>
									<label for="cmessage">Votre message: <span class="text_red">*</span></label>
									<textarea id="cmessage" name="message"  rows="10" required></textarea>
								</li>
								<p class="infos_obligatoires">
									<span class="text_red">*</span> Informations obligatoires
								</p>
								<button type="submit">Envoyer</button>
							</ol>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>';
?>