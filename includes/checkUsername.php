<?php

require_once("initialize.php");

//echo "si usar";
$user = User::find_by_username($_POST['username']);
if ($user) {
    echo "no usar";
} else {
    echo "si usar";
}

?>
