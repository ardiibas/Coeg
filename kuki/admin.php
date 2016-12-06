<?php
	
	$cookie = $_COOKIE;
	
	if($cookie['user'] == 'admin' && $cookie['pass'] == '1234')
	{
		echo '<h1>Admin Page</h1>';
		echo 'Welcome Cuk..... '.$cookie['user'];
	}
	else
	{
		echo '<h1>Sopo Kowe</h1>';
		echo 'Minggat Kono Cuk.....';
	}

	// !empty($cookie['user']) && !empty($cookie['pass'])
	
	// cookie['user'] == admin && cookie['pass'] == 1234
	
?>