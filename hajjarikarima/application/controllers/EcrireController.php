<?php

class EcrireController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
		echo "Ecrire Controller Images";
    }
	public function  ajouterabsenceAction() {
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
        
    }

}
?>

