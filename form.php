<?php

	include_once("html.php");

	$user_name ="";
	if (isset($_POST['user_name'])) {
		$user_name = $_POST['user_name'];
	}

	$real_name ="";
	if (isset($_POST['real_name'])) {
		$real_name = $_POST['real_name'];
	}

	$password ="";
	if (isset($_POST['password'])) {
		$password = $_POST['password'];
	}

	$showResult = !(empty($user_name) && empty($real_name) && empty($password));

	$content = "";

	if($showResult) {
		$content = new Div( 
			new Heading("Welkom $real_name") .
			new Paragraph("Je gebruikersnaam is $user_name")
			, array("class" => "jumbotron")
		);  	
	}else{ 
		$content = new Div(
			new Form(
				new Heading("Please sign in", 2, array("class" => "form-signin-heading")) .
				new Input("real_name", "text", array("class" => "form-control", "placeholder" => "Name")) .
				new Input("user_name", "text", array("class" => "form-control", "placeholder" => "Username")) .
				new Input("password", "password", array("class" => "form-control", "placeholder" => "Password")) .
				new Button("Sign in", array("class" => "btn btn-lg btn-primary btn-block", "type" => "submit"))
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