<?php

    class Connection {

        private $connection;

        function __construct(){}

        function connect() {
            $this->connection = new mysqli('localhost', 'root', 'root', 'apprenants');

            if(mysqli_connect_error()) {
                echo 'Error';
                die('connexion error'.mysqli_connect_error());
            }

            return $this->connection;
        }
    }








?>