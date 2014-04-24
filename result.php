<?php 
include_once("html.php");
include("evenementen.php");

$chosen_event = $_GET["event"];

$par = [];

 $image; 
 $title;
 $discription;
 $date;
 $time;
 $site;
 $email;

foreach ($events as  $event) {
		if($event->title == $chosen_event)
		{
			$title = $event->title;
			$par[] = new heading($title);

			$inhoud = new heading($event->title);
			$inhoud .= new Paragraph("info: ".$event->discription);
			$inhoud .= new Paragraph("datum & tijd: ".$event->date ." @ ". $event->time);
			$inhoud .= new Link("website",["href"=> $event->site]);
			$inhoud .= new Paragraph("Contact: ".$event->email);
			$inhoud .= new Image($event->image,"image of event");
			$content =  new Div( $inhoud);

				
		}
		
	}





	

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?= $content ?>
 </body>
 </html>