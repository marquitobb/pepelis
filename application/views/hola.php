<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="https://newsweekespanol.com/wp-content/uploads/2018/01/Netflix-Logo-png.jpg">
	<title>bienvenidos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Erica+One);
/* BODY 
https://blog.aulaformativa.com/ejemplos-efectos-de-texto-css-codepen/  <---link de la pagina
*/

  body{
    margin: 0;
    padding: 0;
    height: 100vh;
}
.circle{
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgb(55, 126, 49);
    transition: 0.2s;
    z-index: 2;
}

.circle:hover{
    z-index: 1;
}

.circle:nth-child(1){
    background: url(https://cine3-media.s3-accelerate.amazonaws.com/2019/02/5c3f6242e8b8c.jpg);
    background-attachment: fixed;
    clip-path: circle(100px at 0 0);
}
.circle:nth-child(1):hover{
    clip-path: circle(1200px at 0 0);
}
.circle:nth-child(2){
    background: url(https://cineoculto.com/wp-content/uploads/2019/01/Glass-40.jpg);
    /*background-repeat: no-repeat;*/
    background-attachment: fixed;
    clip-path: circle(100px at 100% 0);
}
.circle:nth-child(2):hover{
    clip-path: circle(1200px at 100% 0);
}
.circle:nth-child(3){
    background: url(https://www.playcamcine.com/wp-content/uploads/2018/12/MortalEngines.jpg);
    background-attachment: fixed;
    clip-path: circle(100px at 0 100%);
}
.circle:nth-child(3):hover{
    clip-path: circle(1200px at 0 100%);
}
.circle:nth-child(4){
    background: url(https://www.universomarvel.com/wp-content/uploads/2018/07/captain-marvel-logo-2.jpg);
    background-attachment: fixed;
    clip-path: circle(100px at 100% 100%);
}
.circle:nth-child(4):hover{
    clip-path: circle(1200px at 100% 100%);
}

/*aqui empieza segundo efecto*/

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
}
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
  line-height: 100px;
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

.bbcita {
  padding: 30px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 12px 2px;
  cursor: pointer;
}
.amor{
    position: relative;
            left: 0%;
            position: relative;
            top: 400px;
}

    </style>

</head>
<body>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
  
    <center>
    <h1>hola bienvenidos a pepelis!!</h1>
    <form action="<?php echo site_url();?>/Welc2" method="post">
        
        <input type="submit" class="btn btn-info col-md-2 btn-lg bbcita amor" value="entrar" name="registrarse" placeholder="registrarse">
    </form>
    </center>
    
</body>
</html>