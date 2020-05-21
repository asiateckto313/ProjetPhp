<?php
$recherche = $_POST['recherche'];
//$mot = explode(' ', $recherche);
//$mc = '%'.$mot.'%';
require("connexionpdo.php");
 
$query = $id->prepare("SELECT * FROM visiteurs WHERE nom LIKE '%".$recherche."%'");

$query->execute();
$resultats = $query->rowCount();
 
if ($resultats == 0)
 
{
   echo "Aucun document trouvé !";
}
 
else
 
{		
   echo "$resultats documents trouvés";	
 
}
 
$query->CloseCursor();

?>