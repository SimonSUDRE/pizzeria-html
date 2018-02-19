<html>
  <head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" media="screen" href="style/styles.css"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-
    scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion des clients</title>
  </head>
	<body>
		<h1>Gestion des clients</h1>
		<h2>Création d'un client</h2>
		<a href="ListerClient.php"><< Retour à la liste</a>
		<form method="POST" action="./script/ajouter_client.php">
			<table width=50%>
				<tr>
					<td>Nom</td><td><input type="text" name="nom"  /></td>
				</tr>
				<tr>
					<td>Prénom</td><td><input type="text" name="prenom"  /></td>
				</tr>
				<tr>
					<td>Ville</td><td><input type="text" name="ville"  /></td>
				</tr>
				<tr>
					<td>Age</td><td><input type="number" name="age"  /></td>
				</tr>
				<tr>
					<td></td><td><input type="submit" value="Ajouter" /></td>
				</tr>
			</table>
		</form>
	</body>
</html>