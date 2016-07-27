<?php

$galerie_ici = array(
	'57'=>'13222105721875|1322210521970342|1322210435192782|1322210476540486',
	'64'=>'1322754267693024|1322754261107269|1322764835841001|1322829722581988|132282972091722|1322829681253759',
	'65'=>'1322829991872999|1322829993272147|1322829994416380',
	'66'=>'1322830179690664|1322831316176770|1322831320777162',
	'67'=>'132283036414469|1322830366638303|132283037073684|1322830368968860',
	'69'=>'133784280730603|1337842811244583|1337842823200248',
	'70'=>'1337849260354991|1337849272450785|1337932636192440|1337932766586493',
	'71'=>'1337849483259462',
	'72'=>'1337931617704551|1337931749221787',
	'73'=>'133793316758731|1337933294488834|13379334013267|1337933513851991|1338060385112133|1338060470771576|1338060554916288',
	'74'=>'1337933693182391|1337933911994832|1337934058909972|1337934166313813|1337934485512371|1337934544876699|1337934708413581|1337934761786628|1337934822725422',
	'75'=>'1337935366906971|133793546952888|13379355683085|133793565932535|1343294187526138|1343294261872121|134329433490121|1343294399245102|1343294476159343|1343294534670931',
	'76'=>'1337936448493232|1337936529481657|1337936614309360|1337936617743193|1337936618239310|1337936620405270|1337936621618019',
	'77'=>'1338061208809004|1338061302274526|1338061394230523|1338061483841146|1339684080943500|1339684167956236|1339684244319244|1339684344855541',
	'78'=>'1338062467690434|1338062493573581|133806252015153|1338062527284627|1338062535922677',
	'79'=>'1342691057339287|1339683186861226|1339683254909649|1339683331663856|134046638026505',
	'80'=>'1339685608827180|1339685630535662|1339685649796860|1339685689601736|1339685751192856|1339685828101413|1339685884210745',
	'81'=>'1339687627857883|1339687689605492|1339687766715665|1339687831720162|1339687891450078|1347292880751851|1347292948447859|1347293010764071|1347293096416325',
	'82'=>'1339691168192634|1339691254279895',
	'83'=>'1340465909617902|1340465994908162|1340466073260895',
	'84'=>'134132580460289|1341220850897568|1341221130354383|1341221208170594|1342095893629127|1342095958935341|1342096021101446',
	'85'=>'1340530563627201|1341325039433233|1341325090909953|1341325157460688',
	'86'=>'1340532162774283|1340532238341009|1340532305758137',
	'87'=>'1340532852831598|1340532874621319|1340532924712746|1340532997949294',
	'88'=>'1344620187339124|1344620413981292|1346491187231088|1346491264451915|1346525694527157',
	'89'=>'1344771112966361|1344771196106416|134477127787107|1344771342178830|1344771405244988|1344771479723651|134477154134561|1344771611726922|134477169090816|1344771751367068',
	'90'=>'1344772408998167|1344772464384734|1344772539468774|1344772600170470|1344772669731184|1344772731204168|1344772801332931',
	'91'=>'1344773328369798|1344773252354288|1344773171588150',
	'92'=>'1347294001505214|1347293952114195|1347293906928027|1347293839331071');

$titre_ici =array(
	'57'=>'',
	'64'=>'',
	'65'=>'',
	'66'=>'',
	'67'=>'',
	'69'=>'',
	'70'=>'',
	'71'=>'',
	'72'=>'',
	'73'=>'',
	'74'=>'',
	'75'=>'',
	'76'=>'',
	'77'=>'',
	'78'=>'',
	'79'=>'',
	'80'=>'',
	'81'=>'',
	'82'=>'',
	'83'=>'',
	'84'=>'',
	'85'=>'',
	'86'=>'',
	'87'=>'',
	'88'=>'',
	'89'=>'',
	'90'=>'',
	'91'=>'',
	'92'=>'');

$id_ici = (isset($_GET['id_album']) and isset($galerie_ici[$_GET['id_album']])) ? $_GET['id_album'] : '66';
$les_images = explode('|', $galerie_ici[$id_ici]);

foreach ($les_images as $key => $value) {
	$les_images_html[] = '<li><img src="'.NDD.'includes/galerie/img_'.$value.'.jpg" width="748" height="300" alt=""></li>';
}


$windex = '
<div class=" clearfix">
	<div class="stage clearfix">
		<div class="teaser2-box">
			<h2>Nos références</h2>
			<div class="jcarousel-wrapper">
				<div class="jcarousel">
					<ul class="clearfix">
						'.implode("\n", $les_images_html).'
					</ul>
				</div>
				<p class="photo-credits">
					Nom du chantier
				</p>
				<a href="#" class="jcarousel-control-prev">&lsaquo;</a>
				<a href="#" class="jcarousel-control-next">&rsaquo;</a>

				<p class="jcarousel-pagination"></p>
			</div>

			<div class="footer-wrapper">
				<a href="galerie.php?id_album=57&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1322210476540486.jpg">
					<h3>Chantier Neuville</h3>
					<p>
						Rue du Hock, 19 - 4121 Neuville
						<br />Revêtement: Isolation + Crépi 
						<br />Année : 2011
					</p>
				</a>

				<a href="galerie.php?id_album=64&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_132282972091722.jpg">
					<h3>Chantier Bierges</h3>
					<p>Avenue Tarrins, 16
						1301 Bierges
						<br />Revêtement: Isolation Multipor + crépi
						Finition: Cantillana LY78
						Teinte: jaune
						<br />Année: 2011
					</p>
				</a>

				<a href="galerie.php?id_album=65&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1322829991872999.jpg">
					<h3>Chantier Theux</h3>
					<p>
						Rue Pirrechamps,3-4910 Theux
						<br />Revêtement: Isolation + crépi
						<br />Année: 2011
					</p>
				</a>

				<a href="galerie.php?id_album=66&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1322831316176770.jpg">
					<h3>Chantier Hermée</h3>
					<p>
						Rue du Broux, 139
						4680 Hermée
						<br />Revêtement: isolation + crépi
						<br />Année: 2011
					</p>
				</a>

				<a href="galerie.php?id_album=67&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1322830366638303.jpg">
					<h3>Chantier Vivegnis</h3>
					<p>
						Rue Pontisse, 1
						4683 Vivegnis
						<br />Revêtement: isolation + crépi
						<br />Année: 2011
					</p>
				</a>

				<a href="galerie.php?id_album=69&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1337842823200248.jpg">
					<h3>Chantier Chaudfontaine</h3>
					<p>
						rue Belle Promenade, 25
						4050 Ninanne
						<br />Revêtement : Isolation + Crépi
						<br />Année : 2012
					</p>
				</a>

				<a href="galerie.php?id_album=70&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1337932636192440.jpg">
					<h3>Chantier Boncelles</h3>
					<p>
						Route du Condroz, 13 4100 Boncelles
						<br />Revêtement : Isolation + Crépi
						<br />Année : 2012
					</p>
				</a>

				<a href="galerie.php?id_album=71&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1337849483259462.jpg">
					<h3>Chantier Herstal</h3>
					<p>
						Rue Jean Charles Leruitte, 13 4040 Herstal
						<br />Revêtement : Isolation + crépi
						<br />Année : 2012
					</p>
				</a>

				<a href="galerie.php?id_album=72&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1337931617704551.jpg">
					<h3>Chantier Hodeige</h3>
					<p>
						Rue de la Résistance, 174 4351 Hodeige
						<br />Revêtement : Isolation + crépi
						<br />Année : 2012
					</p>
				</a>
				
				<a href="galerie.php?id_album=73&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1338060385112133.jpg">
					<h3>Chantier Raccour</h3>
					<p>
						Rue Tirlemont, 45 4287 Raccour
						<br />Revêtement : Isolation + crépi
						<br />Année : 2012
					</p>
				</a>
				
				<a href="galerie.php?id_album=74&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1337934822725422.jpg">
					<h3>Chantier Crisnée</h3>
					<p>
						Rue Nestor Royer, 2 4367 Crisnée
						<br />Revêtement : Isolation + crépi
						<br />Année : 2012
					</p>
				</a>
				
				<a href="galerie.php?id_album=75&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1337935366906971.jpg">
					<h3>Chantier Ottignies</h3>
					<p>
						Rue du Blanc Ry, 1 1340 Ottignies
						<br />Revêtement : Isolation + crépi
						<br />Année : 2012
					</p>
				</a>
				
				<a href="galerie.php?id_album=76&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1337936618239310.jpg">
					<h3>Chantier Boncelles</h3>
					<p>
						Rue Lorraine, 26 4100 Boncelles
						<br />Revêtement : Isolation  crépi
						<br />Année : 2012
					</p>
				</a>
				
				<a href="galerie.php?id_album=77&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1339684167956236.jpg">
					<h3>Chantier Aywaille</h3>
					<p>
						Rue Heid d\'Ile, 1 4920 Aywaille
						<br />Revêtement : Isolation + crépi
						<br />Année : 2012
					</p>
				</a>
				
				<a href="galerie.php?id_album=78&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_133806252015153.jpg">
					<h3>Chantier Harzé</h3>
					<p>
						Rue de l\'Hermitrie, 21 4920 Harzé
						<br />Revêtement : Isolation + crépi
						<br />Année : 2011
					</p>
				</a>
				
				<a href="galerie.php?id_album=79&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1342691057339287.jpg">
					<h3>Chantier Oleye</h3>
					<p>
						Cité Henri Coune, 33  4300 Oleye
						<br />Revêtement : Isolation + Crépi
						<br />Année : 2012
					</p>
				</a>
				
				<a href="galerie.php?id_album=80&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1339685884210745.jpg">
					<h3>Chantier Herve</h3>
					<p>
						Rue de la Station, 94  4650 Herve
						<br />Revêtement : Isolation + crépi
						<br />Année : 2012
					</p>
				</a>
				
				<a href="galerie.php?id_album=81&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1339687891450078.jpg">
					<h3>Chantier Flemalle</h3>
					<p>
						Rue Jean Barthélemy, 6  4400 Flémalle
						<br />Revêtement : Isolation + Crépi
						<br />Année : 2012
					</p>
				</a>
				
				<a href="galerie.php?id_album=82&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1339691168192634.jpg">
					<h3>Chantier Spa (Les Heures Claires)</h3>
					<p>
						Avenue Reine Astrid, 131  4900 Spa
						<br />Revêtement : Isolation + Crépi
						<br />Année : 2012
					</p>
				</a>
				
				<a href="galerie.php?id_album=83&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1340466073260895.jpg">
					<h3>Chantier Saint-Georges</h3>
					<p>
						Boulevard des combattants, 70 à 4470 Saint-Georges
						<br />Revêtements : Crépi sur cimentage
						<br />Année : 2012
					</p>
				</a>
				
				<a href="galerie.php?id_album=84&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1342095893629127.jpg">
					<h3>Chantier Glons</h3>
					<p>
						Rue Haut-Vinâve 44  4690 Glons
						<br />Revêtement : Isolation + Crépi
						<br />Année : 2012
					</p>
				</a>
				
				<a href="galerie.php?id_album=85&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1341325090909953.jpg">
					<h3>Chantier Vivegnis</h3>
					<p>
						Rue des Anciens combattants, 46  à 4683 Vivegnis
						<br />Revêtement : Isolation + Crépi
						<br />Année : 2012
					</p>
				</a>
				
				<a href="galerie.php?id_album=86&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1340532305758137.jpg">
					<h3>Chantier Francorchamps</h3>
					<p>
						Rue Goedert, 7 4970 Francorchamps
						<br />Revêtement : Isolation + Crépi
						<br />Année : 2012
					</p>
				</a>
				
				<a href="galerie.php?id_album=87&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1340532997949294.jpg">
					<h3>Chantier Tilf</h3>
					<p>
						Rue de la Chawresse, 18  4130 Tilf
						<br />Revêtement : Isolation + Crépi
						<br />Année : 2011
					</p>
				</a>
				
				<a href="galerie.php?id_album=88&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1346491187231088.jpg">
					<h3>Chantier Chaudfontaine</h3>
					<p>
						Rue de Chevremont, 88 à 4051 Chaudfontaine
						<br />Revêtement : cimentage + crépi 
						<br />Année : 2012
					</p>
				</a>

				<a href="galerie.php?id_album=89&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1344771751367068.jpg">
					<h3>Chantier Embourg</h3>
					<p>
						Rue du Hêtre Pourpre, 35 à 4051 Embourg
						<br />Revêtement: isolation + crépi 
						<br />Année : 2012		
					</p>
				</a>

				<a href="galerie.php?id_album=90&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1344772801332931.jpg">
					<h3>Chantier Huy</h3>
					<p>
						Rue Victor Heine 3/1 à 4520 Antheit
						<br />Revêtement : isolation + crépi
						<br />Année : 2012
					</p>
				</a>

				<a href="galerie.php?id_album=91&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1344773171588150.jpg">
					<h3>Chantier Comblain au Pont</h3>
					<p>
						Rue de la Croix, 1 à
						4170 Comblain-au-Pont
						<br />Revêtement : isolation + crépi 
						<br />Année : 2012
					</p>
				</a>

				<a href="galerie.php?id_album=92&amp;old_album=0" class="galerie-box">
					<img src="'.NDD.'includes/galerie/min/img_1347294001505214.jpg">
					<h3>Chantier Oupeye</h3>
					<p>
						Rue Cockeroux,190 - 4680 Oupeye
						<br />Revêtement: Isolation + Crépi
						<br />Année: 2012		
					</p>
				</a>
			</div>
		</div>
	</div>
</div>';

	?>