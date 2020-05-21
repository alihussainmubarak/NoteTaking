<?php

require 'template/sidebar.php';

$item = $notes->get_note($_GET['id']);

if ($_SESSION['id'] != $item->user_id) {
    header('Location: login.php');
}

?>

<div class="col-md-9">

    <!-- Post -->
    <div class="card my-2">
        <div class="card-body">
            <h2 class="font-weight-bold"><?php echo $item->title; ?></h2>
            
            <p class="card-text"><?php echo $item->body; ?></p>
        </div>
        <?php if ($_SESSION['id'] == $item->user_id) : ?>
        <div class="card-footer">
            <a class="btn btn-success" href="edit_note.php?id=<?php echo $item->id; ?>" role="button">Edit</a>
            <small class="text-muted px-2"><?php echo $item->date; ?></small>

            <form class="float-right" method="POST" action="includes/delete_note-inc.php">
                <input type="hidden" name="delete-id" value="<?php echo $item->id; ?>">
                <input type="submit" name="submit" value="Delete" class="btn btn-danger">
            </form>
        </div>
        <?php else : ?>
            <div class="card-footer">
                    <small class="text-muted"><?php echo $item->date; ?></small>
                </div>
        <?php endif; ?>
    </div>
    <!-- Post /end -->
</div>

<?php require 'template/footer.php'; ?>