<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabelka</title>
</head>
<body>
    </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th>id_zamowienia</th><th>nr_paczki</th><th>gdzie</th><th>skąd</th><th>status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $polaczenie = new Mysqli('localhost', 'root','', 'zamowienia');
            $sql = "SELECT * FROM users";
            $wynik=$polaczenie->query($sql);
            while ($w = $wynik->fetch_row()) {
                echo "<tr><td>$w[0]</td><td>$w[1]</td><td>$w[2]</td><td>$w[3]</td><td>$w[4]</td></tr>";
            }
           $polaczenie->close();
            ?>
        </tbody>
    </table>
</body>
</html>