<?php

$link = mysqli_connect('localhost','root','','CSE311_Homework');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}


$sql = "INSERT INTO employee(Employee_id,First_Name,Last_Name,Email,Phone_Number,
        Hire_Date,Job_id,Salary,Commision_pct,Manager_id,Department_id) 
    VALUES
    (100,'Steven','King','SKING','515.123.4567','1987-17-06','AD_PRESS',
        24000,NULL,NULL,90),
    (101,'Neena','Kochar','NKOCHHAR','515.123.4568','1989-09-21','AD_VP',
        17000,NULL,100,90),
    (102,'Lex','De Haan','LDEHAAN','515.123.4569','1989-09-21','AD_VP',
        17000,NULL,100,90),
    (103,'Alexander','Hunold','AHUNOLD','515.423.4567','1989-09-21','IT_PROG',
        9000,NULL,102,60),
    (104,'Bruce','Ernst','BERNST','590.423.4568','1991-05-21','IT_PROG',
        6000,NULL,103,60),
    (107,'Diana','Lorentz','DLORENTZ','590.423.5567','1999-02-07','IT_PROG',
      	4200,NULL,103,60),
    (124,'Kevin','Mourgos','KMOURGOS','650.123.5234','1999-11-16','ST_MAN', 
      	5800,NULL,100,50),
    (141,'Trenna','Rajs','TRAJS','650.121.8009','1995-10-17','ST_CLERK', 
    	3500,NULL,124,50),
    (142,'Curtis','Davies','CDAVIES','650.121.2994','1997-01-29','ST_CLERK', 
    	3100,NULL,124,50),
    (143,'Randall','Matos','RMATOS','650.121.2874','1998-03-15','ST_CLERK', 
    	2600,NULL,124,50),
    (144,'Peter','Vargas','PVARGAS','650.121.2004','1998-07-09','ST_CLERK',
     	2500,NULL,124,50),
    (149,'Eleni','Zlotkey','EZLOTKEY','011.44.1344.429018','2000-01-09','SA_MAN', 
     	10500,2,100,80),
    (174,'Ellen','Abel','EABEL','011.44.1644.429267','1996-05-11','SA_REP', 
    	11000,3,149,80),
    (176,'Jonathon','Taylor','JTAYLOR','011.44.1644.429265','1998-03-24','SA_REP', 
     	8600,2,149,80),
    (178,'Kimberely','Grant','KGRANT','011.44.1644.429263','1999-05-24','SA_REP',
    	7000,15,149,NULL),
    (200,'Jennifer','Whalen','JWHALEN','515.123.4444','1987-09-17','AD_ASST',
     	4400,NULL,101,10),
    (201,'Micheal','Hartstein','MHARTSTE','515.123.5555','1996-02-17','MK_MAN',
      	13000, NULL, 100,  20),
    (202,'Pat','Fay','PFAY','515.123.6666','1997-08-17','MK_REP',
     	6000,NULL,201,20),
    (205,'Shelley','Higgins','SHIGGINS','515.123.8080','1994-06-07','AC_MGR',
     	12000,NULL,101,110),
    (206,'William','Gietz','WGIETZ','515.123.8181','1947-06-07','AC_ACCOUNT', 
        8300,NULL,205,110)";

if(mysqli_query($link, $sql)){
    echo "VALUES INSERTED";
}
else{
    echo "Error: Could not create Table" .mysqli_error($link);
}

mysqli_close($link);

?>
