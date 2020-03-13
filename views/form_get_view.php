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
        <form  action="recibe.php" id="form_contact">
            <h1>Formulario de contacto</h1>
            <input required autofocus type="text" class="form--control" placeholder="Su nombre" name="nombre" id="nombre" value="">
            <input required type="email" class="form--control" placeholder="Su correo electrónico" name="correo" id="correo" value="">
            <textarea required class="form--control" name="mensaje" placeholder="Su mensaje" id="mensaje"></textarea>            
            <input type="submit" name="submit" class="btn btn--primary" value="Enviar correo">
        </form>
    </main>
</body>
</html>