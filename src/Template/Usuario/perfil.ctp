<?php
$this->layout = false;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    
    <title>Resultado de login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"/>
    <?= $this->Html->css("estilos.css") ?>
<body>

<p></p>
<h1>Pagina temporal de resultados de login</h1>
    <p> Apreciado <?= $usuario->getNombres() ?> <?= $usuario->getApellidos(); ?></p>
    <p>Si estás viendo esta página es porque has iniciado sesión correctamente!!</p>
    <p>Espera nuestras funcionalidades más adelante!!</p>
    <?= $this->Html->link('Cerrar sesión','/Login/logout')?>
    <p></p>
    <p></p>
</body>
</html>