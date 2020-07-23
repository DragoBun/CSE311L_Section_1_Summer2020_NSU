<?php

$link = mysqli_connect('localhost','root','','CSE311_Homework');

if($link == false)
{
    die("Error!! Could not connect\t" .mysqli_connect_error());
}

$sql = "INSERT INTO location(Location_id,Street_Address,Postal_Code,City,State_Province,Country_ID)
    VALUES 
    (1400, '2014 Jobberwocky Rd','26192','Southlake','Texas','US'),
    (1500, '2011 Interiors Blcd','99236','South San Francisco','California','US'),
    (1700, '2004 Charade Rd','98199','Seattle','WAshington','US'),
    (1800, '460 Bloor St. W','ON M5S 1X8','Toronto','Ontario','CA'),
    (2500, 'Magdalen Centre- The Oxford Sc. Park','OX9 9ZB','OXford','Oxforf','UK')";

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