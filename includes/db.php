<?php 

$server = "sql213.epizy.com";
$username = "epiz_27666942";
$password = "9fEpHVItJQ5";
$dbname = "epiz_27666942_chefBurger";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
    die("Connection Failed:".mysqli_connect_error());
}

?>