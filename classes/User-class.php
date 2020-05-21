<?php

class User extends Database
{
    public function get_user($id)
  {
    $stmt = $this->conn()->prepare("SELECT * FROM user WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $result = $stmt->fetch();
    return $result;
  }
    public function update($id, $username, $email)
    {
        $stmt = $this->conn()->prepare("UPDATE user SET username = :username, email = :email WHERE id = :id");
        $stmt->execute(['username' => $username, 'email' => $email, 'id' => $id]);
    }
    public function delete_user($id)
  {
    $stmt = $this->conn()->prepare("DELETE FROM user WHERE id = :id");
    $stmt->execute(['id' => $id]);
  }
}
