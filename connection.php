<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'measuretime';

$conn = mysqli_connect($server,$username,$password,$db);

if(!$conn){
    die('Connection Failed: '.mysqli_connect_error());
}
?>