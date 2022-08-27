<?php


if($_POST){   
$servername = "localhost";
$username = "root";
$password = "";
$database = "gofit"; 

$conn = new mysqli($servername, $username, $password,$database);

if ($conn->connect_error) {
 echo "Connection Failed<br>";
}
else{
    echo "Connection Successfull<br>";
}

$DATE=date( 'Y-m-d');

 $sql = "INSERT INTO myresult (username,mydate,email,password,password,date) VALUES 
 ('$_POST[username]',$_POST[mydate],$_POST[email],$_POST[password],$_POST[password],'$DATE')";

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
    } 
    else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }

?> 