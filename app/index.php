<?php
    require_once 'controllers/UserController.php';

    $controller = new UserController();

    $action = isset($_GET['action']) ? $_GET['action'] : 'list';

    switch ($action) {
        case 'list':
            $controller->listUsers();
            break;
        case 'create':
            $controller->createUser();
            break;
        default:
            echo "Acción no válida!";
            break;
    }


?>