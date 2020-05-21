<?php
require 'template/sidebar.php';



$is_login = new Login();




?>

<div class="col-md-9">
    <div class="card my-2">
        <div class="card-body">
            <h2 class="font-weight-bold">Login</h2>
            <div class="text-center text-danger">
                <?php echo $is_login->get_login(); ?>
            </div>
            <form class="form" method="POST" action="login.php">
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" type="text" name="username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success btn-md" value="LOGIN">
                </div>
                <div class="text-right">
                    <a href="register.php">Register here</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require 'template/footer.php';
?>