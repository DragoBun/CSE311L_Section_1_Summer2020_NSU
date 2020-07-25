<?php

$link = mysqli_connect('localhost','root','','CSE311_Homework');

if($link == false)
{
    die("Error!! Could not connect. " .mysqli_connect_error());
}

$sql = "CREATE TABLE location(
    Job_Id VARCHAR2(10) NOT NULL,
    Job_Title VARCHAR2(35) NOT NULL,
    Min_Salary NUMBER(6),
    Max_Salary NUMBER(6)
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