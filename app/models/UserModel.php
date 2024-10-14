<?php
    require_once 'core/database.php';

    class UserModel{
        private $connection;

        public function __construct(){
            $database = new Database();
            $this->connection = $database->getConnection();
        }

        //Obetner todos los usuarios
        public function getUsers(): mixed {
            $query = "SELECT * FROM users";
            $stmt = $this->connection->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        //Crear un nuevo usuario
        public function createUser($name, $email): mixed {
            $query = "INSERT INTO users(name, email) VALUES (:name, :email)";
            $stmt = $this->connection->prepare($query);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":email", $email);
            return $stmt->execute();
        }
    }

?>