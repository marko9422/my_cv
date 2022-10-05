<?php

    include 'connection.php';

    // User data.
    $query = @unserialize (file_get_contents('http://ip-api.com/php/'));

    $ip = $query['query'];
    $regionName =  $query['regionName'];

    $duration = $_POST['duration'];
    mysqli_query($conn,"INSERT INTO duration VALUES('','$duration','$ip','$regionName')");

 ?>