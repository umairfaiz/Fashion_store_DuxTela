<?php

$dbPassword = "duxtelaLocal";
$dbUsername = "duxtelaLocal";
$dbServer="localhost";
$dbName ="duxtelaLocal";

$db = new mysqli($dbServer,$dbUsername,$dbPassword, $dbName);

//print_r($connection);
if ($db -> connect_errno){
     
    exit('Database connction failed. reason :- '.$db->connect_error);
}
//$db = mysqli_connect('localhost','duxtelac_duxtelaSite','$Wallnut555','duxtelac_duxtelaSite');
//if ($db->connect_error) {
//    die("Connection failed: " . $db->connect_error);
//} 
//$db->close();