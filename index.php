<?php
    //require_once("views/form_post_view.php");
    //require_once("views/form_get_view.php");



    //Formularios2.docx

    
    // if($_SERVER['REQUEST_METHOD']=='POST'):
    //     echo "<pre>";
    //     print_r($_POST);
    //     echo "</pre>";
    //     extract($_POST);
    // endif;
    
    
    
    if(isset($_POST['submit'])):
        extract($_POST);
        $msg="";
        if(!empty($nombre)):
            $nombre=trim($nombre);
            $nombre=filter_var($nombre,FILTER_SANITIZE_STRING);
        else:
            $msg.='El campo "Su nombre" no puede estar vacío';
        endif;


        if(!empty($correo)):            
            $correo=trim($correo);
            $correo=filter_var($correo,FILTER_SANITIZE_EMAIL);

            if(!filter_var($correo,FILTER_VALIDATE_EMAIL)):
                $msg.='El campo "Su correo" no es válido';
            endif;
        else:
            $msg.='El campo "Su correo" no puede estar vacío';
        endif;
        if(!empty($mensaje)):
            $mensaje=trim($mensaje);
            $mensaje=filter_var($mensaje,FILTER_SANITIZE_STRING);
        else:
            $msg.='El campo "Su mensaje" no puede estar vacío';
        endif;
    endif;

    include_once("views/form_view.php");
 