<?php
header("content-type:text/html;charset=UTF-8");
if(!isset($_POST['login'])){
    echo "Veuillez d'abord remplir le formulaire"."<br/><input type='button' value='retour' onclick='javascript:history.back()'>";
}
else{
require("connexionPDO.php"); //Inclusion des paramètres de connexion

//Récupération données du Formulaire
    extract($_POST);
    $password=md5($password); //Cryptage du mot de passe par l'algorithme md5
    
    //Requête SQL
    $requete="INSERT INTO visiteurs(login,password,sexe,Nom,DateNaiss) VALUES('$login','$password','$sexe','$nom','$datenaiss')";
    
    $resultat=$id->query($requete) or die("Impossible d'éxécuter la requête:");
    
    $nombre_resultat=$resultat->rowCount();
    
    if($nombre_resultat==0){echo "Erreur: Aucun enrégistrement inséré";}
    else{echo "$nombre_resultat enregistrements insérés avec succès";}
    
    $id=null; //Fermeture de la connexion
    }

?>