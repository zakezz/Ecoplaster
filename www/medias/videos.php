<?php
	$video_ici = (isset($_GET['id']) and is_numeric($_GET['id'])) ? $_GET['id'] : '1';
	$videos_titres = array(1=>
		'1. Introduction',
		'2. Préparation du chantier',
		'3. Pose de l\'isolant et des profilés',
		'4. Pose des couches d\'enduit et de l\'armature',
		'5. Document de référence (architectes)');
	$videos_url = array(1=>'AU4PrNrjjyA','QJsTbo64dpQ','1z9nL6icMDM','J3Haw6MFJIY','UT8kROr-tC0');

		
	foreach ($videos_titres as $key => $value) {
		$lista[] = '<div style="float:left;width:90%;margin:10px"><img src="https://i.ytimg.com/vi/'.$videos_url[$key].'/1.jpg"  style="float:left;margin-right:10px;border: solid 1px"><br /><a href="'.NDD.'crepis-isolation-devis-videos.php?id='.$key.'">'.$value.'</a></div>';
	}
	$windex = '

	<div class="content-wrapper">
		<div class="content">
			<div class="teaser2-box">
				<h2>Liste des vid&eacute;os</h2>
				<h3>'.$videos_titres[$video_ici].'</h3>
				<div style="width:100%;text-align:center">
					<iframe width="480" height="360" src="https://www.youtube.com/embed/'.$videos_url[$video_ici].'?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				</div>
				<div style="overflow:auto">
					'.implode('', $lista).'
				</div>
			</div>
		</div>
	</div>
			';
?>