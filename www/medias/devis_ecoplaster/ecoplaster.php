

<!DOCTYPE html">
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    
    <link rel="stylesheet" href="css/styledevis.css">
    <title>Devis - Ecoplaster</title>
    
    
     <!-- inclus les feuilles de javascript  --> 
        <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
		<script type="text/javascript" src="js/1.3.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery.ajaxmanager.js"></script>
		<script type="text/javascript" src="js/eco.js"></script>
		<script type="text/javascript" src="js/jquery.MultiFile.js"></script>
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="js/jquery-ui.min.js"></script
    
  </head>
  
  
  
  
  <body>
 
	  <div id="conteneur">    
		<h1 id="header"><a href="#" title="Devis - Ecoplaster"><span>Devis - Ecoplaster</span></a></h1>

<!-------------------->


		<form action="devis-ecoplaster-pdf.php" method="post">
		
		<div id="contenu">  
			<div id="typesprojets">
				<div class="title">Type de projets</div>
						
				<br />
				
				<table>
					<tbody><tr>
						<td align="center">Isolation extérieur</td>
						<td align="center">Isolation intérieur</td>
						<td align="center">Crepis de façade</td>
						<td align="center">Peinture intérieur</td>
						<td align="center">Pose de carrelage</td>						
						</tr>
					<tr>
						<td align="center"><input  id="projets" name="projets" value="isolation exterieur" class="typeprojets" type="radio" checked='checked'></td>
						<td align="center"><input  id="projets" name="projets" value="isolation interieur" class="typeprojets" type="radio"></td>
						<td align="center"><input  id="projets" name="projets" value="crepis" class="typeprojets"  type="radio"></td>
						<td align="center"><input  id="projets" name="projets" value="peinture" class="typeprojets" type="radio"></td>
						<td align="center"><input  id="projets" name="projets" value="carrelage" class="typeprojets" type="radio"></td>
					</tr>
				</tbody></table>
				
				<br />
				<br />
				
			</div>
		  
			<div id="ITE">
				<div class="title">Isolation thermique et acoustique par l'ext&eacute;rieur</div>
				
				<br />
				
				<tr>
				<td class="">Type de construction :</td>
				<td><select name="Typedeconstruction" id="Typedeconstruction">
						 <option value="Parpaing">Parpaing</option>
						 <option value="Brique">Brique</option>
						 <option value="Bois">Bois</option>
						 <option value="Autres">Autres</option>
					</select>
				</td>
				</tr>
				
				<br />
				<br />
			</div>
			
						<div id="Isolant">
				<div class="title">Isolant gris</div>	
				
				<br />
				
				<tr>
				<td>&Eacute;paisseur de l'isolant :</td>
				<td><select name="epaisseur" id="epaisseur_isolant">
						 <option value="6">6</option>
						 <option value="7">7</option>
						 <option value="8">8</option>
						 <option value="9">9</option>
						 <option value="10">10</option>
						 <option value="11">11</option>
						 <option value="12">12</option>
						 <option value="13">13</option>
						 <option value="14">14</option>
						 <option value="15">15</option>
						 <option value="16">16</option>
						 <option value="17">17</option>
						 <option value="18">18</option>
						 <option value="19">19</option>
						 <option value="20">20</option>
						 <option value="21">21</option>
						 <option value="22">22</option>
						 <option value="23">23</option>
						 <option value="24">24</option>
						 <option value="25">25</option>
						 <option value="26">26</option>
						 <option value="27">27</option>
						 <option value="28">28</option>
						 <option value="29">29</option>
						 <option value="30">30</option>
					</select>
				</td>
			</tr>
				<br />
				<br />
				<br />
			</div>
			
			<div>	
				<tr>
				<td>Nombres de :</td>
				<td>Fen&ecirc;tre(s) </td>
				<td><select name="NombreFenetre" id="NombreFenetre">
						 <option value="0" selected='selected'>0</option>
						 <option value="1">1</option>
						 <option value="2">2</option>
						 <option value="3">3</option>
						 <option value="4">4</option>
						 <option value="5">5</option>
						 <option value="6">6</option>
						 <option value="7">7</option>
						 <option value="8">8</option>
						 <option value="9">9</option>
					</select>
				</td>
				
				<td>Porte(s) </td>
				<td><select name="NombrePorte" id="NombrePorte">
						 <option value="0" selected='selected'>0</option>
						 <option value="1">1</option>
						 <option value="2">2</option>
						 <option value="3">3</option>
						 <option value="4">4</option>
						 <option value="5">5</option>
						 <option value="6">6</option>
						 <option value="7">7</option>
						 <option value="8">8</option>
						 <option value="9">9</option>
					</select>
				</td>
				
				
				<td>Porte fen&ecirc;tre </td>
				<td><select name="NombrePFenetre" id="NombrePFenetre">
						 <option value="0" selected='selected'>0</option>
						 <option value="1">1</option>
						 <option value="2">2</option>
						 <option value="3">3</option>
						 <option value="4">4</option>
						 <option value="5">5</option>
					</select>
				</td>
				
				<td>Porte garage </td>
				<td><select name="NombrePgarage" id="NombrePgarage">
						 <option value="0" selected='selected'>0</option>
						 <option value="1">1</option>
						 <option value="2">2</option>
						 <option value="3">3</option>
						 <option value="4">4</option>
						 <option value="5">5</option>
					</select>
				</td>
				
				</tr>
				<br />
				<br />
				<br />
				
			</div>
			
			<div id="Typefacade">
				<div class="title">Type de façade</div>	
				<?php include("menu-facade.php"); ?>
				<br />
				<br />
				<br />
				
			</div>
		

		 
			<div id="impression" style="display: block;">

				<input type="button" value="Imprimer/Prévisualiser" onclick="show('information_personnel'); hide('impression');">   <input type="button" value="Recevoir le devis par mail" onclick="show('information_personnel'); hide('impression');">
				<br />	

			</div> 
		 
			<div id="information_personnel" style="display: none;">
				<div class ="title">Information personnel</div>				
				
				<br /><br />
					
				<fieldset>	
						<label for="status">Statut :</label>
						<input  id="monsieur"  name="status" value="M" type="radio" checked='checked'>M
						<input  id="madame"  name="status" value="Mme"  type="radio">Mme<br /> 
						
							<label for="nom">Nom - Prenom : <span class="text_red">*</span></label>
							<input type="text" name="nom-prenom" required /><br />
				
							<label for="adresse">Adresse : <span class="text_red">*</span></label>
							<input type="text" name="adresse" required /><br />
							
							<label for="ville">Ville : <span class="text_red">*</span></label>
							<input type="text" name="ville" required /><br />
						
							<label for="cp">Code postal : <span class="text_red">*</span></label>
							<input type="text" name="CP" required /><br />
							
							<label for="email">email : <span class="text_red">*</span></label>
							<input type="text" name="email" required /><br />
							
							<label for="phone">T&eacute;l&eacute;phone : <span class="text_red">*</span></label>
							<input type="text" name="phone" size="13" required /><br />
						
					
				</fieldset>	
			

				<p class="infos_obligatoires">
					<span class="text_red">*</span> Informations obligatoires
				</p>

					<input type="submit" value="Imprimer/Prévisualiser">   <input type="submit" value="Recevoir le devis par mail" id="recevoir_mail" onclick="myFunction()">
					
					<script>
						function myFunction() {
							alert("Merci d'avoir choisis nos service. \nun mail avec votre pré-devis vous a été envoyer.\npar sécurité vérifier vos spam.\n");
							//location.href = 'devis-ecoplaster-pdf.php';
						}
					</script>
					
				<br />
				
			</div>
			</form>
		</div>
	  </div>  
  </body>
</html>

