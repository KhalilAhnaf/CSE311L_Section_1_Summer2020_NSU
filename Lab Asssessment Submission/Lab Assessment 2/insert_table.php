<?php

$link = mysqli_connect('localhost', 'root', '', 'VS_CODE_TEST');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}

$sql = "INSERT INTO test_table(id, username, password) VALUES
('1', 'DEMO', 'DEMO')";

if(mysqli_query($link, $sql)){
    echo "Table Created";
}
else{
    echo"Error:could not able to create table." .myqli_error($link); 
}

mysqli_close($link)

?>