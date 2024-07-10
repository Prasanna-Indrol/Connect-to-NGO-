<?php

$host="localhost";
$username="root";
$password="";
$dbname="connect to ngo";


$connect=mysqli_connect($host,$username,$password,$dbname);

if(!$connect){
die("Connetion failed!!" . mysqli_connect_error());
}
else
{
    echo "connection success!!";
}


?>
