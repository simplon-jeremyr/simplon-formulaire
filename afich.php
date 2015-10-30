<DOC!TYPE html>
<html>

<head><meta charset="utf-8" /></head>
<body>
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root' , 'ecodair');
}
catch(Exception $e)
{
  die('Une erreur est survenue : ' .$e->getMessage());
}
  $reponse = $bdd->query('SELECT * FROM rep_formulaire');

while ($donnees = $reponse->fetch())
{
  ?>
  <p>
nom :  <?php echo $donnees['nom']; ?><br />
age : <?php echo $donnees['age']; ?><br />
Habite :   <?php echo $donnees['adresse']; ?><br />
a :  <?php echo $donnees['ville']; ?>
. <?php echo $donnees['pays']; ?><br />
le mot de passe est :   <?php echo $donnees['passw']; ?><br />
le commentaire est : <?php echo $donnees['raison']; ?>
</p>
<?php
}
  $reponse->closeCursor();
  ?>
</body>
</html>
