<?php 
include_once("html.php");
include("evenementen.php");

$chosen_event = $_GET["id"];

$par = [];

 $image; 
 $title;
 $discription;
 $date;
 $time;
 $site;
 $email;
 $content = "nothing found";
foreach ($events as  $event) {
		if($event->id == $chosen_event)
		{
			$title = $event->title;
			$par[] = new heading($title);

			$inhoud = new heading($event->title,1, array("class" => "form-signin-heading"));
			$inhoud .= new Paragraph("info: ".$event->discription);
			$inhoud .= new Paragraph("datum & tijd: ".$event->date ." @ ". $event->time);
			$inhoud .= new Link("website",["href"=> $event->site]);
			$inhoud .= new Paragraph("Contact: ".$event->email);
			$inhoud .= new Image($event->image,"image of event");
			$content =  new Div( $inhoud, array("class" => "jumbotron"));

			$title = $


			$dbinhoud = new heading($event->title,1, array("class" => "form-signin-heading"));
			$dbinhoud .= new Paragraph("info: ".$event->discription);
			$dbinhoud .= new Paragraph("datum & tijd: ".$event->date ." @ ". $event->time);
			$dbinhoud .= new Link("website",["href"=> $event->site]);
			$dbinhoud .= new Paragraph("Contact: ".$event->email);
			$dbinhoud .= new Image($event->image,"image of event");
				
		}
		
	}





	

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>details</title>
 		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/signup.css">
 </head>
 <body>
 	<?= $content ?>
 </body>
 </html>