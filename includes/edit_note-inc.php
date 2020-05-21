<?php

require '../includes/autoload-inc.php';
$notes = New Note();
$id = $_POST['new-id'];

if ($_POST) {
    
    $title = $_POST['title'];
    $body = $_POST['body'];
    $notes->edit_note($id, $title, $body);

    header('Location: ../index.php');
}
