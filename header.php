<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>La tele según Caamaño, por una televisión mejor siempre</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/reset.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/responsive.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url') ?>/js/jquery.slides.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_url') ?>/css/carousel.css" rel="stylesheet">
    <script>
    $(document).ready(function(){ 
   $('#alternar-busqueda').on('click',function(){
      $('#busqueda').toggle('slow');
   });
   $('.boton-top').click(function(){
    $('body,html').animate({scrollTop : 0}, 500);
    return false;
});

   });
</script>
</head>
<body>
	<header>
		<div class="container">
			<div id="logo"><img src="http://i.imgur.com/lSayLOg.png" /></div>
			   <div class="buttom">
      <nav>
        <ul class="list-inline">
          <li><a href="#">Home</a></li>
          <li><a href="#">Contacto</a></li>
          <li><a href="#">TV Digital</a></li>
          <li><a href="#" id="alternar-busqueda"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></li>
          </ul>
      </nav>   
         </div>
		</div>
		
			
	</header>
<div id="busqueda" style="display:none">

      <div class="container">
        <div class="input-group">
      <input type="text" class="form-control" placeholder="Busqueda...">
      <span class="input-group-btn">
        <button class="btn btn-danger" type="button">Buscar</button>
      </span>
    </div>
      </div>
    </div>