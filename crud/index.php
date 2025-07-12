<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios CRUD</title>
</head>
<body>
    <div>
        <form>
            <input type="text" name="name" placeholder="nombre">
            <input type="text" name="lastname" placeholder="apellido">
            <input type="text" name="username" placeholder="apodo">
            <input type="text" name="password" placeholder="contraseña">
            <input type="text" name="email" placeholder="correo">

            <input type="submit" value="agregar usuario">
        </form>
    </div>

    <div>
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Apodo</th>
                    <th>Contraseña</th>
                    <th>Correo</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
    
                    <th> <a href="">Editar</a> </th>
                    <th> <a href="">Eliminar</a> </th>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>