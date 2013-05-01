<?php require_once("../includes/initialize.php"); ?>

<?php include_layout_template('header.php'); ?>
<?php include_layout_template('navigation.php'); ?>

<div id="wrapper">
    <section id="main">

        <aside id="login">
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
        </aside>
    </section>
</div>

<?php include_layout_template('footer.php'); ?>