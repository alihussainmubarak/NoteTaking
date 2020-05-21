<?php

require '../includes/autoload-inc.php';
$notes = New Note();

if ($_POST) {

    $delete_id = $_POST['delete-id'];

    $notes->delete_note($delete_id);

    header('Location: ../index.php');
}
