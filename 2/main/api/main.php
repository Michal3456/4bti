<?php
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
    header("Content-Type: application/json; charset=UTF-8");
    
    class DeviceInfo{
        public $id;
        public $name;
        public $location;
        public $fname;
        public $lname;
    }

    $raw_data = file_get_contents('php://input');
    
    $device = json_decode($raw_data);

    $conn = new mysqli("localhost","root","","gps");

    $sql = "SELECT devices.id,devices.name,devices.location,owners.firstname,owners.lastname FROM devices INNER JOIN owners ON devices.id = owners.id WHERE devices.name = '$device->name'";

    $objectArray = [];

    $data = $conn->query($sql);

    while($r = $data->fetch_row()){
        $currentDevice = new DeviceInfo;
        $currentDevice->id = $r[0];
        $currentDevice->name = $r[1];
        $currentDevice->location = $r[2];
        $currentDevice->fname = $r[3];
        $currentDevice->lname = $r[4];

        array_push($objectArray,$currentDevice);
        // echo "<p>$r[0] $r[1] $r[2] $r[3] $r[4]</p>";
    }

    echo json_encode($objectArray);
?>