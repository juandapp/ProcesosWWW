<!DOCTYPE html>
<?php include_once('config/config.inc.php'); ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>MI MVC PHP</title>
    </head>
    <body>
        <?php require_once(DATA_PATH.'mysqldatabase.php'); ?>
        <?php include_once(MODEL_PATH . 'user.model.php'); ?>

        <?php
        $usuario = new User();
        $usuario->name = "Ramiro";
        echo $usuario->name;
        $usuarioConsulta = User::find_by_id(1);
        echo "retorno base datos" . $usuarioConsulta->idUser . " " . $usuarioConsulta->name . " " . $usuarioConsulta->password;
        ?>

        <form action=<?php echo CONTROLLER_PATH."user.controller.php" ?> method="post">
            ID: <input type="text" name="idUser">
            <input type="submit" value="Submit">
        </form>


    </body>
</html>
