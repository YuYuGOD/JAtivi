<?php

date_default_timezone_set("Brazil/East");

$mysqli = new mysqli("localhost", "id3608329_aula", "unifeob", "id3608329_aula");

if ( mysqli_connect_errno() )
{
    echo("Connect failed: " .mysqli_connect_error());
}

$query = "SELECT * from produtos";
$result = $mysqli->query($query);

?>