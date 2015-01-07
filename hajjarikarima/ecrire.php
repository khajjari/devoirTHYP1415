<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <title>ABSENCES & PRESENCES</title>
    </head>
    <body>
	
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
          $query="INSERT INTO etudiant(id , nom , prenom,) values ('' , 'hajjari' , 'karima' ) "
                  . " "  or die ("error".mysqli_error($flux_etu));
          $query1="INSERT INTO absence(id_etudiant , Abs_pre , date) values (1 , 'absence' , '2014/12/06' ) "
                  . " "  or die ("error".mysqli_error($flux_etu));
          $req = $bdd->query($query);
          $req = $bdd->query($query1);
?>


        
        
    </body>
</html>


