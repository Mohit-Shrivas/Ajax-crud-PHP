<?php

$conn = mysqli_connect('localhost','root','','test') or die("failed connection");

$first_name = $_POST['f_name'];
$last_name = $_POST['l_name'];
$sql = "INSERT INTO student (firstname, lastname) VALUES ('{$first_name}', '{$last_name}')";

if(mysqli_query($conn,$sql)){
    echo 1;
    // print_r($sql);
    // die('added');
} else {
    echo 0;
}


// $result = mysqli_query($conn,$sql) or die("SQL query failed");