<?php

$link = mysqli_connect('localhost','root','','CSE311_Homework');

if($link == false)
{
    die("Error!! Could not connect\t" .mysqli_connect_error());
}

$sql = "INSERT INTO Job_Schema(Job_Id,Job_Title,Min_Salary,Max_Salary)
    VALUES 
    ('AD_PRES','President',20000,40000),
    ('AD_VP','Adminsitrative Vice President',15000,30000)";

if(mysqli_query($link,$sql))
{
    echo "Values Added";
}
else
{
    echo "Error!!\t" .mysqli_error($link);
}

mysqli_close($link);

?>