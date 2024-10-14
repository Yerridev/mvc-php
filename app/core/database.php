<?php
    class Database {
        private $host = 'localhost';
        private $db_name = 'app';
        private $username = 'root';
        private $password = '';
        public $connection;

        public function getConnection(): PDO{
            $this->connection = null;

            try {
                $this->connection = new PDO(dsn: "mysql:hots=" . $this->host . ";dbname=" . $this->db_name, username: $this->username, password: $this->password);
                $this->connection->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $exception) {
                echo "Error de conexion: " . $exception->getMessage();
            }
            return $this->connection;
        }


    }

?>