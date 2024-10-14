<!DOCTYPE html>
<html lang="es-en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuario</title>
</head>
<body>
    <h1>Agregar Nuevo Usuario</h1>
    <pre>
        <form action="index.php?action=create" method="POST">
            <label for="name">Nombre:</label>
            <input type="text" name="name" require>
            <label for="email">Email:</label>
            <input type="email" name="email" require>
            <button type="submit">Agregar Usuario</button>
        </form>
        <a href="index.php">Volver a la lista de Usuarios</a>
    </pre>

    
</body>
</html>