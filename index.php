<?php

require 'template/sidebar.php';

if (!$_SESSION['id']) {
    header('Location: login.php');
}

?>

<!-- Right column -->
<div class="col-md-9">

    <?php
    if ($notes->index()) :
        foreach ($notes->index() as $item) :
            if ($_SESSION['id'] == $item->user_id) :
    ?>
                <!-- Post -->
                <div class="card my-2">
                    <div class="card-body">
                        <h4 class="font-weight-bold"><a href="note.php?id=<?php echo $item->id; ?>"><?php echo $item->title; ?></a></h4>
                        <p class="card-text"><?php echo substr($item->body, 0, 300) . "..."; ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?php echo $item->date; ?></small>
                    </div>
                </div>
                <!-- Post /end -->
    <?php
            endif;
        endforeach;
    endif;
    ?>

</div>
<!-- Right column /end -->

<?php require 'template/footer.php'; ?>