<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.min.css">
    <title>Formulario de contacto</title>
</head>
<body>
    <main class="container">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="form_contact">
            <h1>Formulario de contacto</h1>
<input required <?php if(!empty($errores)):?>aria-describedby="nombre_error"<?php endif;?> autofocus type="text" class="form--control" placeholder="Su nombre" name="nombre" id="nombre" value="<?php echo $nombre; ?>">
            <input required type="email" class="form--control" placeholder="Su correo electrónico" name="correo" id="correo" value="<?php echo $correo; ?>">
            <textarea required class="form--control" name="mensaje" placeholder="Su mensaje" id="mensaje"><?php echo $mensaje;?></textarea>
            <?php
            if(!empty($errores)):
            ?>
            <!-- mensaje error aria -->
            <div class="message error" id="nombre_error" role="alert">
               <?php echo $errores;?>
            </div> 
            <?php
            endif;
            ?>

            <?php if($validadoBool):?>
            <!-- mensaje de alerta -->
            <div class="message success" id="message" role="alert" aria-hidden="false">
                <!-- Hi There. This is what an alert looks, and sounds like. -->
                Mensaje enviado correctamente.
            </div>
            <?php endif; ?>
            <input type="submit" name="submit" class="btn btn--primary" value="Enviar correo">
        </form>
    </main>
    <script src="js/script.js"></script>
</body>
</html>