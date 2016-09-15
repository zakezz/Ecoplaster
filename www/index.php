<?php
	// ob_start("ob_gzhandler");
// session
	// session_start();
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// pc ou tablette
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	$type_pc = (stristr($user_agent, "iPhone")  || strpos($user_agent, "iPad") || strpos($user_agent, "iPod") || strpos($user_agent, "Android") ) ? false: true;
	// $type_pc = false;
// init
	if($_SERVER["SERVER_NAME"] == 'localhost'){
		define ('NDD','http://localhost/');
	}elseif($_SERVER["SERVER_NAME"] == '192.168.1.61'){
		define ('NDD','http://192.168.1.61/');
	}else{
		define ('NDD','http://www.ecoplaster.fr/');
	}

	$lurl1_0   = $_SERVER['REQUEST_URI'];
	$lurl1     = str_replace(array('isly-web.fr/essai/'),'', $lurl1_0);
	$lurl2     = explode('/', $lurl1);
	// $ttl_lurl2 = count($lurl2);

// page contenu

		if($lurl2[1] == 'crepis-isolation-devis-qui-sommes-nous.php') 	$page_ici = 'qui-sommes-nous';
	elseif($lurl2[1] == 'crepis-isolation-devis-nous-contacter.php') 	$page_ici = 'nous-contacter';
	elseif($lurl2[1] == 'crepis-isolation-devis-produits.php') 			$page_ici = 'produits';
	elseif($lurl2[1] == 'crepis-isolation-devis-videos.php' or isset($_GET['id'])) 			$page_ici = 'videos';
	elseif($lurl2[1] == 'crepis-isolation-devis-devis-en-ligne.php') 	$page_ici = 'devis_ecoplaster/iframe_devis';
	elseif($lurl2[1] == 'crepis-isolation-devis-primes.php') 			$page_ici = 'primes';
	elseif($lurl2[1] == 'crepis-isolation-devis-garanties.php') 		$page_ici = 'garanties';
	elseif($lurl2[1] == 'galerie.php' or isset($_GET['id_album'])) 									$page_ici = 'galerie';

	elseif($lurl2[1] == 'crepis-isolation-devis-dessins-techniques.php')$page_ici = 'dessins-techniques';
	elseif($lurl2[1] == 'crepis-isolation-devis-fiches-techniques.php') $page_ici = 'fiches-techniques';
	else 																$page_ici = 'index';


	require ('medias/'.$page_ici.'.php');

// titre et description
	require_once('medias/windex.php');
?>
