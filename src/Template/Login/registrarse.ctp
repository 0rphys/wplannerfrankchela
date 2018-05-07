<?php
use Cake\Routing\Router;    
$this->layout = false;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"/>
    <?= $this->Html->css("estilos.css") ?>
<body>
<?php require 'header.php' ?>
<p></p>
<h1>Registrate en Frankchela</h1>
    <form action="<?= Router::url(['controller'=>'Login', 'action'=>'signup']) ?>" method="POST">
    <input type="text" name="nombre" placeholder="Nombres" required maxlength = 25>
    <input type="text" name="apellido" placeholder="Apellidos" required maxlength = 25>
    <input type="text" name="usuario" placeholder="Usuario" required maxlength = 16>
    <input type="password" name="password" placeholder="Contraseña" required maxlength = 16>
    <input type="password" name="repassword" placeholder="Confirme contraseña" required maxlength = 16>
    <input type="submit" value="Enviar">
    </form>
    <p></p>
    Ya tienes una cuenta?, puedes  <?= $this->Html->link('Iniciar sesion','/Login/iniciosesion')?>
    <p></p>
    <p></p>
</body>
</html>