<html>
  <head>
	<meta charset="UTF-8" />	
    <title>Gestion des pizzas</title>
  </head>
<body>
	<h1>Gestion des pizzas</h1>
	<a href="./AjouterPizza.php">Ajout</a> / <a href="./accueil.html">Retour à l'accueil</a>
	<h2>Liste des pizzas</h2>
	<table width=100%>
	<thead>
		<tr>
			<th align=left>Id.</th>
			<th align=left>Libellé</th>
			<th align=left>Référence</th>
			<th align=left>Prix</th>
			<th align=left>Photo</th>
			<th colspan=2></th>
		</tr>
	</thead>
	<tbody>
<?php
    $mysqli = new mysqli("localhost:3306", "root", "", "pizzerias");
    if ($mysqli->connect_errno) {
        echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $res = $mysqli->query("SELECT * FROM pizza");
    $res->data_seek(0);
    while ($row = $res->fetch_assoc()) {
?>
    <tr>
    	<td><?php echo $row["id"]; ?></td>
    	<td><?php echo $row["libelle"]; ?></td>
    	<td><?php echo $row["reference"]; ?></td>
    	<td><?php echo $row["prix"]; ?></td>
    	<td><img src="./img/<?php echo $row["url_image"]; ?>" width="100px" /></td>
    	<td><a href="modifier_pizza.php?id=<?php echo $row["id"]; ?>">Modifier</a></td>
    	<td><a href="supprimer_pizza.php?id=<?php echo $row["id"]; ?>">Supprimer</a></td>
	</tr>
<?php
    }
?>
	</tbody>
</table>
</body>
</html>