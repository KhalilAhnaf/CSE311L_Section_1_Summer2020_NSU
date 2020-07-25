<?php

$link = mysqli_connect('localhost','root','');

if($link ==false)
{
    die("Error:Could not able to create DB." .mysqli_connect_error());
}

$sql = "CREATE DATABASE Quiz2";

if(mysqli_query($link, $sql)){
    echo "\nDB Created";
}
else{
    echo "\nError:Could not able to create DB." .mysqli_error($link);
}

mysqli_close($link)

?>
<?php

$link = mysqli_connect('localhost', 'root', '', 'Quiz2');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}

$sql = "CREATE TABLE Jobs(
JOB_ID VARCHAR(10) NOT NULL PRIMARY KEY,
JOB_TITLE VARCHAR(35) NOT NULL,
MIN_SALARY int(10) NULL,
MAX_SALARY int(10) NULL
)";

if(mysqli_query($link, $sql)){
     echo "\nTable Created";
}
else{
    echo "\nError! Could not able to create table." .mysqli_error($link); 
}

mysqli_close($link)

?>
<?php

$link = mysqli_connect('localhost', 'root', '', 'Quiz2');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}

$sql = "INSERT INTO Jobs(JOB_ID, JOB_TITLE, MIN_SALARY, MAX_SALARY) VALUES
('AD_PRES', 'President', '20000', '40000'),('AD_VP', 'Adminstration Vice Precident', '15000', '30000'),
('AD_ASST', 'Adminstration Assistant', '3000', '6000'),('AC_MGR', 'Accounting Manager', '8200', '16000'),
('AC_ACCOUNT', 'Public Accountant', '4200', '9000'),('SA_MAN', 'Sales Manager', '10000', '20000'),
('SA_REP', 'Sales Representative', '6000', '12000'),('ST_MAN','Stock Manager', '5500', '8500'),
('ST_CLERK', 'Stock Clerk', '2000', '5000'),('IT_PROG','Programmer', '4000', '1000'),
('MK_MAN', 'Marketing Manager', '9000', '15000'),('MK_REP','Marketing Represtative', '4000', '9000')";

if(mysqli_query($link, $sql)){
    echo "\nTable Created";
}
else{
    echo"\nError:could not able to create table." .mysqli_error($link); 
}

mysqli_close($link)

?>
