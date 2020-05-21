<?php
try{
 $user="root";
$password="";
$options=array(PDO::ATTR_PERSISTENT=>true);
    $id=new PDO('mysql:host=localhost;dbname=bdensit2018;charset=UTF8',$user,$password,$options);
}catch(Exception $e){
  die("Impossible de se connecter à la BD".e->getMessage());  
  $id=null; // Fermeture de la connexion  
} 
?>