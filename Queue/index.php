<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Queue Management Service</title>
</head>
<body>

<h1>Bienvenu veuillez choisir une baque</h1>


<?php
	require_once('database/db.php');
	echo '<br>';


	$banques = $db->query("SELECT * FROM banques")->fetchAll();

	foreach ($banques as $banque) { ?>

		<button>
		
			<h1><a href="agents.php?id=<?php echo $banque['idBanque'] ?>"><?php echo $banque['nomBanque'] ?></a></h1>
		
		</button><br>



	<?php }

    
?>
	
</body>
</html>