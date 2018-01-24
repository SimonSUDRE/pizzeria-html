<html>
    <head>
	   <meta charset="UTF-8" />	
        <title>Gestion des commandes</title>
    </head>
    <body>
	   <h1>Gestion des commandes</h1>
	   <a href="./AjouterCommande.php">Ajout</a> / <a href="./accueil.html">Retour à l'accueil</a>
	   <h2>Liste des commandes</h2>
	   <table width=100%>
	       <thead>
        		<tr>
        			<th align=left>Id.</th>
        			<th align=left>Numéro</th>
        			<th align=left>Date</th>
        			<th align=left>Client</th>
        			<th align=left>Livreur</th>
        			<th colspan=2></th>
        		</tr>
	       </thead>
	       <tbody>
                <?php
                    $mysqli = new mysqli("localhost:3306", "root", "", "pizzerias");
                    if ($mysqli->connect_errno) {
                        echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                    }
                    $res = $mysqli->query(
                        "SELECT c.id, numero_commande, date_commande, l.nom as lnom, l.prenom as lprenom, cl.nom as clnom, cl.prenom as clprenom
                        FROM commande c, Livreur l, client cl
                        WHERE client_id = cl.id AND livreur_id = l.id"
                    );
                    $res->data_seek(0);
                    while ($row = $res->fetch_assoc()) {
                ?>
                    <tr>
                    	<td><?php echo $row["id"]; ?></td>
                    	<td><?php echo $row["numero_commande"]; ?></td>
                    	<td><?php echo $row["date_commande"]; ?></td>
                    	<td><?php echo $row["clnom"]." ".$row["clprenom"]; ?></td>
                    	<td><?php echo $row["lnom"]." ".$row["lprenom"]; ?></td>
                    	<td><a href="modifier_commande.php?id=<?php echo $row["id"]; ?>">Modifier</a></td>
                    	<td><a href="supprimer_commande.php?id=<?php echo $row["id"]; ?>">Supprimer</a></td>
                	</tr>
                <?php
                    }
                ?>
	       </tbody>
        </table>
    </body>
</html>