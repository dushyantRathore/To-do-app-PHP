<?php 

require("config.php");

if(isset($_GET['id']))
{
	$id = $_GET['id'];

	if(!empty($id))
	{

		$sql = "UPDATE items SET done = 1 WHERE id = $id";
		$query_run = mysql_query($sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}
}

?>