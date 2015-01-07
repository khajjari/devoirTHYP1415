<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

try {
      $bdd = mysqli_connect('localhost' ,'root', '', 'flux_etu')or die ("error".mysqli_error($flux_etu)) ;;
    }
     catch(Exception $ex) {
	die('Erreur : '.$e->getMessage());
   }
	$query="select * from etudiant "
                . " "  or die ("error".mysqli_error($flux_etu));
	$req = $bdd->query($query);
	
	if ($req = $bdd->query($query))

        echo "<table border='1'>";
         
	while ( $ligne =$req->fetch_row())
	{
	     /// J'ai arreter ic avec Error d'afichage  
          //  echo "<tr> <td> " . $ligne[0]."</td>  "
            ///. " <td> " . $ligne[1]."</td>  "        
           //  ." <td> " . $ligne[2]."</td>  " 
           //  ." <td> " . $ligne[3]."</td>  "  ;
               
	}
        echo "</tr></table> ";
	 $req->close();
        
?>

