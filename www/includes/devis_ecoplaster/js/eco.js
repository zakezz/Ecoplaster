
/*Remplace les nombre à virgule entre par des points*/
function virgule(string){
		if(string !='')
		{
			return string.replace(',', '.');
		}	
	return string;
}

/*cache l'élément*/
function hide(id)  {
	document.getElementById(id).style.display='none';
}

/*affiche l'élément*/
function show(id){
	document.getElementById(id).style.display='table-row';
}

/*affichage des façades*/
function menufacade(){ 
	var nbrFacade = $('#Nombre_de_facades').val();
	
	for(i=1;i<=nbrFacade;i++){
		var facadeId ='facade'+i;
		$('#'+facadeId).show();
	}
	for(i=8;i>nbrFacade;i--){
		var facadeId ='facade'+i;
		$('#'+facadeId).hide();
	}
}

/*Calcul des surfaces totales*/
function calculSurface() {
	var total = 0;
	// taille fenetre 1m² porte 2m² pfenetre 4m² pgarage 10m²
	var NbrFenetre = $("#NombreFenetre").val()*1;
	var NbrPorte = $("#NombrePorte").val()*2;
	var NbrPFenetre = $("#NombrePFenetre").val()*4;
	var NbrPgarage = $("#NombrePgarage").val()*10;
	var Surface_Totale =0;
	var Surface_a_reduire =Math.round((NbrFenetre + NbrPorte + NbrPFenetre + NbrPgarage));
	var Prixm2 = 97;
	
	
	for(i=1;i<=8;i++){
		var totalSurface = 0;
		var pignonId ='facade_avec_pignon_'+i;
		var largeurId ='Largeur_facade_'+i;
		var hauteurId ='Hauteur_facade_'+i;
		var hauteurPignonId ='Hauteur_pignon_'+i;
		var surfaceTotal ='surface_facade_'+i;
		
		if($('input[type=radio][name='+pignonId+']:checked').val()=="oui"){
			
			if(virgule($("#"+largeurId).val()) != 0 && virgule($("#"+hauteurId).val()) != 0){
				var hauteurPignon = virgule($("#"+hauteurPignonId).val())*1;
				var largeur = virgule($("#"+largeurId).val())*1;
				var hauteur = virgule($("#"+hauteurId).val())*1;
				totalSurface = largeur * ((hauteur+hauteurPignon)/2);
				}
				
		}else{
			if(virgule($("#"+largeurId).val()) != 0 && virgule($("#"+hauteurId).val()) != 0){
					var largeur = virgule($("#"+largeurId).val())*1;
					var hauteur = virgule($("#"+hauteurId).val())*1;
					totalSurface = largeur * hauteur;
			}
		}
		total = Math.round((total + totalSurface));
	}
	
	
	Surface_Totale = Math.round((total - Surface_a_reduire));
	
	$("#Surface_totale").val(Surface_Totale);
	
	$("#Prix_totale").val(Surface_Totale* Prixm2 + (Surface_Totale* Prixm2*0.055));
	
	$("#Aide").val(Math.round(Surface_Totale* Prixm2 * 0.3));
	
	
	$("#zonesurfacetotale").show("blind", 500);	
	
}


		
/*vérification d'une adresse email valide*/
function checkEmail(emailVal) {
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (!filter.test(emailVal)) {
		alert('Votre adresse email est invalide');
		return false;
	} else {
		return true;
	}
}

/* 
$(function(){
	$('#images').MultiFile({
		accept:'gif|jpg|GIF|JPG|jpeg|png|PNG|PDF|pdf|JPEG', max:4, STRING:{
			remove:'Supprimer',
			selected:'Selectionnez: $file',
			denied:'Le format est invalide $ext!',
			duplicate:'Vous avez dèjà uploader cette image:\n$file!'
			}
	});
	});*/


