

		<br />	

		<table>
			<tr>
				<td>Nombre de fa&ccedil;ades :</td>
				<td><select name="Nombre_de_facades" onchange="menufacade();" id="Nombre_de_facades">
					 <option value="1">1</option>
					 <option value="2">2</option>
					 <option value="3">3</option>
					 <option value="4">4</option>
					 <option value="5">5</option>
					 <option value="6">6</option>
					 <option value="7">7</option>
					 <option value="8">8</option>
   				</select></td>
			</tr>
			
			
			<tr>
            	<td></td>
			</tr>
			
			
			<tr id="facade1">
				<td rowspan="2">Fa&ccedil;ade 1 :</td>
				<td>Pignon : non <input type="radio"
					id="facade_avec_pignon_1" name="facade_avec_pignon_1"
					value="non" checked="checked" onclick="hide('pignon1');"/> oui <input type="radio" id="facade_avec_pignon_1"
					name="facade_avec_pignon_1" value="oui"
					onclick="show('pignon1');"/></td>
				<td>Largeur : <input type="text" size="5px"
					id="Largeur_facade_1" name="Largeur_facade_1" value="0" onFocus="if(this.value=='0')this.value=''"/></td>
				<td>Hauteur : <input type="text" size="5px"
					id="Hauteur_facade_1" name="Hauteur_facade_1" value="0" onFocus="if(this.value=='0')this.value=''"/></td>
				<td id="pignon1" style="display: none;">Hauteur pignon : <input
					type="text" size="5px" id="Hauteur_pignon_1"
					name="Hauteur_pignon_1" value="0" onFocus="if(this.value=='0')this.value=''"/></td>
			</tr>
			<tr></tr>
			
			<tr id="facade2" style="display: none;">
				<td rowspan="2">Fa&ccedil;ade 2 :</td>
				<td>Pignon : non <input type="radio"
					id="facade_avec_pignon_2" name="facade_avec_pignon_2"
					value="non" checked="checked" onclick="hide('pignon2');"/> oui <input type="radio" id="facade_avec_pignon_2"
					name="facade_avec_pignon_2" value="oui"
					onclick="show('pignon2');"/></td>
				<td>Largeur : <input type="text" size="5px"
					id="Largeur_facade_2" name="Largeur_facade_2" value="0" onFocus="if(this.value=='0')this.value=''"/></td>
				<td>Hauteur : <input type="text" size="5px"
					id="Hauteur_facade_2" name="Hauteur_facade_2" value="0" onFocus="if(this.value=='0')this.value=''"/></td>
				<td id="pignon2" style="display: none;">Hauteur pignon : <input type="text" size="5px" id="Hauteur_pignon_2"
					name="Hauteur_pignon_2" value="0" onFocus="if(this.value=='0')this.value=''"/></td>
			</tr>
			<tr></tr>
			
			<tr id="facade3" style="display: none;">
				<td rowspan="2">Fa&ccedil;ade 3 :</td>
				<td>Pignon : non <input type="radio"
					id="facade_avec_pignon_3" name="facade_avec_pignon_3"
					value="non" checked="checked" onclick="hide('pignon3');"/> oui <input type="radio" id="facade_avec_pignon_3"
					name="facade_avec_pignon_3" value="oui"
					onclick="show('pignon3');"/></td>
				<td>Largeur : <input type="text" size="5px"
					id="Largeur_facade_3" name="Largeur_facade_3" value="0" onFocus="if(this.value=='0')this.value=''"/></td>
				<td>Hauteur : <input type="text" size="5px"
					id="Hauteur_facade_3" name="Hauteur_facade_3" value="0" onFocus="if(this.value=='0')this.value=''"/></td>
				<td id="pignon3" style="display: none;">Hauteur pignon : <input
					type="text" size="5px" id="Hauteur_pignon_3"
					name="Hauteur_pignon_3" value="0" onFocus="if(this.value=='0')this.value=''"/></td>
			</tr>
			<tr></tr>
			
			<tr id="facade4" style="display: none;">
				<td rowspan="2">Fa&ccedil;ade 4 :</td>
				<td>Pignon : non <input type="radio"
					id="facade_avec_pignon_4" name="facade_avec_pignon_4"
					value="non" checked="checked" onclick="hide('pignon4');"/> oui <input type="radio" id="facade_avec_pignon_4"
					name="facade_avec_pignon_4" value="oui"
					onclick="show('pignon4');"/></td>
				<td>Largeur : <input type="text" size="5px"
					id="Largeur_facade_4" name="Largeur_facade_4"
					value="0" onFocus="if(this.value=='0')this.value=''"/></td>
				<td>Hauteur : <input type="text" size="5px"
					id="Hauteur_facade_4" name="Hauteur_facade_4" value="0" onFocus="if(this.value=='0')this.value=''"/></td>
				<td id="pignon4" style="display: none;">Hauteur pignon : <input
					type="text" size="5px" id="Hauteur_pignon_4"
					name="Hauteur_pignon_4" value="0" onFocus="if(this.value=='0')this.value=''"/></td>
			</tr>
			<tr></tr>
			
			<tr id="facade5" style="display: none;">
				<td rowspan="2">Fa&ccedil;ade 5 :</td>
				<td>Pignon : non <input type="radio"
					id="facade_avec_pignon_5" name="facade_avec_pignon_5"
					value="non" checked="checked" onclick="hide('pignon5');"/> oui <input type="radio" id="facade_avec_pignon_5"
					name="facade_avec_pignon_5" value="oui"
					onclick="show('pignon5');"/></td>
				<td>Largeur : <input type="text" size="5px"
					id="Largeur_facade_5" name="Largeur_facade_5" value="0" onFocus="if(this.value=='0')this.value=''"/></td>
				<td>Hauteur : <input type="text" size="5px"
					id="Hauteur_facade_5" name="Hauteur_facade_5" value="0" onFocus="if(this.value=='0')this.value=''"/></td>
				<td id="pignon5" style="display: none;">Hauteur pignon : <input type="text" size="5px" id="Hauteur_pignon_5"
					name="Hauteur_pignon_5" value="0" onFocus="if(this.value=='0')this.value=''"/></td>
			</tr>
			<tr></tr>
			
			<tr id="facade6" style="display: none;">
				<td rowspan="2">Fa&ccedil;ade 6 :</td>
				<td>Pignon : non <input type="radio"
					id="facade_avec_pignon_6" name="facade_avec_pignon_6"
					value="non" checked="checked" onclick="hide('pignon6');"/> oui <input type="radio" id="facade_avec_pignon_6"
					name="facade_avec_pignon_6" value="oui"
					onclick="show('pignon6');"/></td>
				<td>Largeur : <input type="text" size="5px"
					id="Largeur_facade_6" name="Largeur_facade_6" value="0" onFocus="if(this.value=='0')this.value=''"/></td>
				<td>Hauteur : <input type="text" size="5px"
					id="Hauteur_facade_6" name="Hauteur_facade_6" value="0" onFocus="if(this.value=='0')this.value=''"/></td>
				<td id="pignon6" style="display: none;">Hauteur pignon : <input type="text" size="5px" id="Hauteur_pignon_6"
					name="Hauteur_pignon_6" value="0" onFocus="if(this.value=='0')this.value=''"/></td>
			</tr>
			<tr></tr>
			
			<tr id="facade7" style="display: none;">
				<td rowspan="2">Fa&ccedil;ade 7 :</td>
				<td>Pignon : non <input type="radio"
					id="facade_avec_pignon_7" name="facade_avec_pignon_7"
					value="non" checked="checked" onclick="hide('pignon7');"/> oui <input type="radio" id="facade_avec_pignon_7"
					name="facade_avec_pignon_7" value="oui"
					onclick="show('pignon7');"/></td>
				<td>Largeur : <input type="text" size="5px"
					id="Largeur_facade_7" name="Largeur_facade_7" value="0" onFocus="if(this.value=='0')this.value=''"/></td>
				<td>Hauteur : <input type="text" size="5px"
					id="Hauteur_facade_7" name="Hauteur_facade_7" value="0" onFocus="if(this.value=='0')this.value=''"/></td>
				<td id="pignon7" style="display: none;">Hauteur pignon : <input type="text" size="5px" id="Hauteur_pignon_7"
					name="Hauteur_pignon_7" value="0" onFocus="if(this.value=='0')this.value=''"/></td>
			</tr>
			<tr></tr>
			
			<tr id="facade8" style="display: none;">
				<td rowspan="2">Fa&ccedil;ade 8 :</td>
				<td>Pignon : non <input type="radio"
					id="facade_avec_pignon_8" name="facade_avec_pignon_8"
					value="non" checked="checked"
					onclick="hide('pignon8');"/> oui <input type="radio" id="facade_avec_pignon_8"
					name="facade_avec_pignon_8" value="oui"
					onclick="show('pignon8');"/></td>
				<td>Largeur : <input type="text" size="5px"
					id="Largeur_facade_8" name="Largeur_facade_8" value="0" onFocus="if(this.value=='0')this.value=''"/></td>
				<td>Hauteur : <input type="text" size="5px"
					id="Hauteur_facade_8" name="Hauteur_facade_8" value="0" onFocus="if(this.value=='0')this.value=''"/></td>
				<td id="pignon8" style="display: none;">Hauteur pignon : <input type="text" size="5px" id="Hauteur_pignon_8"
					name="Hauteur_pignon_8" value="0" onFocus="if(this.value=='0')this.value=''"/></td>
			</tr>
			<tr></tr>
		
			
			
			
			<!------------------------------------------------------------------------------------>
			</table>
			<tr id="boutonsurface" style="display: table-row">
				<td colspan="3"><input type="button"
					value="calculer la surface totale des fa&ccedil;ades &agrave; traiter"
					onclick="calculSurface()"/></td>
			</tr>
			
			<div id="zonesurfacetotale"  style="display: none;">
			<tr align="right">
				<br \>
				<td colspan="2">Surface totale des fa&ccedil;ades &agrave;
				traiter : <input type="text" id="Surface_totale" readonly="readonly"
					name="Surface_totale" value="0" size="5px"/> m<sup>2</sup></td>
					
				<br \>
				<td colspan="2">Prix estimatif des travaux TTC sans seuils fenêtres: <input type="text" id="Prix_totale" readonly="readonly"
					name="Prix_totale" value="0" size="5px"/> €</td>
					
				<br \>
				<td colspan="2"><a href="http://www.renovation-info-service.gouv.fr/mes-aides-financieres">Éstimation du crédis d'impots :</a> <input type="text" id="Aide" readonly="readonly"
					name="Aide" value="0" size="5px"/> €</td>
			
			</tr>
			</div>
		
			
			
