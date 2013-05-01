<?php require_once("../includes/initialize.php"); ?>

<?php include_layout_template('header.php'); ?>
<?php include_layout_template('navigation.php'); ?>

<div id="wrapper">
    <section id="main">

        <aside id="login">
            <form action="login.php">
                <h3>Login</h3>
                <div>
                    <input type="text" placeholder="Usuario" required="" name="username" id="username" />
                </div>
                <div>
                    <input type="password" placeholder="Password" required="" name="password" id="password" />
                </div>
                <div>
                    <input type="submit" value="Submit" />
                    <!-- a href="#">Lost your password?</a>
                    <a href="#">Register</a -->
                </div>
            </form>
        </aside>

    </section><!-- end of main -->
</div><!-- end of wrapper -->

<?php include_layout_template('footer.php'); ?>
