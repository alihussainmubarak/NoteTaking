<?php

require 'template/sidebar.php';

$get_user = new Register();

?>

<div class="col-md-9">
    <div class="card my-2">
        <div class="card-body">
            <h2 class="font-weight-bold">Register</h2>
            <div class="text-center text-danger">
                <?php echo $get_user->new_user(); ?>
            </div>
            <form class="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" type="text" name="username">
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input class="form-control" type="text" name="email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password">
                </div>
                <div class="form-group">
                    <label>Confirm password</label>
                    <input class="form-control" type="password" name="re-password">
                </div>
                <input type="submit" name="submit" class="btn btn-success btn-md" value="REGISTER">
                <div class="text-right">
                    <a href="login.php">Login here</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require 'template/footer.php'; ?>