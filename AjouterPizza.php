
<html>
  <head>
	<meta charset="UTF-8" />	
    <title>Gestion des pizzas</title>
  </head>
<body>
	<h1>Gestion des pizzas</h1>
	<h2>Création d'une pizza</h2>
	<a href="ListerPizza.php">Retour à la liste</a>
	<form method="POST" action="./script/ajouter_pizza.php">
		<table width=50%>
       		<tr>
            	<td>Libellé</td><td><input type="text" name="libelle"  /></td>
        	</tr>
       		<tr>
            	<td>Référence</td><td><input type="text" name="reference"  /></td>
        	</tr>
       		<tr>
            	<td>Prix</td><td><input type="number" name="prix"  /></td>
        	</tr>
       		<tr>
            	<td>Photo</td><td><input type="file" name="url_image"  /></td>
        	</tr>
       		<tr>
            	<td></td><td><input type="submit" value="Ajouter" /></td>
        	</tr>
    	</table>
	</form>
</body>
</html>