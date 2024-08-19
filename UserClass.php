<?php

class UserClass{
    public $id;
    public $email;
    public $password;

    private $name;

    public $phone_number;

    public $isAdmin = false;

    function __construct(string $email = "",string $password = "",string $name = "",string $phone_number = ""){
        $this->email = $email;
        $this->password = md5($password);
        $this->name = $name;
        $this->phone_number = $phone_number;
    }

    public function save(){
        require_once("connection.php");

        $name = mysqli_real_escape_string($connection, $this->name);
        $phoneNumber = mysqli_real_escape_string($connection, $this->phone_number);
        $email = mysqli_real_escape_string($connection, $this->email);
        $password = mysqli_real_escape_string($connection, $this->password);

        $SQL = "INSERT INTO users_info (Name, Phone_number, Email, Password) VALUES ('{$name}', '{$phoneNumber}', '{$email}', '{$password}')";
        return mysqli_query($connection, $SQL);
    }

    public function loginUser(){
        require_once("connection.php");

        $validEmail = $this->validate($this->email);
        $validPassword = $this->validate($this->password);

        $sql="select * from users_info where Email='".$validEmail."' AND Password='".$validPassword."' limit 1";
        $result=mysqli_query($connection, $sql);

        if(mysqli_num_rows($result)==1){ 
            $userData = $result->fetch_assoc();
            $this->isAdmin = (bool)$userData["is_admin"];
            return true;
        }
        else{
            return false;
        }
    }

    public function validate($data){
        $data = trim($data); 
        $data = stripslashes($data);  
        $data = htmlspecialchars($data); 
        return $data; 
    }

    public static function getAllUsers(){
        require_once("connection.php");

        $getUsersSQL = "SELECT * FROM users_info WHERE is_admin = 0";

        return mysqli_query($connection, $getUsersSQL);
    }

    public static function deleteUser(string $userId){
        include_once 'connection.php';

        $deleteSQL = "DELETE FROM users_info WHERE ID='{$userId}'";

        if(mysqli_query($connection, $deleteSQL)) {
            echo '<script>alert("Membrul a fost șters cu succes!"); window.location = "view_users.php";</script>';
        } else {
            echo 'Eroare la stergerea membrului: ' .mysqli_error($connection);
        }

        mysqli_close($connection);
    }

}

?>