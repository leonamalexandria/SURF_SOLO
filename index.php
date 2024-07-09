<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Descrição do meu website">
   <meta name="Keywords" content="skate-surf">
   <link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet" />
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">
   <script src="https://kit.fontawesome.com/0ac4ca22f0.js" crossorigin="anonymous"></script>

   <title>Surf Solo</title>
</head>
<body>

      <header>
	   <div class="center">
		<div class="logo left"><a href="/">Treinamento Surf-Solo</a></div><!--logo-->
		<nav class="desktop right">
			<ul>
				<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>serviços">Serviços</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
			</ul>
		</nav>
		 <nav class="mobile right">
		 	<div class="botao-menu-mobile">
		      <i class="fa-solid fa-bars"></i>
		 	</div>
		 	<ul>
				<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>serviços">Serviços</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
			</ul>
		 </nav>
		 <div class="clear"></div><!--clear-->
	        </div><!--center-->
        </header>

   <?php

       $url = isset($_GET['url']) ? $_GET['url'] : 'home';

       if(file_exists('pages/'.$url.'.php')){
       	 include('pages/'.$url.'.php');
       } else{
       	//Podemos fazer o que quiser, pois a página não existe.
       	$pagina404 = true;
       	include('pages/404.php');
       }

   ?>


	<footer <?php if(isset($pagina404) && $pagina404 ==true) echo 'class="fixeds"';?>>
		<div class="center">
		<p>Todos os direitos resevados</p>
	        </div><!--center-->
	</footer>
   <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
   <script src="<?php echo INCLUDE_PATH; ?>js/script.js"></script>
</body>
</html>