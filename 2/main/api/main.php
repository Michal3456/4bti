<?php
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
    header("Content-Type: application/json; charset=UTF-8");
    

    $raw_data = file_get_contents('php://input');
    $device = json_decode($raw_data);

    $conn = new mysqli("localhost","root","","gps");

    $sql = "SELECT devices.id,devices.name,devices.location,owners.firstname,owners.lastname FROM devices INNER JOIN owners ON devices.id = owners.id WHERE devices.name = '$device->name'";

    $data = $conn->query($sql);

    while($r = $data->fetch_row()){
        echo "<p>$r[0] $r[1] $r[2] $r[3] $r[4]</p>";
    }
?>