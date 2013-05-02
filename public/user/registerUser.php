<?php
require_once('../../includes/initialize.php');
?>

<html>
    <head>
        <title> The Process Network </title>
        <link rel='stylesheet' href="../stylesheets/style.css">
        <link rel='stylesheet' href="../stylesheets/login.css">
    </head>
    <body>

<?php include_layout_template('navigation.php'); ?>

<div id="wrapper">
    <section id="main">

        <article id="register" class="login">
            <form action=../../includes/controller/user.controller.php method="post">
                <h3>Registro</h3>
                <div>
                    <p>Nombres</p>
                    <input type="text" required="" name="name" id="name" />
                </div>
                
                <div>
                    <p>Apellidos</p>
                    <input type="text" required="" name="lastname" id="lastname" />
                </div>
                <div>
                    <p>e-mail</p>
                    <input type="text" placeholder="example@example.com" required="" name="email" id="email" />
                </div>
                <div>
                    <p>Nick de usuario</p>
                    <input type="text" required="" name="username" id="username" />
                </div>
                <div>
                    <p>Contrase&ntilde;a</p>
                    <input type="password" placeholder="Password" required="" name="password" id="password" />
                </div>
                <div>
                    <input type="submit" value="Registrarse" name="register" />
                </div>
            </form>
        </article>
    </section>
</div>

<?php include_layout_template('footer.php'); ?>        
        
        