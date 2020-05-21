<?php
header("content-type: text/html; charset=UTF-8");
if(!isset($_POST['login'])){
    echo "Veuillez d'abord remplir le formulaire.<br><input type='button' value='retour' onclick='javascript:history.back()'>";
}else{
    require("connexionpdo.php");
    //Recupération données du formulaire

    extract($_POST);
    $password=md5($password);


    ////


    
    $req = $id->prepare('UPDATE visiteurs SET 
    password = :nv_password,sexe = :nv_sexe,nom = :nv_nom,dateNaiss=:nv_dateNaiss WHERE login = :nv_login');
    $req->execute(array(
    'nv_password' => $password,
    'nv_sexe' => $sexe,
    'nv_nom' => $nom,
    'nv_dateNaiss'=>$datenaiss,
    'nv_login'=>$login

    ));
    
echo"Données modifiées avec succès";

    //Requete SQL

   /* $requete="INSERT INTO visiteurs(login,password,sexe,nom,dateNaiss) VALUE('$login','$password','$sexe','$nom','$datenaiss')";
    $resultat=$id->query($requete) or die("Impossible d'exécuter la réquête:");
    $nombre_resultat=$resultat->rowCount();
    if($nombre_resultat==0){
        echo "Erreur: Aucun enrégistrement inséré";
    }else{
        echo "$nombre_resultat enrégistrement insérés avec succès";
    }
    //fermer la connexion
    $id = null;*/
}

?>