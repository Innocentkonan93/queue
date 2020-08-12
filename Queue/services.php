<?php
$idAgence = $_GET['id'];
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


	$services = $db->query("SELECT * FROM services WHERE idAgence = '$idAgence' ")->fetchAll();

	foreach ($services as $service) { ?>

		<button>
		
			<h1><a href="services.php?id=<?php echo $service['idService'] ?>"><?php echo $service['nomService'] ?></a></h1>
		
		</button><br>



	<?php }

    
?>
    
</body>
</html>