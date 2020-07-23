<?php

$link = mysqli_connect('localhost','root','','CSE311_Homework');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}


$sql = "CREATE TABLE department(
    Department_id INT(6) NOT NULL PRIMARY KEY,
    Department_Name VARCHAR(50),
    Manager_id INT(4),
    Location_id INT(4)
    )";

if(mysqli_query($link, $sql)){
    echo "Table Created";
}
else{
    echo "Error: Could not create Table\t" .mysqli_error($link);
}

mysqli_close($link);

?>