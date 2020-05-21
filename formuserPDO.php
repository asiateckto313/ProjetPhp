<?php
header("content-type:text/html;charset=UTF-8");
echo "<head> <title>Formulaire Utilisateur</title></head>";
?>
<body>
    <form name="formuser" method="post" action="insertuserPDO.php">
        <fieldset>
            <legend>Fomulaire de Connexion Utilisateur</legend>
            <label for="login">Login Utilisateur</label>
            <input type="text" name="login" id="login" size="30" maxlength="15" placeholder="Au moins 5 caractères" />
            <br><label for="password">Mot de Passe</label>
            <input type="password" name="password" id="password" size="30" maxlength="15" placeholder="Au moins 5 caractères" />
            
            <br><label for="nom">Nom Utilisateur</label>
            <input type="nom" name="nom" id="nom" size="50" maxlength="100" placeholder="Au moins 5 caractères" />

            <br><label for="datenaiss">Date de Naissance</label>
            <input type="date" name="datenaiss" id="datenaiss"/>
            
            <br><label for="sexe">Sexe</label>
            <input type="radio" name="sexe" id="sexe" value="M" checked />Masculin
            <input type="radio" name="sexe" id="sexe" value="F" />Féminin
            <input type="submit"  value="VALIDER" />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <br> <input type="reset" value="reset" />

        </fieldset>
    
    </form>
</body>