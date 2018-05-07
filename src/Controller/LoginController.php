<?php
namespace App\Controller;

use Cake\Routing\Router;
use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

Class LoginController extends AppController{

    public function index(){
        return $this->redirect('/Login/iniciosesion');
    }

    public function iniciosesion(){
        $output;
        $info_sesion;
        session_start();
        if(isset($_SESSION["user_id"])){
            $output = 1;
            return $this->redirect('/Usuario/perfil');
        }else{
            $output = 2;
        }

        $this->set('result', $output);
    }

    public function registrarse(){
        
    }

    public function login(){

        $output;
        if(!empty($_POST['usuario']) || !empty($_POST['password'])){
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
            $consulta = "select count(*) from usuario where login like '".$usuario."' and password like '".$password."'";
            
            $conexion = mysqli_connect('localhost','wplanneruser', 'wplannerpassword','wplannerfrankchela');
            if($conexion->connect_error) {
                $output = 3;
            }else{
                $resultado = intval(mysqli_fetch_row(mysqli_query($conexion,$consulta))[0]);
                
                if($resultado == 1){
                    $consulta = "select idUsuario from usuario where login like '".$usuario."' and password like '".$password."'";
                    $idUsuario = mysqli_fetch_row(mysqli_query($conexion,$consulta))[0];
                    session_start();
                    $_SESSION["user_id"] = $idUsuario;
                    return $this->redirect('/Usuario/perfil');
                    $output = 4;
                }else{
                    $output = 5;
                }
                mysqli_close($conexion);
            }
        }else{
            $output = 6;
        }
        $this->set('result', $output);
        $this->render('/Login/iniciosesion');
    }

    public function signup(){
        $output;
        if(!empty($_POST['nombre']) || !empty($_POST['apellido']) || !empty($_POST['usuario']) || !empty($_POST['password']) || !empty($_POST['repassword'])){
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
            $repassword = $_POST['repassword'];

            if($password != $repassword){
                $this->render("/Login/registrarse");
                $output = 0;
            }else{
                $consulta = "select count(*) from usuario where login like '".$usuario."'";
                $conexion = mysqli_connect('localhost','wplanneruser', 'wplannerpassword','wplannerfrankchela');
                if($conexion->connect_error) {
                    $output = 1;
                }else{
                    $resultado = intval(mysqli_fetch_row(mysqli_query($conexion,$consulta))[0]);         
                    if($resultado == 0){
                        $consulta = "INSERT INTO `wplannerfrankchela`.`usuario` (`nombre`, `apellido`, `login`, `password`) VALUES ('".$nombre."', '".$apellido."', '".$usuario."', '".$password."')";
                        mysqli_query($conexion, $consulta);
                        return $this->redirect('/Login/iniciosesion');
                        $output = 2;
                    }else{
                        $output=3;
                    }
                    mysqli_close($conexion);
                }
            }
        }else{
            $output = 4;
        }

        $this->set('result', $output);
        $this->render('/Login/registrarse');
    }

    public function perfil(){

    }

    public function logout(){
        session_start();
        session_destroy();
        return $this->redirect('/Login/iniciosesion');
    }
    
}

?>