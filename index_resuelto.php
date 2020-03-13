<?php
//phpinfo();
$validadoBool=false;
$errores='';
$nombre='';
$correo='';
$mensaje='';

if(isset($_POST["submit"])){//isset() comprueba si una variable fue definidad
    $nombre=trim($_POST['nombre']);
    $correo=trim($_POST['correo']);
    $mensaje=trim($_POST['mensaje']);
    if(!empty($nombre)){
        $nombre = filter_var($nombre,FILTER_SANITIZE_STRING);
        
    }else{
        $errores.='El campo nombre no puede estar vacío<br>';
    }
    if(!empty($correo)){
        $correo = filter_var($correo,FILTER_SANITIZE_EMAIL);
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            $errores.='El campo Correo no es válido<br>';
        }
    }else{
        $errores.='El campo correo no puede estar vacío<br>'; 
    }

    if(!empty($mensaje)){
        $mensaje=htmlspecialchars($mensaje);
        $mensaje=stripcslashes($mensaje); //evitamos que el usuario inyecte código
    }else{
        $errores.='El campo mensaje no puede estar vacío<br>';
    }

    if(!$errores){
        $validadoBool=true;
        // $destinatario="xurxo@webferrol.com";
        // $asunto="Prueba";
        // $mensaje_preparado="De: $nombre \n";
        // $mensaje_preparado.="Correo: $correo \n";
        // $mensaje_preparado.="Mensaje: $mensaje";
        // mail($destinatario,$asunto,$mensaje);
    }
        
}
require_once("views/form_post_view.php");
