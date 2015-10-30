<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root' , 'ecodair');
}
catch(Exception $e)
{
  die('Une erreur est survenue : '.$e->getMessage());
}

$demande = $bdd->prepare('DELETE FROM rep_formulaire WHERE id=6');

$req->execute(array('supp' => $_POST['supp'] ));

?>
