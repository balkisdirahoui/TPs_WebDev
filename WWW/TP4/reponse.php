<html>
    <meta charset="utf-8"> 
  
  
  <head> 
        <title>Mes d&eacute;buts avec la Programmation Web</title>
  </head>
  
  
  <body topmargin="80" leftmargin="50" bgcolor="grey" text="navy" 
  
  background="Images/fond.jpg" bgproperties="fixed" >


	
	<div align="center">
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



		<!--partie affichage Informations-->
				<table border=3px bordercolor="red" bgcolor="white" width=800px margin=10px  cellspacing=10px >	
		  <tr>	
		   	
			<td style="border:none;">
			 <h1 align="center"><font face="Arial" color="Blue">&Egrave;tat Global </font></h1>

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
							echo "<b>Date de naissance</b>: $date <br><br>"; 


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

						
						?>
					
						 
   
						
					</p>
						

		    </td>
	       </tr>
		</table>
	</div>
  </body>
</html>