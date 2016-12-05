<a href="index.php"><div class="back">< Home</div></a>

<?php
	echo $_GET['loginError'];
?>

<form action="db/admin_login.php" method="post" class="admin-login-form">
	<input type="text" placeholder="Name" name="name">
	<input type="text" placeholder="Password" name="password">

	<input type="submit" name="admin-login" value="login" class="login-btn">
</form>