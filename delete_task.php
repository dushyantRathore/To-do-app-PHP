<?php 

require("config.php");

if(isset($_GET['id']))
{
	$id = $_GET['id'];

	if(!empty($id))
	{

		$sql = "DELETE FROM items WHERE id = $id";
		$query_run = mysql_query($sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}
}

?>