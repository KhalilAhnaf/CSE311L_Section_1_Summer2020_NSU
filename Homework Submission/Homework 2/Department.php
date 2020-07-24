<?php

$MySQLi_connection = new MySQLi('localhost', 'root','', 'test');

if($MySQLi_connection->connect_error)
{
    echo "Not Connected, error:" .$MySQLi_connection->connect_error;
}

else
{
    echo "connected";
}

?>
<?php

$link = mysqli_connect('localhost','root','');

if($link ==false)
{
    die("Error:Could not able to create DB." .mysqli_connect_error());
}

$sql = "CREATE DATABASE Lab_assignment3";

if(mysqli_query($link, $sql)){
    echo "\nDB Created";
}
else{
    echo "\nError:Could not able to create DB." .mysqli_error($link);
}

mysqli_close($link)

?>
<?php

$link = mysqli_connect('localhost', 'root', '', 'Lab_assignment3');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}

$sql = "CREATE TABLE Department(
Department_Id int(10) NOT NULL PRIMARY KEY,
Department_Name VARCHAR(50) NOT NULL,
Manager_Id int(10) NOT NULL,
Location_Id int(10) Not NULL
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

$link = mysqli_connect('localhost', 'root', '', 'Lab_assignment3');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}

$sql = "INSERT INTO Department(Department_Id, Department_Name, Manager_Id, Location_Id) VALUES
('10', 'Adminstration', '200', '1700'),('20', 'Marketing', '201', '1800'),('50', 'Shipping', '124', '1500'),
('60', 'IT', '103', '1400'),('80', 'Sales', '149', '2500'),('90', 'Executive', '100', '1700'),
('110', 'Accounting', '205', '1700'),('190','Contracting', NULL, '1700')";

if(mysqli_query($link, $sql)){
    echo "\nTable Created";
}
else{
    echo"\nError:could not able to create table." .mysqli_error($link); 
}

mysqli_close($link)

?>
