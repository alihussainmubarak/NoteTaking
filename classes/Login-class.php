<?php

class Login extends Database
{
    public function get_login()
    {
        if ($_POST) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if (empty($username) || empty($password)) {
                return 'Please fill in empty field';
            } else {
                $check = $this->conn()->prepare("SELECT * FROM user WHERE username = :username");
                $check->bindParam(':username', $username);
                $check->execute();
                if (!$check->rowCount() > 0) {
                    return 'This username not exist';
                } else {

                    $stmt = $this->conn()->prepare("SELECT * FROM user WHERE username = :username");
                    $stmt->execute(['username' => $username]);
                    $result = $stmt->fetch();
                    $id = $result->id;
                    $_SESSION['id'] = $id;
                    $_SESSION['username'] = $username;
                 
                    header('Location: index.php');

                    
                }
            }
        }
    }
}
