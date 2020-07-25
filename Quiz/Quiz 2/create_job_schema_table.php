<?php

$link = mysqli_connect('localhost','root','','CSE311_Homework');

if($link == false)
{
    die("Error!! Could not connect. " .mysqli_connect_error());
}

$sql = "CREATE TABLE Job_Schema(
    Job_Id VARCHAR(10) NOT NULL,
    Job_Title VARCHAR(35) NOT NULL,
    Min_Salary INT(6),
    Max_Salary INT(6)
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