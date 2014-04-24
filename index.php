
<?php 
	require_once("html.php");
	include("evenementen.php");
	
	

	$links = [];
	foreach ($events as  $event) {
		$links[] = new Link($event->title,["href"=> ("result.php?event=".($event->title))]);
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
	
</head>
<body>

	<?= $content ?>
	

</body>
</html>