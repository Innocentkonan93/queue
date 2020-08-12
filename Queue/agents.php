<?php
$idBanque = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
	require_once('database/db.php');
	echo '<br>';


	$agences = $db->query("SELECT * FROM agences WHERE idBanque = '$idBanque' ")->fetchAll();

	foreach ($agences as $agence) { ?>

		<button>
		
			<h1><a href="services.php?id=<?php echo $agence['idAgence'] ?>"><?php echo $agence['nomAgence'] ?></a></h1>
		
		</button><br>



	<?php }

    
?>
    
</body>
</html>