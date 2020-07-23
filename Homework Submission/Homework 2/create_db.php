<?php

$link = mysqli_connect('localhost','root','');

//echo "Hey";

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}

$sql = "CREATE DATABASE CSE311_Homework";

if(mysqli_query($link, $sql)){
    echo "DB Created";
}
else{
    echo "Error: Could not create DB" .mysqli_connect_error($link);
}

mysqli_close($link);

?>