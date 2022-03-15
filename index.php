
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Archivos</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
        <link rel=stylesheet href=css/estilo.css />
    </head>
    <body>
        <h2>Subir imagenes</h2>
        <form method="post" enctype="multipart/form-data" action="php/pedido.php">
            <label for="usuario">Inicio de sesión Falso</label><br />
            <input type="text" name="usuario" placeholder="usuario"><br />
            <input type="pw" name="password" placeholder="contraseña"><br />
            <input type="submit" name="enviar">
        </form>
        
    </body>
</html>