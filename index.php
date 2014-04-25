
<?php 
	require_once("html.php");
	include("evenementen.php");
	include_once("database.php");
	
	$STH = $DBH->query('SELECT name, id FROM events');

	$STH->setFetchMode(PDO::FETCH_ASSOC);
	$result = $STH->fetchAll();



	$links = [];
	foreach ($events as  $event) {
		$links[] = new Link($event->title,["href"=> ("result.php?event=".($event->title))]). ' ' .new link("edit ",["href"=> ("result.php?id=".($event->id))]) ;

				
	}

	foreach ($result as $event) {
		$links[] = new Link($event['name'],["href"=> ("result.php?id=".($event['id']))]) ;

				
	}


	$content = new Div(
			new HTMLlist(
				
				$links

				));	



 ?>






<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/signup.css">
	
</head>
<body>

	<?= $content ?>
	

</body>
</html>