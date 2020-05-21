<?php
header("content-type:text/html;charset=UTF-8");
echo "<head> <title>Formulaire Utilisateur</title></head>";
?>

<body>
    <form name="formuser" method="post" action="testBoucleFor.php">
        <fieldset>
            <legend>Fomulaire de Connexion Utilisateur</legend>
           
            <br><label for="password">Mot de Passe</label>
            <input type="password" name="password" id="password" size="30" maxlength="15" placeholder="Au moins 5 caractères" />
            
            <br><label for="nom">Nom Utilisateur</label>
            <input type="nom" name="nom" id="nom" size="50" maxlength="100" placeholder="Au moins 5 caractères" />
            <input type="submit"  value="VALIDER" />
        
        </fieldset>
    
    </form>
</body>
<?php
$nom="user1";
$nomUser=$_POST['nom'];// Récupération du login
$mdp=md5("TATI");//Récupération du mdp
$mdpCrypt=md5($_POST['password']);

if($nomUser=="user1" && $mdpCrypt==$mdp)
    echo "Bonjour ".$nomUser." !";

?>