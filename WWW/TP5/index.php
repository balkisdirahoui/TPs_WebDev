<html>
    <meta charset="utf-8"
  
  
  <head> 
        <title>Mes d&eacute;buts avec la Programmation Web</title>
  </head>
  
  
  <body topmargin="80" leftmargin="50" bgcolor="grey" text="navy" 
  
  background="Images/fond.jpg" bgproperties="fixed" >

					
	<div align="center" >
		<table border=3px bordercolor="orange" bgcolor="white" width=800px margin=0px  cellspacing=0px >
			<td style="border:none;">
				<h1 align="center">
					<font size="5" color="orange"> <b>Fiche de voeux</b> </font>
				</h1>
			</td>
		  <tr>	
		   	
			<td style="border:none;">
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					 <table border=0px  bgcolor="white" width=100% cellspacing=5px cellpadding=6px>
                       <!--Premiere ligne du tableau-->
						<tr>
							<!-- Premiere cellule-->
							<th align="right" width=40% >Nom 
							
							<!-- Deuxieme cellule-->
							<td align="center" width=10%>:</td>
							
							<!-- Troisieme cellule-->
							<td align="left" width=40%> <input type="text" name="nom">							
						</tr>
						
						
				        <!--Deuxieme ligne du tableau-->
						<tr>
							<!-- Premiere cellule-->
							<th align="right" width=40% >Pr&eacute;nom 
							
							<!-- Deuxieme cellule-->
							<td align="center" width=10%>:</td>
							
							<!-- Troisieme cellule-->
							<td align="left" width=40%> <input type="text" name="prenom">
						</tr>
						
						
						<!--Troisieme ligne du tableau-->
						<tr>
							<!-- Premiere cellule-->
							<th align="right" width=40% >Date de naissance 
							
							<!-- Deuxieme cellule-->
							<td align="center" width=10%>:</td>
							
							<!-- Troisieme cellule-->
							<td align="left" width=40%> <input type="text" name="dateN" >
						</tr>
						
						
						<!--Quatrieme ligne du tableau-->
						<tr>
							<!-- Premiere cellule-->
							<th align="right" width=40% >N° de téléphone 
							
							<!-- Deuxieme cellule-->
							<td align="center" width=10%>:</td>
							
							<!-- Troisieme cellule-->
							<td align="left" width=40%> <input type="text" name="tel" >
						</tr>
						
						
						<!--Cinquieme ligne du tableau-->
						<tr>
							<!-- Premiere cellule-->
							<th align="right" width=40% >Adresse 
							
							<!-- Deuxieme cellule-->
							<td align="center" width=10%>:</td>
							
							<!-- Troisieme cellule-->
							<td align="left" width=40%> <textarea name="adresse" > </textarea>
						</tr>
						
						
						<!--Sixieme ligne du tableau-->
						<tr>
							<!-- Premiere cellule-->
							<th align="right" width=40% >Genre 
							
							<!-- Deuxieme cellule-->
							<td align="center" width=10%>:</td>
							
							<!-- Troisieme cellule-->
							<td align="left" width=40%> 
								<input type="radio" name="genre" value="féminin"> 
								<label for="féminin">F&eacute;minin</label><br>
								<input type="radio" name="genre" value="masculin"> 
								<label for="masculin">Masculin</label>
						</tr>
						
						
						<!--Septieme ligne du tableau-->
						<tr>
							<!-- Premiere cellule-->
							<th align="right" width=40% >Civilit&eacute; 
							
							<!-- Deuxieme cellule-->
							<td align="center" width=10%>:</td>
							
							<!-- Troisieme cellule-->
							<td align="left" width=40%> 
								<input type="radio" name="civilité" value="célibataire" checked> 
								<label for="célibataire">C&eacute;libataire</label><br>
								<input type="radio" name="civilité" value="marié"> 
								<label for="marié">Mari&eacute;</label>
						</tr>
						
						
						
						<!--Huitieme ligne du tableau-->
						<tr>
							<!-- Premiere cellule-->
							<th align="right" width=40% >Choix 
							
							<!-- Deuxieme cellule-->
							<td align="center" width=10%>:</td>
							
							<!-- Troisieme cellule-->
							<td align="left" width=40%> 
								<select  id="choix" name="choix[]" size=6   multiple>
								  <option value=""   ></option>
								  <option value="MI/USTHB">MI / USTHB</option>
								  <option value="INFORMATIQUE/ESI">INFORMATIQUE / ESI</option>
								  <option value="ST/USTHB">ST / USTHB </option>
								  <option value="INFORMATIQUE/BOUMERDES">INFORMATIQUE / BOUMERDES</option>
								  <option value="MI/ALGER1">MI / Universit&eacute; d'Alger 1</option>
								</select>	
						</tr>
						
						
						<!--Neuvieme ligne du tableau-->
						<tr>
							<!-- Premiere cellule-->
							<th align="right" width=40% >Langues souhait&eacute;es &agrave; l'universit&eacute; 
							
							<!-- Deuxieme cellule-->
							<td align="center" width=10%>:</td>
							
							<!-- Troisieme cellule-->
							<td align="left" width=40%> 
								<!--Tableau [] afin de recuperer ses valeurs dans le fichier php-->
								<input type="checkbox" id="Français" name="Langue[]" value="Français" checked>
								<label for="Français">Fran&ccedil;ais</label><br>
								<input type="checkbox" id="Anglais" name="Langue[]" value="Anglais">
								<label for="Anglais">Anglais</label><br>
								<input type="checkbox" id="Arabe" name="Langue[]" value="Arabe">
								<label for="Arabe">Arabe</label><br>
								<input type="checkbox" id="Aucune Préférence" name="Langue[]" value="Aucune Préférence">
								<label for="Aucune Préférence">Aucune Pr&eacute;f&eacute;rence</label>								
						</tr>
						
						
						<!--Dixieme ligne du tableau-->
						<tr>
							<!-- Premiere cellule-->
							<th align="right" width=40% >Lettre de motivation 
							
							<!-- Deuxieme cellule-->
							<td align="center" width=10%>:</td>
							
							<!-- Troisieme cellule-->
							<td align="left" width=40%> 
								<input type="file" id="lettreMotivation" name="lettreMotivation">
						</tr>
						
						
						<!--Onzieme ligne du tableau-->
						<tr >
							
							<!-- Premiere cellule-->
							<td align="center" colspan="3"> 
								<input type="submit" name="submit" value="Sauvegarder"> 
								&nbsp;&nbsp;&nbsp;
								<input type="reset" value="Annuler">
						</tr>
						
						
						
					 </table>
					</form>
					
					

		    </td>
	       </tr>
		</table>
	</div>
	
					
	




<!---------------------------------------------reponse------------------------------------------------------->

<?php if(isset($_POST['submit'])){ ?>


	
<div align="center" class ="reponse" >
		
		<table border=3px bordercolor="orange" bgcolor="white" width=800px margin=10px  cellspacing=10px >	
		  <tr>	
		   	
			<td style="border:none;">
			
					<p align="center">
					
					
						Merci d’avoir rempli le formulaire !
						
						<?php
						
							if ( strcmp ( $_POST['genre'] , "féminin" ) != 0)
							{
								echo 'Mr ';
							}
							else
							{
								if ( strcmp ( $_POST['civilité'] , "célibataire" ) == 0)
								{
									echo 'Melle ';
								}
								else
									echo 'Mme ';
							}
							echo $_POST['nom'];
						
						?>
					</p>
						

		    </td>
	       </tr>
		</table>
		<br>
		<br>

				<?php
					function age($dateN)
						{
							//transformer la date de naissance dans le bon format
							$dateNais = str_replace('/', '-', $dateN);
							$dateNais = date("Y-m-d", strtotime($dateNais));
							$dateNais = new DateTime($dateNais); //convertir en DateTime pour que date_diff puisse l'analyser correctement
							
							//obtenir la date système 
							$date_sys = new DateTime(); //faire appel a DateTime et non pas date pour que date_diff puisse l'analyser correctement
							
							$diff=date_diff($date_sys,$dateNais);
							
							return $diff->format("%y");
							
						}
				?>


		<!--partie affichage Informations-->
		
				<!--partie affichage Informations-->
				<table border=3px bordercolor="transparent" bgcolor="white" width=800px margin=10px  cellspacing=10px >	
		  <tr>	
		   	
			<td style="border:none;">

					<p align="left">
					
						
					<?php 
					
						
						//Verifier erreurs
						
						$aff=true;
                       if(empty($_POST['nom'])  ) 
								{
									
								echo "Veuillez remplir le champ obligatoire <b>Nom</b><br> <br>";					
								$aff=false;
							}
							else
							{
									//----------------------Expressions Regulieres-----------------------
								if(!preg_match("#^[A-Z]*$#",$_POST['nom'])  ) 
									{
										
									echo "Veuillez taper le champ <b>Nom</b> en majuscule<br> <br>";					
									$aff=false;
								}
									//----------------------Longeur chaine----------------------
                                    //utiliser fonction strlen pour verfier la taille de la chaine
									$length = strlen($_POST['nom']);
								if( $length>20 ) 
									{
										
									echo "Vous avez depasser 20 caract&eacute;res dans le champ <b>Nom</b> <br> <br>";					
									$aff=false;
								}

							}
							
						
						 if(empty($_POST['prenom'])  ) 
								{
									
								echo "Veuillez remplir le champ obligatoire <b>prenom</b><br><br>";					
								$aff=false;
							}else
							{
									//----------------------Expressions Regulieres-----------------------
								if(!preg_match("#^([A-Z][a-zA-Z]*\s?)*$#",$_POST['prenom'])  ) 
									{
										
									echo "Veuillez taper le champ <b>prenom</b> en respectant la syntaxe<br> <br>";					
									$aff=false;
								}
								else
								{
									//Verfier longeur
									$mots =explode(" ",$_POST['prenom']);
										foreach ($mots as $mot)
								{ 													
									if(strlen($mot)<3){
									echo  "Le nombre minimum de caract&eacute;res du champ <b>prenom</b> est 3 <br> <br>";
									}
									
								}
									

							}

							}



						 if(empty($_POST['dateN']))
						{
									
								echo "Veuillez remplir le champ obligatoire <b>date de naissance</b><br><br>";	
								$aff=false;
								
						}
						else{
							//----------------------Expressions Regulieres-----------------------
								if((!preg_match("#^[0-9]{2}\-[0-9]{2}\-[0-9]{4}$#",$_POST['dateN'])) && (!preg_match("#^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$#",$_POST['dateN']))) 
									{
										
									echo "Veuillez taper le champ <b>date</b> en respectant la syntaxe<br> <br>";					
									$aff=false;
									 
								}
								elseif(preg_match("#^[0-9]{2}\-[0-9]{2}\-[0-9]{4}$#",$_POST['dateN']))
								{
									
									$date=explode("-",$_POST['dateN'],3);
									
									if(!checkdate ( $date[1] , $date[0] , $date[2] ))
									{
										echo "Veuillez saisir des information valide dans le champ <b>date</b> <br> <br>";
										$aff=false;
									}
									
								}
								else // dans le cas de ^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$
								{
									$date=explode("/",$_POST['dateN'],3);
									
									if(!checkdate ( $date[1] , $date[0] , $date[2] ))
									{
										echo "Veuillez saisir des information valide dans le champ <b>date</b> <br> <br>";
										$aff=false;
									}
								}
								
								//tester la validitée de l'age
								if ($aff)
								{
										$ageInvalide=true;										
										$age=age($_POST['dateN']);
										
										if(($age >= 16) && ($age <= 70))
											$ageInvalide=false;
										else
										{	echo "Veuillez verifier votre date de naissance, votre age doit etre compris entre 16 et 70 ans";
											$aff=false;
										}
										
										$_POST['ageInvalide']=$ageInvalide ;
										$_POST['age']=$age ;
										
								}
							
						}

						if(empty($_POST['tel']))
								{
									
								echo "Veuillez remplir le champ obligatoire <b>N° de téléphone</b><br><br>";					
								$aff=false;
							}
						if(empty($_POST['adresse']))
								{
									
								echo "Veuillez remplir le champ obligatoire <b>adresse</b><br><br>";					
							$aff=false;	
							}
							//-------utiliser Isset pour les radio button et check box-----------
							if(!isset($_POST['genre']))
								{
									
								echo "Veuillez remplir le champ obligatoire <b>Genre</b> <br><br>";					
							$aff=false;	
							}

							if(!isset($_POST['civilité']))
								{
									
								echo "Veuillez remplir le champ obligatoire <b>Civilit&eacute;</b><br><br>";					
							$aff=false;	
							}

							if(!isset($_POST['Langue']))
								{
									
								echo "Veuillez remplir le champ obligatoire <b>Langue</b><br><br>";					
							$aff=false;	
							}
   					   
							
						?>








						
<!---------------------------------------------Afficher_info------------------------------------------------------->

						<?php if($aff==true){ ?>
					    <div align="center">
	

						<!--partie affichage Informations-->
								<table border=3px bordercolor="red" bgcolor="white" width=800px margin=10px  cellspacing=10px >	
						  <tr>	
							
							<td style="border:none;">
							 <h1 align="center"><font face="Arial" color="Blue">&Eacute;tat Global </font></h1>

							<p align="left">
								<?php 
							/*----------------------------Fonction Afficher-------------------------------------- */
								function Afficher()
							{
							/*Nouvelle Ligne */
							$Nom=$_POST['nom'];
							echo "<b>Nom</b>: $Nom <br><br>"; 
							
							/*Nouvelle Ligne */
							$pren=$_POST['prenom'];
							echo "<b>Pr&eacute;nom</b>: $pren <br><br>"; 
							
							/*Nouvelle Ligne */
							$date=$_POST['dateN'];
							echo "<b>Date de naissance</b>: $date &nbsp; &nbsp; &nbsp;"; 
							
							//Affichage de l'age de la personne
							$ageInvalide=$_POST['ageInvalide'];
							$age=$_POST['age'];
							
							if(!$ageInvalide)
								echo "<b>Age</b>: $age <br><br>"; 

							/*Nouvelle Ligne */
							$tel=$_POST['tel'];
							echo " <b>N° de téléphone </b>: $tel <br><br>"; 

							/*Nouvelle Ligne */
							$gen=$_POST['genre'];
							echo "<b>Genre</b> : $gen <br><br>"; 

							/*Nouvelle Ligne */
							$adr=$_POST['adresse'];
							echo "<b>Adresse</b> : $adr <br><br>"; 


							/*Nouvelle Ligne */
							$Civ=$_POST['civilité'];
							echo " <b>Civilit&eacute;</b> : $Civ <br><br>"; 
							/*----------------------------Choix-------------------------------------- */
						
							if(!empty($_POST['choix'])) 
							{
								
								$choix = $_POST['choix'];
								$length = count($_POST['choix']);
								//si il ne selectione pas
								if($length==1  ){
									//si un seul choix et vide 
									if(strcmp($_POST['choix'][0],"")==0){
									echo "<strong>La mention</strong> : Demande de Recours.";
									}
									//si un seul choix et pas vide 
									else{
									echo	"<b>Sp&eacute;cialit&eacute;s </b> : ";
									echo $_POST['choix'][0];
									}
								}
								//Si choix multiple
								else{
								echo	"<b>Sp&eacute;cialit&eacute;s </b> :";
									foreach ($choix as $ch)
								{ 													
										//si c'est le dernier element ou le  vide
									if(strcmp($ch,$_POST['choix'][$length-1])==0 or strcmp($ch,"")==0 ){
									echo $ch;	
									}
									else{
									echo $ch." - ";
									}
									
								
								}
							
							
								}

												
							}else{
								echo "<strong>La mention</strong> : Demande de Recours. ";
							}
							echo "<br><br>";
							/*----------------------------Fin ligne choix -------------------------------------- */
						
						
							/*----------------------------Langues-------------------------------------- */
							$langues=$_POST['Langue'];
							echo " <b>Langues souhait&eacute;es &agrave; l'universit&eacute;</b>:";
							//Verifier si pas vide	
							if(!empty($langues)) 
								{
									
									//Avoir la longueur du tableau
									$length = count($langues);
									foreach ($langues as $langue){ 
									//si c'est le dernier element
										if(strcmp($langue, $langues [$length-1])==0){
										echo $langue;	
										}
										else{
										echo $langue."-";
										}
									}					
								}
							
							echo "<br><br>"; 
							/*----------------------------Fin ligne Langues-------------------------------------- */
								
							
							
                    }
						/*----------------------------Fin Fonction Afficher-------------------------------------- */
                        Afficher();
						?>
					
						 
   
						
					</p>
						

		    </td>
	       </tr>
		</table>
	</div>
						
						
						
					    <?php } ?>	
						
						
						 
   
						
					</p>
						

		    </td>
	       </tr>
		</table>
				
					
			
						

		   
	</div>
<?php } ?>	
	
	
  </body>
</html>