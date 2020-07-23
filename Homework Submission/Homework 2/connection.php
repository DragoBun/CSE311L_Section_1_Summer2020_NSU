<?php


$MySQLi_connection = new MySQLi('localhost','root','','test');


if($MySQLi_connection->connect_error)
{
    echo "Not Connected, error;" .$MySQLi_connection->connect_error;
}

else
{
    echo "Connected";
}

?>

