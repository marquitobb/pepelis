<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Descargar peliculas pepelis</title>
	<link rel="shortcut icon" type="image/x-icon" href="https://newsweekespanol.com/wp-content/uploads/2018/01/Netflix-Logo-png.jpg">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  
	<style>
    

	</style>

	<!--aqui se rento la pelicula-->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Pepelis</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url();?>/Welcome">inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url();?>/Welc2">salir</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" id="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" id="buscar" type="submit">Buscar</button>
    </form>
  </div>
</nav>

<?php
/*
session_start();
ob_start();
$_SESSION['usuario']=$idus[0]->nombre;
*/
?>
<div class="p-3 mb-2 bg-dark text-white">
<center>
<div class="je">
<h1 class="mas">Bienvenido a la renta de peliculas</h1>
<label>Usuario: <strong class="maso"><?php echo $_POST['usuario']?></strong></label>


<?php foreach ($peliculas as $i => $peli): ?>
		<!--<p><?=$peli->idpeliculas;?></p>-->
		<h1><?=$peli->nombre;?></h1>
		<p><?=$peli->tipo;?></p>
		<img align-self:center; width="315" height="560" value="<?=$peli->imagen;?>" src="<?=$peli->imagen;?>"><br>
    <br>
		<iframe class="youtube-player" data-id="VIDEO_ID" width="560" height="315" src="<?=$peli->trailer;?>" frameborder="0" allowfullscreen></iframe>
		<br><br><br>
    <form action="<?=$peli->link;?>">
    	<input type="button" value="Descargar" class="btn btn-primary">
		</form>
<?php endforeach;?>


</div>
</center>

</div>
</body>
</html>
