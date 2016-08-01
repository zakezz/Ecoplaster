<?php
$head ='<link href="includes/css/form.css" media="all" rel="stylesheet" type="text/css">';
$windex = '
		<div class="clearfix">
			<div class="stage clearfix">
				<div class="jcarousel-wrapper">
					<div data-jcarousel="true" class="jcarousel">
						<ul  class="clearfix">
							<li style="width: 748px;"><img src="images/avant_apres/1.jpg" alt="" height="300" width="748"></li>
							<li style="width: 748px;"><img src="images/avant_apres/2.jpg" alt="" height="300" width="748"></li>
							<li style="width: 748px;"><img src="images/avant_apres/3.jpg" alt="" height="300" width="748"></li>
							<li style="width: 748px;"><img src="images/avant_apres/4.jpg" alt="" height="300" width="748"></li>
							<li style="width: 748px;"><img src="images/avant_apres/5.jpg" alt="" height="300" width="748"></li>
							<li style="width: 748px;"><img src="images/avant_apres/6.jpg" alt="" height="300" width="748"></li>
						</ul>
					</div>
					<a data-jcarouselcontrol="true" href="#" class="jcarousel-control-prev">‹</a>
					<a data-jcarouselcontrol="true" href="#" class="jcarousel-control-next">›</a>
					<p data-jcarouselpagination="true" class="jcarousel-pagination"></p>
				</div>
			</div>
		</div>
		<div class="content-wrapper">
			<div class="content">
				<div class="index_1">
					<span class="teaser-box" id="menu_trio">
						<div id="devis">
							<h2><a href="'.NDD.'crepis-isolation-devis-devis-en-ligne.php"></a></h2>
						</div>
						<div id="references">
							<h2><a href="'.NDD.'galerie.php"></a></h2>
						</div>
						<div id="contacter_fr">
							<h2><a href="'.NDD.'crepis-isolation-devis-nous-contacter.php"></a></h2>
						</div>
						<div id="primes">
							<h2><a href="'.NDD.'crepis-isolation-devis-primes.php"></a></h2>
						</div>
					</span>
					<a href="'.NDD.'crepis-isolation-devis-qui-sommes-nous.php" class="teaser-box">
						<h3>Qui sommes nous </h3><br />
						<p>Ecoplaster, votre partenaire pour vos travaux de crépis, de façade avec ou sans isolation, avec tous types de système d\'isolation thermique extérieur, peintures intérieures et extérieures, bardages, briquettes et les petits parachèvement tels que pose de seuil ou pose de luminaire et réadaptation des rives de toitures, sous corniche et des dépassants de toiture. Bien entendu nous nous occupons également des ravalements. <b>Suite </b></p>
					</a>
					<a href="'.NDD.'crepis-isolation-devis-nous-contacter.php" class="teaser-box">
						<h3>Rendez-nous visite</h3><br />
						<p>Envie de visualiser notre travail réellement ? Alors inscrivez-vous à l\'une de nos visites de chantiers ouverts à tous. Il vous sera possible de voir des chantiers en cours (système de protection) ou terminés (finitions). <b>En savoir plus?</b></p>
					</a>
					<a href="'.NDD.'crepis-isolation-devis-dessins-techniques.php" class="teaser-box">
						<h3>Dessins techniques</h3><br />
						<p>Vous êtes ingénieurs, architectes, ...<br>Vous avez besoin d\'informations techniques, de cotes sur nos produits.<br>Vous trouverez ici ce que vous cherchez!<b> En savoir plus?</b></p>
					</a>
					<a href="http://www.developpement-durable.gouv.fr/La-mention-RGE-Reconnu-Garant-de-l.html" class="teaser-box">
						<h3>Norme RGE</h3><br />
						<p>Ecoplaster est sous label Reconnu Garant de l\'Environnement (RGE), gage de qualité acquis suite à de nombreux chantiers de qualités. C\'est un label gratifiant dans le métier de l\'isolation extérieure.Néanmoins, en dehors de la qualité, ce label est un atout non négligeable car il est impossible d\'avoir certaines aides financières sans ce label.<b> Pour plus d\'informations cliquez ici </b></p>
					</a>
					<a href="https://www.service-public.fr/particuliers/vosdroits/F1328" class="teaser-box">
						<h3>Dossier de subvention ANAH</h3><br />
						<p>Notre entreprise travaille avec l\'Agence Nationale de l\'Habitat (ANAH) pour vous permettre de bénéficier d\'une aide financière (soumis à plusieurs critères)  lors de vos travaux d\'isolation extérieure. En effet la préparation de votre dossier est effectuée par nos soins et cela gratuitement.<b> Pour plus d\'informations cliquez ici </b></p>
					<a href="'.NDD.'crepis-isolation-devis-fiches-techniques.php" class="teaser-box">
						<h3>Fiches techniques</h3><br />
						<p>Fiches techniques des différents produits utilisés par Ecoplaster. <b>En savoir plus?</b></p>
					</a>
					<span class="teaser-box">
						<a href="http://www.rtl.be/belrtl"><img src="'.NDD.'images/rtl.png" alt="BEL RTL"></a>
						<p>Ecolpaster sur BEL RTL !</p>
						<object type="application/x-shockwave-flash" data="'.NDD.'includes/mp4/dewplayer.swf" id="dewplayer" name="dewplayer" height="20" width="200">
							<param name="movie" value="'.NDD.'includes/mp4/dewplayer.swf">
							<param name="flashvars" value="mp3='.NDD.'includes/mp4/ecoplaster.mp3&amp;showtime=1">
							<param name="wmode" value="transparent">
						</object>
					</span>
				</div>
				<div class="index_2">
					'.($type_pc ? '<a href="'.NDD.'crepis-isolation-devis-primes.php" class=""><img class="img_def" src="'.NDD.'images/ban_wiki_2016.png" alt="" /></a>' : '') .'
					
					<form id="contactForm_home" method="post" action="'.NDD.'crepis-isolation-devis-devis-en-ligne.php">
						<fieldset>
							<legend>Statut</legend>
							<ol>
								<li>
									<input value="particulier" name="statut" id="particulier" checked="checked" type="radio"><label for="particulier">Particulier</label>
									<br />
									<input value="professionnel" name="statut" id="professionnel" type="radio"><label for="professionnel">Professionnel</label>
									<br />
									<input value="tiers" name="statut" id="tiers" type="radio"><label for="tiers">Tiers</label><br />
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
									<label for="annee_construction">Année de construction</label>
									<input name="annee_construction" id="annee_construction" type="text" />
								</li>
							</ol>
						</fieldset>
						<button type=submit>Suite ...</button>
				</div>
			</div>
		</div>';

?>
	
