<?php
require_once('../includes/initialize.php');
if ($session->is_logged_in()) {
    redirect_to("user/user.main.php");
}
?>
<?php include_layout_template('navigation.php'); ?>
<?php include_layout_template('header.php'); ?>

<div id="wrapper">
    <section id="main">

        <aside id="login" class="login">
            <form action=../includes/controller/user.controller.php method="post">
                <h3>Login</h3>
                <div>
                    <input type="text" placeholder="Usuario" required="" name="username" id="username" />
                </div>
                <div>
                    <input type="password" placeholder="Password" required="" name="password" id="password" />
                </div>
                <div>
                    <input type="submit" value="Login" name="login" />
                </div>
            </form>
            <a href="user/registerUser.php">si no tienes cuenta, registrate :D</a>
        </aside>
    </section>
</div>

<?php include_layout_template('footer.php'); ?>