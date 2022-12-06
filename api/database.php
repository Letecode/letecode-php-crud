<?php 
    // CRUD
    class Database {

        private $connection;

        function __construct()
        {
            include_once dirname(__FILE__).'/connection.php';
            $link = new Connection();
            $this->connection = $link->connect();
        }

        // Create
        function createApprenant($name, $email, $country, $gender) {

            $query = $this->connection->prepare("INSERT INTO apprenants (name, email, country, gender) VALUES (?,?,?,?)");
            $query->bind_param("ssss", $name, $email, $country, $gender);
            if($query->execute()) {
                return true;
            }

            return false;
        }

        // Read
        function getApprenants() {
            $query = $this->connection->prepare("SELECT * FROM apprenants");
            if($query->execute()) {
                $result = $query->get_result();
                return $result;
            }
        }

        //READ 
        function getApprenant($id) {
            $query = $this->connection->prepare("SELECT * FROM apprenants WHERE id=?");
            $query->bind_param("i", $id);
            if($query->execute()) {
                $result = $query->get_result();
                return $result;
            }
        }

        // UPDATE
        function updateApprenant($id, $name, $email, $country, $gender) {
            $query = $this->connection->prepare("UPDATE apprenants SET name=?, email=?, country=?, gender=? WHERE id=?");
            $query->bind_param("ssssi", $name, $email, $country, $gender, $id);
            if($query->execute()) {
                return true;
            }
            return false;
        }


        // DELETE
        function deleteApprenant($id) {
            $query = $this->connection->prepare("DELETE FROM apprenants WHERE id=?");
            $query->bind_param("i", $id);
            if($query->execute()) {
                return true;
            }
            return false;
        }
    }




?>