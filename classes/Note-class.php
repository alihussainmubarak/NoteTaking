<?php

class Note extends Database
{
  public function index()
  {
    $stmt = $this->conn()->prepare("SELECT * FROM note ORDER BY date DESC");
    $stmt->execute();
    while ($result = $stmt->fetchAll()) {
      return $result;
    }
  }

  public function get_note($id)
  {
    $stmt = $this->conn()->prepare("SELECT * FROM note WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $result = $stmt->fetch();
    return $result;
  }

  public function add_note()
  {
    if ($_POST) {

      $title = $_POST['title'];
      $body = $_POST['body'];
      $user_id = $_SESSION['id'];

      if (empty($title) || empty($body)) {
        return 'Please fill in empty field';
      } else {
        $stmt = $this->conn()->prepare("INSERT INTO note(user_id ,title, body) VALUES (:user_id, :title, :body)");
        $stmt->execute([
          'user_id' => $user_id,
          'title' => $title,
          'body' => $body
        ]);
        header('Location: index.php');
      }
    }
  }

  public function edit_note($id, $title, $body)
  {
    $stmt = $this->conn()->prepare("UPDATE note SET title = :title, body = :body WHERE id = :id");
    $stmt->execute(['title' => $title, 'body' => $body, 'id' => $id]);
  }

  public function delete_note($id)
  {
    $stmt = $this->conn()->prepare("DELETE FROM note WHERE id = :id");
    $stmt->execute(['id' => $id]);
  }
  
}
