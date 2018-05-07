<?php
namespace App\Controller;

use Cake\Routing\Router;
use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;


use App\Model\Entity\Usuario;

Class UsuarioController extends AppController{

    public function perfil(){
        session_start();
        $id = $_SESSION["user_id"];

        $conexion = mysqli_connect('localhost','wplanneruser', 'wplannerpassword','wplannerfrankchela');
        $consulta = "select *  from usuario where idUsuario like '".$id."'";
        $infoBD = mysqli_fetch_row(mysqli_query($conexion,$consulta));
        $usuario = new Usuario();
        $usuario->setNombres($infoBD[1]);
        $usuario->setApellidos($infoBD[2]);
        $usuario->setUsuario($infoBD[3]);

        mysqli_close($conexion);
        $this->set('usuario', $usuario);
    }

}