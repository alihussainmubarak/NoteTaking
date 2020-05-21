<?php

require 'template/sidebar.php';

$item = $notes->get_note($_GET['id']);

if ($_SESSION['id'] != $item->user_id) {
    header('Location: login.php');
}

?>

<!-- Edit form -->
<div class="col-md-9">
    <div class="card my-2">

        <form class="form" action="includes/edit_note-inc.php" method="POST">

            <div class="card-body">
                <h3 class=" header font-weight-bold">EDIT NOTE</h3>

                <div class="form-group">
                    <label>Title</label>
                    <input class="form-control" type="text" value="<?php echo $item->title; ?>" name="title">
                </div>

                <div class="form-group">
                    <label>Body</label>
                    <textarea class="form-control" type="text" name="body" rows="9">
                    <?php echo $item->body; ?>
                    </textarea>
                </div>
                <input type="hidden" name="new-id" value="<?php echo $item->id; ?>">
                <input class="btn btn-success btn" type="submit" name="submit" value="SUBMIT">
            </div>
        </form>
    </div>
</div>
<!-- Edit form /end -->

<?php require 'template/footer.php'; ?>