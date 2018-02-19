<html>
  <head>
	  <meta charset="UTF-8" />	
    <title>Gestion des commandes</title>
  </head>
  <body>
    <h1>Gestion des commandes</h1>
    <h2>Création d'une commande</h2>
    <a href="ListerCommande.php">Retour à la liste</a>
    <form method="POST" action="./script/ajouter_commande.php">
      <table width=50%>
        <tr>
          <td>Numéro</td><td><input type="text" name="numero_commande"  /></td>
        </tr>
        <tr>
          <td>Date</td><td><input type="text" name="date_commande"  /></td>
        </tr>
        <tr>
          <td>Client</td>
          <td>
            <select name="client_id">
              <?php
                $mysqli = new mysqli("localhost:3306", "root", "", "pizzerias");
                if ($mysqli->connect_errno) {
                  echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                }
                $res = $mysqli->query("SELECT * FROM client");
                $res->data_seek(0);
                while ($row = $res->fetch_assoc()) {
              ?>
              <option value="<?php echo $row["id"]; ?>"><?php echo $row["nom"]." ".$row["prenom"] ?></option>
              <?php
                }
              ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>Livreur</td>
          <td>
            <select name="livreur_id">
              <?php
                $mysqli = new mysqli("localhost:3306", "root", "", "pizzerias");
                if ($mysqli->connect_errno) {
                  echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                }
                $res = $mysqli->query("SELECT * FROM livreur");
                $res->data_seek(0);
                while ($row = $res->fetch_assoc()) {
              ?>
              <option value="<?php echo $row["id"]; ?>"><?php echo $row["nom"]." ".$row["prenom"] ?></option>
              <?php
                }
              ?>
            </select>
          </td>
        </tr>
        <tr>
          <td></td><td><input type="submit" value="Ajouter" /></td>
        </tr>
      </table>
    </form>
  </body>
</html>