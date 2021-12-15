<?php
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
    header("Content-Type: application/json; charset=UTF-8");
    
    // $result = $_GET['device'];
    
    // echo $result;

    $conn = new mysqli("localhost","root","","gps");

    $sql = "SELECT * FROM devices";

    $data = $conn->query($sql);

    while($r = $data->fetch_row()){
        echo "<p>$r[0] $r[1] $r[2]</p>";
    }

    // if ($result) {
    //     echo json_encode(["sent" => 1, ]);
    // } else {
    //     echo json_encode(["sent" => 0, ]);
    // }
?>