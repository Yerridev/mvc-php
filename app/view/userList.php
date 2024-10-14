<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
    <h1>Usuarios</h1>
    <a href="index.php?action=create">Agregar Usuario</a>

    <ul>
        <?php foreach($users as $user): ?>
            <li><?php echo $user['name'] . " - " . $user['email']; ?></li>
        <?php endforeach; ?>
    </ul>

    
</body>
</html>