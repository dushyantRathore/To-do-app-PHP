<?php

require("config.php");

if(isset($_POST['task']))
{
	$name = $_POST['task'];
	if(!empty($name))
	{
		$sql = "INSERT INTO items VALUES(NULL, '$name', 0)";
		$query_run = mysql_query($sql);
		header("location: main_page.php");
	}
}