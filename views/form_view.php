<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['SERVER_NAME'];?>/PROYECTOS/FORMARIO_1/css/styles.min.css">
    <title>Formulario de contacto</title>
</head>
<body>
    <main class="container">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" id="form_contact">
            <h1>Formulario de contacto</h1>
            <input required autofocus type="text" class="form--control" placeholder="Su nombre" name="nombre" id="nombre" value="<?php if (isset($nombre)) echo $nombre;?>">
            <input required type="email" class="form--control" placeholder="Su correo electrónico" name="correo" id="correo" value="<?php echo ($correo)??"";?>">
            <textarea required class="form--control" name="mensaje" placeholder="Su mensaje" id="mensaje"><?php echo ($mensaje)??"";?></textarea>            
            <input type="submit" name="submit" class="btn btn--primary" value="Enviar correo">
           
            <?php 
                if(isset($msg) && !empty($msg))
                    echo $msg;
            ?>

        </form>
    </main>
    <script src="js/script.js"></script>
</body>
</html>