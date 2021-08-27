
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Réseau social pour développeur">
    <meta name="author" content="MEITE YOUSSOUF">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/starter-template/">

    <title>
		<?=
			isset($title) ? $title.' - '.WEBSITE_NAME : WEBSITE_NAME.', Rapide, Simple et Efficace'; 
		?>
	</title>

    <!-- STYLESHEET -->

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/3.4.1/readable/bootstrap.min.css" integrity="sha384-cEtSoDrbFB1ZfF3E823wseIQXTddQNKRdACknoZ9ivL6BoQcvL9qrUcA3yPxf14L" crossorigin="anonymous">
    
    <link rel="stylesheet" href="assets/css/main.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<?php include("partials/_nav.php"); ?>
<?php include("partials/_flash.php"); ?>