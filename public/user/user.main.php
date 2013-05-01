<?php
require_once('../../includes/initialize.php');
if (!$session->is_logged_in()) {
    redirect_to("login.php");
}
?>
<?php include_layout_template('headerUser.php'); ?>
<?php include_layout_template('navigationUser.php'); ?>

<div id="wrapper">
    <section id="main">

        <p>Bienvenido <?php echo User::find_by_id($session->user_id)->name; ?></p>
    </section>
</div>

<?php include_layout_template('footerUser.php'); ?>