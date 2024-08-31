<?php
include_once('App/Model/cuentaModel.php');
class cuentaController{
    private $cuentamodel;
    public function FormularioCuenta(){
        $vista = "App/View/Usuario/formCuenta.php";
        include_once("App/View/plantillaRCuenta.php");
    }
    public function crearCuenta(){
        session_start(); 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (isset($_SESSION['id_usuario'])) {
                $id_usuario = $_SESSION['id_usuario'];
                $tipo_cuenta = $_POST['tipo_cuenta'];
                $nombreCuenta = $_POST['nombreCuenta'];
                $moneda = $_POST['moneda'];
            $this->cuentamodel = new cuentaModel();
            $resultado = $this->cuentamodel->RegistrarCuenta($tipo_cuenta,$nombreCuenta,$moneda,$id_usuario);
                if ($resultado) {
                    header('Location: http://localhost/Banco/?C=cuentaController&M=mostrarCuentas');
                } else {
                    $vista = "App/View/Usuario/formCuenta.php";
                    include_once("App/View/plantilla1.php");
                }
            }
        }
    }
    public function mostrarCuentas() {
        session_start();
        if (isset($_SESSION['logedin']) && $_SESSION['logedin'] === true) {
            if (isset($_SESSION['id_usuario'])) {
                $id_usuario = $_SESSION['id_usuario'];
                $this->cuentamodel = new cuentaModel();
                $cuentas = $this->cuentamodel->mostrarCuentas($id_usuario);
                $vista = "App/View/Cuentas/cuentasUsuario.php";
                include_once("App/View/plantillaRCuenta.php");
            } else {
                echo "ID de usuario no encontrado en la sesión.";
            }
        } else {
            header('Location: http://localhost/Banco/?C=usuarioController&M=Login');
        }
    }
    public function inicio() {
        session_start();
        if (isset($_GET['id_cuenta'])) {
            $id_cuenta = $_GET['id_cuenta'];
            $_SESSION['id_cuenta'] = $id_cuenta;
        } else {
            echo "No se pasó ningún ID de cuenta.";
        }
        if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == true) {
            $vista = "App/View/Usuario/inicio.php";
            include_once("App/View/Usuario/plantilla2.php");
        } else {
            header('Location: http://localhost/Banco?C=usuarioController&M=Login');
        }
    }
    public function eliminarCuenta(){
        if($_SERVER['REQUEST_METHOD']=='GET'){
            $id_cuenta=$_GET['id_cuenta'];
            $this->cuentamodel=new cuentaModel();
            $respuesta=$this->cuentamodel->eliminarCuenta($id_cuenta);
            if($respuesta){
                header("location:http://localhost/Banco/?C=cuentaController&M=mostrarCuentas");
            }else{
                header("location:http://localhost/Banco/?C=cuentaController&M=mostarCuentas");
            }
        }
    }
}
?>