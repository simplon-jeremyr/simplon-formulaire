<?php
$nom = $_POST["nom"];
echo "Bienvenu $nom <br />";

$mail = $_POST["mail"];
echo "Votre adresse mail est : $mail <br />";

$adresse = $_POST["adresse"];
echo "Vous habitez : $adresse ";

$ville = $_POST["ville"];
echo "à $ville , ";

$pays = $_POST["pays"];
echo "en $pays.<br />";

$age = $_POST["age"];
echo "Et vous avez $age ans<br />";

$raison = $_POST["raison"];
echo "$raison <br />";

echo " ---------------------------<br />";
echo "Résultats enrigstrés: <br />";


$passw = $_POST["passw"];
echo "mdp :$passw <br />";

$age_du_visiteur = $_POST["age"];
echo "$age_du_visiteur ans.";
?>


<?php
 $message = $_POST['nom']."\n".$_POST['mail']."\n".$_POST['adresse']."\n".$_POST['ville']."\n".$_POST['age']."\n".$_POST['raison']."\n".$_POST['pays']."\n".$_POST['passw'];
 $fichier = fopen("resultats.txt", 'a+');
 fputs($fichier, $message);
 fclose($fichier);

 ?>

 <?php
 //Chaine de conneexion à la base de données formulaire
 try
 {
 $bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root' , 'ecodair');




}
//Affiche si une erreur surviens.
catch(Exception $e)
{
  die('Une erreur est survenue : '. $e->getMessage());
}

$demande = $bdd->prepare('INSERT INTO rep_formulaire(id, nom, adresse, ville, age, pays, passw, mail, raison) VALUES(:id, :nom, :adresse, :ville, :age, :pays, :passw, :mail, :raison)');
$demande ->execute(array(
  'nom' =>$_POST['nom'],
  'id' => '',
  'mail' =>$_POST['mail'],
  'adresse' =>$_POST['adresse'],
  'ville' =>$_POST['ville'],
  'age' =>$_POST['age'],
  'pays' =>$_POST['pays'],
  'passw' =>$_POST['passw'],
  'raison' =>$_POST['raison']

));
?>
