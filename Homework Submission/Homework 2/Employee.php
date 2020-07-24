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

$sql = "CREATE TABLE Employees1(
Employee_Id int(6) NOT NULL PRIMARY KEY,
First_Name VARCHAR(20) NULL,
Last_Name VARCHAR(25) NOT NULL,
Email VARCHAR(25) Not NULL,
Phone_Number VARCHAR(15) NULL,
Hire_Date date Not NULL,
Job_Id VARCHAR (10) Not NULL,
Salary int(8) NULL,
Commision_pct int(2) NULL,
Manager_Id int(6) NULL,
Department_Id int(4) NULL
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

$sql = "INSERT INTO Employees1(Employee_Id, First_Name, Last_Name, Email, Phone_Number, Hire_Date, Job_Id, Salary, 
Commision_pct, Manager_Id, Department_Id) VALUES('100', 'Steven', 'King', 'SKING', '515.123.4567', '87-06-17', 'AD_PRES', '2400', NULL, NULL, '90'),
('101', 'Neena', 'Kocchar', 'NKOCCHAR', '515.123.4568', '89-09-21', 'AD_VP', '1700', NULL, '100', '90'),
('102', 'Lex', 'De Haan', 'LDEHAAN', '515.123.4569', '93-01-13', 'AD_VP', '1700', NULL, '100', '90'),
('103', 'Alexander', 'Humold', 'AHUNOLD', '590.423.4567', '90-01-03', 'IT_PROG', '9000', NULL, '102', '60'),
('104', 'Bruce', 'Ernst', 'BERNST', '590.423.4568', '91-05-21', 'IT_PROG', '6000', NULL, '103', '60'),
('107', 'Diana', 'Lorentz', 'DLORENTZ', '590.423.5567', '99-02-07', 'IT_PROG', '4200', NULL, '103', '60'),
('124', 'Kevin', 'Mourgos', 'KMOURGOS', '650.123.5234', '99-11-16', 'ST_MAN', '5800', NULL, '100', '50'),
('141', 'Trenna', 'Rajs', 'TRAJS', '650.121.8009', '95-10-17', 'ST_CLERK', '3500', NULL, '124', '50'),
('142', 'Curtis', 'Davis', 'CDAVIES', '650.121.2994', '97-01-29', 'ST_CLERK', '3100', NULL, '124', '50'),
('143', 'Randall', 'Matos', 'RMATOS', '650.121.2874', '98-03-15', 'ST_CLERK', '2600', NULL, '124', '50'),
('144', 'peter', 'Vargas', 'PVARGAS', '650.121.2004', '98-07-09', 'ST_CLERK', '2500', NULL, '124', '50'),
('149', 'Eleni', 'Zloykey', 'EZLOTKEY', '011.44.1344.429018', '00-01-29', 'SA_MAN', '10500', '.2', '100', '80'),
('174', 'Ellen', 'Abel', 'EABEL', '011.44.1644.429267', '96-05-11', 'SA_REP', '11000', '.3', '140', '80'),
('176', 'Jonathon', 'Taylor', 'JTAYLOR', '011.44.1644.429265', '98-03-24', 'SA_REP', '8600', '.2', '149', '80'),
('178', 'Kimberly', 'Grant', 'KGRANT', '011.44.1644.429263', '99-05-24', 'SA_REP', '7000', '.15', '149', NULL),
('200', 'Jennifer', 'Whalen', 'JWHALEN', '515.123.4444', '87-09-17', 'AD_ASSIST', '4400', NULL, '101', '10'),
('201', 'Micheal', 'Hartstein', 'MHARTSTE', '515.123.5555', '96-02-17', 'MK_MAN', '13000', NULL, '100', '20'),
('202', 'Pat', 'Fay', 'PFAY', '603.123.6666', '97-08-17', 'MK_REP', '6000', NULL, '201', '20'),
('205', 'Shelley', 'Higgins', 'SHIGGINS', '515.123.8080', '94-06-07', 'AC_MGR', '1200', NULL, '101', '110'),
('206', 'William', 'Gietz', 'WGIETZ', '515.123.8181', '94-06-07', 'AC_ACCOUNT', '8300', NULL, '205', '110')";


if(mysqli_query($link, $sql)){
    echo "\nTable Created";
}
else{
    echo"\nError:could not able to create table." .mysqli_error($link); 
}

mysqli_close($link)

?>
