<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="https://newsweekespanol.com/wp-content/uploads/2018/01/Netflix-Logo-png.jpg">
	<title>Inicio de secion</title>
  <style>
        body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-image: url('https://www.findelahistoria.com/web/wp-content/uploads/2016/05/fondos-de-pantalla-de-cine-para-movil.jpg');
    /*
    background: linear-gradient(to right,#0f4caf, #000000);*/
    /*
    background: url(https://img-cdn.hipertextual.com/files/2017/03/Captura-de-pantalla-2017-03-30-a-las-11.59.05.png?strip=all&lossy=1&quality=57&resize=740%2C490&ssl=1) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    */
}
.box{
    width: 300px;
    padding: 90px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: #191919;
    text-align: center;
}
.box h1{
    color: white;
    text-transform: uppercase;
    font-weight: 500;
}

.box input[type = "text"], .box input[type= "password"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 14px 10px;
    width: 200px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type= "password"]:focus{
    width: 280px;
    border-color: #dd28b6;
}
.box input[type = "submit"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #26eb03;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
}
.box input[type = "submit"]:hover{
    background-color: #26eb03;
}

.je input[type = "submit"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #26eb03;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
}
.je input[type = "submit"]:hover{
    background-color: #FF33DA;
}


</style>

</head>
<body>

<div class="box">
    <form  action="<?php echo site_url();?>/Usu_controll" method="post">
            <h1>INICIAR SESION</h1>
            <input type="text" name="usuario" placeholder="username">
            <input type="password" name="pass" placeholder="password">
            <input type="submit" value="Ingresar" name="datosUsuario" placeholder="entrar">
    </form>
<div class="je">
    <form  action="<?php echo site_url();?>/Con_regis" method="post">
        <input style="border: 2px solid #F80358;" type="submit" value="registrarte" name="registrarse" placeholder="registrarse">
    </form>        
</div>   
    
</div>
</body>
</html>
