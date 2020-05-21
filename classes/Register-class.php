<?php

class Register extends Database
{
    public function new_user()
    {
        if ($_POST) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = sha1($_POST['password']);
            $re_password = sha1($_POST['re-password']);

            if (empty($username) || empty($email) || empty($password) || empty($re_password)) {
                return 'Please fill in empty field';
            } elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                return 'Please write a valid email';
            } elseif ($password !== $re_password) {
                return 'Password not match';
            } else {
                $check = $this->conn()->prepare("SELECT * FROM user WHERE username = :username");
                $check->bindParam(':username', $username);
                $check->execute();
                if ($check->rowCount() > 0) {
                    return 'This username already exist';
                } else {
                    $stmt = $this->conn()->prepare("INSERT INTO user(username, email, password) VALUES (:username, :email, :password)");
                    if ($stmt->execute(['username' => $username, 'email' => $email, 'password' => $password])) {
                        return 'Your registration was successfully. You can login now';
                    }
                }
            }
        }
    }
}
