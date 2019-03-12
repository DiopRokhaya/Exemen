<? php
$ Contact = array (
		' Nom ' => ' Diop ' ,
		' Prenom ' => ' Rokhaya ' ,
		' Email ' => ' diop98018@gmail.com ' ,
		' N° carte étudiant' => ' 201708DEQ ' ,
		' Adresse ' => ' HLM5 ' ,
		' Téléphone ' => ' 779737992 ' ,
		' Date de naissance ' => ' 24/05/95 ' ,
		' Identifiant Slack ' => 'Rokhaya Diop ',
		' Profession' => 'Etudiante'
)
? >
<! DOCTYPE HTML>
    < HTML  lang = ' fr ' >
    	  < tête >
    	         <meta charset="utf-8">
    	  	     < title > Contact </ title >
    	  	     		    < style >
    	  	     		  		table , tr , td , th {
  	     		  		  		    bordure : 3 px  noir uni  ;			  
     		  		  			    rayon de bordure : 15 px   15 px  15 px ;			  
	     		  		  			taille de police : 35 px ;			  			  		  
	     		  		  		}
     		  		  			  		body {
     		  		  			  		 	background : # E9967A ;
  		  			  		  		    }		 
		  		  		    </ style >		 
</ head >		 
							< body >
								< center  style = " padding-top : 8 % ; "  >
								< table><  Th  colspan = " 4 " >< a  href = " ROKHAYA.jpg " >< img  src = " ROKHAYA.jpg " 
												heigh  :  5px  ;
								    			largeur:  6px  ;
								    														 
																							 " /> 
    															</a> 
										</ th>				
										<? php foreach ( $ Contact as $ key => $ value ) :? >
										<tr><td><? php echo $ key ; ? > </ td>  <td> 
												<? php echo $ value ; ? > 
										</ td></ tr>
										<? php endforeach ? >  
								</ table>
								</ center>
							</ body>
	</ html>			 
	</ body>		 
</ HTML>
