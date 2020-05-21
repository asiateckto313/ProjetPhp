<?php
header("content-type: text/html; charset=UTF-8");
echo "<head><title> Formulaire Utilisateur </title><head>";
?>

<body>
    <form name="formuser" method="post" action="recherche.php">
        <fieldset>
            <legend> recherche </legend>
            <label for="recherche">votre recherche ici</label>
            <input type="text" name="recherche" id="recherche" />

           <input type="submit" Value="VALIDER" />
        
        
        </fieldset>
    </form>
</body>