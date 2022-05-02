<?php
    include "connection.php";
    $conn=conexion();
    $query="SELECT *FROM publicaciones;";
	$resultado=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	
	
	<meta charset="UTF-8">
    	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" href="css/burbujas.css">
	<link rel="stylesheet" href="css/smartphone.css">
	<title>My Blog</title>
</head>
<body>
	<!--cabeza-->
	<header class="header">
		<!--<div id="encabezado">-->
	    	<div id="logo">
	    		<marquee direction="right">Todo Plus</marquee>
	    	</div>

	    	<div id="menu" >
	    		<ul>
	    			<li><a href="" class="active-menu">Home</a></li>
	    			<li><a href="html/Peliculreseña1.html" class="enlace">Peliculas</a></li>
	    			<li><a href="html/videojuegos.html" class="enlace">Videojuegos</a></li>
	    			<li><a href="html/Musica.html" class="enlace">Musica</a></li>
	    		</ul>
	    	</div> 
	    <!--</div>-->
	      <!--EFECTO BURBUJA-->
	    <div class="burbujas">
	    	<div class="burbuja"></div>
	    	<div class="burbuja"></div>
	    	<div class="burbuja"></div>
	    	<div class="burbuja"></div>
	    	<div class="burbuja"></div>
	    	<div class="burbuja"></div>
	    	<div class="burbuja"></div>
	    	<div class="burbuja"></div>
	    	<div class="burbuja"></div>
	    	<div class="burbuja"></div>
	    </div>
	</header>

	<section id="principal">
		<section id="publicaciones">
                <?php 
                while($publicaciones=mysqli_fetch_assoc($resultado)){ ?>
				<article class="post">
                
                
					<a href="<?php echo $publicaciones['LinkTitulo']?>" class="enlace-post"></h2>
						<h2 class="titulo-post"><?php echo $publicaciones['Titulo']?></h2>
					</a>
					<img src="<?php echo $publicaciones['LinkImagen']?>" class="img-post">
					<p>
						<strong>Por: </strong><span class="datos-publicaciones"><?php echo $publicaciones['Autor']?></span>
						&nbsp; &nbsp; 
						<strong>Fecha: </strong><span class="datos-publicaciones"><?php echo $publicaciones['Fecha']?></span>
					</p>
					<p class="parrafo-post">
                    <?php echo $publicaciones['Parrafo']?>
					</p>

					<a href="<?php echo $publicaciones['LinkLeerMas']?>" class="leer-mas">Leer mas...</a>&nbsp; &nbsp;
					<span class="num-comentarios"><?php echo $publicaciones['Numero de comentarios']." comentarios"?></span> 
				</article>
                <?php } ?>
				<!--Articulo principal 2-->
				

				<!--Articulo principal 5-->
				<div id="paginacion" style="text-align:center">
					<p>Anteriores publicaciones &nbsp; &nbsp; <a href="https://cnnespanol.cnn.com/seccion/mundo/"class="enlace-paginacion">
					Siguientes publicaciones</a></p><br>
					<p><h1>"Motivacion del dia de hoy"</h1></p>
					<!--GIF-->
			
					<p><img class="gif" src="https://cdn.domestika.org/c_limit,dpr_auto,f_auto,q_auto,w_820/v1421714011/content-items/001/187/332/gif-personajillos-original.gif?1421714011" alt=""></p>
					<img></img>div>
						<button onclick="playPause()">Reproducir/Pausar</button> 
						<button onclick="makeBig()">Grande</button>
						<button onclick="makeSmall()">Pequeño</button>
						<button onclick="makeNormal()">Normal</button>
					<br><br>
					<!--VIDEO-->
					<video id="video1" width="420" autoplay muted controls="">
				    	<source src="video/reflejo.mp4" type="video/mp4">
				    	<source src="video/movie.ogg" type="video/ogg">
				    	Su navegador no es compatible con video HTML.
  					</video>
				</div>
					<script> 
					var myVideo = document.getElementById("video1"); 

					function playPause() { 
					  if (myVideo.paused) 
					    myVideo.play(); 
					  else 
					    myVideo.pause(); 
					} 

					function makeBig() { 
					    myVideo.width = 560; 
					} 

					function makeSmall() { 
					    myVideo.width = 320; 
					} 

					function makeNormal() { 
					    myVideo.width = 420; 
					} 
					</script> 
		</section>
					
		<!--Lado derecho-->	
		<section id="sidebar">
			<section id="buscar">
				<h2 class="encabezado-sidebar">Buscar</h2>
				<form>
					<input type="text" name="buscar" placeholder="buscar">
					<button class="boton">ok</button>
				</form> 
			</section>

			<section id="categorias">
				<h2 class="encabezado-sidebar">Categorias</h2>
				<a href="" class="enlace-sidebar">Peliculas</a>
				<a href="html/videojuegos.html" class="enlace-sidebar">Videojuegos</a>
				<a href="html/Musica.html" class="enlace-sidebar">Musica</a>
			</section>

			<section id="sitios-amigos">
				<h2 class="encabezado-sidebar">Sitios-Amigos</h2>
				<a href="https://www.meetme.com/#home" class="enlace-sidebar">MeetMe</a>
				<a href="https://www.skout.com/" class="enlace-sidebar">Skout</a>
				<a href="https://bumble.com/es/" class="enlace-sidebar">Bumble</a>
				<a href="https://ablo.live/#/landing/getstarted" class="enlace-sidebar">Ablo</a>
				<a href="https://www.yubo.live/es/" class="enlace-sidebar">Yubo</a>
			</section>

			<section id="sitios-amigos">
				<h2 class="encabezado-sidebar">Publicidad</h2>
				<a href="https://www.revistadyna.com/Articulos/Ficha.aspx?idMenu=a5c9d895-28e0-4f92-b0c2-c0f86f2a940b&Cod=10180&codigoacceso=d03d7770-1e26-48ff-914b-cb11691baf08" class="enlace-sidebar"class="enlace-sidebar">
					<h4>ANÁLISIS DEL CONTROL CLIMÁTICO EN UN INVERNADERO DE ROTACIÓN DE CULTIVOS</h4>
					<p>El desarrollo de políticas energéticas para reducir el consumo de energía y el impacto ambiental y la importancia del sector agrícola con sus industrias asociadas en regiones, como Extremadura, con la mayor parte de la producción agrícola mediante cultivo tradicional, hace que sea interesante el aprovechamiento de terrenos naturalmente no aptos para el cultivo, así como mejorar la productividad gracias al control climático mediante energías renovables en invernaderos, ayudando a los agricultores a obtener productos competitivos. </p>
				</a>

				<a href="https://www.revistadyna.com/Articulos/Ficha.aspx?idMenu=a5c9d895-28e0-4f92-b0c2-c0f86f2a940b&Cod=10212&codigoacceso=030d460c-212e-431f-a5a4-5c4790ddbd28" class="enlace-sidebar"class="enlace-sidebar">
					<h4>BIOPLÁSTICO ELABORADO DE CÁSCARAS DE NARANJA</h4>
					<p>Este estudio usa los desperdicios de las cáscaras de naranja para crear un biopolímero que puede ser utilizado para distintos propósitos. Para lograr esto, se evaluaron diferentes tecnologías en el proceso de obtención del biopolímero tratando de hacer un proceso lo más amigable con el medio ambiente.</p>
				</a>
				
				<a href="https://www.revistadyna.com/Articulos/Ficha.aspx?idMenu=a5c9d895-28e0-4f92-b0c2-c0f86f2a940b&Cod=9969&codigoacceso=074ad059-03a3-4c42-9cc3-5c47d1083b76" class="enlace-sidebar"class="enlace-sidebar">
					<h4>REALMENTE ¿QUÉ APRENDE EL ALUMNADO DE PRIMER CURSO DE INGENIERÍA?</h4>
					<p>Hace décadas que el foco de la educación ha pasado de la enseñanza al aprendizaje, es decir el foco principal son las necesidades y habilidades del alumnado que aprende, y no está en el/la docente que enseña</p>
				</a>
			</section>

		</section>
	</section>

</body>
</html>
