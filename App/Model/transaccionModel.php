<?php
class transaccionModel {
    private $coneccion;
    public function __construct() {
        require_once("App/Config/BDConecction.php");
        $this->coneccion = new BDConecction();
    }
    public function realizarDeposito($id_cuenta, $monto) {
        $consulta = "INSERT INTO transacciones (id_cuenta, tipo_transaccion, monto)
                     VALUES ($id_cuenta, 'Deposito', $monto)";
        $coneccion = $this->coneccion->abrirConeccion();
        $resultado = $coneccion->query($consulta);
        $respuesta = $resultado ? true : false;
        $this->coneccion->cerrarConeccion();
        return $respuesta;
    }
    public function realizarRetiro($id_cuenta, $monto) {
        $consulta = "INSERT INTO transacciones (id_cuenta, tipo_transaccion, monto)
                     VALUES ($id_cuenta, 'Retiro', $monto)";
        $coneccion = $this->coneccion->abrirConeccion();
        $resultado = $coneccion->query($consulta);
        $respuesta = $resultado ? true : false;
        $this->coneccion->cerrarConeccion();
        return $respuesta;
    }
}
?>