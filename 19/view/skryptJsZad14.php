<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabelka</title>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th>ID</th><th>Dzień</th><th>Start</th><th>Stop</th><th>Razem</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $polaczenie = new Mysqli('localhost', 'root', '', 'id16523533_praca2');
        $sql = "SELECT ID, dzien, start, stop, razem FROM czas";
        $wynik=$polaczenie->query($sql);
        while ($w = $wynik->fetch_row()) {
            echo "<tr><td>$w[0]</td><td>$w[1]</td><td>$w[2]</td><td>$w[3]</td><td>$w[4]</td></tr>";
        }
       $polaczenie->close();
    
    ?> 
    </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th>ID</th><th>user_id</th><th>imie</th><th>nazwisko</th><th>haslo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $polaczenie = new Mysqli('localhost', 'root', '', 'id16523533_praca2');
            $sql = "SELECT * FROM users";
            $wynik=$polaczenie->query($sql);
            while ($w = $wynik->fetch_row()) {
                echo "<tr><td class='klasa'>$w[0]</td><td>$w[1]</td><td>$w[2]</td><td>$w[3]</td><td>$w[4]</td></tr>";
            }
           $polaczenie->close();
            ?>
        </tbody>
    </table>
<button onclick="funkcja()">Zobacz ile rekordów</button>
            <script>
                function funkcja(){
                let u=document.getElementsByClassName("klasa").length;
                alert(u);
                }
            </script>
</body>
</html>
