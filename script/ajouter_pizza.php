<?php
  $mysqli = new mysqli("localhost:3306", "root", "", "pizzerias");
  if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
 
  // Récupération des valeurs des champs
  $libelle = $_POST["libelle"];
  $reference = $_POST["reference"];
  $prix = $_POST["prix"];
  $url_image = $_FILES['url_image']['name'];
 
  // Affichage des résultats
  if(!empty($_POST['libelle']) && !empty($_POST['reference']) && !empty($_POST['prix']) && !empty($_FILES['url_image']))
  { 
  	// Création de la requête SQL:
  	$sql = "INSERT  INTO pizza (id, libelle, reference, prix, url_image)
            VALUES ( NULL, '$libelle', '$reference', '$prix', '$url_image') " ;
 
  	// Exécution de la requête SQL:
  	mysql_query("SET NAMES 'utf8'");
  	$requete = mysql_query($sql, $mysqli) or die( mysql_error() ) ;
    echo("L'insertion a été correctement effectuée") ;
  }
  else
  {
    echo("L'insertion à échouée") ;
  }
?>
<br />
<a href="javascript:window.history.back();">Retour</a>