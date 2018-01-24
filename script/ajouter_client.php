<?php

 
  // Récupération des valeurs des champs
  $nom     = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $ville = $_POST["ville"];
  $age = $_POST["age"];
 
  // Affichage des résultats
  if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['ville']) && !empty($_POST['age']))
  { 
  	// Création de la requête SQL:
  	$sql = "INSERT  INTO client (id, nom, prenom, ville, age)
            VALUES ( NULL, '$nom', '$prenom', '$ville', '$age') " ;
 
  	// Exécution de la requête SQL
  	mysqli_query("SET NAMES 'utf8'");
  	$requete = mysqli_query($sql, $mysqli) or die( mysqli_error() ) ;
    echo("L'insertion a été correctement effectuée") ;
  }
  else
  {
    echo("L'insertion à échouée") ;
  }
?>
<br />
<a href="javascript:window.history.back();">Retour</a>