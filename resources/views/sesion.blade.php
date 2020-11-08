<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de sesión</title>
</head>
<body style= "background-color: grey;">
    <form action="{{ action('Controlador@ValidarSesion')}}" method="POST">
        {{ csrf_field() }}
        
        <label for="user">Ingrese su usario</label>
        <input type="text" name="user">
        <br>
        <br>
        <label for="pass">Ingrese la contraseña</label>
        <input type="password" name="pass">
        <br>
        <br>
        <input type="submit" value="submit">
    </form>
</body>
</html>