<?php
header("content-type:text/html;charset=UTF-8");
if(!isset($_POST['login'])){
    echo "Veuillez d'abord remplir le formulaire"."<br/><input type='button' value='retour' onclick='javascript:history.back()'>";
}
else{
require("connexion.php"); //Inclusion des paramètres de connexion

//Récupération données du Formulaire
    extract($_POST);
    $password=md5($password); //Cryptage du mot de passe par l'algorithme md5
    
    //Requête SQL
    $requete="select password from visiteurs where login LIKE '".$login."'
    ";
    
    $resultat=mysqli_query($id,$requete) or die("Impossible d'éxécuter la requête:".mysqli_error($id));
    
    $nombre_resultat= mysqli_num_rows($resultat);
    
    if($nombre_resultat==0){echo "Nom d'utilisateur incorrect";}
    else{
        $ligne=mysqli_fetch_array($resultat);
        $password2=$ligne['password'];
        if($password!=$password2)
        {
            echo "Mot de passe incorrect";
        }
        else
        {
            session_start();//Début de la session 
            $_SESSION['utilisateur']=$login;
            setcookie('loginUser',$login,time()+3600*24*5);//Création de cookie valable 5(3600*24*5) jours
            //Redirection vers la page d'accueil
            header("Location: Listuserpdo++.php");
        }
    }
    
    mysqli_close($id); //Fermeture de la connexion
    }

?>