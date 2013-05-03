<?php

require_once("initialize.php");

//echo "si usar";
$jsonTags = Tag::autoCompleteName($_POST['firstLetters']);
if ($jsonTags) {
    echo $jsonTags;
} else {
    echo "{}";
}

?>
