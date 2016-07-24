
<!DOCTYPE html">
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    
    <link rel="stylesheet" href="css/style.css">
    <title>Devis - Ecoplaster</title>
    
	<script type="text/javascript" src="//code.jquery.com/jquery-3.0.0.min.js"></script>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    
  </head>   
   



<script>
	function hide(id)  {
		document.getElementById(id).style.display='none';
	}

	function show(id){
		document.getElementById(id).style.display='table-row';
	}

	function menufacade(){ 
		var nbrFacade = $('Nombre_de_facades').val();
		for(i=1;i<=nbrFacade;i++){
			var facadeId ='facade'+i;
			$('#'+facadeId).show();
		}
		for(i=8;i>nbrFacade;i--){
			var facadeId ='facade'+i;
			$('#'+facadeId).hide();
		}
	}
</script>



<div id="facades" style="display: table-row;">
	<div class="title">Description des fa&ccedil;ades</div>
	<table>
		<tbody>
			<tr>
				<td class="PBStatic">Nombre de fa&ccedil;ades :</td>
				<td><select name="Nombre_de_facades" onchange="menufacade();" id="Nombre_de_facades">
						 <option value="1">1</option>
						 <option value="2">2</option>
						 <option value="3">3</option>
						 <option value="4">4</option>
						 <option value="5">5</option>
						 <option value="6">6</option>
						 <option value="7">7</option>
						 <option value="8">8</option>
					</select>
				</td>
			</tr>
			<tr>
			<td></td>
			<td class="PBStatic-facade">Type de fa&ccedil;ade</td>
		</tr>
		<tr id="facade1">
			<td rowspan="2" class="PBStatic">Fa&ccedil;ade 1 :</td>
			<td>Pignon : non <input id="facade_avec_pignon_1" name="facade_avec_pignon_1" value="non" checked="checked" onclick="hide('pignon1');" type="radio"> oui <input id="facade_avec_pignon_1" name="facade_avec_pignon_1" value="oui" onclick="show('pignon1');" type="radio"></td>
			<td>Largeur : <input size="5px" id="Largeur_facade_1" name="Largeur_facade_1" value="0" onfocus="if(this.value=='0')this.value=''" type="text"></td>
			<td>Hauteur : <input size="5px" id="Hauteur_facade_1" name="Hauteur_facade_1" value="0" onfocus="if(this.value=='0')this.value=''" type="text"></td>
			<td id="pignon1" style="display: none;">Hauteur pignon : <input size="5px" id="Hauteur_pignon_1" name="Hauteur_pignon_1" value="0" onfocus="if(this.value=='0')this.value=''" type="text"></td>
		</tr>
		
		
		<tr id="facade2" style="display: none;">
			<td rowspan="2" class="PBStatic">Fa&ccedil;ade 2 :</td>
			<td>Pignon : non <input id="facade_avec_pignon_2" name="facade_avec_pignon_2" value="non" checked="checked" onclick="hide('pignon2');" type="radio"> oui <input id="facade_avec_pignon_2" name="facade_avec_pignon_2" value="oui" onclick="show('pignon2');" type="radio"></td>
			<td>Largeur : <input size="5px" id="Largeur_facade_2" name="Largeur_facade_2" value="0" onfocus="if(this.value=='0')this.value=''" type="text"></td>
			<td>Hauteur : <input size="5px" id="Hauteur_facade_2" name="Hauteur_facade_2" value="0" onfocus="if(this.value=='0')this.value=''" type="text"></td>
			<td id="pignon2" style="display: none;">Hauteur pignon : <input size="5px" id="Hauteur_pignon_2" name="Hauteur_pignon_2" value="0" onfocus="if(this.value=='0')this.value=''" type="text"></td>
		</tr>
		
		<tr id="facade3" style="display: none;">
			<td rowspan="2" class="PBStatic">Fa&ccedil;ade 3 :</td>
			<td>Pignon : non <input id="facade_avec_pignon_3" name="facade_avec_pignon_3" value="non" checked="checked" onclick="hide('pignon3');" type="radio"> oui <input id="facade_avec_pignon_3" name="facade_avec_pignon_3" value="oui" onclick="show('pignon3');" type="radio"></td>
			<td>Largeur : <input size="5px" id="Largeur_facade_3" name="Largeur_facade_3" value="0" onfocus="if(this.value=='0')this.value=''" type="text"></td>
			<td>Hauteur : <input size="5px" id="Hauteur_facade_3" name="Hauteur_facade_3" value="0" onfocus="if(this.value=='0')this.value=''" type="text"></td>
			<td id="pignon3" style="display: none;">Hauteur pignon : <input size="5px" id="Hauteur_pignon_3" name="Hauteur_pignon_3" value="0" onfocus="if(this.value=='0')this.value=''" type="text"></td>
		</tr>
		
		<tr id="facade4" style="display: none;">
			<td rowspan="2" class="PBStatic">Fa&ccedil;ade 4 :</td>
			<td>Pignon : non <input id="facade_avec_pignon_4" name="facade_avec_pignon_4" value="non" checked="checked" onclick="hide('pignon4');" type="radio"> oui <input id="facade_avec_pignon_4" name="facade_avec_pignon_4" value="oui" onclick="show('pignon4');" type="radio"></td>
			<td>Largeur : <input size="5px" id="Largeur_facade_4" name="Largeur_facade_4" value="0" onfocus="if(this.value=='0')this.value=''" type="text"></td>
			<td>Hauteur : <input size="5px" id="Hauteur_facade_4" name="Hauteur_facade_4" value="0" onfocus="if(this.value=='0')this.value=''" type="text"></td>
			<td id="pignon4" style="display: none;">Hauteur pignon : <input size="5px" id="Hauteur_pignon_4" name="Hauteur_pignon_4" value="0" onfocus="if(this.value=='0')this.value=''" type="text"></td>
		</tr>
		
		<tr id="facade5" style="display: none;">
			<td rowspan="2" class="PBStatic">Fa&ccedil;ade 5 :</td>
			<td>Pignon : non <input id="facade_avec_pignon_5" name="facade_avec_pignon_5" value="non" checked="checked" onclick="hide('pignon5');" type="radio"> oui <input id="facade_avec_pignon_5" name="facade_avec_pignon_5" value="oui" onclick="show('pignon5');" type="radio"></td>
			<td>Largeur : <input size="5px" id="Largeur_facade_5" name="Largeur_facade_5" value="0" onfocus="if(this.value=='0')this.value=''" type="text"></td>
			<td>Hauteur : <input size="5px" id="Hauteur_facade_5" name="Hauteur_facade_5" value="0" onfocus="if(this.value=='0')this.value=''" type="text"></td>
			<td id="pignon5" style="display: none;">Hauteur pignon : <input size="5px" id="Hauteur_pignon_5" name="Hauteur_pignon_5" value="0" onfocus="if(this.value=='0')this.value=''" type="text"></td>
		</tr>
		
		<tr id="facade6" style="display: none;">
			<td rowspan="2" class="PBStatic">Fa&ccedil;ade 6 :</td>
			<td>Pignon : non <input id="facade_avec_pignon_6" name="facade_avec_pignon_6" value="non" checked="checked" onclick="hide('pignon6');" type="radio"> oui <input id="facade_avec_pignon_6" name="facade_avec_pignon_6" value="oui" onclick="show('pignon6');" type="radio"></td>
			<td>Largeur : <input size="5px" id="Largeur_facade_6" name="Largeur_facade_6" value="0" onfocus="if(this.value=='0')this.value=''" type="text"></td>
			<td>Hauteur : <input size="5px" id="Hauteur_facade_6" name="Hauteur_facade_6" value="0" onfocus="if(this.value=='0')this.value=''" type="text"></td>
			<td id="pignon6" style="display: none;">Hauteur pignon : <input size="5px" id="Hauteur_pignon_6" name="Hauteur_pignon_6" value="0" onfocus="if(this.value=='0')this.value=''" type="text"></td>
		</tr>
		
		<tr id="facade7" style="display: none;">
			<td rowspan="2" class="PBStatic">Fa&ccedil;ade 7 :</td>
			<td>Pignon : non <input id="facade_avec_pignon_7" name="facade_avec_pignon_7" value="non" checked="checked" onclick="hide('pignon7');" type="radio"> oui <input id="facade_avec_pignon_7" name="facade_avec_pignon_7" value="oui" onclick="show('pignon7');" type="radio"></td>
			<td>Largeur : <input size="5px" id="Largeur_facade_7" name="Largeur_facade_7" value="0" onfocus="if(this.value=='0')this.value=''" type="text"></td>
			<td>Hauteur : <input size="5px" id="Hauteur_facade_7" name="Hauteur_facade_7" value="0" onfocus="if(this.value=='0')this.value=''" type="text"></td>
			<td id="pignon7" style="display: none;">Hauteur pignon : <input size="5px" id="Hauteur_pignon_7" name="Hauteur_pignon_7" value="0" onfocus="if(this.value=='0')this.value=''" type="text"></td>
		</tr>
		
		<tr id="facade8" style="display: none;">
			<td rowspan="2" class="PBStatic">Fa&ccedil;ade 8 :</td>
			<td>Pignon : non <input id="facade_avec_pignon_8" name="facade_avec_pignon_8" value="non" checked="checked" onclick="hide('pignon8');cleart('Hauteur_pignon_8');" type="radio"> oui <input id="facade_avec_pignon_8" name="facade_avec_pignon_8" value="oui" onclick="show('pignon8');" type="radio"></td>
			<td>Largeur : <input size="5px" id="Largeur_facade_8" name="Largeur_facade_8" value="0" onfocus="if(this.value=='0')this.value=''" type="text"></td>
			<td>Hauteur : <input size="5px" id="Hauteur_facade_8" name="Hauteur_facade_8" value="0" onfocus="if(this.value=='0')this.value=''" type="text"></td>
			<td id="pignon8" style="display: none;">Hauteur pignon : <input size="5px" id="Hauteur_pignon_8" name="Hauteur_pignon_8" value="0" onfocus="if(this.value=='0')this.value=''" type="text"></td>
		</tr>
		
		<tr id="boutonsurface" style="display: table-row">
			<td colspan="3"><input value="calculer de la surface totale" onclick="show('infostravaux');show('zonesurfacetotale');calculSurface();" type="button"></td>
		</tr>
		<tr id="zonesurfacetotale" style="display: none;" align="right">
			<td colspan="8">Surface totale des fa&ccedil;ades à
			traiter : <input id="Surface_totale" name="Surface_totale" value="0" size="5px" type="text"> m<sup>2</sup></td>
		</tr>
	</tbody>
</table>
</div>
		  
</html>
