<?php
header("content-type:text/html;charset=UTF-8");
echo "<head> <title>Formulaire Utilisateur</title></head>";
?>
<body>
    <form name="formuser" method="post" action="connectuser.php">
        <fieldset>
            <legend>Fomulaire de Connexion Utilisateur</legend>
            <label for="login">Login Utilisateur</label>
            <input type="text" name="login" id="login" size="30" maxlength="15" placeholder="Au moins 5 caractères" value="<?php if(isset($_COOKIE['loginUser'])){echo $_COOKIE['loginUser'];}?>"/>
            <br><label for="password">Mot de Passe</label>
            <input type="password" name="password" id="password" size="30" maxlength="15" placeholder="Au moins 5 caractères" value=/>
            
           
            <input type="submit"  value="VALIDER" />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <br> <input type="reset" value="reset" />

        </fieldset>
    
    </form>
</body>