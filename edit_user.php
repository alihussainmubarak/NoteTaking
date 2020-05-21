<?php

require 'template/sidebar.php';

if ($_POST) {

    $users->delete_user($_POST['delete']);

    header('Location: includes/logout-inc.php');
}

$item = $users->get_user($_GET['id']);

?>

<div class="col-md-9">
    <div class="card my-2">
        <div class="card-body">

            <p><b>Username:</b> <?php echo $item->username; ?></p>

            <p><b>E-mail:</b> <?php echo $item->email; ?></p>

            <p><b>Joined date:</b> <?php echo $item->joined; ?></p>

        </div>
        <div class="card-footer">
            Delete account?
            <form class="float-right" method="POST" action="edit_user.php">
                <input type="hidden" name="delete" value="<?php echo $item->id; ?>">
                <input type="submit" name="submit" value="Delete" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>

<?php require 'template/footer.php'; ?>