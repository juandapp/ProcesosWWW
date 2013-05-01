<?php
require_once('../../includes/initialize.php');
if (!$session->is_logged_in()) {
    redirect_to("login.php");
}
?>
<?php include_layout_template('headerUser.php'); ?>

<div id="wrapper">
    <section id="main">

        <aside id="userInfo">

            <div id="avatar">

                <h2>User Name</h2>				<!-- seek with php-->
                <br/>
                <span class="avatarImage" >
                    <img src="image/user.png">
                </span>
                <br/><br/>
            </div>


            <div id="userOptions">

                <h3>Num. Posts</h3>
                <p>xxxxxxx</p>					<!-- seek with php-->
                <h3>Fecha de Creaci&oacute;n</h3>
                <p>xx-xx-xxxx</p>				<!-- seek with php-->
                <br/>
                <a href="#" >Ver Perfil</a><br/><br/>
                <a href="#" >Editar Perfil</a>

            </div>

        </aside><!-- user info -->



        <article class="posts">

            <h2>Posts</h2>

            <nav>
                <div class="menu">

                    <ul>

                        <li><a href="#">Fecha</a>

                            <ul>
                                <li><a href="#">Up-Down</a></li>
                                <li><a href="#">Down-Up</a></li>
                            </ul>

                        </li>

                        <li><a href="#">Rating</a></li>

                        <li><a href="#">Visitas</a></li>

                    </ul>

                </div>
            </nav>


            <div id="postList">



            </div><!-- post list -->


        </article><!-- posts -->



        <aside id="createPost">
            <div>
                <input type="submit" value="Crear Post" />
            </div>
        </aside><!-- Crear Post -->



        <section><!-- end of main -->
            </div><!-- end of wrapper -->

            <?php include_layout_template('footerUser.php'); ?>