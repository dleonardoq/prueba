<?php

    require_once('config.php');

    class ClassConnection{

        protected $connection;

        public function __construct(){

        try {
            $this->connection = new PDO("pgsql:host=".SERVER."; port=".PORT."; dbname=".DB_NAME."", USER, PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->connection;
        } catch (PDOException $e) {
            echo "ERROR EN LA CONEXION: " . $e->getMessage();
        }

    }
}

?>
