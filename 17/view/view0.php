<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabela</title>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th>ID</th><th>imie</th><th>nazwisko</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $polaczenie = new Mysqli('localhost', 'root', '', 'reservation');
        $sql = "SELECT ID, imie, nazwisko FROM rezerwujacy";
        $wynik=$polaczenie->query($sql);
        while ($w = $wynik->fetch_row()) {
            echo "<tr><td>$w[0]</td><td>$w[1]</td><td>$w[2]</td></tr>";
        }
       $polaczenie->close();
    
    ?> 
    </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th>id_stolika</th><th>typ_stolika</th><th>wielkosc</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $polaczenie = new Mysqli('localhost', 'root', '', 'reservation');
            $sql = "SELECT * FROM stoliki";
            $wynik=$polaczenie->query($sql);
            while ($w = $wynik->fetch_row()) {
                echo "<tr><td>$w[0]</td><td>$w[1]</td><td>$w[2]</td></tr>";
            }
           $polaczenie->close();
            ?>
        </tbody>
    </table>
</body>
</html>