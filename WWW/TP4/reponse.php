<html>
    <meta charset="utf-8"
  
  
  <head> 
        <title>Mes d&eacute;buts avec la Programmation Web</title>
  </head>
  
  
  <body topmargin="80" leftmargin="50" bgcolor="grey" text="navy" 
  
  background="Images/fond.jpg" bgproperties="fixed" >


	
	<div align="center">
		<table border=3px bordercolor="orange" bgcolor="white" width=800px margin=0px  cellspacing=0px >	
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
	</div>
  </body>
</html>