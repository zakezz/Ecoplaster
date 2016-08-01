<?php
	$title = (isset($title)) ? $title : 'Ecoplaster - Isolation thermique extérieur et Crépis, Devis en Ligne Gratuit.';
	$description = (isset($description)) ? $description : 'Ecoplaster, votre partenaire pour vos travaux de crépis de façade avec ou sans isolation, avec tous types de système d\'isolation, peintures intérieures et extérieures, bardages, Briquettes et les petits parachèvement tels que pose de seuil, pose de luminaire et réadaptation des rives de toitures, sous corniche et des dépassants de toiture.';
	$windex = (isset($windex)) ? $windex : 'Erreur';
	$head = (isset($head)) ? $head : '';
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title;?></title>
	<meta name="description" content="<?php echo $description;?>">

	<meta property="og:description" content="<?php echo $description;?>">
	<meta property="og:site_name" content="<?php echo $title;?>">
	<meta property="og:title" content="<?php echo $title;?>">
	<meta property="og:image" content="images/logo_ecoplaster.png">

	<link href="includes/css/style.css" media="all" rel="stylesheet" type="text/css">
	<!--
	<script src="includes/js/analytics.js" async=""></script>-->
	<script src="includes/js/modernizr.js"></script>
	<?php echo $head;?>
</head>
<body>
	<div id="wrapper">
		<div class="logo-wrapper clearfix">
			<header class="logo">
				<a href="<?php echo NDD; ?>"><img src="<?php echo NDD; ?>images/logo_ecoplaster.png" alt="" style="float:left" /></a>
				<a href="<?php echo NDD; ?>crepis-isolation-devis-primes.php"><img src="<?php echo NDD; ?>images/sticker_fr.png" alt="" style="float:right" /></a>
			</header>
		</div>
		<div class="nav-wrapper clearfix" style="background-color:#8BC53F">
			<nav class="nav"  style="float:right;">
				<ul>
					<li <?php echo ($page_ici == 'index') 			? 'class="download"' :'';?>><a href="<?php echo NDD; ?>index.php" class="selected">Accueil</a></li>
					<li <?php echo ($page_ici == 'produits') 		? 'class="download"' :'';?>><a href="<?php echo NDD; ?>crepis-isolation-devis-produits.php">Produits</a></li>
					<li <?php echo ($page_ici == 'videos') 			? 'class="download"' :'';?>><a href="<?php echo NDD; ?>crepis-isolation-devis-videos.php">Videos</a></li>
					<li <?php echo ($page_ici == 'devis-en-ligne') 	? 'class="download"' :'';?>><a href="<?php echo NDD; ?>crepis-isolation-devis-devis-en-ligne.php">Devis en ligne</a></li>
					<li <?php echo ($page_ici == 'galerie')		 	? 'class="download"' :'';?>><a href="<?php echo NDD; ?>galerie.php">Références</a></li>
					<li <?php echo ($page_ici == 'nous-contacter') 	? 'class="download"' :'';?>><a href="<?php echo NDD; ?>crepis-isolation-devis-nous-contacter.php">Nous contacter</a></li>
				</ul>
			</nav>
		</div>
		<?php
			if ($type_pc) {
				echo '
				<div style="position: fixed; top: 200px; right: 4px;width:115px;text-align:center;">
					<a href="'.NDD.'crepis-isolation-devis-devis-en-ligne.php"><img src="'.NDD.'images/devis_en_ligne2.png"></a><br />
					<a href="'.NDD.'galerie.php"><img src="'.NDD.'images/b4_2.png"></a><br />
					<a href="'.NDD.'crepis-isolation-devis-nous-contacter.php"><img src="'.NDD.'images/b4_3.png"></a><br />
					<a href="'.NDD.'crepis-isolation-devis-primes.php"><img src="'.NDD.'images/b4_4.png"></a><br />
				</div>';
			}
		?>
		<?php echo $windex;?>
		<div class="footer-wrapper">
			<footer class="footer clearfix">
				<ul>
					<li><a href="<?php echo NDD; ?>crepis-isolation-devis-devis-en-ligne.php">Devis en ligne</a></li>
					<li><a href="<?php echo NDD; ?>galerie.php">Références</a></li>
					<li><a href="<?php echo NDD; ?>crepis-isolation-devis-nous-contacter.php">Nous contacter</a></li>
					<li><a href="<?php echo NDD; ?>crepis-isolation-devis-videos.php">Vidéos</a></li>
					<li><a href="<?php echo NDD; ?>crepis-isolation-devis-primes.php">Primes</a></li>
					<li><a href="<?php echo NDD; ?>crepis-isolation-devis-garanties.php">Garanties &amp; agréations</a></li>
					<li><a href="<?php echo NDD; ?>crepis-isolation-devis-qui-sommes-nous.php">Qui sommes-nous?</a></li>
				
				</ul>
				<ul>
					<li>Copyright (c) <script>document.write(new Date().getFullYear());</script>. Ecoplaster.Fr</li>
					<li><img class="icon" src="<?php echo NDD; ?>images/icons_fb.png"><a target="_blank" href="https://www.facebook.com/EcoplasterFr/?fref=ts">Facebook</a></li>
					<li><img class="icon" src="<?php echo NDD; ?>images/icons_tt.png"><a target="_blank" href="https://twitter.com/EcoplasterFr">Twitter</a></li>
				</ul>
			</footer>

		</div>
	</div>

	<script src="includes/js/jquery.js"></script>
	<script src="includes/js/jquery_002.js"></script>
	<script>
		$(function () {
			var jcarousel = $('.jcarousel');

			jcarousel
					.on('jcarousel:reload jcarousel:create', function () {
						jcarousel.jcarousel('items').width(jcarousel.innerWidth());
					})
					.jcarousel({
						wrap: 'circular',
						transitions: Modernizr.csstransitions ? {
							transforms:   Modernizr.csstransforms,
							transforms3d: Modernizr.csstransforms3d,
							easing:       'ease'
						} : false
					});

			$('.jcarousel-control-prev')
					.on('jcarouselcontrol:active', function() {
						$(this).removeClass('inactive');
					})
					.on('jcarouselcontrol:inactive', function() {
						$(this).addClass('inactive');
					})
					.jcarouselControl({
						target: '-=1'
					});

			$('.jcarousel-control-next')
					.on('jcarouselcontrol:active', function() {
						$(this).removeClass('inactive');
					})
					.on('jcarouselcontrol:inactive', function() {
						$(this).addClass('inactive');
					})
					.on('click', function(e) {
						e.preventDefault();
					})
					.jcarouselControl({
						target: '+=1'
					});

			$('.jcarousel-pagination')
					.on('jcarouselpagination:active', 'a', function() {
						$(this).addClass('active');
					})
					.on('jcarouselpagination:inactive', 'a', function() {
						$(this).removeClass('active');
					})
					.on('click', function(e) {
						e.preventDefault();
					})
					.jcarouselPagination({
						item: function(page) {
							return '<a href="#' + page + '">' + page + '</a>';
						}
					});
		});
	</script>
</body>
</html>
