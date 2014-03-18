
<?php 
	require_once("html.php");
	
	$events = [
			new Event("\img\affiches\1.jpg","event1","eerste event", "13/07/2014","16h50","www.khbo1.be","info@test1.be"),
			new Event("\img\affiches\2.jpg","event2","eerste event", "14/07/2014","17h00","www.khbo2.be","info@test2.be"),
			new Event("\img\affiches\3.jpg","event3","eerste event", "15/07/2014","17h10","www.khbo3.be","info@test3.be"),
			new Event("\img\affiches\4.jpg","event4","eerste event", "16/07/2014","17h20","www.khbo4.be","info@test4.be")


	];

	$links = [];
	foreach ($events as  $event) {
		$links[] = new Link($event->title,["href"=> "result.php"]);
	}

	$content = new Div(
			new HTMLlist(
				/*[
				new Link("test",["href"=> "result.php"]),
				new Link("test2",["href"=> "result.php"])

				]*/
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