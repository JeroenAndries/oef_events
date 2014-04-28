<?php
	include_once("html.php");
include_once("database.php");
$chosen_event="";
	var_dump($_GET);
if (isset($_GET["id"])) {
	$chosen_event = $_GET["id"];
}


	$name ="";
	if (isset($_POST['name'])) {
		$name = $_POST['name'];
	}
	$discription ="";
	if (isset($_POST['discription'])) {
		$discription = $_POST['discription'];
	}

	$date ="";
	if (isset($_POST['date'])) {
		$date = $_POST['date'];
	}

	$time ="";
	if (isset($_POST['time'])) {
		$datimete = $_POST['time'];
	}
	$email ="";
	if (isset($_POST['email'])) {
		$email = $_POST['email'];
	}
	$site ="";
	if (isset($_POST['site'])) {
		$site = $_POST['site'];
	}
	$picture ="";
	if (isset($_POST['picture'])) {
		$picture = $_POST['picture'];
	}
	$edit = false;
	if(isset($_GET['edit'])){

		$edit= true;
	}

	//$edit =!(empty($user_name) && empty($real_name) && empty($password));

	if(isset($_POST['add']))
	{
			$STH = $DBH->prepare("INSERT INTO events (name,discription,date,time,email,site,picture) values(:name,:discription,:date,:time,:email,:site,:picture)" );
			$temp= array("name"=>$name,"discription"=>$discription,"date"=>$date,"time"=>$time,"email"=>$email,"site"=>$site,"picture"=>$picture);
			$STH->execute($temp);
			
	}
	if(isset($_POST['edit']))
	{
		$STH = $DBH->prepare("UPDATE events SET name=:name,discription=:discription,date=:date,time=:time,email=:email,site=:site,picture=:picture WHERE id=$chosen_event"); 
		$temp= array("name"=>$name,"discription"=>$discription,"date"=>$date,"time"=>$time,"email"=>$email,"site"=>$site,"picture"=>$picture);
		$STH->execute($temp);	
	}

	$content = "";

	if($edit) {

		$STH = $DBH->query('SELECT * FROM events WHERE id = '.$chosen_event);

		$STH->setFetchMode(PDO::FETCH_OBJ);
		$result = $STH->fetch();



		$content = new Div(
			new Form(
				new Heading("ingave gegevens", 2, array("class" => "form-signin-heading")) .
				new Input("name", "text", array("class" => "form-control", "value" => $result->name  )) .
				new Textarea("discription",$result->discription, array("class" => "form-control","rows"=>"3")) .
				new Input("date", "date", array("class" => "form-control" , "value" => $result->date)) .
				new Input("time", "time", array("class" => "form-control", "value" => $result->time)) .
				new Input("email", "text", array("class" => "form-control", "value" => $result->email)) .
				new Input("site", "text", array("class" => "form-control", "value" => $result->site)) .

				new Input("picture", "text", array("class" => "form-control", "value" => $result->picture)) .
				new Button("update event", array("class" => "btn btn-lg btn-primary btn-block", "type" => "submit","name"=>"edit"))
				, array("class" => "form-signin", "method" => "post")
			), array("class" => "container")
		);			
	}else{ 
		$content = new Div(
			new Form(
				new Heading("ingave gegevens", 2, array("class" => "form-signin-heading")) .
				new Input("name", "text", array("class" => "form-control", "placeholder" => "Naam event")) .
				new Textarea("discription","", array("class" => "form-control", "placeholder" => "beschrijving event","rows"=>"3")) .
				new Input("date", "date", array("class" => "form-control", "placeholder" => "date: xx/xx/xxxx")) .
				new Input("time", "time", array("class" => "form-control", "placeholder" => "time: xx:xx")) .
				new Input("email", "text", array("class" => "form-control", "placeholder" => "info@yourevent.com")) .
				new Input("site", "text", array("class" => "form-control", "placeholder" => "http://yourevent.com")) .

				new Input("picture", "text", array("class" => "form-control", "placeholder" => "img: url")) .
				new Button("make event", array("class" => "btn btn-lg btn-primary btn-block", "type" => "submit","name"=>"add"))
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