<?php
echo "Nom serveur web : ".$_SERVER['SERVER_NAME'];
echo "<br>Adresse IP serveur web : ".$_SERVER['SERVER_ADDR'];
echo "<br>Port serveur web : ".$_SERVER['SERVER_PORT'];
echo "<br>Adresse IP utilisateur distant : ".$_SERVER["REMOTE_ADDR"];
?>