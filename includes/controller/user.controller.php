<?php

require_once("../initialize.php");

if ($session->is_logged_in()) {
    //redirect_to("index.php");
}

// Remember to give your form's submit tag a name="submit" attribute!
if (isset($_POST['login'])) { // Form has been submitted.
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Check database to see if username/password exist.
    $found_user = User::authenticate($username, $password);

    if ($found_user) {
        $session->login($found_user);
        redirect_to('../../public/user.main.php');
    } else {
        // username/password combo was not found in the database
        $message = "Username/password combination incorrect.";

        echo $message;
    }
} else { // Form has not been submitted.
    $username = "";
    $password = "";
}
