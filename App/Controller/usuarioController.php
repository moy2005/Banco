<?php
include_once('App/Model/usuarioModel.php');
include_once('App/Model/cuentaModel.php');
class usuarioController{
    private $usuariomodel;
    private $cuentamodel;
    public function Login(){
        $vista = "App/View/Usuario/login.php";
        include_once("App/View/plantillaLogin.php");
    }
    public function formularioRegistro(){
        $vista = "App/View/Usuario/registro.php";
        include_once("App/View/plantillaRegistro.php");
    }
    public function IniciarSesion() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $correo = $_POST['email'];
            $contrasena = $_POST['password'];
            $this->usuariomodel = new usuarioModel();
            $respuesta = $this->usuariomodel->IniciarSesion($correo, $contrasena);
            if ($respuesta) {
                session_start();
                $_SESSION['logedin'] = true;
                $_SESSION['id_usuario'] = $respuesta['id_usuario'];
                $this->cuentamodel = new cuentaModel();
                $cuentaExistente = $this->cuentamodel->VerificarCuenta($_SESSION['id_usuario']);
                if ($cuentaExistente) {
                    header('Location: http://localhost/Banco/?C=cuentaController&M=mostrarCuentas');
                } else {
                    header('Location: http://localhost/Banco/?C=cuentaController&M=FormularioCuenta');
                }
            } else {
                $mensaje = "Error al Iniciar Sesión. Correo o contraseña incorrectas.";
                $vista = "App/View/Usuario/login.php";
                include_once("App/View/plantillaLogin.php");
            }
        }
    }    
    public function cerrarSesion(){
        session_start();
        $_SESSION['logedin']=false;
        header("location:http://localhost/Banco/?C=usuarioController&M=Login");
    }
    public function crearUsuario() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario = array(
                'nombre' => $_POST['nombre'],
                'apaterno' => $_POST['apaterno'],
                'amaterno' => $_POST['amaterno'],
                'correo' => $_POST['correo'],
                'contrasena' => $_POST['contrasena'],
                'ciudad' => $_POST['ciudad'],
                'localidad' => $_POST['localidad'],
                'telefono' => $_POST['telefono']
            );
            $usuariomodel = new usuarioModel();
            $resultado = $usuariomodel->RegistrarUsuario($usuario);
            if ($resultado) {
                $vista = "App/View/Usuario/login.php";
                include_once("App/View/plantillaLogin.php");
            } else {
                $vista = "App/View/Usuario/registro.php";
                include_once("App/View/plantillaRegistro.php");
            }
        }
    }
}
?>