<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Descargar peliculas pepelis</title>
	<link rel="shortcut icon" type="image/x-icon" href="https://newsweekespanol.com/wp-content/uploads/2018/01/Netflix-Logo-png.jpg">

	<style>
		/*aqui empieza el estilo de titulo prron*/
		@import url(https://fonts.googleapis.com/css?family=Erica+One);
/* BODY 
body {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;  
  height: 100%;
  background-color: pink;
 
  background-attachment: fixed;
  background-size: 100% 100%;
  overflow: hidden;
}*/
::selection {
  background: transparent;
}

h1 {
  cursor: default;
  position: absolute;
  top: 30px;
  left: 0;
  right: 0;
  bottom: 0;
  height: 100px;
  margin: auto;
  display: block;
  
  -webkit-animation: bounce .3s ease infinite alternate;
  
  font-family: 'Erica One', cursive;
  font-size: 80px;
  color: black;
  text-align: center;
  line-height: 10px;
  text-shadow: 0 1px 0 #CCC,
               0 2px 0 #CCC,
               0 3px 0 #CCC,
               0 4px 0 #CCC,
               0 5px 0 #CCC,
               0 6px 0 transparent,
               0 7px 0 transparent,
               0 8px 0 transparent,
               0 9px 0 transparent,
               0 10px 10px rgba(0, 0, 0, .6);
}
/* ANIMATION */
@-webkit-keyframes bounce {
  100% {
    top: -30px;
    
    text-shadow: 0 1px 0 #CCC,
                 0 2px 0 #CCC,
                 0 3px 0 #CCC,
                 0 4px 0 #CCC,
                 0 5px 0 #CCC,
                 0 6px 0 #CCC,
                 0 7px 0 #CCC,
                 0 8px 0 #CCC,
                 0 9px 0 #CCC,
                 0 30px 30px rgba(0, 0, 0, .3);
  }
}		
		/*aqui empieza el estilo de titulo prron*/
		#contenido { 
			width: 500px; margin: 0 auto; 
		}
		.mas{ 
			font-size: 300% 
		}	
		.maso{ 
			font-size: 200% 
		}
		body{
			background:linear-gradient(to right,#0C0C0B, #F1F803);
            height: 100%;
		}
	
		.je input[type = "submit"]{
			border: 0;
			background: none;
			display: block;
			margin: 60px auto;
			text-align: center;
			border: 9px solid #C75EC4;
			padding: 4px 40px;
			outline: none;
			color: white;
			border-radius: 24px;
			transition: 0.25s;
			cursor: pointer;
		}
		.je input[type = "submit"]:hover{
			background:linear-gradient(to right,#0C0C0B, #FA00EB);
		}

		.je p{
			font-size: 200%;
		}
    /*aqui estilo boton cerrar sesion*/
    .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }
			
	</style>

	<!--aqui se rento la pelicula-->
</head>
<body>

<?php
/*
session_start();
ob_start();
$_SESSION['usuario']=$idus[0]->nombre;
*/
?>
<center>
<div class="je">
<h1 class="mas">Bienvenido a la renta de peliculas</h1>
<label>Usuario: <strong class="maso"><?php echo $_POST['usuario']?></strong></label>

<a href=""<?php echo site_url();?>/inicio" class="button">Link Button</a>

<?php foreach ($peliculas as $i => $peli): ?>
		<!--<p><?=$peli->idpeliculas;?></p>-->
		<p><?=$peli->nombre;?></p>
		<p><?=$peli->tipo;?></p>
		<img align-self:center; value="<?=$peli->imagen;?>" src="<?=$peli->imagen;?>"><br>
		<iframe class="youtube-player" data-id="VIDEO_ID" width="560" height="315" src="<?=$peli->trailer;?>" frameborder="0" allowfullscreen></iframe>
		<form action="<?=$peli->link;?>">
    	<input type="submit" value="Descargar" />
		</form>
<?php endforeach;?>


</div>
</center>
</body>
</html>
