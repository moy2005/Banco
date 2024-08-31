<?php
class usuarioModel{
    private $coneccion;
    public function __construct()
    {
        require_once("App/Config/BDConecction.php");
        $this->coneccion=new BDConecction();
    }
    public function IniciarSesion($correo, $contrasena) {
        $consulta = "SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena';";
        $coneccion = $this->coneccion->abrirConeccion();
        $resultado = $coneccion->query($consulta);
        $respuesta = $resultado->num_rows == 1 ? $resultado->fetch_assoc() : false;
        $this->coneccion->cerrarConeccion();
        return $respuesta;
    }
    public function RegistrarUsuario($usuario){
        if(!isset($usuario['nombre'], $usuario['apaterno'], $usuario['amaterno'], $usuario['correo'], $usuario['contrasena'], $usuario['ciudad'], $usuario['localidad'], $usuario['telefono'])){
            return false;
        }
        $nombre = $usuario['nombre'];
        $apaterno = $usuario['apaterno'];
        $amaterno = $usuario['amaterno'];
        $correo = $usuario['correo'];
        $contrasena = $usuario['contrasena'];
        $ciudad = $usuario['ciudad'];
        $localidad = $usuario['localidad'];
        $telefono=$usuario['telefono'];
        $consulta = "INSERT INTO usuarios(nombre,apaterno,amaterno,correo,contrasena,ciudad,localidad,telefono)
        VALUES('$nombre','$apaterno','$amaterno','$correo','$contrasena','$ciudad','$localidad','$telefono')";
        $coneccion = $this->coneccion->abrirConeccion();
        $resultado = $coneccion->query($consulta);
        $respuesta = $resultado ? true : false;
        $this->coneccion->cerrarConeccion();
        return $respuesta;
    }
}
?>