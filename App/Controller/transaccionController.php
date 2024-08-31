<?php
include_once('App/Model/transaccionModel.php');
include_once('App/Model/cuentaModel.php');
class transaccionController{
    private $transaccionModel;
    private $cuentamodel;
    public function deposito() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (isset($_GET['id_cuenta']) && !empty($_GET['id_cuenta'])) {
                $id_cuenta = $_GET['id_cuenta'];
                echo $id_cuenta; 
                $this->cuentamodel = new cuentaModel();
                $cuentas = $this->cuentamodel->obtenerCuentaPorId($id_cuenta);                
                $vista = "App/View/Transacciones/deposito.php";
                include_once("App/View/Usuario/plantilla2.php");
            } else {
                echo "Error: No se recibió un ID de cuenta válido.";
            }
        }
    }
    public function realizarDeposito() {
        session_start();
        echo 'entro primero';
        echo 'Método: ' . $_SERVER['REQUEST_METHOD'];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo 'Datos recibidos en POST: ';
           print_r($_POST);
            echo 'entro segundo';
            $id_cuenta = $_POST['id_cuenta'];
            $monto = $_POST['monto'];
            $this->transaccionModel = new transaccionModel();
            $resultado = $this->transaccionModel->realizarDeposito($id_cuenta, $monto);
            if ($resultado) {
                echo 'entro tercero';
                header('Location: http://localhost/Banco?C=transaccionController&M=deposito&id_cuenta=' . $id_cuenta);
                exit();
            } else {
                $mensaje = "Error al realizar el depósito.";
                $vista = "App/View/Transacciones/deposito.php";
                include_once("App/View/Usuario/plantilla2.php");
            }
        }
    }
}
?>