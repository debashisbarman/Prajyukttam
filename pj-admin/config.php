<?php

	$host="localhost";
	$username="prajyukttam";
	$password="4tndaQdqCu5jd6xW";
	$db_name="Prajyukttam";

	mysql_connect("$host", "$username", "$password")or die("cannot connect");
	mysql_select_db("$db_name")or die("cannot select DB");

?>
