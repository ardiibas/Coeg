	<h1>Form nggo Login</h1>
	
<form method="post">
	User <br />
	<input type="text" name="user"><br />
	Pass <br />
	<input type="password" name="pass"><br />
	<input type="submit" value="Mlebu Cuk!!">
</form>



<?php

	//set kuki
	
	$input_username = $_POST['user'];
	$input_password = $_POST['pass'];
	
	setcookie('user', $input_username, time()+3600);
	setcookie('pass', $input_password, time()+3600);
	
	//echo '<h1>Kuki</h1>';
	//echo 'Set data Kuki berhasil';

?>
	
	