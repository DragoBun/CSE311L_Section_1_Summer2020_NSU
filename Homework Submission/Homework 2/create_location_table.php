<?php

$link = mysqli_connect('localhost','root','','CSE311_Homework');

if($link == false)
{
    die("Error!! Could not connect. " .mysqli_connect_error());
}

$sql = "CREATE TABLE location(
    Location_id INT(4) NOT NULL PRIMARY KEY,
    Street_Address VARCHAR(40),
    Postal_Code VARCHAR(12),
    City VARCHAR(30) NOT NULL,
    State_Province VARCHAR(25),
    Country_ID VARCHAR(2)
)";

if(mysqli_query($link,$sql))
{
    echo "Table Created";
}
else
{
    echo "Error!! Could not create table\t" .mysqli_error($link);
}

mysqli_close($link);

?>