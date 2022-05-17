<?php


$con = mysqli_connect("localhost", "root", "root", "crudpdo");

if (!$con){
    die("connessione fallita" . mysqli_connect_error());
}


?>