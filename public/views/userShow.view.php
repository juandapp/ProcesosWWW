<!DOCTYPE html>
<?php include_once('../config/config.inc.php'); ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Desplegar Usuario</title>
    </head>
    <body>
        <p>
            Password: <?php echo $user->password; ?>
            Name: <?php echo $user->name; ?>
            Id User:  <?php echo $user->idUser; ?>
        </p>

    </body>
</html>
