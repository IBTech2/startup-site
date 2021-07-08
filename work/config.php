<?php
$severname = "localhost";
$user = "root";
$password = "";
$database = "lasu_database";

$conn =mysqli_connect($severname, $user, $password, $database);

if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
// else
// {
//     echo "successful!";
// }



?>