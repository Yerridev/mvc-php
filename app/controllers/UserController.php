<?php
    require_once 'models/UserModel.php';

    class UserController{
        private $model;

        public function __construct()
        {
            $this->model = new UserModel();
        }

        //controlador para la lista de Usuarios

        public function listUsers(): void{
            $users = $this->model->getUsers();
            include 'view/userList.php';
        }

        //controlador para mostrar el formulario y procesar la creaccion de un nuevo usuario
        public function createUser(): void {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $name = $_POST['name'];
                $email = $_POST['email'];
                if($this->model->createUser($name, $email)){
                    header("Location: index.php");
                }
                else echo "Error en crear el usuario.";
            }
            else {
                include 'view/userForm.php';
            }
        }

    }


?>