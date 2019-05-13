<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="https://newsweekespanol.com/wp-content/uploads/2018/01/Netflix-Logo-png.jpg">
	<title>inicio de secion</title>
  <style>
        body{
    /*margin: 0;
    padding: 0;*/
    font-family: sans-serif;
    background: linear-gradient(to right,#0f4caf, #000000);
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
    background: #03C4F8;
}

.je input[type = "submit"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #26eb03;
    padding: 4px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
}


</style>

</head>
<body>

<div class="box">
    <form  action="<?php echo site_url();?>/usu_controll" method="post">
            <h1>INICIAR SESION</h1>
            <input type="text" name="usuario" placeholder="username">
            <input type="password" name="pass" placeholder="password">
            <input type="submit" value="Ingresar" name="datosUsuario" placeholder="entrar">
    </form>
        
    <form  action="<?php echo site_url();?>/con_regis" method="post">
        <input style="border: 2px solid #F80358;" type="submit" value="registrarte" name="registrarse" placeholder="registrarse">
    </form>        
    
</div>
</body>
</html>