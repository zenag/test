<?php

class UserModel
{
    /**
     * Every model needs a database connection, passed to the model
     * @param object $db A PDO database connection
     */
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            error_log("Database connection could not be established.");
            exit('Database connection could not be established.');
        }
    }

    /**
     * Add a user data to database
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     */
    public function addUser($data)
    {
        $data = unserialize($data);
        $name = strip_tags($data["username"]);
        $email = strip_tags($data["email"]);
        $contactno = strip_tags($data["contactno"]);
        $message = strip_tags($data["message"]);

        try {

            $sql = "INSERT INTO guest_form (Name, Email, Phone, Description) VALUES (:name, :email, :contactno, :message)";
            $query = $this->db->prepare($sql);
            $query->execute(array(':name' => $name, ':email' => $email, ':contactno' => $contactno, ':message' => $message));
        }
        catch (Exception $e ) {
            error_log($e->getMessage());
        }
        
    }

}
