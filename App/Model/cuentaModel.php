<?php
class cuentaModel {
    private $coneccion;
    public function __construct() {
        require_once("App/Config/BDConecction.php");
        $this->coneccion = new BDConecction();
    }
    public function VerificarCuenta($id_usuario) {
        $consulta = "SELECT * FROM cuentas WHERE id_usuario='$id_usuario' LIMIT 1;";
        $coneccion = $this->coneccion->abrirConeccion();
        $resultado = $coneccion->query($consulta); 
        $respuesta = $resultado->num_rows == 1 ? $resultado->fetch_assoc() : false;   
        $this->coneccion->cerrarConeccion();       
        return $respuesta;
    }
    public function RegistrarCuenta($tipo_cuenta,$nombreCuenta,$moneda,$id_usuario){
        $consulta = "INSERT INTO cuentas(tipo_cuenta,nombreCuenta,moneda,id_usuario)
                     VALUES('$tipo_cuenta', '$nombreCuenta', '$moneda', $id_usuario)";    
        $coneccion = $this->coneccion->abrirConeccion();
        $resultado = $coneccion->query($consulta);
        $respuesta = $resultado ? true : false;
        $this->coneccion->cerrarConeccion();
        return $respuesta;
    }
    public function mostrarCuentas($id_usuario) {
        $consulta = "SELECT * FROM cuentas WHERE id_usuario=$id_usuario ORDER BY id_cuenta DESC"; 
        $conection = $this->coneccion->abrirConeccion();
        $resultado = $conection->query($consulta);
        $cuentas = array();
        if ($resultado) {
            while ($cuenta = $resultado->fetch_assoc()) {
                $cuentas[] = $cuenta;
            }
            $resultado->free();  
        } else {
            echo "Error en la consulta: " . $conection->error;
        }
        $this->coneccion->cerrarConeccion();
        return $cuentas;
    }
    public function eliminarCuenta($id_cuenta) {
        $consulta = "DELETE FROM cuentas WHERE id_cuenta=$id_cuenta";
        $coneccion = $this->coneccion->abrirConeccion();
        $resultado = $coneccion->query($consulta);
        if ($resultado) {
            $respuesta = true;
        } else {
            $respuesta = false;
        }
        $this->coneccion->cerrarConeccion();
        return $respuesta;
    }
    public function obtenerCuentaPorId($id_cuenta) {
        $consulta = "SELECT * FROM cuentas WHERE id_cuenta=$id_cuenta;";
        $conexion = $this->coneccion->abrirConeccion();
        $resultado = $conexion->query($consulta);
        if ($resultado && $resultado->num_rows > 0) {
            $cuenta = $resultado->fetch_assoc();
        } else {
            $cuenta = false;
        }
        $this->coneccion->cerrarConeccion();
        return $cuenta;
    }
}
?>