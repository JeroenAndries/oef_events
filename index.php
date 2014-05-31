
<?php 
	require_once("html.php");
	include("evenementen.php");
	include_once("database.php");
	
	$STH = $DBH->query('SELECT name, id , picture FROM events');

	$STH->setFetchMode(PDO::FETCH_ASSOC);
	$result = $STH->fetchAll();


	foreach ($result as $event) {
		$links[] = new Link($event['name'],["href"=> ("result.php?id=".($event['id']))])." ".new Link('edit',["href"=> ("form.php?edit&id=".($event['id']))])." ".new Image($event['picture'],"image of event",100,100); ;
		
				
	}


	$content = new Div(
			new heading("evenementen").
			new HTMLlist(
				
				$links

				).new link("add event", ["href"=> ("form.php"),"class"=>"btn btn-default btn-lg"])
				);	



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