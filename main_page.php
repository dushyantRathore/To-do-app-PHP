<?php

require("config.php");


$sql = "SELECT id,name,done FROM items";

$query_run = mysql_query($sql);

echo "<html>
<head>
	<title>To-do</title>
</head>
<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<link rel='stylesheet' type='text/css' href='main_page.css'>
<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>

<body>

	<div class='list'>
		<h1 align='center' class='header'>To do.</h1>
		<h3 align='center' style='font-family:Indie flower'><u>Your Tasks</u></h3>
		<br>
		<ul class='items'>";

			while($row = mysql_fetch_assoc($query_run))
			{
				$id = $row['id'];
				$name = $row['name'];
				$done = $row['done'];

				if(!$done)
				{
					echo "
					<li><span class= 'item'>$name</span>&nbsp;&nbsp<button type='button' class='btn btn-default'>Mark as Done</button></li>";
				}
				else
				{
					echo "
					<li><span class= 'item_done'>$name</span></li>";
				}
			}

			echo "
		</ul>
		<br>
		<form role='form' action='add_task.php' method='post'>
			<div class='form-group'>
				<input type='usr' class='form-control' id='usr' placeholder='Enter a new task here' name = 'task' required maxlength='30' name='task'>
				<br>
				<input type='submit' class='btn btn-default' value='Add' style='position:relative;left:40%'>
			</div>
		</form>

	</body>
	</html>";
	?>