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



					    //----------------------verifier qu'il n'ya pas d'erreurs-----------------------
						if($aff==true){
                       //Inclure le fichier qui cree et appele la fonction Afficher()
				        include "Afficher_Info.php";
						}
						
						
						?>
						 
   
						
					</p>
						

		    </td>
	       </tr>
		</table>
				
					
			
						

		   
	</div>
  </body>
</html>
