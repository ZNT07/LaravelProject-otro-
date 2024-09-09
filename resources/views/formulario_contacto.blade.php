<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>

<body>
    <h1>Formulario de Contacto</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="/contacto-exito" method="post">
        @csrf
        <div class="form_group">
            <label for="nombre">Nombre:</label>
            <hr>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required> <!-- value son para conservar lo escrito-->
            <hr>
        </div>
        <div class="form_group">
            <label for="correo">Correo:</label>
            <hr>
            <input type="email" id="correo" name="correo" value="{{ old('correo') }}" required>
            <hr>
        </div>
        <div class="form_group">
            <label for="mensaje">Mensaje:</label>
            <hr>
            <textarea name="mensaje" id="mensaje" cols="30" rows="10">{{ old('mensaje') }}</textarea> <!--no puede haber value en un textarea-->
            <hr>
        </div>
        <input type="submit" value="Enviar">
        <hr>
    </form>
</body>

</html>