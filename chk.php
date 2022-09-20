
<?php
	session_start();
	$admins = array("ahmed", "imad");
	if ($_SERVER)['REQUEST_METHOD'] == 'POST') {
		$user = $_POST['username'];
		if (in_array($user, $admins)) {
			// If IS Admin
			$_SESSION['user'] = $user;
			echo 'Welcome ' . $_SESSION['user'] . ' You Will Be Redirected To Control Pannel Area';
			header('REFRESH:5;URL=control.php)
		} else {
			// If Not Admin
			echo 'Sorry You Are Not Admin And You Are Not Permitted To See Control Pannel';
		}

?>
     
