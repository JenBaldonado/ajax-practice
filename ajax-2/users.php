<?php

//Connect to a database
$servername = 'localhost';
$username = 'root';
$password = '';
$databasename = 'ajax-practice';

$conn = mysqli_connect($servername, $username, $password, $databasename);

$query = 'SELECT * FROM ajaxtest';

//GET Result
$result = mysqli_query($conn, $query);

//Fetch Data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users);