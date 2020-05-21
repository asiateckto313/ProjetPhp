
<?php 
require("Connexionpdo.php");
$requete="select Login,Password,Statut,Date_insertion,Nom,Sexe,Date_naissance from Visiteur";
$reponse=$id->query($requete); 
?>
<table border=1> 
    <tr>
        <th> Login </th>
          <th> Password </th>
            <th> Statut </th>
              <th> Date_insertion </th>
               <th> Nom </th>
                <th> Sexe </th>
                 <th> Date_naissance </th>
    </tr>
    <?php  while($ligne=$reponse->fetch()):?>
 <tr>
        <td> <?php echo $ligne['Login']; ?> </td>
          <td> <?php echo $ligne['Password']; ?> </td>
            <td> <?php echo $ligne['Statut']; ?> </td>
              <td> <?php echo $ligne['Date_insertion']; ?> </td>
                <td> <?php echo $ligne['Nom']; ?> </td>
                  <td> <?php echo $ligne['Sexe']; ?> </td>
                    <td> <?php echo $ligne['Date_naissance']; ?> </td>
</tr>
    <?php endwhile; ?>
</table>
