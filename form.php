<?php
	include_once("html.php");
include_once("database.php");

	



	$name ="";
	if (isset($_POST['name'])) {
		// opvragen van databases niet van post
		//$event = $_POST['event'];
	}
	$discription ="";
	if (isset($_POST['discription'])) {
		//$date = $_POST['date'];
	}

	$date ="";
	if (isset($_POST['date'])) {
		//$date = $_POST['date'];
	}

	$time ="";
	if (isset($_POST['time'])) {
		//$date = $_POST['date'];
	}
	$email ="";
	if (isset($_POST['email'])) {
		//$date = $_POST['date'];
	}
	$site ="";
	if (isset($_POST['site'])) {
		//$date = $_POST['date'];
	}
	$picture ="";
	if (isset($_POST['picture'])) {
		//$date = $_POST['date'];
	}

	$data = !(empty($user_name) && empty($real_name) && empty($password));

	$content = "";

	if($data) {
		$content = new Div( 
			new Heading("Welkom $real_name") .
			new Paragraph("Je gebruikersnaam is $user_name")
			, array("class" => "jumbotron")
		);  	
	}else{ 
		$content = new Div(
			new Form(
				new Heading("ingave gegevens", 2, array("class" => "form-signin-heading")) .
				new Input("name", "text", array("class" => "form-control", "placeholder" => "Naam event")) .
				new Textarea("", array("class" => "form-control", "placeholder" => "beschrijving event","rows"=>"3")) .
				new Input("date", "date", array("class" => "form-control", "placeholder" => "date: xx/xx/xxxx")) .
				new Input("time", "time", array("class" => "form-control", "placeholder" => "time: xx:xx")) .
				new Input("email", "text", array("class" => "form-control", "placeholder" => "info@yourevent.com")) .
				new Input("site", "text", array("class" => "form-control", "placeholder" => "http://yourevent.com")) .

				new Input("picture", "text", array("class" => "form-control", "placeholder" => "http://yourevent.com")) .
				new Button("make event", array("class" => "btn btn-lg btn-primary btn-block", "type" => "submit"))
				, array("class" => "form-signin", "method" => "post")
			), array("class" => "container")
		);		
 	} 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Oefening PHP op POST en GET</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
	<?= $content ?>
</body>
</html>