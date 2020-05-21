<?php

require 'template/header.php';
require 'autoload.php';

session_start();
$notes = new Note();
$users = new User();

?>

<!-- Left column -->
<div class="col-md-3">

    <a href="index.php" class="list-group-item list-group-item-action my-2 bg-dark text-light text-center rounded">
        <h1 class="font-weight-bold">NOTE</h1>
    </a>

    <?php if (isset($_SESSION['username'])) : ?>

        <a href="add_note.php" class="list-group-item list-group-item-action my-2 bg-dark text-light text-center rounded">ADD NOTE</a>

        <a href="edit_user.php?id=<?php echo $_SESSION['id']; ?>" class="list-group-item list-group-item-action my-2 bg-dark text-light text-center rounded"><?php echo $_SESSION['username']; ?></a>

        <a href="includes/logout-inc.php" class="list-group-item list-group-item-action my-2 bg-danger text-light text-center rounded">LOGOUT</a>

    <?php endif; ?>

</div>
<!-- Left column /end -->