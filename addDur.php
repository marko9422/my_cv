<?php
    include 'connection.php';

    // User data.
    $location = @unserialize (file_get_contents('http://ip-api.com/php/'));
    
    $ip = ($location['query']);
    $date = date("Y-m-d h:i:sa");
    $duration = $_POST['duration'];
    $city = ($location['city']);

    if ($ip == '81.92.249.216'){

    } else{
        mysqli_query($conn,"INSERT INTO duration (date_time, ip, duration, city) VALUES('$date','$ip','$duration','$city')");
    }
 ?>