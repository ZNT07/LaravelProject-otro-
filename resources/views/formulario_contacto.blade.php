<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>
    <form action="/contacto-exito" method="post">
        @csrf
        <div class="form_group">
            <label for="nombre">Nombre:</label><hr>
            <input type="text" id="nombre" name="nombre" required><hr>
        </div>
        <div class="form_group">
            <label for="correo">Correo:</label><hr>
            <input type="email" id="correo" name="correo" required><hr>
        </div>
        <div class="form_group">
            <label for="mensaje">Mensaje:</label><hr>
            <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea><hr>
        </div>
        <input type="submit" value="Enviar"><hr>
    </form>
</body>
</html>