<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Para Crear Usuario</title>
    </head>
    <body>
        <?php include_once './model/user.model'; ?>
        <?php
        $usuario = new User();
        $usuario->name = "Ramiro";
        echo $usuario->name;
        $usuarioConsulta = User::find_by_id(11);
        echo "retorno base datos".$usuarioConsulta->idUser." ".$usuarioConsulta->name;
        ?>
    </body>
</html>

