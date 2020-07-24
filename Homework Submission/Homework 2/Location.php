<?php

$MySQLi_connection = new MySQLi('localhost', 'root','', 'Lab_assignment3');

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

$link = mysqli_connect('localhost', 'root', '', 'Lab_assignment3');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}

$sql = "CREATE TABLE Locations(
Location_Id int(4) NOT NULL PRIMARY KEY,
Street_Address VARCHAR(40) NULL,
Postal_Code VARCHAR(12) NULL,
City VARCHAR(30) Not NULL,
State_Province VARCHAR(25) NULL,
Country_Id VARCHAR(2) NULL
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

$sql = "INSERT INTO Locations(Location_Id, Street_Address, Postal_Code, City, State_Province, Country_Id) 
VALUES('1400', '2014 Jabberwocky Rd', '26192', 'Southlake', 'Texas', 'US'),
('1500', '2011 Interiors Blvd', '99236', 'South San Francisco', 'California', 'US'),
('1700', '2004 Charade Rd', '98199', 'Seattle', 'Washington', 'US'),
('1800', '460 Bloor St. W.', 'ON M5S 1X8', 'Toronto', 'Ontario', 'CA'),
('2500', 'Magdalen Center The Oxford Sc. Park', 'OX9 9ZB', 'Oxford', 'Oxford', 'Uk')
";


if(mysqli_query($link, $sql)){
    echo "\nTable Created";
}
else{
    echo"\nError:could not able to create table." .mysqli_error($link); 
}

mysqli_close($link)

?>
