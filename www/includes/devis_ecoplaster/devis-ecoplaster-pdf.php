

<?php

//Connexion à la BDD
include("bdd-ecoplaster.php");



include("phpToPDF.php");

$PDF=new phpToPDF();
$PDF->AddPage();
 
 
 // Page header

    // Logo
    $PDF->Image('images_devis/ecoplaster_top.png',35,20,120);
    $PDF->Image('images_devis/icon_Qualibat.png',165,12,20);
    
    // Position du curseur
    $PDF->SetXY(15,50);
    
    // Arial 
    $PDF->SetFont('Arial','',10);
    
    // entete
$PDF->MultiCell(30,4,utf8_decode("Date du devis
Numéro de client
Emis par
Validité du devis"), 0,'R');
    
$date = date('d/m/Y');    
$numclient =$donnees['MAX(id_client)'];
    
    // Position du curseur
$PDF->SetXY(70,50);
    // entete
$PDF->MultiCell(30,4,"$date
$numclient
ECOPLASTER
90 jours", 0,'R');

$nom=$_POST['nom-prenom'];
$adresse="9 allee du petit merisier";
$ville="Goussainville";
$cp=$_POST['CP'];
//Destinataire
$PDF->SetXY(135,40);
$PDF->SetFont('Arial','B',10);
$PDF->MultiCell(0,4,"Destinataire :", 0,'L');
$PDF->SetXY(135,45);
$PDF->SetFont('Arial','',10);
$PDF->MultiCell(30,4,utf8_decode("$nom
$adresse
$ville
$cp
France"), 0,'L');


// Information
$PDF->SetXY(10,75);
$PDF->SetFont('Arial','B',10);
$PDF->MultiCell(0,4,"Informations                                                                                                       Contact", 0,'L');

$PDF->SetXY(10,80);
$PDF->SetFont('Arial','',10);
$PDF->MultiCell(0,4,utf8_decode("Merci d'avoir choisi Ecoplaster pour nos services.
Service Après Vente : Garantie 10 ans."), 0,'L');

$PDF->SetXY(132,80);
$PDF->SetFont('Arial','',10);
$PDF->MultiCell(0,4,utf8_decode("Adéla KISTAS, Commerciale France
Tel: 09 52 45 54 60
email : ak@ecoplaster.fr"), 0,'L');
    
    // Line break
    $PDF->Ln(30);

// Définition des propriétés du tableau.
$proprietesTableau = array(
	'TB_ALIGN' => 'L',
	'L_MARGIN' => 3,
	'BRD_COLOR' => array(0,0,0),
	'BRD_SIZE' => '0.3',
	);

// Définition des propriétés du header du tableau.	
$proprieteHeader = array(
	'T_COLOR' => array(0,0,0),
	'T_SIZE' => 10,
	'T_FONT' => 'Arial',
	'T_ALIGN' => 'C',
	'V_ALIGN' => 'T',
	'T_TYPE' => 'B',
	'LN_SIZE' => 5,
	'BG_COLOR_COL0' => array(215, 228, 188),
	'BG_COLOR' => array(215, 228, 188),
	'BRD_COLOR' => array(0,0,0),
	'BRD_SIZE' => 0.1,
	'BRD_TYPE' => '1',
	'BRD_TYPE_NEW_PAGE' => '',
	);

// Contenu du header du tableau.	
$contenuHeader = array(
	100, 20, 15, 30, 20,
	"[B]Description",utf8_decode("[BC]Quantité"), utf8_decode("[BC]Unité"), "[BC]Prix unitaire HT", "[BC]Total HT",
	);

// Définition des propriétés du reste du contenu du tableau.	
$proprieteContenu = array(
	'T_COLOR' => array(0,0,0),
	'T_SIZE' => 9,
	'T_FONT' => 'helvetica',
	'T_ALIGN_COL0' => 'L',
	'T_ALIGN' => 'C',
	'V_ALIGN' => 'M',
	'T_TYPE' => '',
	'LN_SIZE' => 3,
	'BG_COLOR_COL0' => array(255,255,255),
	'BG_COLOR' => array(255,255,255),
	'BRD_COLOR' => array(0,0,0),
	'BRD_SIZE' => 0.1,
	'BRD_TYPE' => 'L,R',
	'BRD_TYPE_NEW_PAGE' => '',
	);	

//recuperation des données
$surface=$_POST['Surface_totale'];
$echaffaudage=10;
$totalITE = 95*$surface;
$totalEchaffaudage = 9*$echaffaudage;
$seuil=$_POST['NombreFenetre'];
$totalSeuil = 115*$seuil;
$Totalht=$totalSeuil+$totalEchaffaudage+$totalITE;
$TVA=$Totalht*0.055;
$virgule=round(fmod($TVA,1) * 1000);
$TVA=$TVA-(0.001*$virgule);
$TotalTTC=$TVA+$Totalht;

//sigle €
$euro = chr(128);

// Contenu du tableau.	
$contenuTableau = array(
	utf8_decode("
	Complexe ITE complet:
- Mise en place d'une solution ITE (Isolation
Thermique Extérieure)sur l'ensemble de la
surface reprise dans ce poste.
- Finition contemporaine avec grain fin : 1,5 mm
- Détails : sur isolant 14cm en R = 4,3 (résistance thermique)"), "[C]".$surface , utf8_decode("[C]m²"), "[C]95,00 $euro", "[C]".$totalITE.",00 $euro",

"","","","","",
"","","","","",


utf8_decode("
Installation échafaudage:
-Mise en place d'un échafaudage tubulaire d'accès
conforme aux normes R.G.P.T. sur la surface
de travail le nécessitant (surface tenant
compte des facteurs tels que les débordements
pour raccords, montages de passerelles etc...).
- Pour les deux pignons."), "[C]".$echaffaudage, utf8_decode("[C]m²"), "[C]9,00 $euro", "[C]".$totalEchaffaudage.",00 $euro",

"","","","","",
"","","","","",


utf8_decode("
Fourniture et pose de seuil en aluminium
teinté dans le RAL de votre choix."), "[C]".$seuil, utf8_decode("[C]pièce"), "[C]115,00 $euro", "[C]".$totalSeuil.",00 $euro",
"","","","","",
"","","","","",
"","","","","",

	);	
 
// D'abord le PDF, puis les propriétés globales du tableau. 
// Ensuite, le header du tableau (propriétés et données) puis le contenu (propriétés et données)
$PDF->drawTableau($PDF, $proprietesTableau, $proprieteHeader, $contenuHeader, $proprieteContenu, $contenuTableau);

// Position du curseur
    $PDF->SetXY(133,210);
// Arial 
	$PDF->SetFont('Arial','B',9);
// Total
	$PDF->MultiCell(0,4,"Total HT
TVA (5,5%)", 'B','L');


$PDF->SetFont('Arial','',9);
$PDF->SetXY(163,210);
$PDF->MultiCell(0,4,"$Totalht,00 $euro
$TVA".","."$virgule $euro", 'B','R');  


$PDF->SetFillColor(204, 204, 204);
$PDF->SetXY(133,220);
$PDF->SetFont('Arial','B',9);
$PDF->MultiCell(0,4,"Total TTC", 0,'L', true);  
$PDF->SetXY(163,220);
$PDF->SetFont('Arial','B',9);
$PDF->MultiCell(0,4,$TotalTTC.",".$virgule." $euro", 0,'R', true);  


// Page footer
    // détail bancaire
    $PDF->Image('images_devis/ecoplaster_bottom_fr.png',20,250,170);


// enregistre le document dans le répertoire local du serveur.    
$PDF->Output("devis_clients/".$numclient."_devis_ecoplaster.pdf",'F');

?>
<!DOCTYPE html">
<html lang="fr">
<meta charset="utf-8" />
	
<?php
echo '
	<iframe id="pagepdf" src="" width="100%" height="100%">
	[Your browser does <em>not</em> support <code>iframe</code>,
	or has been configured not to display inline frames.
	You can access <a href="./test.PDF">the document</a>
	via a link though.]</iframe>
';


// On ajoute un nouveau client dans client_ecoplaster

$bdd->exec('UPDATE Clients_eco SET lien_devis= \'devis_clients/'.$numclient.'_devis_ecoplaster.pdf\'  WHERE id_client = \''.$numclient.'\'');
$req->closeCursor();
?>

<script>
	/*le < ? = $ variablephp ? >  permet d'introduire la valeur de la variable*/
    document.getElementById("pagepdf").src ="devis_clients/"+<?=$numclient;?>+"_devis_ecoplaster.pdf";
</script>

</html>
