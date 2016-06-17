<?php

$localhost = "localhost";
$username = "root";
$password = "";

$conn = mysql_connect($localhost,$username,$password);

$conn1 = mysql_select_db('todo');

if(! $conn1)
{
echo "Could not connect to the database".mysql_error();
}

?>