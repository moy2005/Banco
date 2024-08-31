<?php
define("controlador","App/Controller/");
$control= isset($_GET['C']) ? $_GET['C'] : '';
$ruta=controlador . $control . ".php";
if (is_file($ruta)) {
    require_once($ruta);
    $objeto= new $control();
    $metodo= isset($_GET['M']) ? $_GET['M'] : '';
    if (method_exists($objeto, $metodo)) {
        $objeto->$metodo();
    } else {
        require_once("App/Controller/defaultController.php");
        $default= new defaultController();
        $default->index();
    }
} else {
    require_once("App/Controller/homeController.php");
    $default= new homeController();
    $default->inicio();
}
?>