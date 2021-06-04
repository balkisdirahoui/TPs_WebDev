<html>
    <meta charset="utf-8"
  
  
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
						
						<b>Nom</b> :  <?php echo $_POST['nom'];?> <br><br>
						 
            
           
                        <b>Pr&eacute;nom</b> : <?php echo $_POST['prenom'];?><br><br>

                        <b>Date de naissance</b> :  <?php echo $_POST['dateN'];?><br><br>
                        <b>N° de téléphone </b> : <?php echo $_POST['tel'];?><br><br>

                        <b>Genre</b> : <?php echo $_POST['genre'];?><br><br>
                        <b>Adresse</b> : <?php echo $_POST['adresse'];?><br><br>
                        <b>Civilit&eacute;</b> : <?php echo $_POST['civilité']; ?><br><br>
                         <?php 
					   
						if(!empty($_POST['choix'])) 
						{
							
							$choix = $_POST['choix'];
							$length = count($_POST['choix']);
							//si il ne selectione pas
						    if($length==1  ){
								if(strcmp(choix[0],"")==0){
                            	echo "<strong>La mention</strong> : Demande de Recours.";

								}
							}else{
							echo	"<b>Sp&eacute;cialit&eacute;s </b> :";
								foreach ($choix as $ch)
							{ 

		
							
								
									//si c'est le dernier element ou le  vide
								if(strcmp($ch,$_POST['choix'][$length-1])==0 or strcmp($ch,"")==0 ){
								echo $ch;	
								}
								else{
                                echo $ch."-";
								}
								
							
							}
						
						
						}

											
						}else{
							echo "<strong>La mention</strong> : Demande de Recours.";
						}
						
						
						
						?><br><br>
                        <b>Langues souhait&eacute;es &agrave; l'universit&eacute;</b> : 
						<?php
							

						if(!empty($_POST['Langue'])) 
						{
							
							$langues = $_POST['Langue'];
							$length = count($_POST['Langue']);
							foreach ($langues as $langue){ 
							//si c'est le dernier element
								if(strcmp($langue,$_POST['Langue'][$length-1])==0){
								echo $langue;	
								}
								else{
                                echo $langue."-";
								}
							}					}
						
						?>
						
						<br><br>
                       
						
					</p>
						

		    </td>
	       </tr>
		</table>
	</div>
  </body>
</html>