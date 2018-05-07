<?php
use Cake\Routing\Router;
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;


$this->layout = false;

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"/>
    <?= $this->Html->css("estilos.css")?>  
</head>
<body>

    <?php require 'header.php' ?>
    <p></p>
    <h1>Iniciar Sesion </h1>
    <form action="<?= Router::url(['controller'=>'Login', 'action'=>'login']) ?>" method="POST">
    <input type="text" name="usuario" placeholder="Usuario" required maxlength = 16>
    <input type="password" name="password" placeholder="Contraseña" required maxlength = 16>
    <input type="submit" value="Entrar">
    </form>
    <p></p>
    Aún no tienes usurio en Frankchela? <?= $this->Html->link('Registrate aqui','/Login/registrarse')?>
 
</body>
</html>

