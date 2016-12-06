<?php

	$conn = mysql_pconnect('localhost','root','')
	or die('ora iso coeg...');
	
	echo 'sukses... :*';
	
	mysql_select_db('pwl4_8175') or die('asulah');
	
	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo '<br />';
	
	
	echo 'GGWP!';
	
	$query = "select id_siswa, full_name, nationality from siswa s
	join nationality n on s.id_nationality = n.id_nationality";
	
	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo '<br />';
	
	$rows = mysql_query($query) or die ('Pekok ==> '.mysql_error());
	
	$data = array();
	
	while($row = mysql_fetch_array($rows, MYSQL_ASSOC)){
		$data[] = $row;
	}
	
	print_r ($data);

?>