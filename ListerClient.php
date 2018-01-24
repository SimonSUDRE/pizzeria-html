<html>
    <head>
    	<meta charset="UTF-8" />	
        <title>Gestion des clients</title>
    </head>
    <body>
    	<h1>Gestion des clients</h1>
    	<a href="./AjouterClient.php">Ajout</a> / <a href="./accueil.html">Retour à l'accueil</a>
    	<h2>Liste des clients</h2>
	   <table width=100%>
	       <thead>
        		<tr>
        			<th align=left>Id.</th>
        			<th align=left>NOM</th>
        			<th align=left>Pr&eacute;nom</th>
        			<th align=left>Ville</th>
        			<th align=left>Age</th>
        			<th colspan=2></th>
        		</tr>
	       </thead>
	       <tbody>
                <?php
                    $mysqli = new mysqli("localhost:3306", "root", "", "pizzerias");
                    if ($mysqli->connect_errno) {
                        echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                    }
                    $res = $mysqli->query("SELECT * FROM client");
                    $res->data_seek(0);
                    while ($row = $res->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["nom"]; ?></td>
                        <td><?php echo $row["prenom"]; ?></td>
                        <td><?php echo $row["ville"]; ?></td>
                        <td><?php echo $row["age"]; ?></td>
                        <td><a href="modifier_client.php?id=<?php echo $row["id"]; ?>">Modifier</a></td>
                        <td><a href="supprimer_client.php?id=<?php echo $row["id"]; ?>">Supprimer</a></td>
                    </tr>
                <?php
                    }
                ?>
	       </tbody>
        </table>
    </body>
</html>