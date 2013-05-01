<?php require_once('../config/config.inc.php'); ?>
<?php require_once('../data/mysqldatabase.php'); ?>
<?php include_once('../model/user.model.php'); ?>
<?php




// Check the querystring for a numeric id
if (isset($_POST['idUser']) && intval($_POST['idUser']) > 0) {
	
	// Get id from querystring
	$idUser = $_POST['idUser'];
	
	// Execute database query
	$user = User::find_by_id($idUser);
	
} else {
	// Redirect to site root
	//redirect_to('.');
}

require_once('../view/userShow.view.php');

?>
