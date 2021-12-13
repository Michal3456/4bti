<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>NickName</td>
            <td>Score</td>
        </tr>
    <?php
    $conn = new Mysqli("localhost", "root","","saper");
    $sql = "SELECT * FROM scores";
    $data = $conn->query($sql);
    while($row = $data->fetch_row()) {
        echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
    }
    ?>
    </table>
</body>
</html>