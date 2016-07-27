<?php
	if(isset($_POST['nom'])){
			$Sujet = "[Devis Ecoplaster]";
			$mmail = $_POST['email'];
			$From  = "From:$mmail\n";
			$From .= "MIME-version: 1.0\n";
			$From .= "Content-type: text/html; charset= iso-8859-1\n";
			$Message = "";
			foreach ($_POST as $key => $value) {
				$Message .= "<b>".mb_strtoupper($key)."</b><blockquote> ".$value."</blockquote>";
			}

			// $Message = "Nouveau Message:<br /><br /><br />"
			// 			."Nom: <b>"."</b><br />"
			// 			."Pr&eacute;nom: <b>"."</b><br />"
			// 			."Email: <b>"."</b><br />"
			// 			."Phone: <b>"."</b><br />"
			// 			."Message:<br /><blockquote>"."</blockquote>";

			mail("contact@ecoplaster.fr",$Sujet,$Message,$From);

			$msg_final = 'Votre message a été envoyé avec succès.<br />Nous vous répondrons dans les plus bref délais.';
	}else $msg_final = '';






$value_statut = isset($_POST['statut']) ? $_POST['statut'] : 'particulier';
$value_annee = isset($_POST['annee_construction']) ? $_POST['annee_construction'] : '';
$head ='<link href="includes/css/form.css" media="all" rel="stylesheet" type="text/css">';
$windex = '
<div class="content-wrapper">
	<div class="content">
		<div class="teaser2-box" style=""><h2>Devis en ligne:</h2>
			<div style="width:100%;text-align:center">'.$msg_final.'</div>
			<form id="contactForm" method="post">
				<fieldset>
					<legend>Statut</legend>
					<ol>
						<li>
							<input value="particulier" name="statut" id="particulier" '.( $value_statut == 'particulier' ? 'checked="checked"' : '').' type="radio"><label for="particulier">Particulier</label>
							<br />
							<input value="professionnel" name="statut" id="professionnel" '.( $value_statut == 'professionnel' ? 'checked="checked"' : '').' type="radio"><label for="professionnel">Professionnel</label>
							<br />
							<input value="tiers" name="statut" id="tiers" '.( $value_statut == 'tiers' ? 'checked="checked"' : '').' type="radio"><label for="tiers">Tiers</label><br />
						</li>
					</ol>
				</fieldset>
				<fieldset>
					<legend>Informations sur le projet</legend>
					<ol>
						<li>
							<label for="type_isolation">Type d\'isolation*</label>
							<select id="type_isolation" name="type_isolation" >
								<option selected="selected" value="isolation_crepi">Isolation + crépi</option>
								<option value="isolation_bardage">Isolation + bardage</option>
								<option value="isolation_seule">Isolation seule</option>
								<option value="isolation_briquette">Isolation + briquette</option>
								<option value="cimentage_facade">Cimentage façade</option>
								<option value="cimentage_crepi">Cimentage + crépi</option>
								<option value="hydrofuge_facade">Hydrofuge façade</option>
							</select>
						</li>
						<li>
							<label for="annee_construction">Année de const.</label>
							<input name="annee_construction" id="annee_construction" type="text" value="'.$value_annee.'" />
						</li>
						<li>
							<label for="metre">Métré</label>
							<input name="metre" id="metre" type="text" />	
						</li>
						<li>
							<label for="metre">Devis urgent</label>
							<select id="devis_urgent" name="devis_urgent">
								<option selected="selected" value="oui">Oui</option>
								<option value="non">Non</option>
							</select>
						</li>
					</ol>
				</fieldset>
				<fieldset>
					<legend>Description du projet</legend>
					<ol>
						<li>
							<textarea name="description" id="description" rows="5"></textarea>
						</li>
					</ol>
				</fieldset>
				<fieldset>
					<legend>Quel est votre budget ?*</legend>
					<ol>
						<li>
							<select id="budget" name="budget" >
								<option selected="selected" value="moins_de_2000e">moins de 2000€</option>
								<option value="2000e_5000e">de 2000 à 5000€</option>
								<option value="5000e_10000e">de 5000 à 10000€</option>
								<option value="10000e_20000e">de 10000 à 20000€</option>
								<option value="plus_de_20000e">plus de 20000€</option>
							</select>
						</li>
					</ol>
				</fieldset>
				<fieldset>
					<legend>Quand voulez-vous commencer votre projet ?*</legend>
					<ol>
						<li>
							<select id="horaire" name="horaire" >
								<option selected="selected" value="des_que_possible">Dès que possible</option>
								<option value="dans_1_a_3_mois">Endéans 1 à 3 mois</option>
								<option value="dans_3_a_6_mois">Dans 3 à 6 mois</option>
								<option value="dans_6_a_12_mois">Dans 6 à 12 mois</option>
								<option value="dans_plus_d_1_an">Dans plus d\'1 an</option>
							</select>
						</li>
					</ol>
				</fieldset>
				<fieldset>
					<legend>Comment nous avez-vous connu ?</legend>
					<ol>
						<li>
							<select id="connu_par" name="connu_par">
								<option selected="selected" value="general">General</option>
								<option value="web">Web</option>
								<option value="tiers">Tiers</option>
								<option value="tellus">Tellus</option>
								<option value="reference_chantier">Référence chantier</option>
								<option value="bouche_a_oreille">Bouche à oreille</option>
								<option value="prospectus">Prospectus</option>
								<option value="radio">Radio</option>
								<option value="architecte">Architecte</option>
							</select>
						</li>
					</ol>
				</fieldset>
				<fieldset>
					<legend>Êtes-vous informés sur l\'octroi de différentes primes ?</legend>
					<ol>
						<li>
							<input value="infos_primes_oui" name="infos_primes" id="infos_primes_oui" type="radio" ><label for="infos_primes_oui">Oui</label><br />
							<input value="infos_primes_non" name="infos_primes" id="infos_primes_non" type="radio" ><label for="infos_primes_non">Non</label><br />
						</li>
					</ol>
				</fieldset>
				<fieldset>
					<legend>Êtes-vous en contact ou avez-vous demandé une offre à un autre professionnel ?</legend>
					<ol>
						<li>
							<input value="autre_pro_oui" name="autre_pro" id="autre_pro_oui" type="radio"><label for="autre_pro_oui">Oui</label><br />
							<input value="autre_pro_non" name="autre_pro" id="autre_pro_non" type="radio"><label for="autre_pro_non">Non</label><br />
						</li>
					</ol>
				</fieldset>
				<fieldset>
					<legend>Coordonnées complètes</legend>
					<ol>
						<li>
							<label for="nom">Nom: <span class="text_red">*</span></label>
							<input size="15" name="nom" id="nom" type="text" required />
						</li>
						<li>
							<label for="prenom">Prénom: <span class="text_red">*</span></label>
							<input size="15" name="prenom" id="prenom" type="text" required />
						</li>
						<li>
							<label for="adresse_chantier">Adresse chantier: <span class="text_red">*</span></label>
							<input size="20" name="adresse_chantier" id="adresse_chantier" type="text" required />
						</li>
						<li>
							<label for="num_adresse_chantier">Numéro/boite: <span class="text_red">*</span></label>
							<input size="7" name="num_adresse_chantier" id="num_adresse_chantier" type="text" required /> 
						</li>
						<li>
							<label size="10" for="ville">Ville: <span class="text_red">*</span></label>
							<input name="ville" id="ville" type="text" required />
						</li>
						<li>
							<label for="code_postal">Code postal: <span class="text_red">*</span></label>
							<input size="7" name="code_postal" id="code_postal" type="text" required />
						</li>
						<li>
							<label for="tel">Téléphone: </label>
							<input size="13" name="tel" id="tel" type="text">
						</li>
						<li>
							<label for="gsm">GSM: <span class="text_red">*</span></label>
							<input size="13" name="gsm" id="gsm" type="text" required />
						</li>
						<li>
							<label for="email">Email: </label>
							<input size="25" name="email" id="email" type="text">
						</li>
					</ol>
				</fieldset>
				<p class="infos_obligatoires">
					<span class="text_red">*</span> Informations obligatoires
				</p>
				<button type=submit>Envoyer</button>
			</form>
		</div>
	</div>
</div>';

	?>