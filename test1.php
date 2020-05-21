<?php
	header("content-type:text/html; charset=UTF-8");
	$SERVER['LC_TIME']="fr_FR.UTF-8";
	echo "<h1> Bienvenue sur PHP </h1>";
	?>
	<font face="arial" size="5" color="blue">
	<?php
	echo "Nous sommes le ".date("d/m/Y");
	echo "<br>Il est actuellement : ".date("H:i:s");
	$SERVER['LC_TIME']="fr_FR.UTF-8";
	echo "<br>La date complète est : ".strftime(%A %d %B %Y) //Le point ici est pareil // au + pour la concaténation
	$madate=getdate();
	$joursem=$madate['wday'];
	$jourmois=$madate['mday'];
	$mois=$madate('mon');
	$an=$madate['year'];
	$Tsem = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
	$Tmois=array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");

?>
</font>