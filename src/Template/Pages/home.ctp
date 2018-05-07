<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;
$cakeDescription = 'Frankchela Casa eventos';
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title><?= $cakeDescription ?></title>
    <?php $this->Html->css("")?>   

</head>
<body>    

    <div class="centrado">
        <div class="azul">
            Bienvenido al Sistema Visor de Cartas
        </div>    
       

        <p class="centrado"> 
            Acceda a <?php echo $this->Html->link('Login','/Login/iniciosesion')?>
    
    
        </p>
        
            
        <p class="centrado"> 
                Sitio web creado dinámicamente con la carta solicitada, usando PHP
        </p>    
        
    </div>   


</body>
</html>