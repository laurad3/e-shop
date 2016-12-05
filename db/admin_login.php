<?php
	session_start();
	require 'db.php';
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	if(isset($_POST['admin-login'])) {
		$name = $_POST['name'];
		$password = $_POST['password'];

		$adminCheckLogin = adminCheckLogin($name, $password);

		if($adminCheckLogin) {
			$_SESSION['admin'] = 'Admin';
			header('Location: ../admin-index.php');
		} else {
			$loginError = '<div class="login-error">Incorrect username or password</div>';
			header('Location:../admin.php?loginError=' . $loginError);
		}
	}
?>