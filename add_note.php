<?php

require 'template/sidebar.php';

if (!$_SESSION['id']) {
    header('Location: login.php');
}

?>

<div class="col-md-9">
    <div class="card my-2">
        <form class="form" method="POST">
            <div class="card-body">
                <h3 class="header font-weight-bold">ADD NOTE</h3>
                <div class="text-center text-danger">
            <?php echo $notes->add_note(); ?>
        </div>
                <div class="form-group">
                    <label>Title</label>
                    <input class="form-control" type="text" name="title">
                </div>
                <div class="form-group">
                    <label>Body</label>
                    <textarea class="form-control" type="text" name="body" rows="5"></textarea>
                </div>
                <input type="submit" name="submit" class="btn btn-success" value="SUBMIT">
            </div>
        </form>
    </div>
</div>

<?php require 'template/footer.php'; ?>