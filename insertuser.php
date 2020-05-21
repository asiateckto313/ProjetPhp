<?php
header("content-type:text/html;charset=UTF-8");
if(!isset($_POST['login'])){
    echo "Veuillez d'abord remplir le formulaire"."<br/><input type='button' value='retour' onclick='javascript:history.back()'>";
}
else{
require("connexion.php"); //Inclusion des paramètres de connexion

//Récupération données du Formulaire
/*$login=$_POST['login'];
$password=$_POST['password'];
$nom=$_POST['nom'];
$datenaiss=$_POST['datenaiss'];
$sexe=$_POST['sexe'];*/
    extract($_POST);
    $password=md5($password); //Cryptage du mot de passe par l'algorithme md5
    
    //Requête SQL
    $requete="INSERT INTO visiteurs(login,password,sexe,Nom,DateNaiss) VALUES('$login','$password','$sexe','$nom','$_POST['datenaiss']')";
    
    $resultat=mysqli_query($id,$requete) or die("Impossible d'éxécuter la requête:".mysqli_error($id));
    
    $nombre_resultat= mysqli_affected_rows($id);
    
    if($nombre_resultat==0){echo "Erreur: Aucun enrégistrement inséré";}
    else{echo "$nombre_resultat enregistrements insérés avec succès";}
    
    mysqli_close($id); //Fermeture de la connexion
    }

?>